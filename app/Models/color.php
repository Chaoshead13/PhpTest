<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class color extends Model
{
    use SoftDeletes;
    protected $table = "colors";
    protected $guarded = false;
}
