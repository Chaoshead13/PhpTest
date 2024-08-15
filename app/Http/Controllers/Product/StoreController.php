<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {   
        $data = $request->validated();
        $tagId = $data["tag_ids"];
        $colorId = $data["colors"];
        unset($data["tag_ids"]);
        unset($data["colors"]);
        $data["preview_image"] = Storage::disk("public")->put("/images", $data["preview_image"]);
        $product = Product::FirstOrCreate($data);
        $product->tags()->attach($tagId);
        $product->colors()->attach($colorId);
        return redirect()->route("admin.products.index");
    }
}
