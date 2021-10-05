<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GlobalModel;
use App\OtzivModel;
use DB;

class OtzivController extends Controller
{
    protected  $model;
    protected  $globalModel;

    public function __construct()
    {
    	 $this->model = new OtzivModel();
    	 $this->globalModel = new GlobalModel();
    }
    
    public function index()
    {
        $dataGlobalHome    = $this->globalModel->GlobalHomeModel();
        $dataGlobalContact = $this->globalModel->GlobalContactModel();
        
        $DataOtziv = $this->model->indexOtzivModel();
        $DataOtzivList = $this->model->OtzivListModel();
        return view('otziv',['ShowGlobalHome' => $dataGlobalHome, 'ShowGlobalContact' => $dataGlobalContact, 'ShowOtziv' => $DataOtziv, 'ShowOtzivList' => $DataOtzivList]);
    }
    
    public function InsertOtziv(Request $request)
    {
         $request->validate([
            'name'  =>  'required',
            'phone'  =>  'required',
            'email'     =>  'required',
            'text'     =>  'required',
            'star'     =>  'required',
            'yes'     =>  'required'
        ]);
         
          $image = $request->file('img');
         if($image)
         {
           $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uplodImage/otziv/'), $new_name);
        
            $name = $request->name;
            $phone = $request->phone;
            $email       =  $request->email;
            $text      =  $request->text;
            $star      =   $request->star;
            $img      =   $new_name;
         }else{
            $name = $request->name;
            $phone = $request->phone;
            $email       =  $request->email;
            $text      =  $request->text;
            $star      =   $request->star;
            $img      =   'defualt.png';
       
         }

        return $this->model->InsertOtzivModel($name,$phone,$email,$text,$star,$img);
    }
    
}
