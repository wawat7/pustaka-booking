<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item @if (Route::is('admin.dashboard')) active @endif">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Master Data -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        {{ __('Master Data') }}
    </div>
    <li class="nav-item @if (Route::is('admin.category.index')) active @endif">
        <a class="nav-link" href="{{ route('admin.category.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>{{ __('Categories') }}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>{{ __('Books') }}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>{{ __('Members') }}</span></a>
    </li>

    <!-- Transaction -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        {{ __('Transaction') }}
    </div>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>{{ __('Loans') }}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>{{ __('Bookings') }}</span></a>
    </li>

    <!-- REPORT -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        {{ __('Report') }}
    </div>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>{{ __('Book Report') }}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>{{ __('Member Report') }}</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>{{ __('Loan Report') }}</span></a>
    </li>

</ul>
