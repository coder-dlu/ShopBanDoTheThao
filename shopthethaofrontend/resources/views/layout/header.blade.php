<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row" >
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="#"><i class="fa fa-phone"></i>
                                    {{getConfigValueFromSettingTable('phone_contact')}}
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope"></i>
                                    {{getConfigValueFromSettingTable('email')}}
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right" style="display: flex">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{getConfigValueFromSettingTable('facebook_link')}}">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{getConfigValueFromSettingTable('twitterk')}}">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="/eshopper/images/home/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                            <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a  href="{{route('showCart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    {{--main-menu--}}
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ route("home") }}" class="active">Home</a></li>
                            <li><a href="{{route("product.index")}}" >Sản Phẩm</a></li>

                            <li><a href="404.html">404</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                    {{--end-main-menu--}}
                </div>
                <div class="col-sm-3">
                    <form role="search" method="GET"  action="{{route('search')}}">
                        <div class="search_box pull-right" style="display: flex">
                            <input type="text"  name="search" id="s" placeholder="Nhập từ khóa..."/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
