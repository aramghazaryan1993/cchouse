<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class UslugiDastavkaModel extends Model
{
    public function IndexModel()
    {
    	return DB::table('uslugidastavka')->get();
    }
}
