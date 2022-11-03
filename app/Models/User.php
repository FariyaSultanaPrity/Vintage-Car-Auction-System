<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    public function seller(){
        return $this->belongsTo(User::class, 'id','U_id');
    }

    public function address(){
        return $this->belongsTo(Address::class, 'U_AddressId','id');
    }
    public function auction(){
        return $this->hasMany(Auction::class, 'id','Customer_id');
    }
    public function bid(){
        return $this->hasMany(Bid::class, 'id','User_id');
    }
    public function complain(){
        return $this->hasMany(Complain::class, 'id','U_id');
    }

    public function payment(){
        return $this->hasMany(Payment::class, 'id','Customer_id');
    }
}