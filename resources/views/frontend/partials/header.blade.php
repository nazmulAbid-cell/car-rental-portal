<header>
    <div class="top-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-2 my-auto d-none d-lg-block">
                    <div class="logo">
                        <a href="{{ route('cr.home') }}" class="custom-logo-link" rel="home">
                            <img width="512" height="114" src="{{ asset('frontend/assets/images/car-rental.jpg')}}" class="custom-logo" alt="Car Rental Managment System">
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 my-auto d-none d-lg-block">
                    <div class="ajax-search-form">
                    <form action="{{ route('cr.sc') }}" method="GET">
                            <input type="text" name="search" id="keyword" placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    </div>
                    <div id="datafetch"></div>
                </div>


                </div>
            </div>
        </div>
        <div class="site-header ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-md-9 my-auto">
                        <div class="primary-menu d-none d-lg-inline-block">
                            <nav class="desktop-menu">
                                <ul id="menu-primary" class="menu">
                                    <li class="menu-item"><a href="{{ route('cr.home') }}"> Home</a></li>
                                    <li class="menu-item"><a href="{{ route('cr.cars') }}"> Cars </a></li>
                                    <li class="menu-item"><a href="{{ route('cr.terms') }}">Terms & Conditions</a></li>
                                    <li class="menu-item"><a href="{{ route('cr.about') }}">About Us</a></li>
                                    <li class="menu-item"><a href="{{ route('cr.contuctus') }}">Contact Us</a></li>

                                </ul>

                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3 p-0 text-right my-auto">
                        <div class="header-btn d-none d-flex ">
                           @auth
                           <a class="mx-1" href="{{ route('cr.user.profile.home') }}">Profile</i></a>
                            <a href="{{ route('cr.user.logout') }}">Logout</i></a>

                          @else
                          <a class="mx-1" href="{{ route('cr.user.login.form') }}">Login </a>
                          <a class="mx-1" href="{{ route('cr.user.registration') }}">Register </a>

                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>