<?php

namespace App\Http\Controllers;

use App\Classes\Contact;
use App\Http\Requests\ContactUsTableRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactUsTableRequest $request)
    {
        $param = $request->validated();

        $contact = Contact::create($param);

        flash('Your message was successful send')->success();

        Mail::to('info@pizza-delicious.com')->send(
            new ContactMail($contact));

        return redirect(route('home'));
    }
}
