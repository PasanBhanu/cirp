<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Carbon\Carbon;
use Modules\Ads\Entities\AdLocation;
use Modules\Appearance\Entities\ThemeSection;
use Modules\Post\Entities\Post;
use LaravelLocalization;

use Modules\User\Entities\Activation;
use App\VisitorTracker;
use Illuminate\Support\Facades\Input;
use Sentinel;
use DB;
use Modules\Post\Entities\Category;
use Session;
use Validator;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        if (!extension_loaded('ionCube Loader')) {
            echo ("Site error: the ionCube PHP Loader needs to be installed. This is a widely used PHP extension for running ionCube PHP code, enhance website security and malware blocking.\n\nPlease visit " . (php_sapi_name() == 'cli' ? 'get-loader.ioncube.com' : '<a href="http://get-loader.ioncube.com">get-loader.ioncube.com</a>') . " for install assistance.\n\n");
        } else {

            $hm = DB::table('home_section')->where('id', 1)->first();
            $data['totalVisits']               = VisitorTracker::get();
            $data['totalUniqueVisitors']       = VisitorTracker::where('date', 'like', date('Y') . '%')->get();
            $count = 0;
            foreach ($data['totalUniqueVisitors']->groupBy('ip') as $key => $visitor) {
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
            for ($i = 1; $i <= date('t'); $i++) {
                if ($i < 10) {
                    $i = str_pad($i, 2, "0", STR_PAD_LEFT);
                }
                // visits count
                $visits                    = $visitors->where('date', date('Y-m-' . $i));
                $data['dates'][] = $i;
                $data['visits'][]          = $visits->count();
                //visitor count
                $data['visitors'][]        = $visits->groupBy('ip')->count();
            }

            $data['dates']                 = implode(',', $data['dates']);
            $data['visits']                = implode(',', $data['visits']);
            $data['visitors']              = implode(',', $data['visitors']);

            $data['posthits']              = Post::with('image')->orderBy('total_hit', 'DESC')->where('total_hit', '!=', 0)->paginate(10);

            $slideshows = DB::select('SELECT * from slideshows');

            $tiles = DB::select('SELECT * from why_study_at_tiles');

            $media = DB::select('SELECT * from media_and_news');

            $video = DB::select('SELECT * from videos');

            $logos = DB::select('SELECT * from logos');

            return view('site::index', compact('data', 'hm', 'slideshows', 'tiles', 'media', 'video', 'logos'));
        }
    }

    public function studentslife()
    {
        return view('site::studentslife');
    }

    public function international()
    {
        return view('site::international');
    }

    public function alumni()
    {
        return view('site::alumni');
    }

    public function upib()
    {
        return view('site::upib');
    }

    public function dupp()
    {
        return view('site::dupp');
    }


    public function news()
    {
        return view('site::news');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'recaptcha' => 'required',
        ]);
        $captcha = Session::get('captcha');
        if ($request->recaptcha !== $captcha) {
            $validator = Validator::make([], []);
            $validator->getMessageBag()->add('recaptcha', 'Wrong captcha! Please try again!');
            Session::flash('success', 'false');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            DB::table('contact_messages')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);
            Session::flash('success', 'true');
            return redirect()->back();
        }
    }

















    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('site::create');
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
        return view('site::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('site::edit');
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
