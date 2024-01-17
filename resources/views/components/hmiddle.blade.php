<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                </div>
                <div class="btn-group pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            USA
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Canada</a></li>
                            <li><a href="#">UK</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            DOLLAR
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Canadian Dollar</a></li>
                            <li><a href="#">Pound</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        @guest
                            <li><a href="{{ route('register') }}"><i class="fa fa-sign-in"></i> Inscription</a></li>
                            <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
                        @endguest
                        @auth()
                            <li><a href="{{ route('home') }}"><i class="fa fa-user"></i> Mon Compte</a></li>
                            @if (Auth::user()->isAdmin())
                                <li ><a href="{{ route('admin.products.index') }}"><i class="fa fa-lock"></i> Admin</a></li>
                            @endif
                            <li><a href="{{ route('logout') }}" id="logout_button"><i class="fa fa-sign-out"></i> Se deconnecter</a>
                                <form id="logout" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->
