<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    
    public function product(){
        return $this->hasMany(Product::class, 'id','Category_Id');
    }
}
