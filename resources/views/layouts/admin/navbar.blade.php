<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                <img class="img-profile rounded-circle"
                    src="{{ asset('assets') }}/img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit"><i
                            class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</button>
                </form>

            </div>
        </li>

    </ul>

</nav>
