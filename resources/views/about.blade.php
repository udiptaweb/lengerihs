@extends('layouts.app')

@section('title')
About | {{config('app.name')}}
@endsection

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>About</h2>

            <ul>
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>

                <li class="active">About</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Stat About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="about-img-two mr-15">
                    <img src="assets/images/about-img-2.jpg" alt="Image">

                    <div class="about-shape">
                        <img src="assets/images/about-shape.png" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="about-content ml-15">
                    <span>About our university</span>
                    <h2>Our education system inspires the next generation.</h2>

                    <p>Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>

                    <a href="about.html" class="default-btn">
                        Find out more
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Counter Area -->
<section class="counter-area bg-color-f8fafb pt-100 pb-70">
    <div class="container">
        <div class="counter-bg">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter bg-style">
                        <i class="flaticon-graduated"></i>

                        <h2>
                            <span class="odometer" data-count="4517">00</span>
                        </h2>
                        <h4>Students</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter bg-style">
                        <i class="flaticon-teacher"></i>

                        <div class="count-title">
                            <h2>
                                <span class="odometer" data-count="640">00</span>
                            </h2>
                            <h4>Teachers</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter bg-style">
                        <i class="flaticon-book-1"></i>

                        <div class="count-title">
                            <h2>
                                <span class="odometer" data-count="54">00</span>
                            </h2>
                            <h4>Subjects</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter bg-style">
                        <i class="flaticon-graduation-cap"></i>

                        <div class="count-title">
                            <h2>
                                <span class="odometer" data-count="269">00</span>
                            </h2>
                            <h4>Degrees</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape counter-shape-1">
                <img src="assets/images/counter-shape-1.png" alt="Image">
            </div>
            <div class="shape counter-shape-2">
                <img src="assets/images/counter-shape-2.png" alt="Image">
            </div>
        </div>
    </div>
</section>
<!-- End Counter Area -->

<!-- Start Our Campus Information Area -->
<section class="our-campus-information-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7">
                <div class="campus-img">
                    <img src="assets/images/campus-img.jpg" alt="Image">
                </div>
            </div>

            <div class="col-xl-5">
                <div class="campus-content">
                    <span>Our campus information</span>
                    <h2>We are proud that more than 50 students from different nationalities study on our campus</h2>
                    <p>Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.</p>

                    <a href="campus-information.html" class="read-more">
                        Find out more
                        <span class="ri-arrow-right-line"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Campus Information Area -->

@endsection