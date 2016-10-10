<?php

namespace App\Http\Controllers\Api\Navs;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NavsController extends Controller
{
    public function subCats($pid, Category $category) {
        $children = $category->children($pid);
        return response()->json($children);
    }
}
