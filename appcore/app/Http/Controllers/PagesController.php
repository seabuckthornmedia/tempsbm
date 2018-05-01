<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Mail;

class PagesController extends Controller
{
    public function __construct()
    {
      //  $this->middleware('auth', ['except' => ['welcome', 'success']]);
    }
    public function home()
    {
        /* 
            Session::flash('message', 'This is a message!'); 
            Session::flash('alert-class', 'alert-danger'); 
        */
        return view('pages.home')->with('alert-dismissible', 'success');
    }
    public function postContact(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:10',
            'message' => 'min: 10']);
            $data = array(
                            'email' => $request->email,
                            'subject' => $request->subject,
                            'bodyMessage' => $request->message
                        );
            Mail::send('emails.contactmail', $data, function($message) use ($data){
                $message->from('no-reply@seabuckthornmedia.com');
                $message->to('info@seabuckthornmedia.com');
                $message->subject($data['subject']);
                });
                return view('pages.home', ['msg' => 'success']);

   }
}
