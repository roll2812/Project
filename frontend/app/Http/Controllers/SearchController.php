<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function getSearch(Request $request)
    {
        $result = $request->result;
        $result = Str_replace(' ', '?', $result);
        $productSearch = Product::where('name', 'like', '%' . $result . '%')->paginate(10);
        $categories = Category::where('parent_id', 0)->get();
        $categoriesLimit = Category::where('parent_id', 0)->get();
        return view('search.search', [
            'productSearch' => $productSearch,
            'categories' => $categories,
            'categoriesLimit' => $categoriesLimit,
        ]);
    }
}
