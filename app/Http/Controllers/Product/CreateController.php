<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Color;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {   
        $categories = Category::all();
        $tags = Tag::all();
        $colors = Color::all();
        

        return view("product.create",compact("categories", "tags", "colors"));
    }
}
