<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function seller(){
        return $this->belongsTo(Seller::class, 'Seller_Id','id');
    }

    public function catagory(){
        return $this->belongsTo(Catagory::class, 'Category_Id','id');
    }

    public function carRegDetails(){
        return $this->belongsTo(Car_Reg_Details::class, 'Car_Reg_Details_Id','id');
    }

    
    public function auction(){
        return $this->belongsTo(Auction::class, 'id','P_id');
    }

    public function bid(){
        return $this->hasMany(Bid::class, 'id','P_id');
    }

    
}
