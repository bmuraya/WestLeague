<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href=" {{ asset('css/styles.css') }}" type="text/css"/>
    <link rel="stylesheet" href=" {{ asset('css/form.css') }}" type="text/css"/>

    @stack("styles")
</head>

<body>

    <div class=" site-wrapper ">

        <div class="site-overlay"></div>

        <div class="header-mobile " id="header-mobile">
            <div class="header-mobile__logo">
                <a href="{{ route('home.index') }}">
                    <img src="{{ asset('img/logo-mobile.png') }}" 
                         srcset="{{ asset('img/logo-mobile.png') }} 2x" 
                         alt="FKF" 
                         class="header-mobile__logo-img">
                </a>
            </div>
            <div class="header-mobile__inner">
                <a href="{{ route('home.index') }}" onclick="return false" id="header-mobile__toggle" class="burger-menu-icon">
                    <span class="burger-menu-icon__line"></span>
                </a>
            
                <span class="header-mobile__search-icon">
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-outline-success">Login</a>
                    @else
                    <a href="{{ Auth::user()->utype === 'ADM' ? route('admin.index'): route('user.index') }}" class="btn btn-outline-success">

                          {{ Auth::user()->name }} 
                        </a>
                    @endguest
                </span>
            </div>

        </div>
        <header class="header affix-top" data-spy="affix" data-offset-top="70">
            <div class="header__top-bar d-flex flex-wrap">
                <div class="container-fluid">
                   
               @guest       
                    <div class="header__top-bar_inner ">
                        <a href="{{ route('login') }}" ><button class="btn btn-outline-success me-2">Login</button>
                        </a>
                    </div>
                   @else 
                   <div class="header__top-bar_inner ">
                    <a href="{{ Auth::user()->utype === 'ADM' ? route('admin.index'): route('user.index') }}" class="btn btn-outline-success">

                        {{ Auth::user()->name }} 
                    </a>
                </div>
                  
                    @endguest
                </div>
            </div>

            <div class="header__secondary ">
                <div class="container-fluid">
                    <div class="header-static-club-logos">

                        <ul class="header-club-logos">

                            <li>
                                <div class="header-club-logos_inner">
                                    <a href="inside.html" class="header-club-logos_inner">
                                        <div class="header-club-logos_logo"> <img src="{{ asset('img/log13.png')}}"></div>

                                    </a>

                                </div>
                            </li>
                            <li>
                                <div class="header-club-logos_inner">
                                    <a href="#" class="header-club-logos_inner">
                                        <div class="header-club-logos_logo"> <img src="{{ asset('img/log6.png')}}"></div>

                                    </a>

                                </div>
                            </li>
                            <li>
                                <div class="header-club-logos_inner">
                                    <a href="#" class="header-club-logos_inner">
                                        <div class="header-club-logos_logo"> <img src="{{ asset('img/log7.png')}}"></div>

                                    </a>

                                </div>
                            </li>
                            <li>
                                <div class="header-club-logos_inner">
                                    <a href="#" class="header-club-logos_inner">
                                        <div class="header-club-logos_logo"> <img src="{{ asset('img/Golden Arrows.png')}}"></div>

                                    </a>

                                </div>
                            </li>
                            <li>
                                <div class="header-club-logos_inner">
                                    <a href="#" class="header-club-logos_inner">
                                        <div class="header-club-logos_logo"> <img src="{{ asset('img/Kaizer Chiefs.png')}}"></div>

                                    </a>

                                </div>
                            </li>
                           
                            <li>
                                <div class="header-club-logos_inner">
                                    <a href="#" class="header-club-logos_inner">
                                        <div class="header-club-logos_logo"> <img src="{{ asset('img/log7.png')}}"></div>

                                    </a>

                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="header__primary">
                <div class="container-fluid">
                    <div class="header__primary-inner">
                        <div class="header-logo">
                            <a href="{{ route('home.index') }}"><img src="{{ asset('img/logo-KFK.png')}}" alt="FKF"
                                    class="header-logo__img"></a>
                        </div>


                        <nav class="main-nav  ">
                            <ul class="main-nav__list">
                                <div class="header-mobile__logo"><span class="main-nav__back"></span>
                                    <a href="{{ route('home.index') }}"><img src="{{ asset('img/logo-mobile.png')}}" srcset="img/logo-mobile.png"
                                            alt="FKF" class="header-mobile__logo-img"></a>
                                </div>

                                <li class="nav-item active"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="/news">News</a></li>
                                <li class="nav-item"><a class="nav-link" href="/videos">Regional</a></li>
                                <li class="nav-item"><a class="nav-link" href="/photos">County</a></li>
                                <li class="nav-item"><a class="nav-link" href="/photos">Sub County</a></li>
                                <li class="nav-item"><a class="nav-link" href="/photos">Youth Men</a></li>
                                <li class="nav-item"><a class="nav-link" href="/photos">Youth Women</a></li>
                                <li class="nav-item"><a class="nav-link" href="/photos">Clubs</a></li>

                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </header>


        <!-- hero section  -->
 
       @yield("content")

    
    </div>

    <!-- footer section  -->
    <footer class="footer bg-dark text-light py-4">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo and Title -->
                <div class="col-lg-4 text-center text-lg-start">
                    <img src="img/logo-KFK.png" alt="Logo" class="footer-logo mb-2">
                    <!-- <p class="mb-0">Nairobi West<br><span class="text-danger">County League</span></p> -->
                </div>

                <!-- Links -->
                <div class="col-lg-4">
                    <ul class="list-unstyled row text-center text-lg-start">
                        <li class="col-6 mb-2"><a href="{{ route('home.index') }}" class="footer-link">Home</a></li>
                        <li class="col-6 mb-2"><a href="#" class="footer-link">Partnership</a></li>
                        <li class="col-6 mb-2"><a href="#" class="footer-link">Terms of Service</a></li>
                        <li class="col-6 mb-2"><a href="#" class="footer-link">News & Events</a></li>
                        <li class="col-6 mb-2"><a href="#" class="footer-link">Contacts</a></li>
                        <li class="col-6 mb-2"><a href="#" class="footer-link">Report Abuse</a></li>

                    </ul>
                </div>

                <!-- Social Media -->
                <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end">
                    <ul class="list-unstyled d-flex gap-3">
                        <li><a href="#" class="footer-icon-link"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="footer-icon-link"><i class="fab fa-x-twitter"></i></a></li>
                        <li><a href="#" class="footer-icon-link"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#" class="footer-icon-link"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" class="footer-icon-link"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" class="footer-icon-link"><i class="fab fa-tiktok"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="row mt-4">
                <div class="col text-center">
                    <p class="mb-0 small">&copy; 2022 All Rights Reserved © Nairobi West County League. Under FKF</p>
                </div>
            </div>
        </div>
    </footer>


  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle the mobile menu visibility and overlay on burger click
        document.getElementById('header-mobile__toggle').addEventListener('click', function () {
            var siteWrapper = document.querySelector('.site-wrapper');
            siteWrapper.classList.toggle('site-wrapper--has-overlay'); // Show overlay and menu
        });
    
        // Close the overlay when clicked outside the menu (on the overlay itself)
        document.querySelector('.site-overlay').addEventListener('click', function () {
            var siteWrapper = document.querySelector('.site-wrapper');
            siteWrapper.classList.remove('site-wrapper--has-overlay'); // Hide overlay and menu
        });
    
        // Close the overlay and menu when the "back" span is clicked
        document.querySelector('.main-nav__back').addEventListener('click', function () {
            var siteWrapper = document.querySelector('.site-wrapper');
            siteWrapper.classList.remove('site-wrapper--has-overlay'); // Hide overlay and menu
        });
    
    </script>
    @stack("scripts")

</body>

</html>
