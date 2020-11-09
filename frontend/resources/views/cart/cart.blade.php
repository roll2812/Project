@extends('layouts.master')
@section('tittle')
<title>Cart Page</title>
@endsection
@section('js')
<link rel="stylesheet" href="{{ asset('home/home.js') }}">
@endsection

@section('content')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
            <li><a href="{{ route('home')}}">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            @if(count($cart))
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description text-center">Name</td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $item)
                            <tr>
                                <td class="cart_product" style="margin: 0;">
                                    <img src="{{ config('app.base_url') . $item->options->image }}"
                                        style="width: 100px;height: 100px;" alt="">
                                </td>
                                <td class="cart_description text-center">
                                    <p>{{ $item->name }}</p>
                                </td>
                                <td class="cart_price">
                                    <p class="">{{ number_format($item->price) }}</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button d-flex">
                                            <button class="cart_quantity_up btn btn-md btn-primary" data-url="{{url("cart-increment?product_id=$item->id&increment=1")}}" > + </button>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}"
                                            autocomplete="off" size="2">
                                        <button class="cart_quantity_down btn btn-md btn-primary" data-url="{{url("cart-decrease?product_id=$item->id&decrease=1")}}" > - </button>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">{{number_format($item->subtotal)}}</p>
                                </td>
                                <td class="cart_delete">

                                    <button type="submit" class="cart_quantity_delete" href="{{route('remove.item', $item->rowId)}}"><i class="fa fa-times"></i></button>

                                </td>
                            </tr>
                        @endforeach
                    @else
                        <h4 class="text-center text-muted">You have no item in the shopping cart !</h4>
            @endif

            </tbody>
            </table>

        </div>
        <div class="col-md-12 ">
            <div class="row">
                <div class="col-md-9">
                <a href="{{URL::to('/checkout')}}" class="btn btn-md checkout">CHECKOUT</a>
                </div>
                <div class="col-md-3">
                    <div class="row d-flex">
                        <span>Total:   </span>
                        <p class="cart_total_price total-price">{{Cart::subtotal()}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#cart_items-->

@endsection
