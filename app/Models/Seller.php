<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
       public function user(){
        return $this->belongsTo(User::class, 'id','U_Id');
    }

    public function auction(){
        return $this->hasMany(Auction::class, 'S_Id','id');
    }

    public function product(){
        return $this->hasMany(Product::class, 'S_Id','id');
    } 
}
