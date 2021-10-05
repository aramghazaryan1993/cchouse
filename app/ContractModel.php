<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class ContractModel extends Model
{
    public function indexContractModel()
    {
        return DB::table('contract')->get();
    }
}
