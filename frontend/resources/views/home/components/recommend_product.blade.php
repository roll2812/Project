<div class="recommended_items">
    <h2 class="title text-center">recommended items</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @foreach($productsRecommend as $key => $product)
                @if($key % 3 == 0)
                    <div
                        class="item {{ $key == 0 ? 'active' : '' }}">
                @endif
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                            <a href="{{ route('detail', $product->id)}}">
                                <img src="{{ config('app.base_url') . $product ->feature_image_path }}"
                                    alt="" />
                                <h2>{{ number_format($product->price) }}</h2>
                                <p>{{ $product->name }}</p>
                                </a>
                                <button type="submit" data-url="{{ route('cart', $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                    to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                @if($key % 3 == 2)
        </div>
        @endif
        @endforeach
    </div>

</div>
<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
    <i class="fa fa-angle-left"></i>
</a>
<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
    <i class="fa fa-angle-right"></i>
</a>
</div>
