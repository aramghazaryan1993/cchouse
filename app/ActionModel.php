<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ActionModel extends Model
{
    public function IndexActionModel()
    {
    	return DB::table('action')->get();
    }
}
