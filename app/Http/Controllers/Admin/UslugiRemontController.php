<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\UslugiRemontModel;
use DB;

class UslugiRemontController extends Controller
{
    protected  $model;

    public function __construct()
    {
         $this->model = new UslugiRemontModel();
    }

    public function index()
    {
        $data = $this->model->IndexModel();
    	return view('adminka.uslugi_remont',['ShowRemont' => $data]);
    }

    public function EditText1(Request $request,$id)
    {
           $form_data = array(
            'remont1' => $request->remont1,
         );

        return $this->model->EditTextModel($form_data,$id);
    }

    public function EditText2(Request $request,$id)
    {
           $form_data = array(
            'remont2' => $request->remont2,
            'remont3' => $request->remont3
         );

        return $this->model->EditTextModel($form_data,$id);
    }

    public function EditText3(Request $request,$id)
    {
           $form_data = array(
            'remont4' => $request->remont4,
            'remont5' => $request->remont5
         );

        return $this->model->EditTextModel($form_data,$id);
    } 

    public function EditText4(Request $request,$id)
    {
           $form_data = array(
            'remont6' => $request->remont6,
            'remont7' => $request->remont7
         );

        return $this->model->EditTextModel($form_data,$id);
    }  

    public function EditText5(Request $request,$id)
    {
           $form_data = array(
            'remont8' => $request->remont8,
            'remont9' => $request->remont9
         );

        return $this->model->EditTextModel($form_data,$id);
    } 

    public function EditText6(Request $request,$id)
    {
           $form_data = array(
            'remont10' => $request->remont10,
            'remont11' => $request->remont11
         );

        return $this->model->EditTextModel($form_data,$id);
    }

    public function ShowImg()
    {
       $data = $this->model->ShowImgModel();
       return view('adminka.add_img_uslugi_remont',['ShowImage' => $data]);
    } 

    public function AddImg(Request $request)
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
                $file->move('uplodImage/uslugi_remont',$name);
                $images[]=$name;
                  $form_data = array(
                    'img' => $images
                );
            }
        }
        return $this->model->AddImageModel($form_data);    
    }
     

    public function DeleteImg($id)
    {
        return $this->model->DeleteImgModel($id);
    }
}
