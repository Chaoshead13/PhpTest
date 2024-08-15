<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {   
        return view("index");
    }
}
