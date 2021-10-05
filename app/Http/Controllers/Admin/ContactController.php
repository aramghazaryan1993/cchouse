<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\ContactModel;
use DB;

class ContactController extends Controller
{
    protected $model;

    public function __construct()
    {
    	return $this->model = new ContactModel();
    }

    public function index()
    {
    	$DataContact = $this->model->IndexModel();
    	return view('adminka.contact',['ShowContact' => $DataContact]);
    }

    public function EditContact(Request $request, $id)
    {
    	$this->validate($request,[
    		'phone'  => 'required',
    		'email'  => 'required',
    		'adress' => 'required',
    		'map'    => 'required'
    	]);

    	$data   = array();
    	$data['phone']  = $request->phone;
    	$data['email']  = $request->email;
    	$data['adress'] = $request->adress;
    	$data['map']	= $request->map;

        return $this->model->EdithContactModel($data,$id);
    }
}
