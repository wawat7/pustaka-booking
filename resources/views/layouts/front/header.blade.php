<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="d-flex align-items-center">
            <div class="site-logo">
                <a href="index.html" class="d-block">
                    <img src="{{ asset('assets_front') }}/images/logo.jpg" alt="Image" class="img-fluid">
                </a>
            </div>
            <div class="mr-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li>
                            <a href="index.html" class="nav-link text-left">Home</a>
                        </li>
                    </ul>
                    </ul>
                </nav>

            </div>
            <div class="text-right">
                <a href="{{ route('auth.login') }}" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
                <a href="register.html" class="small btn btn-primary px-4 py-2 rounded-0"><span
                        class="icon-users"></span> Register</a>
            </div>


        </div>
    </div>

</header>
