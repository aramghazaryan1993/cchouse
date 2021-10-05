<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CompanyModel extends Model
{
    public function indexCompanyModel()
    {
    	return DB::table('company')->get();
    }
}
