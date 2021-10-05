<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\PortfolyoModel;
use DB;
use Validator,Redirect,Response,File;


class PortfolyoController extends Controller
{
    protected  $model;

    public function __construct()
    {
         $this->model = new PortfolyoModel();
    }

    public function index()
    {
        $PortfolyoData = $this->model->IndexModel();
    	return view('adminka.portfolyo',['ShowPortfolyo' => $PortfolyoData]);
    }

    public function insert(Request $request)
    {

          $request->validate([
            'portfolyo'  =>  'required',
            'image'    =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uplodImage/portfolyo'), $new_name);
        $form_data = array(
            'portfolyo' => $request->portfolyo,
            'home'       => $request->home,
            'img'       => $new_name
        );

        return $this->model->InsertPortfolyoModel($form_data);    
    }

    public function PortfolyoView($id)
    {
        $ViewImg = $this->model->ViewImgModel($id);
        $ViewTitle = $this->model->ViewTitleModel($id);
    	return view('adminka.edit_portfolyo',['ShowImg' => $ViewImg,'ShowTitle' => $ViewTitle]);
    }

    public function EditTitle(Request $request)
    {
         $form_data = array(
            'portfolyo' => $request->portfolyo,
            'id'        => $request->idd
        );

       return $this->model->EditTitleModel($form_data);
    }


    public function addImage(Request $request)
    {
         request()->validate([
 
            'img' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1048'
 
        ]);

        $input=$request->all();
        $images=array();
        if($files=$request->file('img')){
            foreach($files as $file){
                $name=rand() . '.' .$file->getClientOriginalExtension();
                $file->move('uplodImage/portfolyo',$name);
                $images[]=$name;
                  $form_data = array(
                    'img' => $images
                );
            }
        }
           $portfolyoid = $request->idd;
      
           return $this->model->AddImageModel($form_data,$portfolyoid);
   
    }

    public function homeImage(Request $request)
    {
         $form_data = array(
            'homeId' => $request->homeId,
            'urlId' => $request->urlId,
        );

        return $this->model->HomeImageModel($form_data);
       
    }

     public function ImageDelete($id,$urlID)
    {
        return $this->model->ImageDeleteModel($id,$urlID);
    }

    public function DeletePortfolio($id)
    {
         return $this->model->DeletePortfolioModel($id);
    }
}
