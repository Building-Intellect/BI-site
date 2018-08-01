<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function create() {
        return view('contact');
    }

    public function send(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'msg' => 'required'
        ]);

        Mail::send('email.contact-email', [
            'msg' => $request->msg
        ], function($mail) use($request) {
            $mail->from($request->email, $request->name);
            $mail->to('sales@buildingintellect.com')->subject('Site Contact: ' . $request->subject);
        });

        return redirect()->back()->with('flash_message', 'Thank you for your inquiry!');
    }
}
