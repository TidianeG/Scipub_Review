<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;
use Mail;
class HomeController extends Controller
{

    public function about(){
        return view('about');
     }
     public function services(){
        return view('service');
     }
   
      public function Contact_Us(){
        return view('ContactUs');
     }
      public function pricing(){
        return view('pricing');
     }
      public function portfolio(){
        return view('portfolio');
     }
      public function 	faqs(){
        return view('FAQS');
     }
      public function Testimonials(){
        return view('Testimonials');
       }
       public function Why_Choose_Us(){
         return view('Why_Choose_Us');
        }
    public function dashbord() {
      $contacts = Contact::all();
      return view('my_message',compact('contacts'));
    }

    public function new_message() {
      $contacts = Contact::where('status','new');
      return view('new_message',compact('contacts'));
    }

    public function show_message($id) {
      $contact = Contact::find($id);
        if($contact){
                $contact->status = "view";
        }
      return view('show_message',compact('contact'));
    }

    public function CreateForm(Request $request) {       
   
      $data = array(
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'mail_message' => $request->mail_message,
      );
    
      Mail::send('emails.contactemail', compact('data'), function($message) use ($data){
        $message->from($data['email'], $data['name']);
        $message->to('gaye95cheikh@gmail.com');
        $message->subject($data['subject']);
      });
      
        return redirect()->back()->with('success', 'Your message has send successfuly');
     
     // dd(env($message));

      /*Mail::send('emails.contactemail',[
        'name'  => $request->name,
        'email'  => $request->email,
        'subjet'  => $request->subjet,
        'message'  => $request->message
      ], function($mail) use($request){
          $mail->from(env('Mail_FROM_ADDRESS'),$request->name);
          $mail->to('gaye95ahmeth@gmail.com')->subject($request->subjet);
      });*/ 
      
     }
}
