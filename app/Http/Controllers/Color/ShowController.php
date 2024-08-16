<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\color;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(color $color)
    {   
        return view("admin.color.show", compact("color"));
    }
}
