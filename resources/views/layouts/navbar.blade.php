<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo pb-0" href="index.html">
            <span class="logo-light-mode p-logo ">
                <span class="l-dark p-2">
                    <img src="assets/images/logo_kota_tegal.png" class="l-dark" height="34" alt="">
                    <h6 class="mb-0 font-logo">PEMERINTAH KOTA TEGAL <br> SISTEM INFORMASI PERTANAHAN</h6>
                </span>

                <span class="l-light text-white">
                    <img src="assets/images/logo_kota_tegal.png" class="l-light" height="34" alt="">
                    <h6 class="mb-0 text-white font-logo">PEMERINTAH KOTA TEGAL <br> SISTEM INFORMASI PERTANAHAN
                    </h6>
                </span>
            </span>
            <img src="assets/images/logo_kota_tegal.png" height="30" class="logo-dark-mode" alt="">
        </a>
        <!-- Logo End -->

        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="/" class="sub-menu-item {{ Request::is('/') ? 'active' : '' }}">Beranda</a></li>
                <li class="has-submenu parent-menu-item">
                    <a class="pe-3" href="javascript:void(0)">Data</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="tanah-lahan"
                                class="sub-menu-item {{ Request::is('tanah-lahan') ? 'active' : '' }}">Tanah & Lahan</a>
                        </li>
                        <li><a href="ruas-jalan"
                                class="sub-menu-item {{ Request::is('ruas-jalan') ? 'active' : '' }}">Ruas Jalan</a>
                        </li>
                        <li><a href="drainase"
                                class="sub-menu-item {{ Request::is('drainase') ? 'active' : '' }}">Drainase</a></li>
                    </ul>
                </li>
                <li><a href="peraturan" class="sub-menu-item {{ Request::is('*peraturan') ? 'active' : '' }}">Peraturan</a></li>
                <li><a href="peta" class="sub-menu-item {{ Request::is('peta') ? 'active' : '' }}">Peta Spasial</a></li>
                <li><a href="statistik" class="sub-menu-item {{ Request::is('*statistik') ? 'active' : '' }}">Statistik</a></li>

                <!--Login button Start-->
                <ul class="buy-button list-inline mb-0">
                @guest
                    <li class="list-inline-item mb-0">
                        <a href="/sign-in" class="btn btn-outline-light ms-3">Login</a>
                    </li>
                @else
                    <li class="list-inline-item mb-0">
                        <a href="{{ route('page.home') }}" class="btn btn-outline-light ms-3">Masuk</a>
                    </li>
                @endguest
                </ul>
                <!--Login button End-->
            </ul><!--end navigation menu-->
        </div>

    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
