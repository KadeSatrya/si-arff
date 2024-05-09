<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #198754" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon"style="width 5%">
            <img src="{{ URL::asset('img/SI_ARFF.png') }}" style="width: 125px" alt="">
        </div>
    </a>
    <br>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pesawat
    </div>
    <!-- Nav Item - Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="/kecelakaan-pesawat">
            <i class="fas fa-plane-departure"></i>
            <span>Aircraft Accident</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('domestic-fire.index') }}">
            <i class="fas fa-fire-alt"></i>
            <span>Domestic Fire</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/regulation">
            <i class="fas fa-book-reader"></i>
            <span>Regulation</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/support">
            <i class="fas fa-users-cog"></i>
            <span>Support</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->