<header id="header">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i>
                                    {{ getConfigValueFromSettingsTable('phone_number') }}</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>
                                    {{ getConfigValueFromSettingsTable('email') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ getConfigValueFromSettingsTable('facebook_link') }}"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ getConfigValueFromSettingsTable('twitter_link') }}"><i
                                        class="fa fa-twitter"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                            <li><a href="{{ getConfigValueFromSettingsTable('gmail_link') }}"><i
                                        class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="/eshopper/images/home/PeppaShirt_logo.png"
                                style="width:150px;height:80px" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <li><a href="{{('/cart-show')}}"><i class="fa fa-shopping-cart"></i> Cart <i class="cart-count" id="cart-count" >{{Cart::count()}}</i></a>

                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- main_menu -->
                    @include('components.main_menu')
                    <!-- main_menu -->

                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <div class="search_box pull-right">
                            <form action="{{ route('search') }}" method="GET">
                                <input type="text" placeholder="Search" name="result" />
                                <button class="btn btn-sm btn-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
<!--/header-->
