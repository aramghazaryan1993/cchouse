<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class HomeModel extends Model
{
    public function indexModel()
    {
    	return DB::table('home')->get();
    }
    
    public function UslugiRemontModel()
    {
        return DB::table('remont')->get();
    }
    
    public function UslugiDizaynerModel()
    {
        return DB::table('dizayner')->get();
    }
    
    public function UslugiDastavkaModel()
    {
        return DB::table('uslugidastavka')->get();
    }
    
    public function OtzivModel()
    {
        return DB::table('otzivlist')->orderBy('id', 'desc')->limit(5)->get();
    }

}
