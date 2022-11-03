<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    public function customer(){
        return $this->belongsTo(User::class, 'U_Id','id');
    }
    public function auction(){
        return $this->belongsTo(Auction::class, 'Auction_Id','id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'P_Id','id');
    }
    
}
