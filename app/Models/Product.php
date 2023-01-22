<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','name','price','old_quantity'];

    public function categorie(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function image (){
        return $this->hasOne(ProductImage::class);
    }

    public function order_items(){
        return $this->hasMany(OrderItem::class);
    }
}
