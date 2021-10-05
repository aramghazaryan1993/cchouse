<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\CompanyModel;
use DB;



class CompanyController extends Controller
{
	protected  $model;

    public function __construct()
    {
    	 $this->model = new CompanyModel();
    }


    public  function index()
    {
    	$companyData = $this->model->indexCompanyModel();
    	return view('adminka.company',['showCompany' => $companyData]);
    }

    public function EditCompany(Request $request, $id)
    {
    	$this->validate($request,[
    		'company1' =>'required',
    		'company2' =>'required',
    		'company3' =>'required'
    	]);

    	$data = array();
    	$data['company1'] = $request->company1;
    	$data['company2'] = $request->company2;
    	$data['company3'] = $request->company3;
    	return  $this->model->EditCompanyModel($data,$id);
    
    }
}
