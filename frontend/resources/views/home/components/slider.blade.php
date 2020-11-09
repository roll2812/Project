@php
    $baseUrl = config('app.base_url');
@endphp

<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="myCarousel" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach($sliders as $key => $slider)
                      <div class="item {{$key == 0 ? 'active' : ''}} " style="background-image: url('{{ $baseUrl . $slider->image_path }}');">
                      {{-- <img src="" width='100%'> --}}
                        <div class="container">
                          <div class="carousel-caption">
                          <p><a class="btn btn-large btn-danger " href="{{route('products')}}">Shop Now</a>
                          </p></div>
                        </div>
                      </div>
                        @endforeach
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="icon-next"></span>
                    </a>
                  </div>
            </div>
        </div>
    </div>
</section>
