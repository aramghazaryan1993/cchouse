<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GlobalModel;
use App\ContractModel;
use DB;

class ContractController extends Controller
{
    protected  $model;
    protected  $globalModel;

    public function __construct()
    {
    	 $this->model = new ContractModel();
    	 $this->globalModel = new GlobalModel();
    }
    
    public function index()
    {
        $dataGlobalHome    = $this->globalModel->GlobalHomeModel();
        $dataGlobalContact = $this->globalModel->GlobalContactModel();
        $DataContract = $this->model->indexContractModel();
        return view('contract',['ShowGlobalHome' => $dataGlobalHome, 'ShowGlobalContact' => $dataGlobalContact, 'ShowContract' =>  $DataContract]);
    }
}
