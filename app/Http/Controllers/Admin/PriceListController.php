<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\PriceListModel;
use DB;

class PriceListController extends Controller
{
    protected  $model;

    public function __construct()
    {
    	 $this->model = new PriceListModel();
    }

    public function index()
    {
    	$priceListData = $this->model->indexPriceListModel();
    	return view('adminka.price_list',['showpriceList' => $priceListData]);
    }

    public function insert(Request $request)
    {
    // 	$this->validate($request,[
    // 		'pricelist1' =>'required',
    // 		'pricelist2' =>'required',
    // 		'pricelist3' =>'required',
    // 	]);

    	$data = array();
    	$data['pricelist1'] = $request->pricelist1;
    	$data['pricelist2'] = $request->pricelist2;
    	$data['pricelist3'] = $request->pricelist3;
    	
    	$data['color1'] = $request->color1;
    	$data['color2'] = $request->color2;
    	$data['color3'] = $request->color3;
    	return $this->model->InsertPriceListModel($data);
    }

    public function edit(Request $request, $id)
    {
    // 	$this->validate($request,[
    // 		'pricelist1' =>'required',
    // 		'pricelist2' =>'required',
    // 		'pricelist3' =>'required',
    // 	]);

    	$data = array();
    	$data['pricelist1'] = $request->pricelist1;
    	$data['pricelist2'] = $request->pricelist2;
    	$data['pricelist3'] = $request->pricelist3;
    	
    	$data['color1'] = $request->color1;
    	$data['color2'] = $request->color2;
    	$data['color3'] = $request->color3;
    	
    	return $this->model->EditPriceListModel($id,$data);
    }

    public function delete($id)
    {
    	return $this->model->DeletePriceListModel($id);
    }
}
