@extends('layouts.master')
@section('tittle')
<title>Home Page</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('home/home.css')}}">
@endsection


@section('content')
    <!--slider-->
    @include('home.components.slider')
<!--/slider-->
	<section>
		<div class="container">
			<div class="row">

				<!-- side_bar -->
					@include('components.sidebar')
				<!-- side_bar -->

				<div class="col-sm-9 padding-right">

				<!--features_items-->
					@include('home.components.feature_product')
				<!--features_items-->

				<!--category-tab-->
					@include('home.components.category_tab')
				<!--/category-tab-->

				<!--recommended_items-->
					@include('home.components.recommend_product')
				<!--/recommended_items-->


			</div>
		</div>
	</section>


@endsection
