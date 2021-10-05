<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\ContractModel;
use DB;

class ContractController extends Controller
{
	protected $model;

	public function __construct()
	{
		return $this->model = new ContractModel();
	}

    public function index()
    {
    	$DataContract = $this->model->IndexModel();
    	return view('adminka.contract',['ShowContract' => $DataContract]);
    }

    public function EditContract(Request $request, $id)
    {
    	$this->validate($request,[
    		'contract1' => 'required',
    		'contract2' => 'required',
    		'contract3' => 'required'
    	]);

    	$data = array();
    	$data['contract1'] = $request->contract1;
    	$data['contract2'] = $request->contract2;
    	$data['contract3'] = $request->contract3;

    	return $this->model->EditContractModel($data,$id);
    }
}
