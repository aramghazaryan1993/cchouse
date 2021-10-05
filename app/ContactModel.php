<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;

class ContactModel extends Model
{
    public function indexContactModel()
    {
        return DB::table('contact')->get();
    }
}
