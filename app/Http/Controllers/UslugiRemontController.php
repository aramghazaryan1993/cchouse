<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GlobalModel;
use App\UslugiRemontModel;
use DB;

class UslugiRemontController extends Controller
{
    protected  $model;
    protected  $globalModel;

    public function __construct()
    {
    	 $this->model = new UslugiRemontModel();
    	 $this->globalModel = new GlobalModel();
    }
    
    public function index()
    {
        
        $dataUslugiRemont = $this->model->IndexModel();
        $dataUslugiRemontImage = $this->model->ShowImgModel();
        $dataGlobalHome    = $this->globalModel->GlobalHomeModel();
        $dataGlobalContact = $this->globalModel->GlobalContactModel();
        $dataGlobalVapros = $this->globalModel->GlobalVaprosModel();
        return view('uslugiRemont',['ShowGlobalHome' => $dataGlobalHome, 'ShowGlobalContact' => $dataGlobalContact, 'ShowRemont' => $dataUslugiRemont, 'ShowImageRemont' => $dataUslugiRemontImage, 'ShowGlobalVApros' => $dataGlobalVapros]);
    }
}
