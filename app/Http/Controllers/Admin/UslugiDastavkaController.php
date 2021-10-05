<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\UslugiDastavkaModel;
use DB;

class UslugiDastavkaController extends Controller
{
	protected  $model;

    public function __construct()
    {
    	 $this->model = new UslugiDastavkaModel();
    }

    public function index()
    {
    	$DataDastavka = $this->model->IndexModel();
    	return view('adminka.uslugi_dastvaka',['ShowDastavka' => $DataDastavka]);
    }

    public function InsertDastavka(Request $request,$id)
    {
    	if($request->text)
    	{
    		$data = array();
    		$data['text']	 = $request->text;
    	}else{
    		$data = array();
    	$data['remont1'] = $request->remont1;
    	$data['remont2'] = $request->remont2;
    	$data['remont3'] = $request->remont3;
    	$data['remont4'] = $request->remont4;
    	$data['remont5'] = $request->remont5;
    	$data['remont6'] = $request->remont6;
    	}
    	
    	return $this->model->InsertDastavkaModel($data,$id);
    }
}
