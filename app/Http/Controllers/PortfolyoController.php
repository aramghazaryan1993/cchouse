<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GlobalModel;
use App\PortfolyoModel;
use DB;

class PortfolyoController extends Controller
{
    protected  $model;
    protected  $globalModel;

    public function __construct()
    {
    	 $this->model = new PortfolyoModel();
    	 $this->globalModel = new GlobalModel();
    }
    
    public function index()
    {
        $dataGlobalHome    = $this->globalModel->GlobalHomeModel();
        $dataGlobalContact = $this->globalModel->GlobalContactModel();
        $DataPortfolyo = $this->model->indexPortfolyoModel();
        $dataPortfolyoImg = $this->model->PortfolyoImgModel();
        return view('portfolyo',['ShowGlobalHome' => $dataGlobalHome, 'ShowGlobalContact' => $dataGlobalContact, 'ShowPortfolyo' => $DataPortfolyo, 'ShowPortfolyoImg' => $dataPortfolyoImg]);
    }
    
    public function photogallery($id)
    {
        $dataGlobalHome    = $this->globalModel->GlobalHomeModel();
        $dataGlobalContact = $this->globalModel->GlobalContactModel();
        
        $DataPhotogallery = $this->model->PhotogalleryImgModel($id);
        $NextPrevPortfolyoId = $this->model->NextPortfolyoId($id);
        $PrevPortfolyoId = $this->model->PrevPortfolyoId($id);
        
        $DataPortfolyo = $this->model->indexPortfolyoModel();
        return view('portfolyoPhotogallery',['ShowGlobalHome' => $dataGlobalHome, 'ShowGlobalContact' => $dataGlobalContact, 'ShowPhotogallery' => $DataPhotogallery, 'ShowPortfolyo' => $DataPortfolyo, 'NextPrevPortfolyoId' => $NextPrevPortfolyoId,'PrevPortfolyoId' => $PrevPortfolyoId ]);
    }

}
