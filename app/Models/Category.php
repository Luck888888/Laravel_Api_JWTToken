<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title','external_id','category_id'];

    public function products(){
        return $this->belongsToMany(Product::class,'category_product', 'category_id','product_id');
    }
}
