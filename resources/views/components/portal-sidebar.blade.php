<aside class="app-sidebar sticky" id="sidebar">

    <div class="main-sidebar-header">
        <a class="header-logo" href="{{ route("portal") }}">
            <img alt="logo" class="desktop-logo" src="{{ asset("images/brand-logos/logo.png") }}">
            <img alt="logo" class="toggle-logo" src="{{ asset("images/brand-logos/icon.png") }}">
            <img alt="logo" class="desktop-dark" src="{{ asset("images/brand-logos/logo-portal-dark.png") }}">
            <img alt="logo" class="toggle-dark" src="{{ asset("images/brand-logos/icon-portal-dark.png") }}">
        </a>
    </div>

    <div class="main-sidebar" id="sidebar-scroll">
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg fill="#7b8191" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <li class="slide__category"><span class="category-name">Menu Utama</span></li>
                <li class="slide">
                    <a class="side-menu__item {{ request()->routeIs("portal") ? "active" : "" }}" href="{{ route("portal") }}">
                        <i class="bx bx-grid-alt side-menu__icon"></i>
                        <span class="side-menu__label">Portal</span>
                    </a>
                </li>
            </ul>
            <ul class="main-menu">
                <li class="slide__category"><span class="category-name">Navigasi Aplikasi</span></li>
                <li class="slide">
                    <a class="side-menu__item {{ request()->routeIs("application") ? "active" : "" }}" href="{{ route("application") }}">
                        <i class="bx bx-unite side-menu__icon"></i>
                        <span class="side-menu__label">Aplikasi</span>
                    </a>
                </li>
            </ul>

            <ul class="main-menu">
                <li class="slide__category"><span class="category-name">Pengaturan</span></li>
                <li class="slide">
                    <a class="side-menu__item {{ request()->routeIs("my-profile") ? "active" : "" }}" href="{{ route("my-profile") }}">
                        <i class="bx bx-user side-menu__icon"></i>
                        <span class="side-menu__label">Profil Saya</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item {{ request()->routeIs("account.settings") ? "active" : "" }}" href="">
                        <i class="bx bx-cog side-menu__icon"></i>
                        <span class="side-menu__label">Pengaturan Akun</span>
                    </a>
                </li>
            </ul>

            <div class="slide-right" id="slide-right"><svg fill="#7b8191" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg></div>
        </nav>
    </div>
</aside>
