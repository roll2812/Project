<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $categories = Category::where('parent_id', 0)->get();
        $categoriesLimit = Category::where('parent_id', 0)->get();
        $products = Product::latest()->take(6)->get();
        $productsRecommend = Product::latest('views_count', 'desc')->take(12)->get();
        return view('home.home', [
            'sliders' => $sliders,
            'categories' => $categories,
            'products' => $products,
            'productsRecommend' => $productsRecommend,
            'categoriesLimit' => $categoriesLimit
        ]);
    }
    public function show() {
        $categories = Category::where('parent_id', 0)->get();
        $products = Product::latest()->take(6)->paginate(9);
        $categoriesLimit = Category::where('parent_id', 0)->get();
        return view('products.categories.list', [
            'categories' => $categories,
            'products' => $products,
            'categoriesLimit' => $categoriesLimit,
        ]);
    }

    public function searchFullText(Request $request) {
        if ($request->search != '') {
            $data = User::FullTextSearch('name', $request->search)->get();
            foreach ($data as $key => $value) {
                echo $value->name;
                echo '<br>';
            }
        }
    }
}
