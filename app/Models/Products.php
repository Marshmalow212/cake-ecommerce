<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Products extends Model
{
    use HasFactory;

    // protected $table = 'products';
    protected $fillable = [
        'title','description','picture','is_active','is_draft','mrp','special_price','category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
