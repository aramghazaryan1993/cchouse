<?php

namespace App\Admin;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

class ActionModel extends Model
{
    public function IndexActionModel()
    {
    	return DB::table('action')->get();
    }

    public function InsertActionModel($form_data)
    {
    	$insert = DB::table('action')->insert($form_data);
    	if($insert)
    	{
    	    return redirect()->to('admin/action')->with('status', 'Элемент был успешно введен.');
    	}else{
            return redirect()->to('admin/action');
        }
    }


    public function EditActionModel($form_data,$id)
    {
    	$edit = DB::table('action')->where('id',$id)->update($form_data);

    	if($edit)
    	{
    	    return redirect()->to('admin/action')->with('status', 'Пункт успешно отредактирован.');
    	}else{
            return redirect()->to('admin/action');
        }
    }

    public function DeleteActionModel($id)
    {
        $deletefile = DB::table('action')->where('id', $id)->first();
            $image_path = "uplodImage/action/".$deletefile->img;  
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }
    	$delete = DB::table('action')->where('id', '=', $id)->delete();

    	if($delete)
    	{
    	    return redirect()->to('admin/action')->with('status', 'Ваш проект был успешно удален.');
    	}else{
            return redirect()->to('admin/action');
        }
    }
}
