<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ConctactMail;
use Illuminate\Support\Facades\Mail;

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

        Mail::to('sami-romi@romi.com')->send($mailable);

        $result = "Votre mail à bien été envoyé. Je vous contacterai dans les plus brèf délais!";

        return view('pages.contacter', compact('result'));
    }

}
