<?php

namespace App\Admin;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\File;

class UslugiRemontModel extends Model
{
    public function IndexModel()
    {
    	return DB::table('remont')->get();
    }

    public function EditTextModel($form_data,$id)
    {
    	$edit = DB::table('remont')->where('id',$id)->update($form_data);
        if($edit)
         {
            return redirect()->to('admin/uslugi_remont')->with('status', 'Пункт успешно отредактирован.');
         }else{
           return redirect()->to('admin/uslugi_remont');
         }
    }

    public function ShowImgModel()
    {
    	return DB::table('remontimg')->get();
    }

    public function DeleteImgModel($id)
    {
    	$user = DB::table('remontimg')->where('id', $id)->first();
            $image_path = "uplodImage/uslugi_remont/".$user->img;  
				if(File::exists($image_path)) {
				    File::delete($image_path);
				}
    	
      $delete = DB::table('remontimg')->where('id', '=', $id)->delete();
       if($delete)
         {
            return redirect()->to('admin/add_img_uslugi_remont')->with('status', 'Элемент успешно удален.');
         }else{
            return redirect()->to('admin/add_img_uslugi_remont');
         }
    }

    public function AddImageModel($form_data)
    {   foreach($form_data['img'] as $value)
        {
        	$image = DB::table('remontimg')->insert(['img' => $value]);
        }
        
        if($image)
        {
           return redirect()->to('admin/add_img_uslugi_remont')->with('status', 'Элемент был успешно введен.');
        }else{
           return redirect()->to('admin/add_img_uslugi_remont');
        }
    }


}
