<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(Request $request) {
        $contacts = Contact::create([
           'phone' => $request->phone,
           'email' => $request->email,
           'fax' => $request->fax,
           'address' => $request->address,
           'timejob' => $request->timejob,
           'duration' => $request->duration,
           'reception' => $request->reception,
        ]);

        return redirect()->route('admin.contacts.index');
    }

    public function edit(Request $request, Contact $contact) {
        $params = [
            'phone' => $request->phone,
            'email' => $request->email,
            'fax' => $request->fax,
            'address' => $request->address,
            'timejob' => $request->timejob,
            'duration' => $request->duration,
            'reception' => $request->reception,
        ];

        $contact->update($params);

        return redirect()->route('admin.contacts.index');
    }

    public function delete(Contact $contact) {
        $contact->delete();
        return redirect()->route('admin.contacts.index');
    }
    
    public function send(Request $request){
        $username = $request->username;
        $useremail = $request->useremail;
        $usertext = $request->usertext;
        if(!empty($username)) {
            Mail::to('testrlaravel@gmail.com')->send(new MailClass($username,$useremail, $usertext));
        }



        return redirect()->route('contact');
    }

}
