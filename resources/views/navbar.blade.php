<header>
    <nav class="navbar navbar-expand-lg header-light bg-white border-bottom border-color-extra-medium-gray header-reverse" data-header-hover="light">
        <div class="container-fluid">
            <div class="col-auto">
                <a class="navbar-brand" href="/">
                    <img src="/images/main/logo.png" class="logo" alt="Logo">
                </a>
            </div>
            <div class="col-auto menu-order left-nav ps-60px lg-ps-20px">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <li class="nav-item {{ Request::is('/') ? 'activeTab' : '' }}">
                            <a href="/" class="nav-link {{ Request::is('/') ? 'text-white' : '' }}">Home</a>
                        </li>
                        <li class="nav-item {{ Request::is('company') ? 'activeTab' : '' }}">
                            <a href="/company" class="nav-link {{ Request::is('company') ? 'text-white' : '' }}">About</a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a href="#" class="nav-link {{ Route::currentRouteName()=='rent' ? 'activeTab text-white' : '' }}">Rent</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink1">
                                <div class="d-lg-flex mega-menu m-auto ps-5 pe-5 md-ps-0 md-pe-0 md-pt-15px">
                                    <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 w-100 mx-0 align-items-center justify-content-center">
                                        <div class="col md-mb-30px">
                                            <a href="/rent/apartment" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                <span class="w-100px h-100px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                    <img src="/images/main/demo-real-estate-icon-apartment.svg" class="w-40px" alt="Apartment">
                                                </span>
                                                <span class="alt-font fw-600 fs-15 text-dark-gray">Apartment</span>
                                            </a>
                                        </div>
                                        <div class="col md-mb-30px">
                                            <a href="/rent/houses" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                <span class="w-100px h-100px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                    <img src="/images/main/demo-real-estate-icon-condominium.svg" class="w-40px" alt="Houses">
                                                </span>
                                                <span class="alt-font fw-600 fs-15 text-dark-gray">Houses</span>
                                            </a>
                                        </div>
                                        <div class="col md-mb-30px">
                                            <a href="/rent/land" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                <span class="w-100px h-100px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                    <img src="/images/main/demo-real-estate-icon-home.svg" class="w-40px" alt="Land">
                                                </span>
                                                <span class="alt-font fw-600 fs-15 text-dark-gray">Lands</span>
                                            </a>
                                        </div>
                                        <div class="col xs-mb-30px">
                                            <a href="/rent/hotels-and-villas" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                <span class="w-100px h-100px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                    <img src="/images/main/demo-real-estate-icon-office.svg" class="w-40px" alt="Hotels and Villas">
                                                </span>
                                                <span class="alt-font fw-600 fs-15 text-dark-gray">Hotels And Villas</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="/rent/other" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                <span class="w-100px h-100px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                    <img src="/images/main/demo-real-estate-icon-shop.svg" class="w-40px" alt="Other">
                                                </span>
                                                <span class="alt-font fw-600 fs-15 text-dark-gray">Other</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a href="#" class="nav-link {{ Route::currentRouteName()=='buy' ? 'activeTab text-white' : '' }}">Buy</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="d-lg-flex mega-menu m-auto ps-5 pe-5 md-ps-0 md-pe-0 md-pt-15px">
                                    <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 w-100 mx-0 align-items-center justify-content-center">
                                        <div class="col md-mb-30px">
                                            <a href="/buy/apartment" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                <span class="w-100px h-100px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                    <img src="/images/main/demo-real-estate-icon-apartment.svg" class="w-40px" alt="Apartment">
                                                </span>
                                                <span class="alt-font fw-600 fs-15 text-dark-gray">Apartment</span>
                                            </a>
                                        </div>
                                        <div class="col md-mb-30px">
                                            <a href="/buy/houses" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                <span class="w-100px h-100px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                    <img src="/images/main/demo-real-estate-icon-condominium.svg" class="w-40px" alt="Houses">
                                                </span>
                                                <span class="alt-font fw-600 fs-15 text-dark-gray">Houses</span>
                                            </a>
                                        </div>
                                        <div class="col md-mb-30px">
                                            <a href="/buy/land" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                <span class="w-100px h-100px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                    <img src="/images/main/demo-real-estate-icon-home.svg" class="w-40px" alt="Land">
                                                </span>
                                                <span class="alt-font fw-600 fs-15 text-dark-gray">Lands</span>
                                            </a>
                                        </div>
                                        <div class="col xs-mb-30px">
                                            <a href="/buy/hotels-and-villas" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                <span class="w-100px h-100px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                    <img src="/images/main/demo-real-estate-icon-office.svg" class="w-40px" alt="Hotels and Villas">
                                                </span>
                                                <span class="alt-font fw-600 fs-15 text-dark-gray">Hotels And Villas</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="/buy/other" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                <span class="w-100px h-100px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                    <img src="/images/main/demo-real-estate-icon-shop.svg" class="w-40px" alt="Other">
                                                </span>
                                                <span class="alt-font fw-600 fs-15 text-dark-gray">Other</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="/wanted" class="nav-link">Wanted</a>
                        </li>
                        <li class="nav-item {{ Request::is('news') ? 'activeTab' : '' }}">
                            <a href="/news" class="nav-link {{ Request::is('news') ? 'text-white' : '' }}">News and Articles</a>
                        </li>
                        <li class="nav-item">
                            <a href="/addNewProperty" class="nav-link">List Your Property</a>
                        </li>
                        @auth
                        <li class="nav-item d-block d-md-none">
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link p-0">Logout</button>
                            </form>
                        </li>
                        @else
                        <li class="nav-item d-block d-md-none relative">
  <!-- <a href="#" class="nav-link cursor-pointer">
    Menu <i class="fa fa-caret-down"></i>
  </a> -->
  <!-- <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg border border-gray-200  group-hover:block transition-all duration-300 ease-in-out"> -->
    <a href="/register" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Register</a></li>
    <li class="nav-item d-block d-md-none relative">

    <a href="/login" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Login</a>
    </li>
    <li class="nav-item d-block d-md-none relative">
    <a href="/editProfileFrm" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Edit Profile</a></li>
  </div>

                        @endauth
                    </ul>
                </div>
            </div>
            <div class="col-auto ms-auto ps-lg-0 d-none d-sm-flex">
                <div class="d-none d-xl-flex me-25px">
                    <div class="d-flex align-items-center widget-text fw-600 alt-font">
                        <a href="tel:+94704444555" class="d-inline-block">
                            <span class="d-inline-block align-middle me-10px bg-base-color-transparent h-40px w-40px text-center rounded-circle fs-14 lh-40 text-base-color">
                                <i class="feather icon-feather-phone-outgoing"></i>
                            </span>
                            <span class="d-none d-xxl-inline-block">+94 70 444 4555</span>
                        </a>
                    </div>
                </div>
                @auth
                <div class="header-icon mx-3">
                    <div class="header-button">
                        <a href="/editProfileFrm" class="btn btn-small mx-3 btn-round-edge btn-warning">Edit Profile</a>
                    </div>
                    @if(auth()->user()->admin)
                    <div class="header-button">
                        <a href="/adminDashboard" class="btn btn-small mx-3 btn-round-edge btn-success">Admin Dashboard</a>
                    </div>
                    @endif
                    <div class="header-button">
                        <a href="#" onclick="document.getElementById('frm').submit();" class="btn btn-small btn-round-edge btn-success">
                            <form id="frm" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <span>Logout</span>
                            </form>
                        </a>
                    </div>
                </div>
                @else
                <div class="header-icon mx-3">
                    <div class="header-button">
                        <a href="/login" class="btn btn-small btn-round-edge btn-warning">Login</a>
                    </div>
                </div>
                <div id="btnRed" class="header-icon ml-3">
                    <div class="header-button">
                        <a href="/register" class="btn btn-small btn-round-edge btn-danger">Register</a>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </nav>
</header>

<style>
/* Default styles (applied to all screen sizes) */
.logo {
    height: 80px;
    width: auto;
}

/* Small screens (up to 600px) */
@media only screen and (max-width: 600px) {
    .logo {
        height: 40px;
        width: auto;
    }
}

/* Medium screens (601px to 1024px) */
@media only screen and (min-width: 601px) and (max-width: 1024px) {
    .logo {
        height: 60px;
        width: auto;
    }
}

/* Large screens (1025px and above) */
@media only screen and (min-width: 1025px) {
    .logo {
        height: 80px;
        width: auto;
    }
}

/* Adjust menu item sizes */
.navbar-nav .nav-item .nav-link {
    font-size: 14px;
    padding: 10px 15px;
}

.dropdown-menu .submenu-content .row .col a span {
    width: 90px;
    height: 90px;
}

.dropdown-menu .submenu-content .row .col a img {
    width: 35px;
}

.dropdown-menu .submenu-content .row .col a .alt-font {
    font-size: 14px;
}
</style>