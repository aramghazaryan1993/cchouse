<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PriceListModel extends Model
{
   public function indexPriceListModel()
   {
   	 return DB::table('pricelist')->get();
   }

   public function InsertPriceListModel($data)
   {
   	 $InsertPriceList = DB::table('pricelist')->insert($data);
        if($InsertPriceList)
         {
            return redirect()->to('admin/price_list')->with('status', 'Элемент был успешно введен.');
         }else{
            return redirect()->to('admin/price_list');
         }
   	  
   }

   public function EditPriceListModel($id,$data)
   {
   	 $EditPriceList = DB::table('pricelist')->where('id',$id)->update($data);
        if($EditPriceList)
         {
            return redirect()->to('admin/price_list')->with('status', 'Пункт успешно отредактирован.');
         }else{
           return redirect()->to('admin/price_list');
         }
   }

   public function DeletePriceListModel($id)
   {
   	$deletePriceList = DB::table('pricelist')->where('id', '=', $id)->delete();
       if($deletePriceList)
         {
            return redirect()->to('admin/price_list')->with('status', 'Ваш проект был успешно удален.');
         }else{
            return redirect()->to('admin/price_list');
         }
   }
}
