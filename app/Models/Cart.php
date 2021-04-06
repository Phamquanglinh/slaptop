<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    ///Relation
    public function getProduct(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function getUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }


}
