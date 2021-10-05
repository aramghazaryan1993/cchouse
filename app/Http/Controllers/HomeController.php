<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeModel;
use App\GlobalModel;
use DB;


use Mail;



class HomeController extends Controller
{
    protected  $model;
    protected  $globalModel;

    public function __construct()
    {
    	 $this->model = new HomeModel();
    	 $this->globalModel = new GlobalModel();
    }

    public function index()
    {  
        $dataGlobalContact = $this->globalModel->GlobalContactModel();
    	$DataRemont     = $this->model->UslugiRemontModel();
    	$DataDizayner   = $this->model->UslugiDizaynerModel();
    	$DataDastavka   = $this->model->UslugiDastavkaModel();
    	$DataOtziv      = $this->model->OtzivModel();
    	$DataHome = $this->model->indexModel();
    	return view('home',['showHome'=>$DataHome, 'ShowRemont' => $DataRemont, 'ShowDizayner' => $DataDizayner, 'ShowDastavka' => $DataDastavka, 'ShowOtzive' => $DataOtziv, 'ShowGlobalContact' => $dataGlobalContact]);
    }
    
    public function SendMail() {
        
      $data = array('name'=>"Virat Gandhi");
   
      Mail::send(['text'=>'test'], $data, function($message) {
         $message->to('aram9999@hotmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('a480011@mail.ru','Virat Gandhi');
      });
      echo "Basic Email Sent. Check your inbox.";
    die();
//     $data = array('name'=>"Joshua", "body" => "This is my first Online Email.");
// Mail::send('home', $data, function($message) {
//   $message->to('aram9999@hotmail.com', 'To Website')
//           ->subject('Online Email Test');
//   $message->from('a480011@mail.ru','From Visitor');
// });


$mailid = 'aram9999@hotmail.com';
$subject = 'News Information.';
$data = array('email' => $mailid, 'subject' => $subject);
Mail::send('test', $data, function ($message) use ($data) {
$message->from('a480011@mail.ru', 'News Information');
$message->to($data['email']);
$message->subject($data['subject']); 
});
//return redirect()->back()->with('message','Successfully Send Your Mail Id.');
//}
   }
    

    
   

  
}
