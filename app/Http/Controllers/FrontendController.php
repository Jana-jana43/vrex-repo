<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;



class FrontendController extends Controller
{
    public function home(){
        return view('Frontend.index');
      
    }

     public function about(){
        return view('Frontend.about');
      
    }

    
     public function service(){
        return view('Frontend.service');
      
    }

    public function uiux(){
        return view('Frontend.service-detail.best-uiux-design-company-in-chennai');
    }


    public function qualityassurance(){
        return view('Frontend.service-detail.software-quality-assurance-services-in-chennai');
    }



   public function contact(){
        return view('Frontend.contact');
      
    }
    
    public function teams(){
        return view('frontend.team');
    }

    public function careers(){
        return view('Frontend.careers');
      
    }
    
    public function blog(){
        return view('Frontend.blog');
      
    }



// public function sendContact(Request $request)
// {
//     $request->validate([
//         'name'    => 'required|string|max:100',
//         'email'   => 'required|email',
//         'subject' => 'required|string|max:100',
//         'message' => 'required|string|min:10',
//     ]);

//     $data = $request->only('name', 'email', 'subject', 'message');

//     try {
//         Mail::send('emails.contact-mail', $data, function($message) use ($data) {
//     $message->to('sowmiya@yopmail.com')
//             ->subject('New Contact Form Submission - ' . $data['subject'])
//             ->from($data['email'], $data['name']);
// });
//         return redirect()->back()->with('success', 'Message sent successfully!');
//     } catch (\Exception $e) {
//         return redirect()->back()->with('error', 'Could not send email. Try again later.');
//     }
// }



// public function sendContact(Request $request)
// {

 
//     $request->validate([
//         'name'    => 'required|string|max:100',
//         'email'   => 'required|email',
//         'subject' => 'required|string|max:100',
//         'message' => 'required|string|min:10',
//     ]);

//     $data = $request->only('name', 'email', 'subject', 'message');
//     $data['user_message'] = $data['message']; // rename
//     unset($data['message']);

//     try {
//         Mail::send('emails.contact-mail', $data, function($message) use ($data) {
//             $message->to('sowmiya@yopmail.com', 'Vishakarex Admin')
//                     ->subject('New Contact Form Submission - ' . $data['subject'])
//                     ->from($data['email'], $data['name']);
//         });

//         return redirect()->back()->with('success', 'Message sent successfully!');
//     } catch (\Exception $e) {
//         return redirect()->back()->with('error', 'Mailer Error: ' . $e->getMessage());
//     }
// }




// public function sendContact(Request $request)
// {
//     $request->validate([
//         'name'    => 'required|string|max:100',
//         'email'   => 'required|email',
//         'subject' => 'required|string|max:100',
//         'message' => 'required|string|min:10',
//     ]);

//     $data = $request->only('name', 'email', 'subject', 'message');
//     $data['user_message'] = $data['message']; // rename
//     unset($data['message']);

//     // Define sender and receiver
//     $senderEmail = $data['email'];
//     $receiverEmail = 'sowmiya@yopmail.com';

//     try {
//         Mail::send('emails.contact-mail', $data, function($message) use ($data, $receiverEmail, $senderEmail) {
//             $message->to($receiverEmail, 'Vishakarex Admin')
//                     ->subject('New Contact Form Submission - ' . $data['subject'])
//                     ->from($senderEmail, $data['name']);
//         });

//         // Log sender and receiver
//         Log::info('Contact form submitted', [
//             'sender' => $senderEmail,
//             'receiver' => $receiverEmail,
//             'subject' => $data['subject']
//         ]);

//         return redirect()->back()->with('success', 'Message sent successfully!');

//     } catch (\Exception $e) {
//         // Log error with sender and receiver
//         Log::error('Mailer Error', [
//             'sender' => $senderEmail,
//             'receiver' => $receiverEmail,
//             'error' => $e->getMessage()
//         ]);

//         return redirect()->back()->with('error', 'Mailer Error: ' . $e->getMessage());
//     }
// }



public function sendContact(Request $request)
{
    $request->validate([
        'name'    => 'required|string|max:100',
        'email'   => 'required|email',
        'subject' => 'required|string|max:100',
        'message' => 'required|string|min:10',
    ]);

    $data = $request->only('name', 'email', 'subject', 'message');
    $data['user_message'] = $data['message'];
    unset($data['message']);

    $receiverEmail = 'info@vishakarex.in';
    $smtpEmail = config('mail.from.address'); // support@wimbgo.com

    try {
        Mail::send('emails.contact-mail', $data, function($message) use ($data, $receiverEmail, $smtpEmail) {
            $message->to($receiverEmail, 'Vishakarex Admin')
                    ->subject('New Contact Form Submission - ' . $data['subject'])
                    ->from($smtpEmail, config('mail.from.name')) // SMTP verified
                    ->replyTo($data['email'], $data['name']); // user email
        });

        Log::info('Contact form submitted', [
            'sender' => $data['email'],
            'receiver' => $receiverEmail,
            'subject' => $data['subject']
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    } catch (\Exception $e) {
        Log::error('Mailer Error', [
            'sender' => $data['email'],
            'receiver' => $receiverEmail,
            'error' => $e->getMessage()
        ]);

        return redirect()->back()->with('error', 'Mailer Error: ' . $e->getMessage());
    }

}






public function submitForm(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|min:2',
        'number' => 'required|digits:10',
        'multiSelect' => 'required',
        'email' => 'required|email',
    ]);

    $receiverEmail = "info@vishakarex.in";
    $smtpEmail = config('mail.from.address'); // e.g. support@vishakarex.in

    try {
        Mail::send('emails.courseMail', ['data' => $validated], function ($message) use ($validated, $receiverEmail, $smtpEmail) {
            $message->to($receiverEmail, 'Vishakarex Admin')
                ->subject('New Course Application - ' . $validated['name'])
                ->from($smtpEmail, config('mail.from.name'))
                ->replyTo($validated['email'], $validated['name']);
        });

        Log::info('Course form submitted', [
            'sender' => $validated['email'],
            'receiver' => $receiverEmail,
            'name' => $validated['name']
        ]);

        return redirect()->back()->with('success', 'Application sent successfully!');
    } catch (\Exception $e) {
        Log::error('Mailer Error', [
            'sender' => $validated['email'],
            'receiver' => $receiverEmail,
            'error' => $e->getMessage()
        ]);

        return redirect()->back()->with('error', 'Mailer Error: ' . $e->getMessage());
    }




}
public function SendMail(Request $request)
{
    // Validate the request
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|digits:10',
        'department' => 'required|string',
        'message' => 'required|min:10'
    ]);

    $data = $request->only('name', 'email', 'phone', 'department', 'message');

    // Log the form data for debugging
    Log::info('Contact Form Submission:', $data);

    // Send email
    try {
  Mail::send('emails.contact', ['form' => $data], function($message) use ($data) {
    $message->to('info@vishakarex.in')
            ->subject('New Contact Form Submission');
    $message->from($data['email'], $data['name']);
});
        Log::info('Email sent successfully');
    } catch (\Exception $e) {
        Log::error('Email sending failed: ' . $e->getMessage());
        return back()->with('error', 'Failed to send email. Please try again later.');
    }

    return back()->with('success', 'Form submitted successfully!');
}


public function apply(Request $request)
{
    $request->validate([
        'job'        => 'required|string',
        'experience' => 'required|string',
        'name'       => 'required|string|max:100',
        'email'      => 'required|email:rfc,dns',
        'phone'      => 'required|digits:10',
        'resume'     => 'required|mimes:pdf,doc,docx|max:2048',
    ]);

    // Save resume inside public/resumes
    $filename = time() . '_' . preg_replace('/\s+/', '_', $request->file('resume')->getClientOriginalName());
    $request->file('resume')->move(public_path('resumes'), $filename);

    $resumePath = 'resumes/' . $filename;

    // Prepare data for email
    $data = [
        'name'       => $request->name,
        'email'      => $request->email,
        'phone'      => $request->phone,
        'job'        => $request->job,
        'experience' => $request->experience,
        'resumePath' => $resumePath,
    ];

    // Send Email
    Mail::send('emails.job_application', $data, function ($message) use ($request, $resumePath) {
    $message->from('info@vishakarex.in', 'Vishakarex');

    $message->to('hr@vishakarex.in', 'Admin 1');
    $message->to('hronboard@vishakarex.in', 'Admin 2');

    $message->subject('New Job Application')
            ->attach(public_path($resumePath));
});

    return back()->with('success', 'Application submitted successfully!');
}

}