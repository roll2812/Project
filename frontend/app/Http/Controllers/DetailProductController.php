<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function show(Product $product) {
        $categories = Category::where('parent_id', 0)->get();
        $categoriesLimit = Category::where('parent_id', 0)->get();
        $productsRecommend = Product::latest('views_count', 'desc')->take(12)->get();
        return view('products.categories.detail', [
            'product' => $product,
            'productsRecommend' => $productsRecommend,
            'categoriesLimit' => $categoriesLimit,
            'categories' => $categories
        ]);
    }
}
