<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'U_Id','id');
    }

    public function auction(){
        return $this->hasMany(Auction::class, 'id','Seller_id');
    }

    public function product(){
        return $this->hasMany(Product::class, 'id','Seller_id');
    } 
}
