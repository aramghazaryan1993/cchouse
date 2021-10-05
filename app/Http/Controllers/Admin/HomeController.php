<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\HomeModel;
use DB;


class HomeController extends Controller
{
	protected  $model;

    public function __construct()
    {
    	 $this->model = new HomeModel();
    }

    public  function index()
    {
    	$homeData = $this->model->indexModel();
    	return view('adminka.home',['showHome'=>$homeData]);
    }

    public function EditHome1(Request $request, $id)
    {
    	$this->validate($request,[
    		'home1' =>'required',
    		'home2' =>'required',
    	]);

    	$data = array();
    	$data['home1'] = $request->home1;
    	$data['home2'] = $request->home2;
    	return $this->model->EditHomeModel($id,$data);
  
    }

    public function EditHome2(Request $request, $id)
    {
    	$this->validate($request,[
    		'home3' =>'required'
    	]);

    	$data = array();
    	$data['home3'] = $request->home3;
    	return $this->model->EditHomeModel($id,$data);
   
    }

    public function EditHome3(Request $request, $id)
    {
    	$this->validate($request,[
    		'home4' =>'required'
    	]);

    	$data = array();
    	$data['home4'] = $request->home4;
    	return $this->model->EditHomeModel($id,$data);
    	
    }


    public function EditHome4(Request $request, $id)
    {
    	$this->validate($request,[
    		'home5' =>'required',
    		'home6' =>'required'
    	]);

    	$data = array();
    	$data['home5'] = $request->home5;
    	$data['home6'] = $request->home6;
    	return $this->model->EditHomeModel($id,$data);
    	
    }


    public function EditHome5(Request $request, $id)
    {
    	$this->validate($request,[
    		'home7' =>'required',
    		'home8' =>'required'
    	]);

    	$data = array();
    	$data['home7'] = $request->home7;
    	$data['home8'] = $request->home8;
    	return $this->model->EditHomeModel($id,$data);
    	
    }


    public function EditHome6(Request $request, $id)
    {
    	$this->validate($request,[
    		'home9' =>'required',
    		'home10' =>'required'
    	]);

    	$data = array();
    	$data['home9'] = $request->home9;
    	$data['home10'] = $request->home10;
    	return $this->model->EditHomeModel($id,$data);
    }

    public function EditHome7(Request $request, $id)
    {
    	$this->validate($request,[
    		'home11' =>'required',
    	]);

    	$data = array();
    	$data['home11'] = $request->home11;
    	return $this->model->EditHomeModel($id,$data);
    	
    }

    public function SocialNetworks(Request $request, $id)
    {
    	$this->validate($request,[
    		'facebook' =>'required',
    		'instagram' =>'required',
    		'youtube' =>'required',
    	]);

    	$data = array();
    	$data['facebook'] = $request->facebook;
    	$data['instagram'] = $request->instagram;
    	$data['youtube'] = $request->youtube;
    	return $this->model->EditHomeModel($id,$data);
    }
}
