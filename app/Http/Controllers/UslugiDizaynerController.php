<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GlobalModel;
use App\UslugiDizaynerModel;
use DB;

class UslugiDizaynerController extends Controller
{
    protected  $model;
    protected  $globalModel;

    public function __construct()
    {
    	 $this->model = new UslugiDizaynerModel();
    	 $this->globalModel = new GlobalModel();
    }
    
    public function index()
    {
        $DataUslugiDizayner =  $this->model->IndexModel();
        $DataUslugiDizaynerImg =  $this->model->ShowImgModel();
        $DataUslugiDizaynerText =  $this->model->ShowTextModel();

        $dataGlobalHome    = $this->globalModel->GlobalHomeModel();
        $dataGlobalContact = $this->globalModel->GlobalContactModel();
        $dataGlobalVapros = $this->globalModel->GlobalVaprosModel();
        return view('uslugiDizayner',['ShowGlobalHome' => $dataGlobalHome, 'ShowGlobalContact' => $dataGlobalContact,'ShowDizayner' => $DataUslugiDizayner, 'ShowDizaynerImg' => $DataUslugiDizaynerImg,'DataUslugiDizaynerText' => $DataUslugiDizaynerText, 'ShowGlobalVApros' => $dataGlobalVapros]);
    }
}
