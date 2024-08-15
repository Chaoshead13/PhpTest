<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $tagId = $data["tag_ids"];
        $colorId = $data["colors"];
        unset($data["tag_ids"]);
        unset($data["colors"]);
        $data["preview_image"] = Storage::disk("public")->put("/images", $data["preview_image"]);
        $product->update($data);
        $product->tags()->sync($tagId);
        $product->colors()->sync($colorId);
        return redirect()->route("admin.products.index");
    }
}
