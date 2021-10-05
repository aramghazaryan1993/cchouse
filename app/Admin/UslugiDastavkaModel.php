<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class UslugiDastavkaModel extends Model
{
    public function IndexModel()
    {
    	return DB::table('uslugidastavka')->get();
    }

    public function InsertDastavkaModel($data,$id)
    {
    	$edit = DB::table('uslugidastavka')->where('id',$id)->update($data);

    	if($edit)
    	{
    	    return redirect()->to('admin/uslugi_dastavka')->with('status', 'Пункт успешно отредактирован.');
    	}else{
            return redirect()->to('admin/uslugi_dastavka');
        }
    }
}
