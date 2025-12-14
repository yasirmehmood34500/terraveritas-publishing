<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Mail\ContactUsReceiveMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function send_email(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3|max:50',
            'last_name'  => 'required|min:3|max:50',
            'email'      => 'required|email',
            'subject'    => 'required|min:3|max:100',
            'message'    => 'required|min:3|max:500',
        ]);
        $name = $request->input('first_name') . " " . $request->input('last_name');
        if (config('app.env') == 'production') {
            try {
                Mail::to($request->input('email'))->send(new ContactUsMail(name: $name));
                Mail::to(config('mail.admin_email'))->send(new ContactUsReceiveMail(name: $name, email: $request->input('email'), subject: $request->input('subject'), message: $request->input('message')));
            } catch (\Throwable $th) {
            }
        }
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
