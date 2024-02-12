<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo pb-0" href="index.html">
            <span class="logo-light-mode p-logo">
                <span class="l-dark">
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
                        <li><a href="tanah-lahan" class="sub-menu-item {{ Request::is('tanah-lahan') ? 'active' : '' }}">Tanah & Lahan</a></li>
                        <li><a href="ruas-jalan" class="sub-menu-item {{ Request::is('ruas-jalan') ? 'active' : '' }}">Ruas Jalan</a></li>
                        <li><a href="drainase" class="sub-menu-item {{ Request::is('drainase') ? 'active' : '' }}">Drainase</a></li>
                    </ul>
                </li>
                <li><a href="peraturan" class="sub-menu-item {{ Request::is('*peraturan') ? 'active' : '' }}">Peraturan</a></li>
                <li><a href="#" class="sub-menu-item">Peta Spasial</a></li>
                <li><a href="statistik" class="sub-menu-item {{ Request::is('*statistik') ? 'active' : '' }}">Statistik</a></li>
                @auth
                <li class="list-inline-item mb-0 d-block d-sm-none mb-3">
                    <a href="#" class="btn btn-outline-light btn-rspnsv-color" style="color: #fff;">Masuk</a>
                </li>
                @else
                <!--Login button Start-->
                <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item mb-0">
                        <a href="javascript:void(0)" class="btn btn-outline-light ms-3">Login</a>
                    </li>
                </ul>
                <!--Login button End-->
                @endauth
            </ul><!--end navigation menu-->
        </div>

    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
