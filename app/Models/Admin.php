<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    
    public function address(){
        return $this->belongsTo(Address::class, 'id','A_AddressId');
    }
}
