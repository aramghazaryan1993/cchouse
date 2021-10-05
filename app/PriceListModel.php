<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PriceListModel extends Model
{
    public function indexPriceListModel()
    {
        return DB::table('pricelist')->get();
    }
}
