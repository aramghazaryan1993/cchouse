<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\UslugiDizaynerModel;
use DB;

class UslugiDizaynerController extends Controller
{
    protected  $model;

    public function __construct()
    {
         $this->model = new UslugiDizaynerModel();
    }

    public function index()
    {
        $data = $this->model->IndexModel();
        $img = $this->model->ShowImgModel();
    	return view('adminka.uslugi_dizaynera',['ShowDizayner' => $data,'ShowImg' => $img]);
    }

    public function EditDizayner1(Request $request,$id)
    {
        $form_data = array(
            'dizayner1' => $request->dizayner1
         );
        return $this->model->EditDizaynerModel($form_data,$id);
    }

    public function EditDizayner2(Request $request,$id)
    {
        $form_data = array(
            'dizayner2' => $request->dizayner2,
            'dizayner3' => $request->dizayner3
         );
        return $this->model->EditDizaynerModel($form_data,$id);
    }

    public function AddImage(Request $request)
    {
        $request->validate([
            'img'    => 'required|image|max:2048',
            'title1' => 'required',
            'title2' => 'required' 
        ]);

          
        $image = $request->file('img');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uplodImage/uslugi_dizayner'), $new_name);
  
        $form_data = array(
            'img'    => $new_name,
            'title1' => $request->title1,
            'title2' => $request->title2
        );
        return $this->model->AddImageModel($form_data);    
    }

    public function ViewImage($id)
    {
        $data = $this->model->ViewImageModel($id);
        $showText = $this->model->ShowTextModel($id);
        return  view('adminka.edit_uslugi_dizayner',['ViewImage' => $data,'ShowText' => $showText]);
    }

    public function EditImage(Request $request,$id)
    {
  
        $image = $request->file('img');
        if($image)
        {
          $new_name = rand() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path('uplodImage/uslugi_dizayner'), $new_name);

           $form_data = array(
            'img'    => $new_name,
            'title1' => $request->title1,
            'title2' => $request->title2
          );
        }else{

           $form_data = array(
            'title1' => $request->title1,
            'title2' => $request->title2
        );
       }       
         return $this->model->EditImageModel($form_data,$id);  
    }

 

    public function AddText(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'id'   => 'required'
        ]);

        $data = array(
            'text'  => $request->text,
            'imgid' => $request->id
        );

        return $this->model->AddTextModel($data);
    }

    public function EditText(Request $request,$id,$url)
    {
         $data = array(
            'text'  => $request->text
        );

      return $this->model->EditTextModel($data,$id,$url);
    }

    public function DeleteText($id,$url)
    {
        return $this->model->DeleteTextModel($id,$url);
    }

    public function DeleteDizayner($id)
    {
        return $this->model->DeleteDizaynerModel($id);
    }


}
