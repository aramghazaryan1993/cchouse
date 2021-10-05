<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GlobalModel;
use App\UslugiDastavkaModel;
use DB;

class UslugiDastavkaController extends Controller
{
    protected  $model;
    protected  $globalModel;

    public function __construct()
    {
    	 $this->model = new UslugiDastavkaModel();
    	 $this->globalModel = new GlobalModel();
    }
    
    public function index()
    {
        $DataUslugiRemont = $this->model->IndexModel();
        $dataGlobalHome    = $this->globalModel->GlobalHomeModel();
        $dataGlobalContact = $this->globalModel->GlobalContactModel();
        $dataGlobalVapros = $this->globalModel->GlobalVaprosModel();
        return view('uslugiDastavka',['ShowGlobalHome' => $dataGlobalHome, 'ShowGlobalContact' => $dataGlobalContact, 'ShowUslugiRemont' => $DataUslugiRemont, 'ShowGlobalVApros' => $dataGlobalVapros, 'ShowGlobalVApros' => $dataGlobalVapros]);
    }
}
