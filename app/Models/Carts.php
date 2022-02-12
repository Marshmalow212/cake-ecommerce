<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Carts extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id','picture','title','qty','unit_price', 'total_price','user_id'
    ];

    public function product(){
        return $this->belongsTo(Products::class,'product_id');
    }
}
