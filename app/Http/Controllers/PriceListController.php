<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GlobalModel;
use App\PriceListModel;
use DB;

class PriceListController extends Controller
{
    protected  $model;
    protected  $globalModel;

    public function __construct()
    {
    	 $this->model = new PriceListModel();
    	 $this->globalModel = new GlobalModel();
    }
    
    public function index()
    {
        $dataGlobalHome    = $this->globalModel->GlobalHomeModel();
        $dataGlobalContact = $this->globalModel->GlobalContactModel();
        $dataGlobalVapros = $this->globalModel->GlobalVaprosModel();
        $DataPriceList = $this->model->indexPriceListModel();
        return view('priceList',['ShowGlobalHome' => $dataGlobalHome, 'ShowGlobalContact' => $dataGlobalContact,'ShowPriceList' => $DataPriceList, 'ShowGlobalVApros' => $dataGlobalVapros]);
    }
}
