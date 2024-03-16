<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="d-flex align-items-center">
            <div class="site-logo">
                <a href="{{ route('home') }}" class="d-block">
                    <img src="{{ asset('assets_front') }}/images/logo.jpg" alt="Image" class="img-fluid">
                </a>
            </div>
            <div class="mr-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li>
                            <a href="{{ route('home') }}" class="nav-link text-left">Home</a>
                        </li>
                    </ul>
                    </ul>
                </nav>

            </div>
            <div class="text-right">
                @guest
                    <a href="{{ route('login') }}" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
                    <a href="{{ route('register') }}" class="small btn btn-primary px-4 py-2 rounded-0"><span
                            class="icon-users"></span> Register</a>
                @endguest
                @auth
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                      <li class="has-children">
                        <a href="#" class="nav-link text-left">
                            <img style="border-radius: 50%; border-style: none; height: 2rem; width: 2rem;"
                                src="{{ asset('assets') }}/img/undraw_profile.svg">
                            <span class="ml-2">{{ auth()->user()->name }}</span>
                        </a>
                        <ul class="dropdown">
                          <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item" type="submit"><i
                                        class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</button>
                            </form>
                          </li>
                        </ul>
                      </li>
                    </ul>                                                                                                                                                                                                                                                                                          </ul>
                  </nav>
                  <div class="ml-auto">
                    <div class="social-wrap">
                      <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                        class="icon-menu h3"></span></a>
                    </div>
                  </div>
                    {{-- <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img style="border-radius: 50%; border-style: none; height: 2rem; width: 2rem;"
                                src="{{ asset('assets') }}/img/undraw_profile.svg">
                            {{ auth()->user()->name }}
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div> --}}
                    {{-- <div class="row">
                        <div class="col-md-2 text-right"><img style="border-radius: 50%; border-style: none; height: 2rem; width: 2rem;"
                                src="{{ asset('assets') }}/img/undraw_profile.svg"></div>
                        <div class="col">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                            </a>

                        </div>

                    </div>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div> --}}
                @endauth
            </div>



        </div>
    </div>

</header>
