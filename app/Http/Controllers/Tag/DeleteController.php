<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\tag;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(tag $tag)
    {   
       $tag->delete();
       return redirect()->route("admin.tags.index");
    }
}
