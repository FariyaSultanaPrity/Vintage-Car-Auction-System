<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
  
    public function customer(){
        return $this->belongsTo(User::class, 'id','U_Id');
    }
    public function auction(){
        return $this->belongsTo(Auction::class, 'id','Auction_Id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'id','P_Id');
    }
}
