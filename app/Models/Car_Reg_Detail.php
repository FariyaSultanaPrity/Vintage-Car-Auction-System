<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_Reg_Detail extends Model
{
    public function product(){
        return $this->belongsTo(Product::class, 'id','Car_Reg_Details_Id');
    }
}
