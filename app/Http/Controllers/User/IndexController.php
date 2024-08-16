<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {   
        $users = user::all();
        return view("admin.user.index", compact("users"));
    }
}
