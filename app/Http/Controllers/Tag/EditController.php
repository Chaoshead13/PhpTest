<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\tag;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(tag $tag)
    {   
       return view("tag.edit", compact("tag"));
    }
}
