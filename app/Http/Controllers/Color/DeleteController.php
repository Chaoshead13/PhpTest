<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\color;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(color $color)
    {   
       $color->delete();
       return redirect()->route("admin.colors.index");
    }
}
