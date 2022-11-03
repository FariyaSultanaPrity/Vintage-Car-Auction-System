<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function auction(){
        return $this->belongsTo(Auction::class, 'Auction_Id','id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'Customer_Id','id');
    }
}
