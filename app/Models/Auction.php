<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model

{
  
    public function bid(){
        return $this->hasMany(Bid::class, 'Auction_Id','id');
    }
    public function seller(){
        return $this->belongsTo(Seller::class, 'id','S_Id');
    }
    public function customer(){
        return $this->belongsTo(User::class, 'id','Customer_Id');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'id','P_Id');
    }

    public function payment(){
        return $this->belongsTo(Payment::class, 'id','Payment_Id');
    }
}
