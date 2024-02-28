<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<div class="sticky">
    <aside class="app-sidebar sidebar-scroll">
        <div class="main-sidebar-header active">
            <a class="desktop-logo logo-light active" href="index.html"><img src="{{ asset ('assets') }}/img/brand/logo.png" class="main-logo" alt="logo"></a>
            <a class="desktop-logo logo-dark active" href="index.html"><img src="{{ asset ('assets') }}/img/brand/logo-white.png" class="main-logo" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="{{ asset ('assets') }}/img/brand/favicon.png" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="{{ asset ('assets') }}/img/brand/favicon-white.png" alt="logo"></a>
        </div>
        <div class="main-sidemenu">
            <div class="main-sidebar-loggedin">
                <div class="app-sidebar__user">
                    <div class="dropdown user-pro-body text-center">
                        <div class="user-pic">
                            <img src="{{ asset ('assets') }}/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded">
                        </div>
                        <div class="user-info">
                            <h6 class=" mb-0 text-dark">Sylva</h6>
                            <!-- MENAMPILAN NAMA LENGKAP YG LOGIN -->
                            <span class="text-muted app-sidebar__user-name text-sm">Sylva_septri</span>
                            <!-- MENAMPILKAN ROLE YG LOGIN -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-navs">
                <ul class="nav  nav-pills-circle">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Settings" aria-describedby="tooltip365540">
                        <a class="nav-link text-center m-2">
                            <i class="fe fe-settings"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Chat" aria-describedby="tooltip143427">
                        <a class="nav-link text-center m-2">
                            <i class="fe fe-mail"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Followers">
                        <a class="nav-link text-center m-2">
                            <i class="fe fe-user"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Logout">
                        <a class="nav-link text-center m-2">
                            <i class="fe fe-power"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
            <ul class="side-menu ">
                <li class="slide">
                    <a class="side-menu__item {{ request()->is('pelanggan') ? 'active' : '' }}" href="{{ route('pelanggan.index') }}"><i class="side-menu__icon si si-people""></i><span class="side-menu__label">Pelanggan</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item {{ request()->is('produk') ? 'active' : '' }}" href="{{ route('produk.index') }}"><i class="side-menu__icon fe fe-shopping-bag"></i><span class="side-menu__label">Produk</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item {{ request()->is('penjualan') ? 'active' : '' }}" href="{{ route('penjualan.index') }}"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Penjualan</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item {{ request()->is('detail_penjualan') ? 'active' : '' }}" href="{{ route('detail.index')}}"><i class="side-menu__icon si si-notebook"></i><span class="side-menu__label">Detail Penjualan</span></a>
                </li>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
        </div>
    </aside>
</div>
<!-- main-sidebar -->