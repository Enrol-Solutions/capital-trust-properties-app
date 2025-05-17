<!doctype html>
<html class="no-js" lang="en">


<head>
    <title>Find Apartments, Houses And Lands For Rent Or Sale | Capital Trust Properties</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Discover premium real estate opportunities in Sri Lanka with the No.1 Real Estate Agent, Capital Trust Properties. Specializing in luxury apartments, commercial spaces, and land sales, we offer personalized services to help you find your dream property. Trusted by clients for our expertise and market knowledge.">

    <link rel="shortcut icon" href="/images/main/favicon.png">
    <!-- <link rel="apple-touch-icon" href="/images/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-114x114.png"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link rel="stylesheet" href="/css/vendors.min.css" />
    <link rel="stylesheet" href="/css/icon.min.css" />
    <link rel="stylesheet" href="/css/style.min.css" />
    <link rel="stylesheet" href="/css/responsive.min.css" />
    <link rel="stylesheet" href="/css/customs.css" />
</head>

<body data-mobile-nav-style="classic">

    @include('navbar')



    <section class="p-0 top-space-margin">
        <div class="swiper full-screen md-h-600px sm-h-500px swiper-number-pagination-style-01 magic-cursor drag-cursor" data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.swiper-number&quot;, &quot;clickable&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;autoplay&quot;: { &quot;delay&quot;: 4000, &quot;disableOnInteraction&quot;: false },  &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;effect&quot;: &quot;slide&quot; }" data-number-pagination="1">
            <div class="swiper-wrapper">

                @foreach($slider as $slider)
                <div class="swiper-slide cover-background" style="background-image:url('/images/{{$slider->image}}');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-8 position-relative text-white" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                <span class="fs-20 d-block mb-15px">{{$slider->location}}</span>
                                @if($slider->deal_type == 'forBuy')
                                @if($slider->property_type == 'Other')
                                <div class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-80 xs-w-100 ls-minus-2px">Property for <span class="fw-700"> Sale</span></div>
                                @else
                                <div class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-80 xs-w-100 ls-minus-2px">{{$slider->property_type}} for <span class="fw-700"> Sale</span></div>
                                @endif

                                @else
                                @if($slider->property_type == 'Other')
                                <div class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-80 xs-w-100 ls-minus-2px">Property for <span class="fw-700"> Rent</span></div>

                                @else
                                <div class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-80 xs-w-100 ls-minus-2px">{{$slider->property_type}} for <span class="fw-700"> Rent</span></div>

                                @endif

                                @endif
                                <!-- <a href="#" class="btn btn-white btn-large border-1 btn-round-edge btn-box-shadow me-15px xs-mt-10px xs-mb-10px">Schedule visit</a> -->
                                <a href="/propertyDetails/{{$slider->id}}" class="btn btn-white btn-large border-1 btn-round-edge btn-box-shadow me-15px xs-mt-10px xs-mb-10px">View details</a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute col-xxl-5 col-lg-6 right-0px bottom-0px pt-50px pb-40px ps-40px pe-40px lg-p-35px d-none d-lg-inline-block bg-white border-radius-left-8px" data-anime="{ &quot;translateX&quot;: [50, 0], &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 lg-mb-25px">
                                <div class="row">
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px" src="/images/main/demo-real-estate-icon-bed.svg" alt>
                                        <span class="alt-font fs-16 fw-500 d-block">{{$slider->bed_rooms}} Bedrooms</span>
                                    </div>
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px" src="/images/main/demo-real-estate-icon-bath.svg" alt>
                                        <span class="alt-font fs-16 fw-500 d-block">{{$slider->bath_rooms}} Bathrooms</span>
                                    </div>
                                    <div class="col text-center border-end lg-border-end-0 border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px" src="/images/main/demo-real-estate-icon-car.svg" alt>
                                        <span class="alt-font fs-16 fw-500 d-block">{{$slider->parking}} Parking slots</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 ps-35px lg-ps-15px text-center text-xl-start">
                                <span class="fw-500 mb-5px d-block alt-font">For sale price</span>
                                @if($slider->asking_price < 1000000)
                                    <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px">LKR {{number_format($slider->asking_price, 0, '.', ' ') }} .00 </h4>
                                    @else
                                    <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px">LKR {{(number_format($slider->asking_price/1000000,1))}}.mn</h4>

                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="container">
                <div class="row g-0">
                    <div class="col-12 position-relative">

                        <div class="swiper-pagination left-0 text-start swiper-pagination-clickable swiper-number fs-14 alt-font ls-05px"></div>

                    </div>
                </div>
            </div>




        </div>
    </section>

    <section class="pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1 position-relative align-self-end" data-anime="{ &quot;effect&quot;: &quot;slide&quot;, &quot;color&quot;: &quot;#262b35&quot;, &quot;direction&quot;:&quot;tb&quot;, &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;delay&quot;:50}">
                    <figure class="position-relative m-0">
                        <img src="/images/main/demo-real-estate-about-02.jpg" class="w-100" alt>
                        <figcaption class="w-180px bg-white p-30px pt-20px border-radius-8px position-absolute top-150px right-minus-30px lg-right-0px overflow-hidden box-shadow-medium animation-float">
                            <span class="alt-font fs-100 fw-700 text-white d-block position-relative z-index-1">12</span>
                            <div class="alt-font fw-500 fs-24 d-block text-dark-gray lh-26 ls-minus-05px">Years of <span class="fw-700">experience.</span></div>
                            <div class="h-150px w-150px border-radius-100 bg-base-color position-absolute left-minus-10px top-minus-50px z-index-0"></div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 mb-8 order-1 order-lg-2 md-mb-40px" data-anime="{ &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span class="fs-20 d-inline-block mb-15px text-base-color"></span>
                    <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Helping you find the perfect place <span class="fw-700 text-highlight d-inline-block">to call home<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
                    <p class="w-80 lg-w-100">At Capital Trust Properties offer expert real estate guidance to make every step smooth, wether you're buying, selling or investing.</p>
                    <div class="pt-20px pb-20px ps-30px pe-30px xs-p-20px border border-color-extra-medium-gray border-radius-6px mb-15px icon-with-text-style-08 w-80 lg-w-100">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon me-10px">
                                <i class="bi bi-people icon-very-medium text-base-color"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font fw-600 text-dark-gray d-block fs-18 lh-26">Your Trusted Partner In Real Estate</span>
                            </div>
                        </div>
                    </div>
                    <p class="fs-13 mb-35px xs-lh-20">Explore our best selection of properties <span class="text-dark-gray text-decoration-line-bottom">around the world</span> and find the one that's right for you.</p>
                    </span>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-gradient-very-light-gray">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Delivering quality in <span class="fw-700 text-highlight d-inline-block">every property we offer <span class="bg-base-color h-10px bottom-5px opacity-3 separator-animation"></span></span></h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center mb-5 xs-mb-8" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;rotateZ&quot;: [5, 0], &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div class="bg-white feature-box box-shadow-quadruple-large box-shadow-quadruple-large-hover text-center p-16 lg-p-14 border-radius-10px last-paragraph-no-margin">
                        <div class="feature-box-icon mb-20px">
                            <img src="/images/main/demo-real-estate-about-03.png" class="h-80px" alt>
                        </div>
                        <div class="feature-box-content">
                            <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Best services</span>
                            <p>Experience exceptional support tailored to all your real estate needs.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div class="bg-white feature-box box-shadow-quadruple-large box-shadow-quadruple-large-hover text-center p-16 lg-p-14 border-radius-10px last-paragraph-no-margin">
                        <div class="feature-box-icon mb-20px">
                            <img src="/images/main/demo-real-estate-about-04.png" class="h-80px" alt>
                        </div>
                        <div class="feature-box-content">
                            <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Client friendly</span>
                            <p>Enjoy a smooth, stress free journey with an experience designed around you.</p>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-07 transition-inner-all xs-mb-30px">
                    <div class="bg-white feature-box box-shadow-quadruple-large box-shadow-quadruple-large-hover text-center p-16 lg-p-14 border-radius-10px last-paragraph-no-margin">
                        <div class="feature-box-icon mb-20px">
                            <img src="/images/main/demo-real-estate-about-05.png" class="h-80px" alt>
                        </div>
                        <div class="feature-box-content">
                            <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Trusted property</span>
                            <p>Choose from reliable, thoroughly verified real estate opportunities.</p>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-07 transition-inner-all">
                    <div class="bg-white feature-box box-shadow-quadruple-large box-shadow-quadruple-large-hover text-center p-16 lg-p-14 border-radius-10px last-paragraph-no-margin">
                        <div class="feature-box-icon mb-20px">
                            <img src="/images/main/demo-real-estate-about-06.png" class="h-80px" alt>
                        </div>
                        <div class="feature-box-content">
                            <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Legal advisor</span>
                            <p>Get expert legal giudanceto ensure every transaction is safe and secure.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center" data-anime="{ &quot;translateX&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 50, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-auto icon-with-text-style-08">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-patch-check icon-medium text-base-color"></i>
                        </div>
                        <div class="feature-box-content alt-font text-dark-gray fs-22 fw-600">
                            We're happy to be a part of leading real estate companies of the world, <span class="text-decoration-line-bottom">dedicated to delivering excellent results and building trust.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="background-image: url('/images/main/two.jpg');
    background-size: cover;
    background-position: center;background-repeat: no-repeat;" class="cus_mt_n65">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 justify-content-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col icon-with-text-style-07 transition-inner-all mb-30px">
                    <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <!-- <a href="/demo-accounting-services-details.html"><img src="/images/demo-accounting-company-icon01.svg" class="h-95px" alt="" data-no-retina=""></a> -->
                        </div>
                        <div class="feature-box-content">
                            <a href="/" class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Our Mission</a>
                            <p class="mb-30px">A commitment to creating real estate transactions through the efforts of the most dedicated professionals supported by innovative programs, tools, and management. We strive to create an environment where we can learn, grow and succeed together. We aim to provide innovative ways of delivering our services while giving the best value to our clients and maintaining the highest standards of ethical conduct.</p>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-07 transition-inner-all mb-30px">
                    <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <!-- <a href="/"><img src="/images/demo-accounting-company-icon02.svg" class="h-95px" alt="" data-no-retina=""></a> -->
                        </div>
                        <div class="feature-box-content">
                            <a href="/" class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Our Vision</a>
                            <p class="mb-30px">To become a diversified regional real estate holding company, specializing in real estate and related activities in locations where the company identifies a competitive advantage in order to achieve consistently increasing returns and growth to shareholders and create an enjoyable work environment for its employees.</p>
                        </div>
                        <!-- <span class="position-absolute box-shadow-large top-25px lg-top-15px right-25px lg-right-15px bg-base-color border-radius-18px text-white fs-11 fw-600 text-uppercase ps-15px pe-15px lh-26 ls-minus-05px">New</span> -->
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="position-relative overflow-hidden">
        <img src="/images/main/demo-real-estate-07.png" alt class="position-absolute left-100px top-50px z-index-minus-1" data-bottom-top="transform: translate3d(80px, 0px, 0px);" data-top-bottom="transform: translate3d(-180px, 0px, 0px);" />
        <img src="/images/main/demo-real-estate-08.png" alt class="position-absolute right-100px top-100px z-index-minus-1" data-bottom-top="transform:scale(1.4, 1.4) translate3d(0px, 0px, 0px);" data-top-bottom="transform:scale(1, 1) translate3d(-400px, 0px, 0px);" />
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-end md-mb-50px" data-anime="{ &quot;effect&quot;: &quot;slide&quot;, &quot;color&quot;: &quot;#262b35&quot;, &quot;direction&quot;:&quot;lr&quot;, &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;delay&quot;:50}">
                    <figure class="position-relative m-0">
                        <img src="/images/main/demo-real-estate-09.jpg" class="w-90 border-radius-6px" alt>
                        <figcaption class="position-absolute bg-dark-gray border-radius-10px box-shadow-quadruple-large bottom-100px xs-bottom-minus-20px left-minus-30px md-left-0px w-230px xs-w-210px text-center last-paragraph-no-margin animation-float">
                            <div class="bg-white pt-35px pb-35px border-radius-8px mb-15px position-relative top-minus-1px">
                                <h1 class="fw-700 ls-minus-3px text-dark-gray mb-0 alt-font">4.2</h1>
                                <div class="text-golden-yellow fs-18 ls-1px">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <div class="d-inline-block fs-12 text-uppercase bg-base-color ps-20px pe-20px lh-30 text-white border-radius-100px box-shadow-large">Feedback</div>
                            </div>
                            <!-- <img src="/images/main/demo-real-estate-trustpilot.svg" class="h-30px mb-20px" alt /> -->
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-10 text-center text-lg-start" data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Clients feedback</span>
                    <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Here is what our <span class="fw-700 text-highlight d-inline-block">client's<span class="bg-base-color h-10px bottom-4px opacity-3 separator-animation"></span></span> have to say</h2>
                    <div class="swiper position-relative" data-slider-options="{ &quot;autoHeight&quot;: true, &quot;loop&quot;: true, &quot;allowTouchMove&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 4000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next&quot;, &quot;prevEl&quot;: &quot;.swiper-button-prev&quot; }, &quot;effect&quot;: &quot;fade&quot; }">
                        <div class="swiper-wrapper mb-40px">

                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">Capital Trust Properties led by Minoli Wickramasinghe and her team have been efficient and professional in helping us with our real estate requirements over the years. A leading Real Estate services provider in Sri Lanka, Capital Trust Properties is well equipped with a wealth of knowledge about the industry and handle a diverse portfolio of properties in the country. They are also well known for their ethical and professional conduct at all times.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px" src="/images/main/lolc.webp" alt>
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Gunendra </span>Jayasena</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">Capital Trust Properties led by Minoli Wickramasinghe and her team have been efficient and professional in helping us with our real estate requirements over the years. A leading Real Estate services provider in Sri Lanka, Capital Trust Properties is well equipped with a wealth of knowledge about the industry and handle a diverse portfolio of properties in the country. They are also well known for their ethical and professional conduct at all times.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px" src="/images/main/lolc.webp" alt>
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Gunendra </span>Jayasena</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">
                                    Capital Trust Properties has immensely helped WNS with its real estate requirements. Their team of research experts had helped us monitor the market conditions during times of turmoil in the real estate market and rightly advised our global procurement team. They have helped us from A-Z in our property requirements, from identifying suitable options to help identify the best fit through due diligent exercises to even suggesting fit- out options. The company is well known as an industry leader in Sri Lanka in Real Estate transaction and advisory and works with our global real estate agent Knight Frank. WNS is happy to be working with Capital Trust Properties on all it's real estate requirements</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px" src="/images/main/wns.jpg" alt>
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Dinesh </span>Wickremanayake</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">I am happy to share my impression and experience after working with you and your team for a considerable period of time and under tying circumstances.All in all, it has been a very positive experience. You and your team have handled my own and the client’s requests promptly, completely, and courteously. Deliveries were complete, change or update requests were responded to in a timely manner. I am happy to recommend Capital Trust to other clients, and look forward to doing more business with you.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px" src="/images/main/colliers.jpg" alt>
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Ulrich </span>Reckert</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">We engaged Capital Trust Properties as our agent for selling the apartments in our ongoing developments and have collaborated with them since November 2021. Minoli and her team have assisted us in successfully selling apartments at Cinnamon Life, TRI- ZEN and Viman Ja-Ela to their clientele. We have been pleased with the service provided by Minoli and her team and extend our best wishes for their future endeavors.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px" src="/images/main/jkh.jpg" alt>
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Nadeem </span> Shums</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">l had a great experience working with Capital Trust Properties, the largest Real Estate Transaction company in Sri Lanka, who helped me find the perfect apartment. They were very knowledgeable about the area and the market, and they were always available to answer my questions and provide guidance. They made the process of buying an apartment easy and stress-free, and I would highly recommend them to anyone looking for a new home.I am happy to be associated with Capital Trust Properties and looking forward to doing more business with you.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px" src="/images/main/greend.png" alt>
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Dinesh </span>Chandimal</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex justify-content-center justify-content-lg-start">

                            <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray"><i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i></div>
                            <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray"><i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-quartz-white position-relative cus_mt_n65 z-index-0 border-radius-6px lg-border-radius-0px overflow-hidden">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-lg-6 text-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;:0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span class="fs-20 d-inline-block mb-15px text-base-color"></span>
                    <h3 class="alt-font fw-600 text-dark-gray ls-minus-1px shadow-none shadow-in">Our <span class="fw-700 text-highlight d-inline-block">Services<span class="bg-base-color h-10px bottom-4px opacity-3 separator-animation"></span></span></h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 justify-content-center mb-5 transition-inner-all appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;:0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col interactive-banner-style-02 hover-box dark-hover md-mb-30px">
                    <div class="h-100 text-center position-relative border-radius-6px box-shadow-quadruple-large overflow-hidden">
                        <figure class="m-0" style="padding-bottom: 223.1px;">
                            <a href="#" class="position-relative d-block">
                                <img src="/images/demo-corporate-services-01.jpg" alt="" data-no-retina="">
                                <!-- <div class="label position-absolute right-20px top-20px bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-15px pe-15px fs-11 ls-05px">Creativity</div> -->
                            </a>
                            <figcaption class="w-100 position-absolute bottom-0px bg-white">
                                <div class="position-relative z-index-2 p-40px pt-25px pb-15px border-bottom border-dark-opacity">
                                    <i class="features-icon line-icon-Archery-2 d-block icon-extra-large"></i>
                                    <a href="#" class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Property Transaction Services</a>
                                    <p class="w-80 lg-w-100 fs-16 mx-auto mb-15px lg-mb-10px text-light-opacity">Support for buying, selling, or leasing real estate.</p>
                                </div>

                                <div class="box-overlay bg-base-color"></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>


                <div class="col interactive-banner-style-02 hover-box dark-hover md-mb-30px">
                    <div class="h-100 text-center position-relative border-radius-6px box-shadow-quadruple-large overflow-hidden">
                        <figure class="m-0" style="padding-bottom: 223.1px;">
                            <a href="#" class="position-relative d-block">
                                <img src="/images/demo-corporate-services-02.jpg" alt="" data-no-retina="">
                                <!-- <div class="label position-absolute right-20px top-20px bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-15px pe-15px fs-11 ls-05px">Discover</div> -->
                            </a>
                            <figcaption class="w-100 position-absolute bottom-0px bg-white">
                                <div class="position-relative z-index-2 p-40px pt-25px pb-15px border-bottom border-dark-opacity">
                                    <i class="features-icon line-icon-Coins d-block icon-extra-large"></i>
                                    <a href="#" class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Real Estate Valuations</a>
                                    <p class="w-80 lg-w-100 fs-16 mx-auto mb-15px lg-mb-10px text-light-opacity">We deliver expert, accurate real estate valuation sevices.</p>
                                </div>

                                <div class="box-overlay bg-base-color"></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>


                <div class="col interactive-banner-style-02 hover-box dark-hover md-mb-30px">
                    <div class="h-100 text-center position-relative border-radius-6px box-shadow-quadruple-large overflow-hidden">
                        <figure class="m-0" style="padding-bottom: 223.1px;">
                            <a href="#" class="position-relative d-block">
                                <img src="/images/demo-corporate-services-03.jpg" alt="" data-no-retina="">
                                <!-- <div class="label position-absolute right-20px top-20px bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-15px pe-15px fs-11 ls-05px">Modern</div> -->
                            </a>
                            <figcaption class="w-100 position-absolute bottom-0px bg-white">
                                <div class="position-relative z-index-2 p-40px pt-25px pb-15px border-bottom border-dark-opacity">
                                    <i class="features-icon line-icon-Bar-Chart3 d-block icon-extra-large"></i>
                                    <a href="#" class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Legal Services</a>
                                    <p class="w-80 lg-w-100 fs-16 mx-auto mb-15px lg-mb-10px text-light-opacity">We ensure smooth transactions by handling all legal paperwork.</p>
                                </div>

                                <div class="box-overlay bg-base-color"></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>


            <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 justify-content-center mb-5 transition-inner-all appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;:0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col interactive-banner-style-02 hover-box dark-hover md-mb-30px">
                    <div class="h-100 text-center position-relative border-radius-6px box-shadow-quadruple-large overflow-hidden">
                        <figure class="m-0" style="padding-bottom: 223.1px;">
                            <a href="#" class="position-relative d-block">
                                <img src="/images/demo-corporate-services-01.jpg" alt="" data-no-retina="">
                                <!-- <div class="label position-absolute right-20px top-20px bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-15px pe-15px fs-11 ls-05px">Creativity</div> -->
                            </a>
                            <figcaption class="w-100 position-absolute bottom-0px bg-white">
                                <div class="position-relative z-index-2 p-40px pt-25px pb-15px border-bottom border-dark-opacity">
                                    <i class="features-icon line-icon-Archery-2 d-block icon-extra-large"></i>
                                    <a href="#" class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Property Development</a>
                                    <p class="w-80 lg-w-100 fs-16 mx-auto mb-15px lg-mb-10px text-light-opacity">End-to-end development from concept to completion.</p>
                                </div>

                                <div class="box-overlay bg-base-color"></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>


                <div class="col interactive-banner-style-02 hover-box dark-hover md-mb-30px">
                    <div class="h-100 text-center position-relative border-radius-6px box-shadow-quadruple-large overflow-hidden">
                        <figure class="m-0" style="padding-bottom: 223.1px;">
                            <a href="#" class="position-relative d-block">
                                <img src="/images/demo-corporate-services-02.jpg" alt="" data-no-retina="">
                                <!-- <div class="label position-absolute right-20px top-20px bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-15px pe-15px fs-11 ls-05px">Discover</div> -->
                            </a>
                            <figcaption class="w-100 position-absolute bottom-0px bg-white">
                                <div class="position-relative z-index-2 p-40px pt-25px pb-15px border-bottom border-dark-opacity">
                                    <i class="features-icon line-icon-Coins d-block icon-extra-large"></i>
                                    <a href="#" class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Interior Solutions</a>
                                    <p class="w-80 lg-w-100 fs-16 mx-auto mb-15px lg-mb-10px text-light-opacity">Custom interiors taht look great and stay on budget</p>
                                </div>

                                <div class="box-overlay bg-base-color"></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>


                <div class="col interactive-banner-style-02 hover-box dark-hover md-mb-30px">
                    <div class="h-100 text-center position-relative border-radius-6px box-shadow-quadruple-large overflow-hidden">
                        <figure class="m-0" style="padding-bottom: 223.1px;">
                            <a href="#" class="position-relative d-block">
                                <img src="/images/demo-corporate-services-03.jpg" alt="" data-no-retina="">
                                <!-- <div class="label position-absolute right-20px top-20px bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-15px pe-15px fs-11 ls-05px">Modern</div> -->
                            </a>
                            <figcaption class="w-100 position-absolute bottom-0px bg-white">
                                <div class="position-relative z-index-2 p-40px pt-25px pb-15px border-bottom border-dark-opacity">
                                    <i class="features-icon line-icon-Bar-Chart3 d-block icon-extra-large"></i>
                                    <a href="#" class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Property Management Services</a>
                                    <p class="w-80 lg-w-100 fs-16 mx-auto mb-15px lg-mb-10px text-light-opacity">Keeping properties valuable and tenants happy.</p>
                                </div>

                                <div class="box-overlay bg-base-color"></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>
            <img src="/images/demo-corporate-services-bg-02.png" class="position-absolute top-20 right-60px z-index-minus-1 skrollable skrollable-between" data-bottom-top="transform: rotate(0deg) translateY(0)" data-top-bottom="transform:rotate(-15deg) translateY(0)" alt="" data-no-retina="" style="transform: rotate(-5.66165deg) translateY(0px);">
            <div class="row justify-content-center g-0">
                <div class="col-auto text-center last-paragraph-no-margin icon-with-text-style-08">
                    <div class="feature-box feature-box-left-icon-middle overflow-hidden ps-30px pe-30px xs-ps-15px xs-pe-15px ">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-chat-text fs-24 icon-very-medium text-base-color"></i>
                        </div>
                        <div class="feature-box-content alt-font text-dark-gray fs-22 fw-600">Trusted by Leading Clients <a href="/demo-corporate-contact.html" class="text-base-color text-decoration-line-bottom-medium border-1">Across the Industry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-0 pb-50px ps-6 pe-6 xxl-ps-2 xl-pe-2 lg-ps-30px lg-pe-30px xs-ps-15px xs-pe-15px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 swiper slider-four-slide portfolio-slider" data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 25, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination&quot;, &quot;clickable&quot;: true }, &quot;autoplay&quot;: { &quot;delay&quot;: 3000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-four-slide-next&quot;, &quot;prevEl&quot;: &quot;.slider-four-slide-prev&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 2 } }, &quot;effect&quot;: &quot;slide&quot; }">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="portfolio-box transition-inner-all">
                                <div class="portfolio-image bg-dark-gray">
                                    <img src="/images/main/ifs-logo.webp" alt />
                                    <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="portfolio-box transition-inner-all">
                                <div class="portfolio-image bg-dark-gray">
                                    <img src="/images/main/sampath-logo.webp" alt />
                                    <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="portfolio-box transition-inner-all">
                                <div class="portfolio-image bg-dark-gray">
                                    <img src="/images/main/ntb-logo.webp" alt />
                                    <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="portfolio-box transition-inner-all">
                                <div class="portfolio-image bg-dark-gray">
                                    <img src="/images/main/ifs-logo.webp" alt />
                                    <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="portfolio-box transition-inner-all">
                                <div class="portfolio-image bg-dark-gray">
                                    <img src="/images/main/sampath-logo.webp" alt />
                                    <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="portfolio-box transition-inner-all">
                                <div class="portfolio-image bg-dark-gray">
                                    <img src="/images/main/ntb-logo.webp" alt />
                                    <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="portfolio-box transition-inner-all">
                                <div class="portfolio-image bg-dark-gray">
                                    <img src="/images/main/ifs-logo.webp" alt />
                                    <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="portfolio-box transition-inner-all">
                                <div class="portfolio-image bg-dark-gray">
                                    <img src="/images/main/sampath-logo.webp" alt />
                                    <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="portfolio-box transition-inner-all">
                                <div class="portfolio-image bg-dark-gray">
                                    <img src="/images/main/ntb-logo.webp" alt />

                                    <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-5 md-mt-7" data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <div class="col-12 text-center align-items-center">
                <div class="bg-dark-gray alt-font fs-12 fw-700 text-white text-uppercase border-radius-30px ps-20px pe-20px me-10px sm-m-5px d-inline-block align-middle"></div>
                <div class="fs-20 text-dark-gray d-block d-md-inline-block align-middle alt-font fw-600">Subsidiar</div>
            </div>
        </div>
        </div>
    </section>


    <footer class="footer-light bg-gradient-very-light-gray pb-0">
        <div class="container position-relative pt-3 pb-3 overlap-section md-mb-15px">
            <div class="position-absolute left-0px top-0px background-no-repeat background-size-100 h-100 w-100 animation-float" style="background-image: url('/images/main/demo-real-estate-10.png')"></div>

            <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center bg-base-color pt-4 pb-4 ps-6 pe-6 lg-p-5 border-radius-6px g-0">
                <div class="col-xl-6 col-lg-7 md-mb-25px sm-mb-15px position-relative text-center text-lg-start">
                    <h3 class="alt-font fw-500 text-white ls-minus-1px mb-10px shadow-none" data-shadow-animation="true" data-animation-delay="700">Subscribe to our<span class="fw-700 text-highlight d-inline-block">newsletter<span class="bg-white h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                    <span class="fs-20 text-white">Stay updated on our latest properties.</span>
                </div>
                <div class="col-lg-5 offset-xl-1 position-relative">
                    <div class="d-inline-block w-100 newsletter-style-03 position-relative">
                        <form action="/newSubscriber" method="post" class="position-relative w-100">
                            @csrf
                            <input id="email" class="input-large bg-white border-color-white w-100 box-shadow-extra-large form-control required" type="email" maxlength="30" name="email" placeholder="Enter your email..." />
                            <button onclick="$('#email').val() && alert('Subscription Added!')" class="btn btn-large text-dark-gray ls-0px left-icon submit fw-700" aria-label="submit"><i class="icon feather icon-feather-mail icon-small text-base-color"></i><span>Subscribe</span></button>
                            <div class="form-results border-radius-4px pt-10px pb-10px ps-15px pe-15px fs-16 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-auto d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                    <div class="text-dark-gray fs-28 alt-font fw-500">The Partner You Trust <span class="fw-700 text-decoration-line-bottom">In Real Estate</span></div>
                    <div class="bg-white border-radius-50px d-flex align-items-center p-10px ps-35px ms-20px md-ps-20px md-ms-15px box-shadow-medium sm-m-20px">
                        <a href="#" class="text-dark-gray fs-22 alt-font fw-500 me-10px overflow-hidden">Say, <span class="fw-700 w-121px text-start d-inline-block" data-fancy-text="{ &quot;effect&quot;: &quot;rotate&quot;, &quot;string&quot;: [&quot;Hello!&quot;, &quot;Ayubowan!&quot;, &quot;Wanakkam!&quot;] }"></span></a>
                        <span class="text-dark-gray h-45px w-45px text-center d-flex align-items-center justify-content-center border-radius-100 bg-base-color-transparent fs-20">&#128075;</span>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center mt-5 mb-4 sm-mb-35px">

                <div class="col-lg-3 last-paragraph-no-margin md-mb-35px text-center text-lg-start">
                    <a href="#" class="footer-logo mb-10px d-inline-block"><img src="/images/main/logo.png" data-at2x="/images/main/logo.png" alt></a>
                    <p class="w-85 lg-w-100">The Partner You Trust In Real Estate</p>
                    <div class="elements-social social-icon-style-02 mt-15px">
                        <ul class="small-icon dark">
                            <li><a class="facebook" href="https://www.facebook.com/capitaltrustproperties?mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="https://x.com/CTP_SriLanka" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/capitaltrustproperties/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                    <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Company</span>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our Clients</a></li>
                        <li><a href="#">News & Articles</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>


                <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                    <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Resources</span>
                    <ul>
                        <li><a href="#">Rent a property</a></li>
                        <li><a href="#">Sell a property</a></li>
                        <li><a href="#">Property Valuation</a></li>
                        <li><a href="#">Photo shoots and listings</a></li>
                    </ul>
                </div>


                <div class="col-6 col-lg-2 col-md-3">
                    <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Customer</span>
                    <ul>
                        <li><a href="#">Feedback</a></li>
                    </ul>
                </div>


                <div class="col-6 col-lg-2 col-md-3">
                    <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-10px">Say hello</span>
                    <span class="d-block lh-normal">Need support?</span>
                    <a href="/cdn-cgi/l/email-protection.html#731a1d151c33171c1e121a1d5d101c1e" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block mb-20px"><span class="" data-cfemail="fc95929a93bc9893919d9592d29f9391">properties@capitaltrust.lk</span></a>
                    <span class="d-block lh-normal">Hotline</span>
                    <a href="/tel:12345678910" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block">+94 70 444 4555</a>
                </div>

            </div>

            <div class="row align-items-center pb-35px pt-10px">
                <div class="col-xl-12 col-sm-6 text-center text-sm-start last-paragraph-no-margin fs-15 text-dark-gray order-3 order-md-1">
                    <p class=" text-center">© Copyright 2024 Capital Trust Properties | Crafted By <a href="https://sparksolutions.lk/?i=3" target="_blank" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">Spark Solutions</a></p>
                </div>
            </div>
    </footer>




    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>


    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/vendors.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/customFunctions.js"></script>

</body>

</html>