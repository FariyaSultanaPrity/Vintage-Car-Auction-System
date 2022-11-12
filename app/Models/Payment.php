<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
   
    public function auction(){
        return $this->belongsTo(Auction::class, 'id','Auction_Id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id','Customer_Id');
    }
}
