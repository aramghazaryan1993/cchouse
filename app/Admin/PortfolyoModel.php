<?php

namespace App\Admin;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

class PortfolyoModel extends Model
{
   
   public function IndexModel()
   {
   	 $users = DB::table('portfolyo')
            ->join('portfolyoimg', 'portfolyo.id', '=', 'portfolyoimg.portfolyoid')
            ->select('portfolyo.*', 'portfolyoimg.img', 'portfolyoimg.portfolyoid')
            ->where('portfolyoimg.home', '=', 1)
            ->get();
 
        return $users;
   }

   public function InsertPortfolyoModel($form_data)
   {
   	 $insert = DB::table('portfolyo')->insert(['portfolyo'=>$form_data['portfolyo']]);
    	if($insert)
    	{
    	  $insertID = DB::getPdo()->lastInsertId();;
		  $insertImg = DB::table('portfolyoimg')->insert(['img'=>$form_data['img'],'portfolyoid' => $insertID,'home'=>$form_data['home']]);
		 	if($insertImg)
		 	{
		 		return redirect()->to('admin/portfolyo')->with('status', 'Элемент был успешно введен.');
		 	}
    	}else{
            return redirect()->to('admin/portfolyo');
        }
   }


   public function ViewImgModel($id)
   {
   	 $img = DB::table('portfolyoimg')->where('portfolyoid', '=', $id)->get();
   	 return $img;
   }


     public function ViewTitleModel($id)
   {
   	 $title = DB::table('portfolyo')->where('id', '=', $id)->get();
   	 return $title;
   }

   public function EditTitleModel($form_data)
   {
   	 $edit = DB::table('portfolyo')->where('id',$form_data['id'])->update(['portfolyo' => $form_data['portfolyo']]);
    	if($edit)
    	{
    		return redirect()->to('admin/portfolyo_view/'.$form_data['id'])->with('status', 'Пункт успешно отредактирован.');
    	}else{
    		return redirect()->to('admin/portfolyo_view/'.$form_data['id'])->with('status', 'Ваш запрос не выполнен.');
    	}
   }

   public function AddImageModel($form_data,$portfolyoid)
   {

      foreach($form_data['img'] as $value)
      {
     	  $insert = DB::table('portfolyoimg')->insert(['img'=>$value,'portfolyoid' => $portfolyoid,'home'=>0]);
      }
      
      if($insert)
      {
         return redirect()->to('admin/portfolyo_view/'.$portfolyoid)->with('status', 'Элемент был успешно введен.');
      }else{
         return redirect()->to('admin/portfolyo_view/'.$portfolyoid)->with('status', 'Ваш запрос не выполнен.');
      }
  
    }

    public function HomeImageModel($form_data)
    {
    	 $home = DB::table('portfolyoimg')->where('portfolyoid',$form_data['urlId'])->update(['home'=>0]);
    	 DB::table('portfolyoimg')->where('id',$form_data['homeId'])->update(['home'=>1]);
    	 if($home)
    	 {
    	 	return redirect()->to('admin/portfolyo_view/'.$form_data['urlId'])->with('status', 'Пункт успешно отредактирован.');
    	 }
    }

    public function ImageDeleteModel($id,$urlID)
    {

				 $count = DB::table('portfolyoimg')
                     ->select(DB::raw('count(*) as user_count, portfolyoid'))
                     ->where('portfolyoid', '=', $urlID)
                     ->groupBy('portfolyoid')
                     ->get();

                   foreach ($count as $key => $value) {
                   	 if($value->user_count != 1)
                   	 {
                      $img = DB::table('portfolyoimg')->where('id', $id)->first();
                          $image_path = "uplodImage/portfolyo/".$img->img;  
                      if(File::exists($image_path)) {
                          File::delete($image_path);
                      }
                   	 	$delete = DB::table('portfolyoimg')->where('id', '=', $id)->delete();
					    	if($delete)
					    	{
								return redirect()->to('admin/portfolyo_view/'.$urlID)->with('status', 'Элемент успешно удален.');
					    	}else{
					    		return redirect()->to('admin/portfolyo_view/'.$urlID);
					    	}
                   	 }else{
                   	 	return redirect()->to('admin/portfolyo_view/'.$urlID)->with('status', 'Количество картинок должно быть больше одного.');
                   	 }
                   }

    	
    }

    public function DeletePortfolioModel($id)
    {
      $img = DB::table('portfolyoimg')->where('portfolyoid', $id)->get();
      foreach ($img as $key => $value) {
           $image_path = "uplodImage/portfolyo/".$value->img; 
                         if(File::exists($image_path)) {
                          File::delete($image_path);
                      }
      }
                          
    	DB::table('portfolyoimg')->where('portfolyoid', '=', $id)->delete();
    	DB::table('portfolyo')->where('id', '=', $id)->delete();
    	return redirect()->to('admin/portfolyo')->with('status', 'Ваш проект был успешно удален.');
    }



}
