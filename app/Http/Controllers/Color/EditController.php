<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\color;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(color $color)
    {   
       return view("color.edit", compact("color"));
    }
}
