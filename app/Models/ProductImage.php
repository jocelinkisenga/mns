<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','path'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    /**
     * Get the image_statut associated with the ProductImage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function statut(): HasOne
    {
        return $this->hasOne(ImageStatut::class);
    }
}
