@extends('layouts.master')
@section('tittle')
<title>Product Detail</title>
@endsection
@section('js')
<link rel="stylesheet" href="{{ asset('home/home.js') }}">
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row">
@include('components.sidebar')
<div class="col-sm-9 padding-right">
    <div class="product-details">
        @csrf
        <!--product-details-->
        <div class="col-sm-5">
            <div class="view-product">
                <img src="{{ config('app.base_url') . $product->feature_image_path }}"
                    alt="" />
            </div>
        </div>
        <div class="col-sm-7">
            <div class="product-information">
                <!--/product-information-->
                <img src="{{asset('eshopper/images/product-details/new.jpg')}}" class="newarrival" alt="" />
                <h2>{{$product->name}}</h2>
                <p>Web ID: {{$product->id}}</p>
                <img src="{{asset('eshopper/images/product-details/rating.png')}}" alt="" />
                <br>
                <span>
                    <span>{{number_format($product->price)}}</span>
                    <label>Quantity:</label>
                    <input type="number" min="1" value="1" name="quantity"/>
                <button type="submit" data-url="{{route('cart', $product->id)}}" class="btn btn-fefault cart add-to-cart">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart
                    </button>
                </form>
                </span>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Brand:</b> Peppa Shirt</p>
                <p><b class="text-primary">Great reasons to buy from us:</b></p>
                <a href=""><img src="{{asset('eshopper/images/cart/reason.png')}}" class="share img-responsive" alt="" /></a>
            </div>
            <!--/product-information-->
        </div>
    </div>
    <!--/product-details-->

    @include('home.components.recommend_product')

</div>
</div>
</div>
</section>
@endsection
