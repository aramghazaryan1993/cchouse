<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class ContractModel extends Model
{
    public function IndexModel()
    {
    	return DB::table('contract')->get();
    }

    public function EditContractModel($data,$id)
    {
    	$edit = DB::table('contract')->where('id',$id)->update($data);
    	if($edit)
    	{
    		return redirect()->to('admin/contract')->with('status', 'Пункт успешно отредактирован.');
    	}
    }
}
