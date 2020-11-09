<div class="category-tab">
					<div class="col-sm-12">
						<ul class="nav nav-tabs">
                        @foreach($categories as $key => $category)
							<li class="{{$key == 0 ? 'active' : '' }}">
                            <a href="#{{$category->id}}" data-toggle="tab">
                            {{ $category->name }}
                            </a></li>
                        @endforeach
						</ul>
					</div>
					<div class="tab-content">
                        @foreach($categories as $keyProducts => $category)
						<div class="tab-pane fade {{ $keyProducts == 0 ? 'active in' : '' }}" id="{{$category->id}}" >
                             @foreach($category->products()->take(4)->get() as $product)
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <a href="{{ route('detail', $product->id)}}">
                                                    <img src="{{config('app.base_url') . $product->feature_image_path}}" alt="" />
                                                    <h2>{{ number_format($product->price)}}</h2>
                                                    <p>{{ $product->name}}</p>
                                                    </a>
                                                    <button type="submit" data-url="{{ route('cart', $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
						</div>
                        @endforeach
					</div>
</div>
