<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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

        $emailBody = '<h1>New Building Intellect Contact Message:</h1>'
            . '<h3>Name: '. $request->name . ' </h3>'
            . '<h3>Email Address: '. $request->email . ' </h3>'
            . '<h3>Subject: '. $request->subject . ' </h3>'
            . '<hr />'
            . '<p>Message: '. $request->msg . ' </h3>';

        $this->sendEmail(
            'accounting@buildingintellect.com',
            'Building Intellect Contact: ' . $request->subject,
            $emailBody,
            $request->name
        );

        return redirect()->back()->with('flash_message', 'Thank you for your inquiry!');
    }

    // send email using phpmailer and godaddy smtp forwarding
    function sendEmail($to, $subject, $message, $name) {
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->SMTPDebug = 1;
        $mail->Host = env('MAIL_HOST');
        $mail->SMTPAuth = env('MAIL_SMTP_AUTH');
        $mail->Port = env('MAIL_PORT');
        $mail->Username = env('MAIL_USERNAME');
        $mail->Password = env('MAIL_PASSWORD');
        $mail->SMTPSecure = env('MAIL_ENCRYPTION');
        $mail->SetFrom(env('MAIL_FROM_ADDRESS'));
        $mail->Subject = $subject;
        $body = $message;
        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
        $mail->MsgHTML($body);
        $address = $to;
        $mail->AddAddress($address, $name);
        if(!$mail->Send()) {
            return 0;
        } else {
            return 1;
        }
    }
}
