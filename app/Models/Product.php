<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
                'category_id',
                'name',
                'price',
                'old_quantity',
                'description',
                'visible',
                'is_top',
                'is_most_sell',
                'colors'
            ];



    public function categorie(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function image (){
        return $this->hasMany(ProductImage::class);
    }
    public function couleurs(){
        return $this->hasMany(Color::class);
    }

    public function order_items(){
        return $this->hasMany(OrderItem::class);
    }
    public function cover(){
        $all = $this->image;
        $img = false;
        foreach ($all as $key => $value) {
           $stat = $value->statut->isfirst??false;

           if($stat){
            $img = $value;
            break;
        }
        }
        if($img){
            return $img;
        }

        return $this->image->first();
    }

    /**
     * Interact with the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    // protected function name(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => substr($value,0,15),
    //     );
    // }

}
