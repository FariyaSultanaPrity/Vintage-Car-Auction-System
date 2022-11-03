<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'id','U_AddressId');
    }
    public function admin(){
        return $this->belongsTo(Admin::class, 'id','A_AddressId');
    }
}
