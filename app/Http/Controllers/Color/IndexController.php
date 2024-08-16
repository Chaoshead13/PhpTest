<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\color;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {   
        $colors = color::all();
        return view("admin.color.index", compact("colors"));
    }
}
