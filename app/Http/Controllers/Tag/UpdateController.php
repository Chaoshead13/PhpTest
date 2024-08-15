<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\tag;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        return redirect()->route("admin.tags.index");
    }
}
