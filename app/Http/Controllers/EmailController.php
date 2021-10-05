<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Mail;
class EmailController extends Controller
{
 public function VaprosEmail(Request $request) {
     $request->validate([
            'name'  =>  'required',
            'phone'  =>  'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email' => 'required|email',
            'text' => 'required',
            'yes'  =>  'required'
        ]);

    $data['fromName'] = $request->name;
    $data['phone'] = $request->phone;
    $data['fromEmail'] = $request->email;
    $data['text'] = $request->text;
    $segment = $request->segment;
 
    Mail::send('email_vapros', $data, function($message) use ($data){
            $message->to('cchouse93@gmail.com', 'Telam')->subject('Есть Вопросы?');
            $message->from($data['fromEmail'],$data['fromName']);
        });
 
        if (Mail::failures()) {
          return response()->Fail('Sorry! Please try again latter');
         }else{
          return redirect()->to($segment)->with('send_email', 'consolPopup');
         }
    
  }
   
 public function ZayavkuEmail(Request $request) {
     
    $request->validate([
            'name'  =>  'required',
            'phone'  =>  'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'yes'  =>  'required'
        ]);

    $data['fromName'] = $request->name;
    $data['fromEmail'] = "test@mail.ru";
    $data['phone'] = $request->phone;
    $segment = $request->segment;
 
    Mail::send('email_zayavku', $data, function($message) use ($data){
            $message->to('cchouse93@gmail.com', 'Telam')->subject('Оставить заявку');
            $message->from($data['fromEmail'],$data['fromName']);
        });
 
        if (Mail::failures()) {
          return response()->Fail('Sorry! Please try again latter');
         }else{
          return redirect()->to($segment)->with('send_email', 'consolPopup');
         }
    
   }
}
