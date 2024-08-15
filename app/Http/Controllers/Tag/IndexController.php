<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {   
        $tags = tag::all();
        return view("tag.index", compact("tags"));
    }
}
