<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    
    protected $table = 'products';

    protected $fillable = [
        'product_type',
        'category_id',
        'subCategory_id',
        'product_name',
        'product_description',
        'product_price',
        'product_usage',
        'photo',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function sub_category(){
        return $this->belongsTo(SubCategory::class, 'subCategory_id', 'id');
    }


}
