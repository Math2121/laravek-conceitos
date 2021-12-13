<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Notifications\NewContact;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("site.contact.index");
    }

    public function contact(Request $request)
    {
        //

        $contact = Contact::create($request->all());
        
        FacadesNotification::route('mail',config('mail.from.address'))->notify(new NewContact($contact));


        dd($contact);

    }

  
}
