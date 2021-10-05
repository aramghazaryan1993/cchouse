<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class OtzivModel extends Model
{
    public function IndexModel()
    {
       return DB::table('otziv')->get();
    }

    public function EditOtzivModel($data,$id)
    {
    	$EditOtziv = DB::table('otziv')->where('id',$id)->update($data);
        if($EditOtziv)
        {
            return redirect()->to('admin/otziv')->with('status', 'Пункт успешно отредактирован.');
        }else{
            return redirect()->to('admin/otziv');
        }

    }

    public function ShowOtzivListModel()
    {
    	return DB::table('otzivlist')->get();
    }

    public function DeleteOtzivModel($id)
    {
    	$delete = DB::table('otzivlist')->where('id', '=', $id)->delete();
    	if($delete)
    	{
    		return redirect()->to('admin/otziv')->with('status', 'Пункт успешно отредактирован.');
    	}
    }
    

}
