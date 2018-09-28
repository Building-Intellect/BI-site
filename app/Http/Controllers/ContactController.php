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

        $emailBody = '<h1>New Site Contact Message:</h1>'
            . '<h3>Name: '. $request->name . ' </h3>'
            . '<h3>Email Address: '. $request->email . ' </h3>'
            . '<hr />'
            . '<p>Name: '. $request->msg . ' </h3>';

        sendEmail(
            'sales@buildingintellect.com',
            'Site Contact: ' . $request->subject,
            $emailBody,
            $request->name
        );

        return redirect()->back()->with('flash_message', 'Thank you for your inquiry!');
    }

    // send email using phpmailer and godaddy smtp forwarding
    function sendEmail($to, $subject, $message, $name) {
        define('SMTP_HOST', 'relay-hosting.secureserver.net');
        define('SMTP_PORT', 25);
        define('SMTP_AUTH', true);

        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail -> SMTPDebug = 1;
        $mail->Host = "smtpout.secureserver.net";
        $mail->SMTPAuth = SMTP_AUTH;
        $mail->Port = 80;
        $mail->Username = "kellann@buildingintellect.com";
        $mail->Password = "890p890p";
        //$mail->SMTPSecure = 'ssl';
        $mail->SetFrom('noreply@buildingintellect.com');
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
