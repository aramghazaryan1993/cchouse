<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class UslugiRemontModel extends Model
{
    public function IndexModel()
    {
    	return DB::table('remont')->get();
    }
    
    public function ShowImgModel()
    {
    	return DB::table('remontimg')->get();
    }
}
