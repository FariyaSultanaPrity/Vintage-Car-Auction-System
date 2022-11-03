<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    public function bid(){
        return $this->hasMany(Bid::class, 'Bid_Id','id');
    }
    public function seller(){
        return $this->belongsTo(Seller::class, 'S_Id','id');
    }
    public function customer(){
        return $this->belongsTo(User::class, 'Customer_Id','id');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'P_Id','id');
    }

    public function payment(){
        return $this->belongsTo(Payment::class, 'Payment_Id','id');
    }
}
