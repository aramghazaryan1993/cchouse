<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\ActionModel;
use DB;


class ActionController extends Controller
{
	protected  $model;

    public function __construct()
    {
    	 $this->model = new ActionModel();
    }

    public function index()
    {
    	$ActionData = $this->model->IndexActionModel();
    	return view('adminka.action',['ShowAction' => $ActionData]);
    	//echo  "<img src='".asset('1.png')."' >";
    }

    public function InsertAction(Request $request)
    {
    	  $request->validate([
            'action1'  =>  'required',
            'action2'  =>  'required',
            'text'     =>  'required',
            'image'    =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uplodImage/action'), $new_name);
        $form_data = array(
            'action1'    =>   $request->action1,
            'action2'    =>   $request->action2,
            'text'       =>   $request->text,
            'img'      =>   $new_name
        );

        return $this->model->InsertActionModel($form_data);
     }

      public function EditAction(Request $request,$id)
      {
  
        $image = $request->file('image');
        if($image)
        {
           $new_name = rand() . '.' . $image->getClientOriginalExtension();
           $image->move(public_path('uplodImage/action'), $new_name);

           $form_data = array(
            'action1'    =>   $request->action1,
            'action2'    =>   $request->action2,
            'text'       =>   $request->text,
            'img'        =>   $new_name
        );
        }else{
        	 $form_data = array(
            'action1'    =>   $request->action1,
            'action2'    =>   $request->action2,
            'text'       =>   $request->text
        );
        }

        return $this->model->EditActionModel($form_data,$id);
     }

     public function DeleteAction($id)
     {
     	return $this->model->DeleteActionModel($id);
     }
}
