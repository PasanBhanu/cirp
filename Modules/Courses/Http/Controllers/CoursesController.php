<?php

namespace Modules\Courses\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
use Modules\Courses\Entities\Courses;
use Modules\Common\Entities\Module;
use Modules\Common\Entities\Elective;
use Session;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {   
        if(isset($request->study_level)){
            
            $courses = Courses::where('studylevel', '=', $request->study_level)->where('deliver', '=', $request->delivery)->where('field', '=', $request->field)->get();
            $data['h1'] = $request->study_level.' Couses';
            return view('courses::index', compact('courses','request','data'));
            
        }
        else{
            $courses = Courses::get();
            $data['h1'] = 'All Programs';
            return view('courses::index', compact('courses','request','data'));
        }

    }


    public function course($slug)
    {   
        $course = Courses::where('slug','=',$slug)->first();

        if(!empty($course)){
            $modules = DB::table('module')->where('course_id',$course->id)->get();
            $electives = DB::table('electives')->where('course_id',$course->id)->get();

            return view('courses::course', compact('course','modules','electives'));
        }
        else{
            return view('errors.404');
        }
        
        
        
    }

    public function programs(Request $request){

        if(empty($request->filter)){
            $pr = DB::table('courses')->get();
            return view('courses::backend.programs', compact('pr','request'));
        } 
        elseif($request->studylevel == 'All'){
            $pr = DB::table('courses')->get();
            return view('courses::backend.programs', compact('pr','request'));
        }
        else{
            $pr = DB::table('courses')->where('studylevel', $request->studylevel)->get();
            return view('courses::backend.programs', compact('pr','request'));
        }
    }

    public function programedit($id){
      
        $pro = DB::table('courses')->where('id', $id)->first();
        //$pro = $request->input();
        $modules = DB::table('module')->where('course_id', $id)->get();
        $electives = DB::table('electives')->where('course_id', $id)->get();
        return view('courses::backend.edit', compact('pro','modules','electives'));
    }

    public function addmodules($id){
        $pro = Courses::find($id);
        $modules = Module::where('course_id', $id)->get();
        return view('courses::backend.modules', compact('pro','modules'));
    }

    public function addelectives($id){
        $pro = Courses::find($id);
        $electives = Elective::where('course_id', $id)->get();
        return view('courses::backend.electives', compact('pro','electives'));
    }

    public function deletemodules($id){
        Module::destroy($id);
        Session::flash('success', 'Module Deleted!');
        return redirect()->back();
    }

    public function deleteelectives($id){
        Elective::destroy($id);
        Session::flash('success', 'Elective Deleted!');
        return redirect()->back();
    }

    public function submitmodules(Request $request){
        $data = $request->input();
        Module::create($data);
        Session::flash('success', 'Module Added!');
        return redirect()->back();
    }

    public function submitectives(Request $request){
        $data = $request->input();
        Elective::create($data);
        Session::flash('success', 'Elective Added!');
        return redirect()->back();
    }

    public function editmodules(Request $request){
        if (isset($_POST['id'])) {
            for ($count = 0; $count < count($_POST['id']); $count++) {
                $id = $_POST['id'][$count];
                $data['name'] = $_POST['name'][$count];
                $data['credits'] = $_POST['credits'][$count];
                Module::find($id)->update($data);
            }
            Session::flash('success', 'Module Update successfully!');
            return redirect()->back();
        }
    }

    public function editelectives(Request $request){
        if (isset($_POST['id'])) {
            for ($count = 0; $count < count($_POST['id']); $count++) {
                $id = $_POST['id'][$count];
                $data['name'] = $_POST['name'][$count];
                $data['credits'] = $_POST['credits'][$count];
                Elective::find($id)->update($data);
            }
            Session::flash('success', 'Elective Update successfully!');
            return redirect()->back();
        }
    }



    public function programeditsubmit(Request $request, $id){
        
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $data = $request->input();
        $cs = Courses::where('id', $id)->first();
        if($request->file('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->extension();
            $image->move(public_path().'/theme/img/courses/', $name);  
            $data['image'] = 'theme/img/courses/'.$name;
        }
        else{
            $data['image'] = $cs->image;
        }
        $data['deliver'] = 'On Site';
        $data['field'] = 'Psychology';
        //make slug removing spaces and especial characters
        $sep='-';
        $res = preg_replace('/[^[:alnum:]]/', ' ', $data['name']);
        $res = preg_replace('/[[:space:]]+/', $sep, $res);
        $data['slug'] = trim($res, $sep);

        if (isset($_POST['namemodule'])) {
            $i11= 0;
            for ($count = 0; $count < count($_POST['namemodule']); $count++) {
                $i11++;
                $mod['course_id'] = $id;
                $mod['name'] = $_POST['namemodule'][$count];
                $mod['credits'] = $_POST['creditsmodule'][$count];
                Module::find($i11)->update($mod);
            }
        }

        if (isset($_POST['nameelective'])) {
            $i21= 0;
            for ($count = 0; $count < count($_POST['nameelective']); $count++) {
                $i21++;
                $mod['course_id'] = $id;
                $mod['name'] = $_POST['nameelective'][$count];
                $mod['credits'] = $_POST['creditelective'][$count];
                Elective::find($i21)->update($mod);
            }
        }
        Courses::find($id)->update($data);
        Session::flash('success', $data['name'].' Update successfully!');
        return redirect()->back();
    }


    public function programaddsubmit(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'short_des' => 'required',
        ]);
        $data = $request->input();
        if($request->file('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->extension();
            $image->move(public_path().'/theme/img/courses/', $name);  
            $data['image'] = 'theme/img/courses/'.$name;
        }
        else{
            $data['image'] = $cs->image;
        }
        $data['deliver'] = 'On Site';
        $data['field'] = 'Psychology';
        //make slug removing spaces and especial characters
        $sep='-';
        $res = preg_replace('/[^[:alnum:]]/', ' ', $data['name']);
        $res = preg_replace('/[[:space:]]+/', $sep, $res);
        $data['slug'] = trim($res, $sep);

        $id = Courses::create($data)->id;

        if (isset($_POST['namemodule'])) {
            for ($count = 0; $count < count($_POST['namemodule']); $count++) {
                $mod['course_id'] = $id;
                $mod['name'] = $_POST['namemodule'][$count];
                $mod['credits'] = $_POST['creditsmodule'][$count];
                Module::create($mod);
            }
        }

        if (isset($_POST['nameelective'])) {
            for ($count = 0; $count < count($_POST['nameelective']); $count++) {
                $mod['course_id'] = $id;
                $mod['name'] = $_POST['nameelective'][$count];
                $mod['credits'] = $_POST['creditelective'][$count];
                Elective::create($mod);
            }
        }
        Session::flash('success', $data['name'].' Update successfully!');
        return redirect('programs');
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('courses::create');
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
        return view('courses::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('courses::edit');
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
