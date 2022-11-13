<!DOCTYPE html>
<html lang="en">

<head>
    <title>CoastalTrustCapital- Crypto market</title>
    @include('includes.home_css')

</head>



<body>
    <!--   header area start   -->
    @include('includes.home_header')
    <!--   header area end   -->


    <!--   hero area start   -->
    <div class="hero-area" data-parallax="scroll" data-speed="0.2"
        data-image-src="{{ asset('assets/newfile2/img/crypto_gif.gif') }}">
        <div class="container">
            <div class="hero-txt">
                <div class="row">
                    <div class="col-12">
                        <span>Finanancial planning for life</span>
                        <h1>Trusted to help guide entrepreneurs make better financial decisions.</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-area-overlay"></div>
    </div>
    <!--   hero area end    -->


    <!--    introduction area start   -->
    <div class="intro-section">
        <div class="container">
            <div class="hero-features">
                
                <div class="row">
                    <div class="col-md-3 col-sm-6 single-hero-feature">
                        <div class="outer-container">
                            <div class="inner-container">
                                <div class="icon-wrapper">
                                    <i class="flaticon-briefcase"></i>
                                </div>
                                <h3>Real Estate
                                    Investment
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 single-hero-feature">
                        <div class="icon-wrapper">
                            <i class="flaticon-wallet"></i>
                        </div>
                        <h3>Cryptocurrency and
                            Stocks Investment
                        </h3>
                    </div>
                    <div class="col-md-3 col-sm-6 single-hero-feature">
                        <div class="icon-wrapper">
                            <i class="flaticon-chart"></i>
                        </div>
                        <h3>Medical Hedge Funds</h3>
                    </div>
                    <div class="col-md-3 col-sm-6 single-hero-feature">
                        <div class="icon-wrapper">
                            <i class="flaticon-profits"></i>
                        </div>
                        <h3>Tech Startups Investment</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--    introduction area end   -->


    <!--   how we do section start   -->
    <div class="approach-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="approach-summary">
                        <span class="section-title">How we do</span>
                        <h2 class="section-summary">A fresh approach to financial services for entrepreneurs</h2>
                        <a href="{{ route('about') }}" class="boxed-btn"><span>our approach</span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="approach-lists">
                        <li class="single-approach">
                            <div class="approach-icon-wrapper"><i
                                    class="flaticon-arrow-on-the-center-of-the-target"></i></div>
                            <div class="approach-text">
                                <h4>Plans</h4>
                                <p>Every Great financial dream is envisioned into a futuristic plan to be achieved, and our plan is to financially enable you starts with an understanding of your personal, financial and lifestyle goals at a variety of options.  At Coastal Trust Capital, Our plan is making you investments options the best </p>
                            </div>
                        </li>
                        <li class="single-approach">
                            <div class="approach-icon-wrapper"><i class="flaticon-organize"></i></div>
                            <div class="approach-text">
                                <h4>Goals</h4>
                                <p>Goals without a plan are just a dream – so at Coastal Trust Capital, our team of industry experts will work with you to develop strategic plans ranging from top trending business models and low risk financial opportunities. Our goal is give you the right plans and financial resources to hit your target financial goal in multi-investment opportunities</p>
                            </div>
                        </li>
                        <li class="single-approach">
                            <div class="approach-icon-wrapper"><i class="flaticon-reload"></i></div>
                            <div class="approach-text">
                                <h4>Action</h4>
                                <p>Plans require action or they are just words – at Coastal Trust Capital, we work with you to implement your strategic financial goals and plans through investment on value basis, long term capital deployment, high quality assets control, and generating attractive</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--   how we do section end   -->
    <div class="approach-section">
        <div class="container">
            
            <div class="row">
                
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a
                            href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener"
                            target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView
                    </div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                        {
                            "width": "100%",
                            "height": "600",
                            "defaultColumn": "overview",
                            "screener_type": "crypto_mkt",
                            "displayCurrency": "USD",
                            "colorTheme": "dark",
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>



    <!--   Testimonial section start    -->
    <div class="testimonial-section pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="section-title">Testimonial</span>
                    <h2 class="section-summary">What people say about finlance planning</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <div class="single-testimonial">
                            <div class="img-wrapper"><img src="assets/img/testimonial/client-1.jpg" alt="">
                            </div>
                            <div class="client-desc">
                                <p class="comment">They provide innovative solutions with the best. tempor incididunt
                                    utla bore et dolor tempor incididunt .</p>
                                <h6 class="name">Jonathon doe</h6>
                                <p class="rank">Director, art media</p>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="img-wrapper"><img src="assets/img/testimonial/client-2.jpg" alt="">
                            </div>
                            <div class="client-desc">
                                <p class="comment">They provide innovative solutions with the best. tempor incididunt
                                    utla bore et dolor tempor incididunt .</p>
                                <h6 class="name">Jonathon doe</h6>
                                <p class="rank">Director, art media</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Testimonial section end    -->


    <!--    team section start   -->
    <div class="team-section section-padding" data-parallax="scroll" data-speed="0.2"
        data-image-src="{{ asset('assets/newfile1/img/new1.gif') }}">
        <div class="team-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="section-title">Expert Team</span>
                        <h2 class="section-summary">
                            At CoastalTrustCapital we have a team of financial experts with over 5 decades of experience in stocks
                            investment. You can count on use to manage you portfolio with high return on investment
                        </h2>
                    </div>
                    <div class="col-lg-6" style="overflow: scroll">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div id="tradingview_a9674"></div>
                            <div class="tradingview-widget-copyright"><a
                                    href="https://www.tradingview.com/symbols/AAPL/" rel="noopener"
                                    target="_blank"><span class="blue-text">Apple</span></a> by TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">
                                new TradingView.MediumWidget({
                                    "symbols": [
                                        [
                                            "Apple",
                                            "AAPL|1D"
                                        ],
                                        [
                                            "Google",
                                            "GOOGL|1D"
                                        ],
                                        [
                                            "Microsoft",
                                            "MSFT|1D"
                                        ]
                                    ],
                                    "chartOnly": false,
                                    "width": 600,
                                    "height": 500,
                                    "locale": "en",
                                    "colorTheme": "dark",
                                    "autosize": false,
                                    "showVolume": false,
                                    "hideDateRanges": false,
                                    "scalePosition": "right",
                                    "scaleMode": "Normal",
                                    "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                                    "noTimeScale": false,
                                    "valuesTracking": "1",
                                    "chartType": "line",
                                    "container_id": "tradingview_a9674"
                                });
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
        <div class="team-overlay"></div>
    </div>
    <!--    team section end   -->


    <!--    blog section start   -->
    {{-- <div class="blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="section-title">Our blog</span>
                    <h2 class="section-summary">Have a look at the finlance latest News</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-img-wrapper">
                            <img src="assets/img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog-txt">
                            <p class="date"><small>By <span class="username">Admin</span></small> | <small>07 Aug,
                                    2018</small> </p>
                            <h4 class="blog-title"><a href="blog-details.html">Survival Strategies to Ensure
                                    Business...</a></h4>
                            <p class="blog-summary">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                            <a href="blog-details.html" class="readmore-btn"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-img-wrapper">
                            <img src="assets/img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog-txt">
                            <p class="date"><small>By <span class="username">Admin</span></small> | <small>07 Aug,
                                    2018</small> </p>
                            <h4 class="blog-title"><a href="blog-details.html">Invest $5000 for secure your
                                    policy...</a></h4>
                            <p class="blog-summary">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                            <a href="blog-details.html" class="readmore-btn"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-img-wrapper">
                            <img src="assets/img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog-txt">
                            <p class="date"><small>By <span class="username">Admin</span></small> | <small>07 Aug,
                                    2018</small> </p>
                            <h4 class="blog-title"><a href="blog-details.html">More than 3k company join this year
                                    in...</a></h4>
                            <p class="blog-summary">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                            <a href="blog-details.html" class="readmore-btn"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--    blog section end   -->


    <!--   partner section start    -->
    <div class="partner-section">
        <div class="container top-border">
            <div class="row">
                <div class="col-md-12">
                    <div class="partner-carousel owl-carousel owl-theme">
                        <div class="single-partner-item">
                            <div class="outer-container">
                                <div class="inner-container">
                                    <img src="assets/img/partners/partner-1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single-partner-item">
                            <div class="outer-container">
                                <div class="inner-container">
                                    <img src="assets/img/partners/partner-2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single-partner-item">
                            <div class="outer-container">
                                <div class="inner-container">
                                    <img src="assets/img/partners/partner-3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single-partner-item">
                            <div class="outer-container">
                                <div class="inner-container">
                                    <img src="assets/img/partners/partner-4.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single-partner-item">
                            <div class="outer-container">
                                <div class="inner-container">
                                    <img src="assets/img/partners/partner-5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   partner section end    -->


    <!--    footer section start   -->
    @include('includes.home_footer')

    <!--    footer section end   -->


    <!-- preloader section start -->
    <div class="loader-container">
        <span class="loader">
            <span class="loader-inner"></span>
        </span>
    </div>
    @include('includes.home_script')

</body>

<!-- Mirrored from themeforest.kreativdev.com/finlance/finlance/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:47:00 GMT -->

</html>
