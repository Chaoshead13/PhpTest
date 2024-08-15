<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\StoreRequest;
use App\Models\color;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {   
       $data = $request->validated();
       color::FirstOrCreate($data);
       return redirect()->route("admin.colors.index");
    }
}
