<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   
    public function seller(){
    return $this->belongsTo(Seller::class, 'U_id','id');
}

public function address(){
    return $this->belongsTo(Address::class, 'id','U_AddressId');
}
public function auction(){
    return $this->hasMany(Auction::class, 'Customer_id','id');
}
public function bid(){
    return $this->hasMany(Bid::class, 'User_id','id');
}
public function complain(){
    return $this->hasMany(Complain::class, 'U_id','id');
}

public function payment(){
    return $this->hasMany(Payment::class, 'Customer_id','id');
}
}
