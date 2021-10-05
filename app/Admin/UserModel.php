<?php

namespace App\Admin;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public function IndexUserModel()
    {
    	return DB::table('users')->get();
    }


    public function EditUserModel($form_data,$id)
    {
    	$edit = DB::table('users')->where('id',$id)->update($form_data);

    	if($edit)
    	{
    	    return redirect()->to('admin/show_user')->with('status', 'Пункт успешно отредактирован.');
    	}else{
            return redirect()->to('admin/show_user');
        }
    }

    public function DeleteUserModel($id)
    {
          
    	$delete = DB::table('users')->where('id', '=', $id)->delete();

    	if($delete)
    	{
    	    return redirect()->to('admin/show_user')->with('status', 'Предмет успешно удален.');
    	}else{
            return redirect()->to('admin/show_user');
        }
    }
}