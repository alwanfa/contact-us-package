<?php

namespace Wandev\Contact\Http\Controllers;

use Wandev\Contact\database\factories\EmailFactory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Wandev\Contact\Mail\MailContact;
use Wandev\Contact\Models\Contact;

class ContactController extends Controller
{
     public function display()
    {
        return view('contact::contact');
    }
    public function store(Request $req)
    {
        $data = ['name'=>$req->name,'email'=>$req->email,'subject'=>$req->subject,'message'=>$req->message];
        Contact::create($data);
        $emailFactory = new EmailFactory() ;
        $emailFactory->createMail($req->message,$req->subject,$req->name,$req->email);
        return redirect('contact');
    }
    
}
