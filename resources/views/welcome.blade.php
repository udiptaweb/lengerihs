@extends('layouts.app')

@section('title')
{{config('app.name')}}
@endsection

@section('content')
<section class="" data-jarallax='{"speed": 0.3}'>
    <div class="top-banner">
        <img src="{{asset('assets/images/banner/banner-bg-3.jpg')}}" alt="">
    </div>
</section>


<!-- Start Simple Steps Area -->
<section class="simple-steps-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Welcome To <br> Lengeri Higher Secondary School</h2>
        </div>

        <!-- <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-simple-steps icon-bg-style">
                    <i class="flaticon-search"></i>
                    <h3>Querist</h3>
                    <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-simple-steps icon-bg-style">
                    <i class="flaticon-choosing"></i>
                    <h3>Choose</h3>
                    <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-simple-steps icon-bg-style">
                    <i class="flaticon-contract"></i>
                    <h3>Enroll</h3>
                    <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-simple-steps icon-bg-style">
                    <i class="flaticon-presentation"></i>
                    <h3>Start</h3>
                    <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
            </div>
        </div> -->
    </div>
</section>
<!-- End Simple Steps Area -->

<!-- Stat About Area -->
<section class="about-area about-area-style-three bg-color-f8fafb ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="about-img-two mr-15">
                    <img src="assets/images/about-img-3.jpg" alt="Image">

                    <div class="about-shape">
                        <img src="assets/images/about-shape.png" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="about-content ml-15">
                    <span>About our School</span>
                    <h2>Our education system inspires the next generation</h2>

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

<!-- Start Study Area -->
<section class="study-area study-area-style-two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Browse courses by study area</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
        </div>

        <div class="row justify-content-center">
            <div class="study-slider owl-carousel owl-theme">
                <div class="single-study style-img">
                    <a href="study-online.html">
                        <img src="assets/images/study/study-1.jpg" alt="Image">
                    </a>

                    <div class="single-study-content">
                        <i class="flaticon-finance"></i>
                        <h3>
                            <a href="study-online.html">Business and finance</a>
                        </h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                        <a href="study-online.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>

                <div class="single-study style-img">
                    <a href="study-online.html">
                        <img src="assets/images/study/study-2.jpg" alt="Image">
                    </a>

                    <div class="single-study-content">
                        <i class="flaticon-data-scientist"></i>
                        <h3>
                            <a href="study-online.html">IT and data science</a>
                        </h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                        <a href="study-online.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>

                <div class="single-study style-img">
                    <a href="study-online.html">
                        <img src="assets/images/study/study-3.jpg" alt="Image">
                    </a>

                    <div class="single-study-content">
                        <i class="flaticon-compliant"></i>
                        <h3>
                            <a href="study-online.html">Law and criminology</a>
                        </h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                        <a href="study-online.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>

                <div class="single-study style-img">
                    <a href="study-online.html">
                        <img src="assets/images/study/study-4.jpg" alt="Image">
                    </a>

                    <div class="single-study-content">
                        <i class="flaticon-health"></i>
                        <h3>
                            <a href="study-online.html">Health and medicine</a>
                        </h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                        <a href="study-online.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>

                <div class="single-study style-img">
                    <a href="study-online.html">
                        <img src="assets/images/study/study-5.jpg" alt="Image">
                    </a>

                    <div class="single-study-content">
                        <i class="flaticon-data-scientist"></i>
                        <h3>
                            <a href="study-online.html">Business and finance</a>
                        </h3>
                        <p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>

                        <a href="study-online.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Study Area -->

<!-- Start Our Campus Information Area -->
<section class="our-campus-information-area pb-100">
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

<!-- Start Events Area -->
<section class="events-area events-area-style-two ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="events-content mr-15">
                    <span>Events</span>
                    <h2>Upcoming events</h2>

                    <ul class="events-list events-list-style-three">
                        <li>
                            <div class="events-date">
                                <span class="mb-2">01 May</span>
                                <span>2021</span>
                            </div>

                            <span>Conference</span>
                            <h3>
                                <a href="event-details.html">
                                    Universities admission conference 2021
                                </a>
                            </h3>

                            <a href="event-details.html" class="read-more">
                                Find out more
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </li>

                        <li>
                            <div class="events-date">
                                <span class="mb-2">02 May</span>
                                <span>2021</span>
                            </div>

                            <span>Conference</span>
                            <h3>
                                <a href="event-details.html">
                                    History and culture open day conference 2021
                                </a>
                            </h3>

                            <a href="event-details.html" class="read-more">
                                Find out more
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </li>

                        <li>
                            <div class="events-date">
                                <span class="mb-2">03 May</span>
                                <span>2021</span>
                            </div>

                            <span>Conference</span>
                            <h3>
                                <a href="event-details.html">
                                    Undergraduate and postgraduate open days 2021
                                </a>
                            </h3>

                            <a href="event-details.html" class="read-more">
                                Find out more
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="events-timer mb-0 ml-15">
                    <div class="event-img">
                        <img src="assets/images/event-img.jpg" alt="Image">
                    </div>

                    <span>Next Event</span>

                    <div id="timer">
                        <div id="days"></div>
                        <div id="hours"></div>
                        <div id="minutes"></div>
                        <div id="seconds"></div>
                    </div>

                    <a href="application.html" class="default-btn">
                        Book now
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Events Area -->

<!-- Start Team Area -->
<section class="team-area team-area-three pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Our professors</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
        </div>

        <div class="row justify-content-md-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-team-member">
                    <img src="assets/images/team/team-1.jpg" alt="Image">

                    <div class="team-content">
                        <div class="team-social">
                            <a href="#" class="control">
                                <i class="ri-share-fill"></i>
                            </a>

                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="team-name">
                            <h3>DAndrew M. Nichols</h3>
                            <span>MCA, PhD</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-team-member">
                    <img src="assets/images/team/team-2.jpg" alt="Image">

                    <div class="team-content">
                        <div class="team-social">
                            <a href="#" class="control">
                                <i class="ri-share-fill"></i>
                            </a>

                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="team-name">
                            <h3>Chandra Ferrante</h3>
                            <span>Assistant Professor</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-team-member">
                    <img src="assets/images/team/team-3.jpg" alt="Image">

                    <div class="team-content">
                        <div class="team-social">
                            <a href="#" class="control">
                                <i class="ri-share-fill"></i>
                            </a>

                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="team-name">
                            <h3>William Johnston</h3>
                            <span>PhD, Medical Sciences</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Area -->

<!-- Start Application Submit Area -->
<section class="application-submit-area">
    <div class="container">
        <div class="application-submit-bg">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="application-submit-content">
                        <h2>Are you ready for your next journey with us?</h2>
                        <a href="application.html" class="default-btn">
                            Application form
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="application-submit-img">
                        <img src="assets/images/application-submit-img.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Application Submit Area -->

<!-- Start Costing Area -->
<section class="costing-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-md-6">
                <div class="costing-content">
                    <h2>Tuition costs</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>

                    <a href="tuition-fees.html" class="read-more">
                        Find out more
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-costing-card">
                    <h3>Tuition costs undergraduate</h3>
                    <span class="subtitle">4-month semesters</span>

                    <p>Winter 2021 <span>(January - April)</span> <span class="price"> <br> $7654</span> <span>(12 credit minimum)</span></p>

                    <p>Summer 2021 <span> (May-August)</span> <span class="price"> <br> $590</span> <span>per credit</span></p>

                    <p>Fall 2021 <span>(September - December)</span> <span class="price"> <br> $6756</span> <span>(12 credit minimum)</span></p>

                    <ul>
                        <li>
                            Tital
                        </li>
                        <li class="price">
                            $21,490
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-costing-card">
                    <h3>Tuition costs postgraduate</h3>
                    <span class="subtitle">4-month semesters</span>

                    <p>Winter 2021 <span>(January - April)</span> <span class="price"> <br> $3580</span> <span>(12 credit minimum)</span></p>

                    <p>Summer 2021 <span> (May-August)</span> <span class="price"> <br> $298</span> <span>per credit</span></p>

                    <p>Fall 2021 <span>(September - December)</span> <span class="price"> <br> $3500</span> <span>(12 credit minimum)</span></p>

                    <ul>
                        <li>
                            Tital
                        </li>
                        <li class="price">
                            $10,490
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Costing Area -->

<!-- Start Campus Experience Area -->
<section class="campus-experience-area-style">
    <div class="container">
        <div class="campus-experience-bg ptb-100">
            <div class="campus-experience-slider owl-carousel owl-theme">
                <div class="single-campus-experience">
                    <span>Admission information</span>

                    <h3>The campus experience</h3>
                    <p>Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie lacinia eget consectetur posuere blandit.</p>

                    <a href="campus-experience.html" class="default-btn">
                        Find out more
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="single-campus-experience">
                    <span>Admission information</span>

                    <h3>The campus experience about</h3>
                    <p>Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie lacinia eget consectetur posuere blandit.</p>

                    <a href="campus-experience.html" class="default-btn">
                        Find out more
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Campus Experience Area -->

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Academic’s news</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt laboredolore magna suspendisse ultrices gravida.</p>
        </div>

        <div class="row justify-content-md-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html" class="blog-img">
                        <img src="assets/images/blog/blog-1.jpg" alt="Image">
                        <span>Academics</span>
                    </a>

                    <div class="blog-content">
                        <ul>
                            <li>
                                <i class="ri-calendar-line"></i>
                                <span>26 March, 2021</span>
                            </li>
                        </ul>

                        <h3>
                            <a href="blog-details.html">
                                How I applying to university
                            </a>
                        </h3>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam animi dicta ex labore. Ipsum nobis amet nisi voluptate corporis consectetur adipisicing elit alias</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html" class="blog-img">
                        <img src="assets/images/blog/blog-2.jpg" alt="Image">
                        <span>Academics</span>
                    </a>

                    <div class="blog-content">
                        <ul>
                            <li>
                                <i class="ri-calendar-line"></i>
                                <span>28 March, 2021</span>
                            </li>
                        </ul>

                        <h3>
                            <a href="blog-details.html">
                                What and where choosing to study
                            </a>
                        </h3>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam animi dicta ex labore. Ipsum nobis amet nisi voluptate corporis consectetur adipisicing elit alias</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html" class="blog-img">
                        <img src="assets/images/blog/blog-3.jpg" alt="Image">
                        <span>Academics</span>
                    </a>

                    <div class="blog-content">
                        <ul>
                            <li>
                                <i class="ri-calendar-line"></i>
                                <span>29 March, 2021</span>
                            </li>
                        </ul>

                        <h3>
                            <a href="blog-details.html">
                                A day in the life of a student
                            </a>
                        </h3>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam animi dicta ex labore. Ipsum nobis amet nisi voluptate corporis consectetur adipisicing elit alias</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->
@endsection