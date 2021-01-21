<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConctactMail;
use Illuminate\Support\Facades\Redirect;

class ContactFormController extends Controller
{
    /**
     * Display a form contact.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('pages.contacter');
    }

    /**
     * Send the mail at the admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function send_Mail(ContactFormRequest $request)
    {
        $mailable = new ConctactMail($request->name, $request->email, $request->subject, $request->message);

        $email = 'admin@g-romaric.com';

        Mail::to($email)->send($mailable);

        flash(sprintf("Merci de m'avoir écris. Je vous contacterai dans les plus brèf délais!"));

        return redirect()->route('contact');
    }

}
