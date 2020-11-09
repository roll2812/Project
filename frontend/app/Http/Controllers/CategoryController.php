<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug,$id)
    {
        $categories = Category::where('parent_id', 0)->get();
        $categoriesLimit = Category::where('parent_id', 0)->get();
        $products = Product::where('category_id', $id)->paginate(10);

        return view('products.categories.list', [
            'categoriesLimit' => $categoriesLimit,
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
