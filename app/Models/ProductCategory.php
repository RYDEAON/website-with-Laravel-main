<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasManyThrough(Product::class, ProductClass::class, 'product_class_id', 'id');
    }
}
