<section class="navigation">
    <div class="nav-container">
        <div class="brand">
            <a href="#!">Logo</a>
        </div>
        <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li>
                    <a href="#!">Investments</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="{{ route('user.realEstate') }}">Real Estate</a>
                        </li>
                        <li><a href="{{ route('about') }}">Crypto Market</a></li>
                        <li>
                            <a href="#!">Stocks Investments</a>
                        </li>
                        <li>
                            <a href="#!">Medical Hedgefunds Investments</a>
                        </li>
                        <li>
                            <a href="#!">Tech Startup Investments</a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('user.faq') }}">FAQs</a></li>
                <li><a href="{{ route('user.contact') }}">Contact Us</a></li>
                <li><a href="{{ route('user.terms') }}">Terms Of Use</a></li>
                <li><a href="{{ route('user.login') }}">Login</a></li>
                <li><a href="{{ route('user.register') }}">Register</a></li>
                <li>
                    <a href="#!">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</section>