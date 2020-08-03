<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public static function getProductStatus($id){
        $getProductStatus = Product::select('status')->where('id',$id)->first();
        return $getProductStatus->status;
    }


}
