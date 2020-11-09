@extends('layouts.master')
@section('tittle')
<title>Product Search</title>
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
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    @foreach($productSearch as $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ config('app.base_url') . $product->feature_image_path }}"
                                            alt="" />
                                        <h2>{{ $product->price }} VND</h2>
                                        <p>{{ $product->name }} </p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>{{ $product->price }} VND</h2>
                                            <p>{{ $product->name }} </p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $productSearch->links() }}
                </div>
                <!--features_items-->
            </div>
        </div>
    </div>
</section>


@endsection
