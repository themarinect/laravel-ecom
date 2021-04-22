<!--header-->
<header id="header">

    <!--header-middle-->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/logo.png')}}" width="139" height="39" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            @if(Auth::check())
                                <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
                                </li>
                            @else
                                <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <!--header-bottom-->
    <div class="header-bottom">
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
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('/')}}" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{url('/list-products')}}">Products</a></li>
                                    <li><a href="{{url('/myaccount')}}">Account</a></li>
                                    <li><a href="{{url('/viewcart')}}">Cart</a></li>
                                </ul>
                            </li>
                            <li><a href = "mailto: kho1@ggc.edu">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->

</header>
<!--/header-->
