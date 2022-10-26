<div class="header-area header-absolute">
    <div class="container">
        <div class="support-bar-area">
            <div class="row">
                <div class="col-lg-6 support-contact-info">
                    <span class="address"><i class="flaticon-placeholder"></i> 143 castle road 517 district</span>
                    <span class="phone"><i class="flaticon-chat"></i> + 00 123 234 567</span>
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-navbar">
            <div class="row">
                <div class="col-lg-2 col-6">
                    <div class="logo-wrapper">
                        <a href="{{ route('app.home') }}"><img src="assets/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-6 text-right position-static">
                    <ul class="main-menu" id="mainMenu">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('user.cryptoMarket') }}">Crypto Market</a></li>
                        <li class="dropdown">
                            <a class="dropdown-btn" href="#">Investments</a>
                            <ul class="dropdown-lists">
                                <li><a href="{{ route('user.realEstate') }}">Real Estate</a></li>
                                <li><a href="#">Stocks Investment</a></li>
                                <li><a href="{{ route('user.medHedgeFunds') }}">Medical Hedge Funds Investments</a></li>
                                <li><a href="{{ route('user.techStartup') }}">Tech Startup Investments</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('user.faq') }}">FAQs</a></li>
                        <li><a href="{{ route('user.contact') }}">Contact-Us</a></li>
                        <li><a href="{{ route('user.terms') }}">Terms of Use</a></li>
                        <li><a href="{{ route('user.login') }}">Login</a></li>
                        <li><a href="{{ route('user.register') }}" class="boxed-btn">Register</a></li>
                    </ul>
                    <div id="mobileMenu"></div>
                </div>
            </div>
        </div>
    </div>
</div>