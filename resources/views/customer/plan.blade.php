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
                                    <label for="company">Investment Categories</label>
                                    <select class="form-select plan_change" aria-label="Default select example">
                                        <option selected>Select Investment Category</option>
                                        <option value="1" class="real_estate">Real Estate</option>
                                        <option value="2" class="crypto">Cryptocurrency Investment</option>
                                        <option value="3" class="stocks">Stocks Investments</option>
                                        <option value="4" class="medic">Medical Hedgefunds Investments</option>
                                        <option value="5" class="tech">Tech Startups Investments</option>
                                    </select>
                                </div>
                            </div>
                            <!--  col-md-6   -->
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="company">Plans</label>
                                    <select class="form-select second_plan_change" aria-label="Default select example">
                                        <option selected>Select Plans</option>
                                    </select>
                                </div>
                            </div>
                            <!--  col-md-6   -->
                        </div>
                        {{-- <h2>Contact Us</h2> --}}
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="company">Return on investment (ROI)</label>
                                    <input type="email" value="10%" disabled class="form-control second_roi_change disabled"
                                        id="exampleFormControlInput1" placeholder="ROI">
                                </div>
                                {{-- <select class="form-select second_roi_change disabled" aria-label="Default select example"> --}}
                                {{-- <option selected>Selected ROI</option> --}}
                                {{-- <option value="1">40%</option> --}}
                                {{-- </select> --}}
                            </div>
                        </div>
                        <!--  col-md-6   -->

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="company">Duration</label>
                                    <select class="form-select roi_change" aria-label="Default select example">
                                        <option selected>Select Duration</option>
                                        <option value="1">7 Days</option>
                                        <option value="2">14 Days</option>
                                        <option value="3">30 Days</option>
                                        <option value="4">60 Days</option>
                                        <option value="5">90 Days</option>
                                        <option value="6">180 Days</option>
                                        <option value="7">365 Days</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--  col-md-6   -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="company">Select Capital</label>
                                    <select class="form-select roi_change_by_capital" aria-label="Default select example">
                                        <option selected>Select amount</option>
                                        <option value="1">$1,000</option>
                                        <option value="2">$3,000</option>
                                        <option value="3">$5,000</option>
                                        <option value="4">$10,000</option>
                                        <option value="5">$15,000</option>
                                        <option value="6">$25,000</option>
                                        <option value="7">$50,000</option>
                                        <option value="8">$75,000</option>
                                        <option value="9">$100,000</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                        <button type="submit" style="background-color: #006849; magin-top: 20px"
                        class="btn btn-primary">Submit</button>

                </div>






                <div style="height: 100px"></div>
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
