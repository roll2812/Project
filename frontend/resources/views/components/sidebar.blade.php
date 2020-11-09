<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						@foreach($categories as $category)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									@if($category->categoryChildrens()->count())
									<a data-toggle="collapse" data-parent="#accordian" href="#sportswear_{{$category->id}}">
									@else
									<a  href="{{ route('categories.product',['slug' => $category->slug, 'id' => $category->id])}}">
									@endif
											<span class="badge pull-right">
											@if($category->categoryChildrens->count())
											<i class="fa fa-plus"></i>
											@endif
											</span>
											{{$category->name}}
										</a>
									</h4>
								</div>
								<div id="sportswear_{{$category->id}}" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
										@foreach($category->categoryChildrens as $categoryChildren)
											<li>
											<a href="{{ route('categories.product',['slug' => $categoryChildren->slug, 'id' => $categoryChildren->id])}}">
											{{$categoryChildren->name}} 
											</a>
											</li>
										@endforeach
										</ul>
									</div>
								</div>
							</div>
						@endforeach
						</div><!--/category-products-->

					</div>
				</div>