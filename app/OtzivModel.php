<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class OtzivModel extends Model
{
    public function indexOtzivModel()
    {
        return DB::table('otziv')->get();
    }
    
    public function OtzivListModel()
    {
         return DB::table('otzivlist')->orderBy('id', 'desc')->paginate(3);
    }
    
     public function InsertOtzivModel($name,$phone,$email,$text,$star,$img)
    {
        
      $insert =  DB::table('otzivlist')->insert(['name' => $name,'phone' => $phone, 'email' => $email, 'text' => $text, 'star' => $star, 'img' => $img]);
      if($insert)
    	{
    		return redirect()->to('Отзывы')->with('status', 'Пункт успешно отредактирован.');
    	}
    }
}
