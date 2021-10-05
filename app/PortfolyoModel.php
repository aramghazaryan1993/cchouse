<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PortfolyoModel extends Model
{
    public function indexPortfolyoModel()
    {
        return DB::table('portfolyo')->paginate(8);
    }
    
    public function PortfolyoImgModel()
    {
         return DB::table('portfolyoimg')->get();
    }
    
    public function PhotogalleryImgModel($id)
    {
        return DB::table('portfolyoimg')->where('portfolyoid', '=', $id)->get();
    }
    
    public function NextPortfolyoId($id)
    {
        
       $result = DB::select("select id from portfolyo where id = (select min(id) from portfolyo where id > $id)");
        
        
        if($result!=null){
            
            return get_object_vars($result[0])['id'];   
        }
        else
        {
            $result = DB::select("select min(id) as id from portfolyo");
           return  get_object_vars($result[0])['id']; 
        }
        
    }
    
    public function PrevPortfolyoId($id)
    {
        
        $result = DB::select("select id from portfolyo where id = (select max(id) from portfolyo where id < $id)");
        
        
        if($result!=null){
            
            return get_object_vars($result[0])['id'];   
        }
        else
        {
            $result = DB::select("select max(id) as id from portfolyo");
           return  get_object_vars($result[0])['id']; 
        }
        
    }
 
}
