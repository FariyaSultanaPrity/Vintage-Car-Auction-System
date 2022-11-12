<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  
    public function user(){
        return $this->belongsTo(User::class, 'U_AddressId','id');
    }
    public function admin(){
        return $this->belongsTo(Admin::class, 'A_AddressId','id');
    }
}
