<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class GlobalModel extends Model
{
    public function GlobalHomeModel()
    {
        return DB::table('home')->get();
    }
    
    public function GlobalContactModel()
    {
        return DB::table('contact')->get();
    }
    
    public function GlobalVAprosModel()
    {
        return DB::table('vapros')->get();
    }
}