<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class CarRegDetail extends Model
{
  
    public function product(){
        return $this->belongsTo(Product::class, 'Car_Reg_Details_Id','id');
    }
}
