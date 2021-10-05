<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class UslugiDizaynerModel extends Model
{
    public function IndexModel()
    {
      return DB::table('dizayner')->get();
    }
    
    public function ShowImgModel()
    {
    	return DB::table('dizaynerimg')
                    ->select('dizaynerimg.id', 'dizaynerimg.img', 'dizaynerimg.title1', 'dizaynerimg.title2')
                    ->get();
    }
    
    public function ShowTextModel()
    {                        
        return DB::table('dizaynerimginfo')->get();
    }
    
  
}
