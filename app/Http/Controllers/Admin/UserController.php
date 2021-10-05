<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\UserModel;
use DB;


class UserController extends Controller
{
	protected  $model;

    public function __construct()
    {
    	 $this->model = new UserModel();
    }

    public function index()
    {
    	$DataUser = $this->model->IndexUserModel();
    	return view('adminka.user',['ShowUser' => $DataUser]);
    }

    public function EditUser(Request $request,$id)
     {
         if(empty($request->yes))
         {
         $form_data = array(
            'name'    =>   $request->name,
            'email'    =>   $request->email
        );
         }else{
              $form_data = array(
            'name'    =>   $request->name,
            'email'    =>   $request->email,
            'password'  =>   bcrypt($request->password)
        );
     }
        
        return $this->model->EditUserModel($form_data,$id);
     }

     public function DeleteUser($id)
     {
     	return $this->model->DeleteUserModel($id);
     }
}