<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class ContactModel extends Model
{
    public function IndexModel()
    {
    	return DB::table('contact')->get();
    }

    public function EdithContactModel($data,$id)
    {
    	$edit = DB::table('contact')->where('id',$id)->update($data);
    	
    	if($edit)
    	{
    		return redirect()->to('admin/contact')->with('status', 'Пункт успешно отредактирован.');
    	}else{
    		return redirect()->to('admin/contact');
    	}
    }
}
