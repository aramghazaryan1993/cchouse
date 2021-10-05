<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\OtzivModel;
use DB;

class OtzivController extends Controller
{
	protected $model;

	public function __construct()
    {
    	 $this->model = new OtzivModel();
    }

    public function index()
    {
    	$DataOtziv 	   = $this->model->IndexModel();
    	$DataOtzivList = $this->model->ShowOtzivListModel();
    	return view('adminka.otziv',['showOtzive' => $DataOtziv,'showOtziveList' => $DataOtzivList]);
    }

    public function EditOtziv(Request $request, $id)
    {
    	$this->validate($request,[
    	'otziv1' => 'required',
    	'otziv2' => 'required',
    	]
    	);

    	$data = array();
    	$data['otziv1'] = $request->otziv1;
    	$data['otziv2'] = $request->otziv2;
    	return $this->model->EditOtzivModel($data,$id);
    }

    public function DeleteOtzivList($id)
    {
    	return $this->model->DeleteOtzivModel($id);
    }
}
