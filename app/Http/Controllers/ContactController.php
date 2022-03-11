<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
class ContactController extends Controller
{
   public function newContact(){
       $newContact = new Contact();
       $newContact->name ='mohammed';
       $newContact->email ='mohammed@gmail.com';
       $newContact->message ='mohamjjjjjmed';
        $newContact->save();
   }
}
