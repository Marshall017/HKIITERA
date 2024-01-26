<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class KontakController extends Controller
{
    public function showForm()
    {
        return view('kontak');
    }

    public function sendEmail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $phone = $request->input('phone');
        $message = $request->input('message');

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 0; // Enable verbose debug output
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');

            // Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('marshall.120140017@student.itera.ac.id', 'Recipient Name'); // Ganti dengan alamat email penerima

            // Content
            $mail->isHTML(false);
            $mail->Subject = $subject; // Gunakan subject dari input form
            $mail->Body = "Name: $name\nEmail: $email\nSubject: $subject\nPhone: $phone\n\n$message";

            $mail->send();
            return redirect()->back()->with('success', 'Email has been sent successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error sending email: ' . $mail->ErrorInfo);
        }
    }
}
