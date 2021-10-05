<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GlobalModel;
use App\CompanyModel;
use DB;

class CompanyController extends Controller
{
    protected  $model;
    protected  $globalModel;

    public function __construct()
    {
    	 $this->model = new CompanyModel();
    	 $this->globalModel = new GlobalModel();
    }
    
    public function index()
    {
        $dataGlobalHome    = $this->globalModel->GlobalHomeModel();
        $dataGlobalContact = $this->globalModel->GlobalContactModel();
        $dataGlobalVapros = $this->globalModel->GlobalVaprosModel();
        $DataCompany = $this->model->indexCompanyModel();
        return view('company',['ShowGlobalHome' => $dataGlobalHome, 'ShowGlobalContact' => $dataGlobalContact, 'ShowCompany' => $DataCompany, 'ShowGlobalVApros' => $dataGlobalVapros]);
    }
}
