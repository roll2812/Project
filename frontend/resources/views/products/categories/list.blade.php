@extends('layouts.master')
@section('tittle')
<title>Product Page</title>
@endsection
@section('js')
<link rel="stylesheet" href="{{asset('home/home.js')}}">
@endsection

@section('content')	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">

				@include('components.sidebar')
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        @foreach($products as $product)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
                                    <a href="{{ route('detail', $product->id) }}">
									<div class="productinfo text-center">
										<img src="{{config('app.base_url') . $product->feature_image_path}}" alt="" />
										<h2>{{number_format($product->price)}} VND</h2>
                                        <p>{{$product->name}} </p>
                                    </a>
                                    <button type="submit" data-url="{{ route('cart', $product->id) }}"
                                        class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                                        cart</button>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						{{ $products->links() }}
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>


@endsection
