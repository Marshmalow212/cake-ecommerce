<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;

    protected $fillabel = [
        'product_id','picture','title','qty','unit_price', 'total_price','user_id'
    ];
}
