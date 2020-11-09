<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Category;
use App\Customer;
use App\Http\Requests\Information;
use App\Product;
use Cart;
use Request;

class CartController extends Controller
{
    public function addToCart(Product $product)
    {
        $cartInfo = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => '1',
            'options' => ['image' => $product->feature_image_path],
        ];

        Cart::add($cartInfo);
        $cartCount = Cart::count();
        return response()->json([
            'code' => 200,
            'message' => 'success',
            'cartCount' => $cartCount,
        ], 200);

    }

    public function incrementCart()
    {
        if (Request::get('product_id') && (Request::get('increment')) == 1) {
            $rows = Cart::search(function ($key, $value) {
                return $key->id == Request::get('product_id');
            });
            $item = $rows->first();
            Cart::update($item->rowId, $item->qty + 1);
            $itemQuantity = $item->qty;
            $itemprice = number_format($item->subtotal);
            $cartCount = Cart::count();
            $cartSubTotal = Cart::subtotal();
            return response()->json([
                'code' => 200,
                'message' => 'success',
                'itemQuantity' => $itemQuantity,
                'itemprice' => $itemprice,
                'cartCount' => $cartCount,
                'cartSubTotal' => $cartSubTotal,
            ], 200);

        }
    }

    public function decreaseCart()
    {
        if (Request::get('product_id') && (Request::get('decrease')) == 1) {
            $rows = Cart::search(function ($key, $value) {
                return $key->id == Request::get('product_id');
            });
            $item = $rows->first();
            Cart::update($item->rowId, $item->qty - 1);
            $itemQuantity = $item->qty;
            $itemprice = number_format($item->subtotal);
            $cartCount = Cart::count();
            $cartSubTotal = Cart::subtotal();
            return response()->json([
                'code' => 200,
                'message' => 'success',
                'itemQuantity' => $itemQuantity,
                'itemprice' => $itemprice,
                'cartCount' => $cartCount,
                'cartSubTotal' => $cartSubTotal,
            ], 200);

        }
    }

    public function showCart()
    {
        $cart = Cart::content();
        $categoriesLimit = Category::where('parent_id', 0)->get();
        $cartCount = Cart::count();
        return view('cart.cart', [
            'cart' => $cart,
            'categoriesLimit' => $categoriesLimit,
            'cartCount' => $cartCount,
        ]);
    }

    public function remove(Cart $cart, $rowId)
    {
        Cart::remove($rowId);
        $cartCount = Cart::count();
        $cartSubTotal = Cart::subtotal();
        return response()->json([
            'code' => 200,
            'message' => 'success',
            'cartCount' => $cartCount,
            'cartSubTotal' => $cartSubTotal,
        ], 200);
    }

    public function getCheckout()
    {
        $categoriesLimit = Category::where('parent_id', 0)->get();
        $cart = Cart::content();
        $total = Cart::total();
        return view('checkout.checkout', [
            'cart' => $cart,
            'total' => $total,
            'categoriesLimit' => $categoriesLimit,
        ]);
    }

    public function postCheckOut(Information $request)
    {
        $cartInfor = Cart::content();

        try {
            // save
            $customer = new Customer;
            $customer->name = Request::get('fullName');
            $customer->email = Request::get('email');
            $customer->address = Request::get('address');
            $customer->phone_number = Request::get('phoneNumber');
            //$customer->note = $request->note;
            $customer->save();

            $bill = new Bill;
            $bill->customer_id = $customer->id;
            $bill->date_order = date('Y-m-d H:i:s');
            $bill->total = str_replace(',', '', Cart::total());
            $bill->note = Request::get('note');
            $bill->status = '1';
            $bill->save();

            if (count($cartInfor) > 0) {
                foreach ($cartInfor as $key => $item) {
                    $billDetail = new BillDetail;
                    $billDetail->bill_id = $bill->id;
                    $billDetail->product_id = $item->id;
                    $billDetail->quantity = $item->qty;
                    $billDetail->price = $item->price;
                    $billDetail->save();
                }
            }
            // del
            Cart::destroy();
            $categoriesLimit = Category::where('parent_id', 0)->get();
            return view('checkout.success', [
                'categoriesLimit' => $categoriesLimit,

            ]);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
