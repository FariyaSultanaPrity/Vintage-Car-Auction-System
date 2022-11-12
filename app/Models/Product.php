<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  
    public function seller(){
        return $this->belongsTo(Seller::class, 'id','Seller_Id');
    }

    public function catagory(){
        return $this->belongsTo(Catagory::class, 'id','Category_Id');
    }

    public function carRegDetails(){
        return $this->belongsTo(Car_Reg_Details::class, 'id','Car_Reg_Details_Id');
    }

    
    public function auction(){
        return $this->belongsTo(Auction::class, 'P_id','id');
    }

    public function bid(){
        return $this->hasMany(Bid::class, 'P_id','id');
    }
}
