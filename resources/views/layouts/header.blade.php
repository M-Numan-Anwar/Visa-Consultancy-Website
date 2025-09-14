  <header class="header">

        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <div class="header-top-left">
                        <div class="header-top-contact">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-location-dot"></i></i>DHA PAHSE 1 C, LAHORE</a>
                                </li>
                                <li><a href="tel:+21236547898"><i class="fa-solid fa-phone-flip"></i>+923268332024</a></li>
                                <li><a href="https://live.themewild.com/cdn-cgi/l/email-protection#345d5a525b74514c55594458511a575b59">
                                           <i class="fa-solid fa-envelope"></i><span class="__cf_email__" data-cfemail="92fbfcf4fdd2f7eaf3ffe2fef7bcf1fdff">@Futureprospectsimmigrationlawconsultant.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="assets/img/logo/logo.png" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-stream"></i></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                               
                            </li>
                          
                            <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle {{ request()->routeIs('visa') ? 'active' : '' }}" href="{{ route('visa') }}">Visa</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="{{ route('business-visa') }}">Business Visa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('student-visa') }}">Student Visa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('jobseeker-visa') }}">Job Seeker Visa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('tourist-visa') }}">Tourist Visa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('family-visa') }}">Family Visa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('transit-visa') }}">Transit Visa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('migrate-visa') }}">Migrate Visa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('consular-closings') }}">Consular Closings</a></li>
                                    <li><a class="dropdown-item" href="{{ route('diplomatic-visa') }}">Diplomatic Visa</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ request()->routeIs('country') ? 'active' : '' }}" href="{{ route('country') }}">Country</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="{{ route('australia') }}">Australia</a></li>
                                    <li><a class="dropdown-item" href="{{ route('united-states') }}">United States</a></li>
                                    <li><a class="dropdown-item" href="{{ route('united-kingdom') }}">United Kingdom</a></li>
                                    <li><a class="dropdown-item" href="{{ route('canada') }}">Canada</a></li>
                                    <li><a class="dropdown-item" href="{{ route('singapore') }}">Singapore</a></li>
                                    <li><a class="dropdown-item" href="{{ route('new-zealand') }}">New Zealand</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="{{ route('services') }}">Services</a></li>
                                    <li><a class="dropdown-item" href="{{ route('faq') }}">Faq</a></li>
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                    <li><a class="dropdown-item" href="{{ route('forgot-password') }}">Forgot Password</a></li>
                                    <li><a class="dropdown-item" href="{{ route('404') }}">404 Error</a></li>
                                    <li><a class="dropdown-item" href="{{ route('terms') }}">Terms Of Service</a></li>
                                    <li><a class="dropdown-item" href="{{ route('privacy') }}">Privacy Policy</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">about</a>
                            </li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                        <div class="header-nav-right">
                            <div class="header-nav-search">
                                <a href="#" class="search-box-outer"><i class="fa-solid fa-magnifying-glass"></i></a>
                            </div>
                            <div class="header-btn">
                                <a href="#" class="theme-btn">GET QUOTE<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>