<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tag extends Model
{
    use SoftDeletes;
    protected $table = "tags";
    
    protected $guarded = false;
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_tags');
    }
}
