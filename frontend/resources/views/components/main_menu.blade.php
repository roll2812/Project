<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{route('home')}}" class="active">Home</a></li>
                                @foreach($categoriesLimit as $categoryParent)

								<li class="dropdown"><a href="{{route('categories.product',['slug' => $categoryParent->slug, 'id' => $categoryParent->id])}}">{{$categoryParent->name}}
                                @if($categoryParent->categoryChildrens()->count())
                                <i class="fa fa-angle-down"></i>
                                @endif
                                </a>

                                    <ul role="menu" class="sub-menu">
                                    @foreach($categoryParent->categoryChildrens as $categoryChildren)
                                        <li><a href="{{ route('categories.product', ['slug' => $categoryChildren->slug, 'id' => $categoryChildren->id]) }}">{{$categoryChildren->name}}</a></li>
                                    @endforeach
                                    </ul>

                                </li>
								@endforeach
								<!-- <li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li> -->
							</ul>
						</div>
