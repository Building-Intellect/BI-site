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
            'msg' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        Mail::send('email.contact-email', [
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg
        ], function($mail) use($request) {
            $mail->from('noreply@buildingintellect.com', $request->name);
            $mail->to('sales@buildingintellect.com')->subject('Site Contact: ' . $request->subject);
        });

        return redirect()->back()->with('flash_message', 'Thank you for your inquiry!');
    }
}
