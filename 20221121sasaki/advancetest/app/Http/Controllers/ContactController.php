<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function submit(ContactRequest $request)
    {
        $familyname =  $request->familyname;
        $firstname = $request->firstname;
        $fullname = $familyname . $firstname;
        $gender = $request->gender;
        $email = $request->email;
        $postcode = $request->postcode;
        $address = $request->address;
        $building = $request->building;
        $opinion = $request->opinion;
        $form = compact("fullname", "gender", "email", "postcode", "address", "building", "opinion");
        Contact::create($form);
        return view('confirm');
    }

    public function confirm()
    {
        return view('confirm');
    }

    public function thanks()
    {
        return view('thanks');
    }
}