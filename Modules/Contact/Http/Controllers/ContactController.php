<?php

namespace Modules\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Contact\Entities\ContactMessage;
use Validator;
use Illuminate\Support\Facades\Mail;
use DB;

class ContactController extends Controller
{
    public function index()
    {
        $contactMessages=ContactMessage::paginate(20);

        return view('contact::index',compact('contactMessages'));
    }

        public function show($id)
    {
        $contactMessage=ContactMessage::findOrFail($id);

        return view('contact::show',compact('contactMessage'));
    }
    

    public function replayMail(Request $request,$id){
        Validator::make($request->all(), [
            'message'   => 'required',
            'subject'   => 'required|min:2',
        ])->validate();

        try{

            $message=ContactMessage::findOrFail($id);
            sendMailTo($message->email,$request);

            return \redirect()->back()->with('success',__('successfully_send'));

        } catch (\Exception $e) {
            return redirect()->back()->with('error', __('test_mail_error_message'));
        }
    }

    public function inquiries(){
        $inquires = DB::table('inquires')->get();
        return view('contact::inquires', compact('inquires'));
    }

    public function appplication(){
        $applications = DB::table('applications')->get();
        return view('contact::application', compact('applications'));
    }

    public function view($id){
        $applications = DB::table('applications')->where('id',$id)->first();
        $schools = DB::table('school_education')->where('application_id', $applications->id)->get();
        $academics = DB::table('academic_qualifications')->where('application_id', $applications->id)->get();
        $works = DB::table('workexperiences')->where('application_id', $applications->id)->get();

        return view('contact::viewapplication', compact('applications','schools','academics','works'));
    }

}
