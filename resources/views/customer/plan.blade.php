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
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Investment Category</option>
                                        <option value="1">Real Estate</option>
                                        <option value="1">Cryptocurrency Investment</option>
                                        <option value="2">Stocks Investments</option>
                                        <option value="3">Medical Hedgefunds Investments</option>
                                        <option value="4">Tech Startups Investments</option>
                                    </select>
                                </div>
                            </div>
                            <!--  col-md-6   -->
                        </div>
                        {{-- <h2>Contact Us</h2> --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Investment Category</option>
                                        <option value="1">Real Estate</option>
                                        <option value="1">Cryptocurrency Investment</option>
                                        <option value="2">Stocks Investments</option>
                                        <option value="3">Medical Hedgefunds Investments</option>
                                        <option value="4">Tech Startups Investments</option>
                                    </select>
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="company">Duration</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Duration</option>
                                        <option value="1">7 Days</option>
                                        <option value="1">14 Days</option>
                                        <option value="2">30 Days</option>
                                        <option value="3">60 Days</option>
                                        <option value="4">90 Days</option>
                                    </select>
                                </div>
                            </div>
                            <!--  col-md-6   -->
                        </div>


                        <div class="row">
                            <div class="col-md-44">
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" class="form-control" placeholder="" id="company">
                                </div>


                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="phone">
                                </div>
                            </div>
                            <!--  col-md-6   -->
                        </div>
                        <!--  row   -->


                        <div class="row">
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="email">
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="url">Your Website <small>Please include http://</small></label>
                                    <input type="url" class="form-control" id="url" placeholder="url">
                                </div>

                            </div>
                            <!--  col-md-6   -->
                        </div>
                        <!--  row   -->

                        <button type="submit" style="background-color: #006849" class="btn btn-primary">Submit</button>
                    </form>
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
