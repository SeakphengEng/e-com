<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="./index.html" class="site-logo">
                        <img src="img/logo.png" alt="">
                    </a>
                </div> --}}
                <!--Search Button-->
               <div> E- Shopping</div>
                <div class="col-xl-5 col-lg-6">
                    <form class="header-search-form">
                        <input type="text" placeholder="Search book  ....">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
                <!--Account of User, adding item to cart-->
                <div class="col-lg-4 col-lg-5">
                    <div class="user-panel">

                        <!--Wishlist Location-->
                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            <a href="#">Wishlist</a>
                        </div>

                        <!--Cart Location-->
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                {{-- <span>2</span> --}}
                            </div>
                            <a href="{{url('/cart')}}">Cart</a>
                        </div>

                        <!--sign out Location-->
                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            @guest

                                @if(Route::has('login'))
                                    <a> No User</a>
                                @endif
                                @else
                                <a href="{{url('/users',Auth::user()->id)}}">{{ Auth::user()->name }}</a>
                            @endguest
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Navigation Bar-->
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
            <li><a href="{{'/homeIndex'}}">Home</a></li>

                <li><a href="{{url('/contact_us')}}">Contact</a></li>
            <li><a href="#">Chat
                        {{-- <span class="new">New Feature</span> --}}
                    </a></li>
                <li><a href="{{url('/about_us/me')}}">About Us</a></li>

                <!--User Account Location-->
                <li><a href="#">Account</a>
                    <ul class="sub-menu">
                        <!-- Authentication Links-->
                        @guest

                        @if(Route::has('register') && Route::has('register'))
                        <li>
                            <a href="{{route('register')}}" >Sign Up</a>
                        </li>
                                <li>
                                    <a href="{{route('login')}}"> Sign In </a>
                                </li>
                        @endif

                        @else
                        <li>
                            <ul class="sub-menu">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    Logout </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>

                        @endguest
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Header section end -->
