<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\VaprosModel;
use DB;

class VaprosController extends Controller
{
    protected $model;

    public function __construct()
    {
    	return $this->model = new VaprosModel();
    }

    public function index()
    {
    	$DataVapros = $this->model->IndexModel();
    	return view('adminka.vapros',['ShowVapros' => $DataVapros]);
    }

    public function EditVapros(Request $request, $id)
    {
    	
    	$this->validate($request,[
    		'vapros1' => 'required',
    		'vapros2' => 'required'
    	]);

    	$data = array();
    	$data['vapros1'] = $request->vapros1;
    	$data['vapros2'] = $request->vapros2;
    	return $this->model->EditVaprosModel($data,$id);
    }
}
