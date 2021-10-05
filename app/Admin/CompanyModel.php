<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CompanyModel extends Model
{
    public function indexCompanyModel()
    {
    	return DB::table('company')->get();
    }

    public function EditCompanyModel($data,$id)
    {
      
      $EditCompany = DB::table('company')->where('id',$id)->update($data);
    
    	if($EditCompany)
    	{
    	    return redirect()->to('admin/company')->with('status', 'Пункт успешно отредактирован.');
    	}else{
            return redirect()->to('admin/company');
        }
    }
}
