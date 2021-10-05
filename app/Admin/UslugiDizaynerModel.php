<?php

namespace App\Admin;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class UslugiDizaynerModel extends Model
{
    public function IndexModel()
    {
      return DB::table('dizayner')->get();
    }

    public function EditDizaynerModel($form_data,$id)
    {
    	$edit = DB::table('dizayner')->where('id',$id)->update($form_data);

    	if($edit)
    	{
    	   return redirect()->to('admin/uslugi_dizaynera')->with('status', 'Пункт успешно отредактирован.');
    	}else{
            return redirect()->to('admin/uslugi_dizaynera');
        }
    }

    public function AddImageModel($form_data)
    {
    	$image = DB::table('dizaynerimg')->insert($form_data);
        if($image)
         {
            return redirect()->to('admin/uslugi_dizaynera')->with('status', 'Элемент был успешно введен.');
         }else{
            return redirect()->to('admin/uslugi_dizaynera');
         }
    }

    public function ShowImgModel()
    {
    	return DB::table('dizaynerimg')->get();
    }

    public function ViewImageModel($id)
    {
       return DB::table('dizaynerimg')->where('id',$id)->get();
    }

    public function EditImageModel($form_data,$id)
    {
    	$edit = DB::table('dizaynerimg')->where('id',$id)->update($form_data);

    	if($edit)
    	{
    	    return redirect()->to('admin/view_img_uslugi_dizayner/'.$id)->with('status', 'Пункт успешно отредактирован.');
    	}else{
            return redirect()->to('admin/view_img_uslugi_dizayner/'.$id);
        }
    }

    public function ShowTextModel($id)
    {
    	return DB::table('dizaynerimginfo')->where('imgid',$id)->get();
    }

    public function AddTextModel($data)
    {
    	$text = DB::table('dizaynerimginfo')->insert($data);
        if($text)
         {
            return redirect()->to('admin/view_img_uslugi_dizayner/'.$data['imgid'])->with('status', 'Элемент был успешно введен.');
         }else{
            return redirect()->to('admin/view_img_uslugi_dizayner/'.$data['imgid']);
         }
    }

    public function EditTextModel($data,$id,$url)
    {
    	$edit = DB::table('dizaynerimginfo')->where('id',$id)->update($data);

    	if($edit)
    	{
    	    return redirect()->to('admin/view_img_uslugi_dizayner/'.$url)->with('status', 'Пункт успешно отредактирован.');
    	}else{
            return redirect()->to('admin/view_img_uslugi_dizayner/'.$url);
        }
    }

    public function DeleteTextModel($id,$url)
    {
    	$delete = DB::table('dizaynerimginfo')->where('id', '=', $id)->delete();
       if($delete)
         {
            return redirect()->to('admin/view_img_uslugi_dizayner/'.$url)->with('status', 'Ваш проект был успешно удален.');
         }else{
            return redirect()->to('admin/view_img_uslugi_dizayner/'.$url);
         }
    }

    public function DeleteDizaynerModel($id)
    {
    	 $deletefile = DB::table('dizaynerimg')->where('id', $id)->first();
            $image_path = "uplodImage/uslugi_dizayner/".$deletefile->img;  
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }
    	DB::table('dizaynerimg')->where('id', '=', $id)->delete();
    	DB::table('dizaynerimginfo')->where('imgid', '=', $id)->delete();
    	return redirect()->to('admin/uslugi_dizaynera')->with('status', 'Ваш проект был успешно удален.');
    }
}
