<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = "products";
    protected $guarded = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_products');
    }
}
