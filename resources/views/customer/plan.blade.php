<!doctype html>
<html lang="en">

<head>
    @include('includes.c_css')
    <title>Coastaltrustcapitals</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        @include('includes.c_sidebar')
        @include('includes.c_header')


        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">PLANS</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Choose A Suitable Investment Plan
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                

            </div>
            <div class="container">
                <div class="card-deck">
                    <div style="margin-top: 10px;">
                        <div class="card" style="width: 18rem;">
    
                            <div class="card-body">
                                <small>Coastal Trust Capitals</small>
                                <h5 class="card-title">View All Cryptocurrency Invesment Plans</h5>
                                <small>PRESET PACKAGES</small>
                                <p style="font-size:30px;" class="card-text"></p>
                                <a style="background-color: #006849; color: white;" href="{{ route('user.plan1.view', ['all']) }}"
                                    class="btn btn-sm">Continue</a>
                            </div>
                        </div>
                    </div>
    
    
                    <div style="margin-top: 10px;">
                        <div class="card" style="width: 18rem;">
    
                            <div class="card-body">
                                <small>Coastal Trust Capitals</small>
                                <h5 class="card-title">View All Stocks Investment Plans</h5>
                                <small>PRESET PACKAGES</small>
                                <p style="font-size:30px;" class="card-text"></p>
                                <a style="background-color: #006849; color: white;" href="{{ route('user.plan2.view', ['all']) }}"
                                    class="btn btn-sm">Continue</a>
                            </div>
                        </div>
                    </div>
    
                    <div style="margin-top: 10px;">
                        <div class="card" style="width: 18rem;">
    
                            <div class="card-body">
                                <small>Coastal Trust Capitals</small>
                                <h5 class="card-title">View All Real Estate Investment Plans</h5>
                                <small>PRESET PACKAGES</small>
                                <p style="font-size:30px;" class="card-text"></p>
                                <a style="background-color: #006849; color: white;" href="{{ route('user.plan3.view', ['all']) }}"
                                    class="btn btn-sm">Continue</a>
                            </div>
                        </div>
                    </div>
    
                    <div style="margin-top: 10px;">
                        <div class="card" style="width: 18rem;">
    
                            <div class="card-body">
                                <small>Coastal Trust Capitals</small>
                                <h5 class="card-title">View All Medical Hedgefunds Investment Plans</h5>
                                <small>PRESET PACKAGES</small>
                                <p style="font-size:30px;" class="card-text"></p>
                                <a style="background-color: #006849; color: white;" href="{{ route('user.plan4.view', ['all']) }}"
                                    class="btn btn-sm">Continue</a>
                            </div>
                        </div>
                    </div>
    
                    <div style="margin-top: 10px;">
                        <div class="card" style="width: 18rem;">
    
                            <div class="card-body">
                                <small>Coastal Trust Capitals</small>
                                <h5 class="card-title">View All Tech Startup Investment Plans</h5>
                                <small>PRESET PACKAGES</small>
                                <p style="font-size:30px;" class="card-text"></p>
                                <a style="background-color: #006849; color: white;" href="{{ route('user.plan5.view', ['all']) }}"
                                    class="btn btn-sm">Continue</a>
                            </div>
                        </div>
                    </div>
    
                    {{-- <div style="margin-top: 10px;">
                        <div class="card" style="width: 18rem;">
    
                            <div class="card-body">
                                <small>Coastal Trust Capitals</small>
                                <h5 class="card-title">Semester 1- First Year Engineering</h5>
                                <small>PRESET PACKAGES</small>
                                <p style="font-size:30px;" class="card-text"></p>
                                <a style="background-color: #006849; color: white;" href="#"
                                    class="btn btn-sm">Continue</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

       
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        @include('includes.c_footer')

    </div>
    <!--end wrapper-->
    <!--start switcher-->
    @include('includes.c_switch')
    @include('includes.c_script')

</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 15:30:50 GMT -->

</html>
