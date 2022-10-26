<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeforest.kreativdev.com/finlance/finlance/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:47:01 GMT -->

<head>
    <title>CoastalTrustCapital-About</title>
    @include('includes.home_css')
</head>


<body>
    <!--   header area start   -->
    @include('includes.home_header')

    <!--   header area end   -->


    <!--   hero area start   -->
    <div class="about-bg breadcrumb-area about">
        <div class="container">
            <div class="service breadcrumb-txt">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-sm-10">
                        <span>Company Overview</span>
                        <h1>We are 100%Trusted Financial Experts</h1>
                        <ul class="breadcumb">
                            <li><a href="{{ route('app.home') }}">Home</a></li>
                            <li>Company overview</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area-overlay"></div>
    </div>
    <!--   hero area end    -->


    <!--   about company section start   -->
    <div class="about-company-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <span class="section-title">About company</span>
                    <h2 class="section-summary">We look forward to getting to know you here's a little about us</h2>
                    <div class="about-company-txt">
                        <p>Our philosophy is simple: our entire business is centred on you and your goals. Financial
                            planning is not about money, it’s about finding ways to help you achieve your goals through
                            careful and thoughtful planning and execution.</p>
                        <p>Of course money is generally central to that in today’s world; but it is not a goal in
                            itself. It’s a means of reaching your goals whatever they might be.</p>
                        <p>At CostalTrustCapitals we help you identify, assess and shape those goals so your plans and actions are
                            always focused on achieving them. whatever they might be.</p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-6">
                    <div class="tile-gallery">
                        <div class="row">
                            <div class="col-12">
                                <div class="big-img big-img-bg"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-img small-img-bg-1"></div>
                            </div>
                            <div class="col-6">
                                <div class="small-img small-img-bg-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="choose-us">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-reason">
                            <div class="about-icon-wrapper"> <i class="flaticon-reload"></i> </div>
                            <div class="reason-txt">
                                <h4>Inspired</h4>
                                <p>Plans require action or they are just words – at CostalTrustCapitals we work with you to implement
                                    your strategic plans</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-reason">
                            <div class="about-icon-wrapper"> <i class="flaticon-organize"></i> </div>
                            <div class="reason-txt">
                                <h4>Different</h4>
                                <p>Goals without a plan are just a dream – so at CostalTrustCapitals our team of industry experts
                                    will work with you to develop strategic plans.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-reason">
                            <div class="about-icon-wrapper"> <i class="flaticon-arrow-on-the-center-of-the-target"></i>
                            </div>
                            <div class="reason-txt">
                                <h4>Trusted</h4>
                                <p>Great financial advice starts with an understanding of your personal, financial and
                                    lifestyle goals At CostalTrustCapitals we help you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   about company section end   -->


    <!--    call to action section start    -->
    <div class="cta-section cta-bg">
        <div class="container">
            <div class="cta-content">
                <div class="row">
                    <div class="col-md-9 col-lg-7">
                        <h3>Contact us for help with your finances.</h3>
                    </div>
                    <div class="col-md-3 col-lg-5 contact-btn-wrapper">
                        <a href="{{ route('about') }}" class="boxed-btn contact-btn"><span>Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-overlay"></div>
    </div>
    <!--    call to action section end    -->


    <!--   testimonial section start    -->
    <div class="testimonial-section pb-115" style="margin-top: 50px">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <span class="section-title">Testimonial</span>
                  <h2 class="section-summary">What people say about CoastalTrustCapital real estate investment</h2>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="testimonial-carousel owl-carousel owl-theme">
                      <div class="single-testimonial">
                          <div class="img-wrapper"><img
                                  src="{{ asset('assets/newfile2/img/testimonial/client-1.jpg') }}" alt="">
                          </div>
                          <div class="client-desc">
                              <p class="comment">They provide you with the best properties that give you high
                                  returns long term</p>
                              <h6 class="name">Jonathon Berkshire</h6>
                              <p class="rank">Denmark</p>
                          </div>
                      </div>
                      <div class="single-testimonial">
                          <div class="img-wrapper"><img
                                  src="{{ asset('assets/newfile2/img/testimonial/client-2.jpg') }}" alt="">
                          </div>
                          <div class="client-desc">
                              <p class="comment">Once you make that first investment, the rest is history. its just
                                  bout the best real estate investment firms</p>
                              <h6 class="name">Rayo finlyke</h6>
                              <p class="rank">Minesota</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <!--   testimonial section end    -->


    <!--    team section start   -->
    <div class="team-section about">
        <div class="team-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="section-title">Executive Team</span>
                        <h2 class="section-summary">Meet our expert finlance executive team
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-member">
                            <div class="team-img-wrapper">
                                <img src="{{ asset('assets/newfile2/img/team/member-1.jpg') }}" alt="">
                                <div class="social-accounts">
                                    <ul class="social-account-lists">
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h5 class="member-name">Admond harb</h5>
                                <small>Advisor</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-member">
                            <div class="team-img-wrapper">
                                <img src="{{ asset('assets/newfile2/img/team/member-2.jpg') }}" alt="">
                                <div class="social-accounts">
                                    <ul class="social-account-lists">
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h5 class="member-name">Helen fox</h5>
                                <small>Managing Director</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-member">
                            <div class="team-img-wrapper">
                                <img src="{{ asset('assets/newfile2/img/team/member-3.jpg') }}" alt="">
                                <div class="social-accounts">
                                    <ul class="social-account-lists">
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h5 class="member-name">Alen Donald</h5>
                                <small>Managing Director</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-member">
                            <div class="team-img-wrapper">
                                <img src="{{ asset('assets/newfile2/img/team/member-4.jpg') }}" alt="">
                                <div class="social-accounts">
                                    <ul class="social-account-lists">
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                        <li class="single-social-account"><a href="#"><i
                                                    class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h5 class="member-name">Hrver Pual</h5>
                                <small>Sales And Marketting</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    team section end   -->

    <!--    footer section start   -->
    @include('includes.home_footer')

    <!--    footer section end   -->


    @include('includes.home_script')

</body>


</html>
