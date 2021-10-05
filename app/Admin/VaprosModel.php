<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class VaprosModel extends Model
{
    public function IndexModel()
    {
    	return DB::table('vapros')->get();
    }

    public function EditVaprosModel($data,$id)
    {
    	
    	$EditVapros = DB::table('vapros')->where('id',$id)->update($data);
    	
    	if($EditVapros)
    	{
    		return redirect()->to('admin/vapros')->with('status', 'Пункт успешно отредактирован.');
    	}
    }
}
