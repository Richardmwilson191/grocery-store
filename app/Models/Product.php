<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function category()
    {
        // This denotes that the product (each product record) belongs to a category, the relationship is tied to the Category model, category_id field
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
