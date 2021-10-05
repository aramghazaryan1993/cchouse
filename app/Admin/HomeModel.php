<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HomeModel extends Model
{
    public function indexModel()
    {
    	return $show = DB::table('home')->get();
    }


    public function EditHomeModel($id,$data)
    {
    	$EditHome = DB::table('home')->where('id',$id)->update($data);
    	if($EditHome)
    	{
    		return redirect()->to('admin')->with('status', 'Пункт успешно отредактирован.');
    	}else{
    		return redirect()->to('admin');
    	}        
    }

}
