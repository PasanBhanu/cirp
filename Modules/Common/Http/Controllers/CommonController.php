<?php

namespace Modules\Common\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Carbon\Carbon;
use App\VisitorTracker;
use Modules\User\Entities\Activation;
use Modules\Post\Entities\Post;
use Modules\Setting\Entities\Setting;
use Session;
use Validator;
use Modules\Common\Entities\Inquire;
use Modules\Common\Entities\Application;
use Modules\Common\Entities\SchoolEducation;
use Modules\Common\Entities\AcademicQualifications;
use Modules\Common\Entities\WorkExperience;
use DB;

class CommonController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data['totalVisits']               = VisitorTracker::get();
        $data['totalUniqueVisitors']       = VisitorTracker::where('date', 'like', date('Y').'%')->get();
        $count = 0;
        foreach($data['totalUniqueVisitors']->groupBy('ip') as $key => $visitor){
           $count += $visitor->groupBy('url')->count();
        }

        $data['totalUniqueVisits']         = $count;
        $data['totalUniqueVisitors']       = $data['totalUniqueVisitors']->groupBy('ip')->count();

        $data['totalVisitors']             = $data['totalVisits']->groupBy('ip')->count();
        $data['usageBrowsers']             = $data['totalVisits']->groupBy('agent_browser');
        $data['registeredUsers']           = Activation::get();
        $data['publishedPost']             = Post::where('visibility', 1)->where('status', 1)->get();
        $data['submittedPost']             = Post::where('submitted', 1)->get();

        $month = date('Y-m');
        $visitors = VisitorTracker::where('date', 'like', '%' . $month . '%')->get();
        for($i = 1; $i <= date('t'); $i++){
            if ($i < 10) {
                $i = str_pad($i, 2, "0", STR_PAD_LEFT);
            }
            // visits count
            $visits                    = $visitors->where('date', date('Y-m-'.$i));
            $data['dates'][] = $i;
            $data['visits'][]          = $visits->count();
            //visitor count
            $data['visitors'][]        = $visits->groupBy('ip')->count();
        } 

        $data['dates']                 = implode(',', $data['dates']);
        $data['visits']                = implode(',', $data['visits']);
        $data['visitors']              = implode(',', $data['visitors']);

        $data['posthits']              = Post::with('image')->orderBy('total_hit', 'DESC')->where('total_hit', '!=', 0)->paginate(10);

        return view('common::index', compact('data'));
    }


    public function inquire(Request $request){
        $validated = $request->validate([
        'title' => 'required',
        'name' => 'required',
        'phone' => 'required',
        'full_phone' => 'required',
        'email' => 'required',
        'message' => 'required',
        'recaptcha' => 'required',
        'redirect' => 'required',
        ]);
        $captcha = Session::get('captcha');
        if($request->recaptcha !== $captcha){
            $validator = Validator::make([], []);
            $validator->getMessageBag()->add('recaptcha', 'Wrong captcha! Please try again!');  
            return redirect()->back()->withErrors($validator)->withInput();
        } else{
            $inquire = new Inquire;
            $inquire->title = $request->title;
            $inquire->name = $request->name;
            $inquire->phone = $request->full_phone;
            $inquire->email = $request->email;
            $inquire->message = $request->message;
            $inquire->save();

            Session::flash('message', 'Thank you For your Inquire!  We will contact you ASAP!');
            return redirect($request->redirect);
        }
    }

    public function application(Request $request){
        $validated = $request->validate([
            'nationality' => 'required',
        ]);

        $application = $request->input();

        if (isset($_POST['sectionG_language'])) {
            $tsd = '';
            for ($ts1=0; $ts1 < count($_POST['sectionG_language']); $ts1++) { 
                $tsd .= $_POST['sectionG_language'][$ts1].",";
            }
                        $application['sectionG_language'] = $tsd;
        }
        if (isset($_POST['sectionK_furthur'])) {
            $skf = '';
            for ($skf1=0; $skf1 < count($_POST['sectionK_furthur']); $skf1++) { 
                $skf .= $_POST['sectionK_furthur'][$skf1].",";
            }
            $application['sectionK_furthur'] = $skf;
        }

        if($request->hasfile('uploaded_file')){
            $i1 = 0;
            $files1 = '';
            foreach($request->file('uploaded_file') as $file)
            {
                $i1++;
                $name1 = time().$i1.'.'.$file->extension();
                $file->move(public_path().'/images/application/bankslip/', $name1);  
                $files1 .= $name1.',';  
            }
            $application['bank_slip'] = $files1;
        }
        if($request->hasfile('uploaded_file1')){
            $i2 = 0;
            $files2 = '';
            foreach($request->file('uploaded_file1') as $file2)
            {
                $i2++;
                $name2 = time().$i2.'.'.$file2->extension();
                $file2->move(public_path().'/images/application/certifiedcopies/', $name2);  
                $files2 .= $name2.',';  
            }
            $application['certified_copies'] = $files2;
        }
        if($request->hasfile('uploaded_file2')){
            $i3 = 0;
            $files3 = '';
            foreach($request->file('uploaded_file2') as $file3)
            {
                $i3++;
                $name3 = time().$i3.'.'.$file3->extension();
                $file3->move(public_path().'/images/application/englishproof/', $name3);  
                $files3 .= $name3.',';  
            }
            $application['english_proof'] = $files3;
        }
        if($request->hasfile('uploaded_file3')){
            $i4 = 0;
            $files4 = '';
            foreach($request->file('uploaded_file3') as $file4)
            {
                $i4++;
                $name4 = time().$i4.'.'.$file4->extension();
                $file4->move(public_path().'/images/application/signed/', $name4);  
                $files4 .= $name4.',';  
            }
            $application['signed'] = $files4;
        }
        if($request->hasfile('uploaded_file4')){
            $i5 = 0;
            $files5 = '';
            foreach($request->file('uploaded_file4') as $file5)
            {
                $i5++;
                $name5 = time().$i5.'.'.$file5->extension();
                $file5->move(public_path().'/images/application/passportnic/', $name5);  
                $files5 .= $name5.',';  
            }
            $application['passport_nic'] = $files5;
        }
        if($request->hasfile('uploaded_file5')){
            $i6 = 0;
            $files6 = '';
            foreach($request->file('uploaded_file5') as $file6)
            {
                $i6++;
                $name6 = time().$i6.'.'.$file6->extension();
                $file6->move(public_path().'/images/application/photograph/', $name6);  
                $files6 .= $name6.',';  
            }
            $application['photograph'] = $files6;
        }

        
        $lastInsertId = Application::create($application)->id;

        if (isset($_POST['year'])) {
            for ($count = 0; $count < count($_POST['year']); $count++) {  //for loop
                $SchoolEducation = new SchoolEducation;
                $SchoolEducation->application_id = $lastInsertId;
                $SchoolEducation->year = $_POST['year'][$count];
                $SchoolEducation->examination_body = $_POST['examination_body'][$count];
                $SchoolEducation->school = $_POST['school'][$count];
                $SchoolEducation->subject = $_POST['subject'][$count];
                $SchoolEducation->result = $_POST['result'][$count];
                $SchoolEducation->save();
            }
        }
        if (isset($_POST['a_year'])) {
            for ($count1 = 0; $count1 < count($_POST['year']); $count1++) {  //for loop
                $AcademicQualifications = new AcademicQualifications;
                $AcademicQualifications->application_id = $lastInsertId;
                $AcademicQualifications->a_year = $_POST['a_year'][$count1];
                $AcademicQualifications->a_qulification = $_POST['a_qulification'][$count1];
                $AcademicQualifications->a_insitute = $_POST['a_insitute'][$count1];
                $AcademicQualifications->a_awarding_body = $_POST['a_awarding_body'][$count1];
                $AcademicQualifications->a_country = $_POST['a_country'][$count1];
                $AcademicQualifications->save();
            }
        }
        if (isset($_POST['sectionH_name_of_organization1'])) {
            for ($count2=0; $count2 < count($_POST['sectionH_name_of_organization1']) ; $count2++) { 
                $WorkExperience = new WorkExperience;
                $WorkExperience->application_id = $lastInsertId;
                $WorkExperience->sectionH_name_of_organization1 = $_POST['sectionH_name_of_organization1'][$count2];
                $WorkExperience->sectionH_title_nature1 = $_POST['sectionH_title_nature1'][$count2];
                $WorkExperience->sectionH_time = $_POST['sectionH_time'][$count2];
                $WorkExperience->sectionH_from = $_POST['sectionH_from'][$count2];
                $WorkExperience->sectionH_to = $_POST['sectionH_to'][$count2];
                $WorkExperience->save();
            }
        }
        Session::flash('message', 'Thank you For Submition! We received your application, We will contact you ASAP!');
        return redirect()->back();

    }


    public function studyabroad(){
        $countries = DB::table('countriy_trans_options')->get();
        return view('common::studyabroad',compact('countries'));
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('common::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('common::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('common::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
