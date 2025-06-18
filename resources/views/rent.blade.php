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

<body onload="setDefaults()" data-mobile-nav-style="classic">

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

                                @endif<!-- <a href="#" class="btn btn-white btn-large border-1 btn-round-edge btn-box-shadow me-15px xs-mt-10px xs-mb-10px">Schedule visit</a> -->
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
                                <span class="fw-500 mb-5px d-block alt-font">For sell price</span>
                                @if($slider->asking_price < 1000000)
                                    <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px">LKR {{number_format($slider->asking_price, 0, '.', ' ') }} .00 </h4>
                                    @else
                                    <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px">LKR {{(number_format($slider->asking_price/1000000,1))}} mn</h4>

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


    <section class="cover-background page-title-big-typography ipad-top-space-margin">
        <div class="container">
            <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
                <div class="col-xxl-5 col-xl-6 col-lg-7 position-relative page-title-extra-small md-mb-30px md-mt-auto" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h1 class="text-base-color">Rent your dream property</h1>
                    <h2 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Help you find the <span class="fw-700 text-highlight d-inline-block">perfect one.<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
                </div>
                <div class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                    <span class="d-block w-85 lg-w-100" data-anime="{ &quot;el&quot;: &quot;lines&quot;, &quot;translateY&quot;: [15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">Online property marketplace to buy, sell, and rent residential and commercial properties. Used by millions of renters to find property.</span>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-very-light-gray z-index-3 position-relative">
        <div class="container">
            <form action="/{{ request()->path() }}">
                <h2>Fetch results by</h2>
                <div class="row ">

                    <div class="form-group col-md-4">
                        <select class="form-control" id="province" onchange="setDistricts(this.value)" name="province">
                            <option value="all">All Provinces</option>
                            <option value="0" id="0">Southern Province</option>
                            <option value="1" id="1">Western Province</option>
                            <option value="2" id="2">Central Province</option>
                            <option value="3" id="3">Sabaragamuwa Province</option>
                            <option value="4" id="4">Eastern Province</option>
                            <option value="5" id="5">Uva Province</option>
                            <option value="6" id="6">North western Province</option>
                            <option value="7" id="7">North Central Province</option>
                            <option value="8" id="8">North Province</option>

                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <select class="form-control" name="district" id="district">
                            <option value="all">All Districts</option>

                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="submit" class="form-control bg-dark text-white" id="search" value="Search">
                    </div>
                </div>

            </form>
            <div class="row mb-4 xs-mb-10 pt-9" id="rentals">
                <div class="col-12 text-center">
                    @if($properties->isEmpty())

                    <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">No items for <span class="fw-700 text-highlight">Rent<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h3>
                    @elseif($type=='houses')
                    <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Latest {{$type}} for <span class="fw-700 text-highlight">Rent<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h3>
                    @elseif($type=='other')
                    <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Latest properties for <span class="fw-700 text-highlight">Rent<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h3>
                    @else
                    <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Latest {{$type}}s for <span class="fw-700 text-highlight">Rent<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h3>
                    @endif
                </div>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    @foreach($properties as $property)
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large h-100">
                            <div class="image position-relative">
                                <a href="#">
                                    <img style="height:175px; width:100%; object-fit:cover" src="/images/{{$property->mainImage->image}}" alt="Property Image">
                                </a>
                                <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent</div>
                            </div>
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        @if($property->deal_type=='forBuy')
                                        @if($property->property_type=='Other')
                                        <a href="#" style="height:30px; overflow:hidden" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Property For Sale</a>
                                        @else
                                        <a href="#" style="height:30px; overflow:hidden" class="alt-font text-dark-gray fw-700 fs-22 me-10px">{{ucwords($property->property_type)}} For Sale</a>
                                        @endif
                                        @else
                                        @if($property->property_type=='Other')
                                        <a href="#" style="height:30px; overflow:hidden" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Property For Rent </a>
                                        @else
                                        <a href="#" style="height:30px; overflow:hidden" class="alt-font text-dark-gray fw-700 fs-22 me-10px">{{ucwords($property->property_type)}} For Rent </a>

                                        @endif

                                        @endif
                                    </div>
                                    <p style="height:60px; overflow:hidden" class="mb-20px">{{$property->location}}</p>
                                    <div class="row g-0">
                                        @if($property->property_type == 'Residential Land' || $property->property_type == 'Commercial Land' || $property->property_type == 'Estate')
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="/images/main/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="Size Icon">
                                                <span class="fw-600 alt-font text-dark-gray">{{$property->land_extent}} perches</span>
                                            </div>
                                        </div>
                                        @elseif($property->property_type == 'Commercial Building' || $property->property_type == 'Warehouse')
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="/images/main/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="Size Icon">
                                                <span class="fw-600 alt-font text-dark-gray">{{$property->square_feet}} sqft</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Living area</span>
                                        </div>
                                        @else
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="/images/main/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="Bed Icon">
                                                <span class="fw-600 alt-font text-dark-gray">{{$property->bed_rooms}}</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bedrooms</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="/images/main/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="Bath Icon">
                                                <span class="fw-600 alt-font text-dark-gray">{{$property->bath_rooms}}</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bathrooms</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="/images/main/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="Size Icon">
                                                <span class="fw-600 alt-font text-dark-gray">{{$property->square_feet}} sqft</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Living area</span>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="/propertyDetails/{{$property->id}}" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        @if(strlen($property->asking_price)< 4)
                                            <span class="fs-24 alt-font text-dark-gray fw-700 mb-0">LKR {{number_format($property->asking_price, 0, '.', ' ') }} .00 </span>
                                            @elseif(strlen($property->asking_price)< 6)
                                                <span class="fs-18 alt-font text-dark-gray fw-700 mb-0">LKR {{number_format($property->asking_price, 0, '.', ' ') }} .00 </span>
                                                @else
                                                <span class="fs-15 alt-font text-dark-gray fw-700 mb-0">LKR {{number_format($property->asking_price, 0, '.', ' ') }} .00 </span>
                                                @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="mt-5 xs-mt-10 d-flex justify-content-center" data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        @if(!empty($properties))
                        {{$properties->links('vendor.pagination.bootstrap-4')}}
                        @endif
                    </div>
                </div>
            </div>

    </section>


    <section class="overflow-hidden position-relative overlap-height pb-30px">
        <div class="container overlap-gap-section">
            <!-- <div class="row mb-2">
<div class="col-12 text-center">
<h5 class="alt-font fw-500 text-dark-gray">Our best trading partners</h5>
</div>
</div> -->
            <div class="row position-relative clients-style-08">
                <div class="col swiper text-center feather-shadow mb-3" data-slider-options="{ &quot;slidesPerView&quot;: 2, &quot;spaceBetween&quot;:0, &quot;speed&quot;: 4000, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-2&quot;, &quot;clickable&quot;: false }, &quot;allowTouchMove&quot;: false, &quot;autoplay&quot;: { &quot;delay&quot;:0, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-four-slide-next-2&quot;, &quot;prevEl&quot;: &quot;.slider-four-slide-prev-2&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 2 } }, &quot;effect&quot;: &quot;slide&quot; }">
                    <div class="swiper-wrapper marquee-slide">

                        <div class="swiper-slide">
                            <a href="#"><img src="/images/logo-remax.svg" alt class="h-35px xs-h-30px" /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="/images/logo-zillow.svg" alt class="h-35px xs-h-30px" /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="/images/logo-realtor.svg" alt class="h-35px xs-h-30px" /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="/images/logo-redfin.svg" alt class="h-35px xs-h-30px" /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="/images/logo-trulia.svg" alt class="h-35px xs-h-30px" /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="/images/logo-remax.svg" alt class="h-35px xs-h-30px" /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="/images/logo-zillow.svg" alt class="h-35px xs-h-30px" /></a>
                        </div>


                        <div class="swiper-slide">
                            <a href="#"><img src="/images/logo-realtor.svg" alt class="h-35px xs-h-30px" /></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden position-relative overlap-height pb-30px">
        <div class="container overlap-gap-section">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 md-mb-50px">
                    <!-- <span class="fs-20 d-inline-block mb-15px text-base-color" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">How it works in Capital Trust</span> -->
                    <div class="container text-center my-5">
  <h2 
    class="fw-semibold text-dark"
    style="font-size: 2.5rem; letter-spacing: -0.5px; line-height: 1.3; font-family: 'Poppins', sans-serif;"
  >
    Steps to rent your 
    <span 
      class="fw-bold text-white px-3 py-1 rounded"
      style="background-color: #28a745; position: relative; display: inline-block;"
    >
      dream property.
      <span 
        style="position: absolute; left: 0; bottom: -5px; height: 4px; width: 100%; background-color: rgba(40, 167, 69, 0.3); border-radius: 2px;"
      ></span>
    </span>
  </h2>
  <p 
    class="mt-3 mx-auto"
    style="max-width: 600px; font-size: 1rem; color: #6c757d;"
  >
    A quick, modern and smooth way to find and rent your ideal home, office, or business space.
  </p>
</div>

                    <div class="row row-cols-1 mt-50px" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-55px w-55px bg-base-color-light alt-font fs-15 fw-600 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">01</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-extra-medium-gray"></span>
                                </div>
                                <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                    <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Search for real estates</span>
                                    <p class="w-80 lg-w-100">Explore diverse properties to find your dream home.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-55px w-55px bg-base-color-light alt-font fs-15 fw-600 fw-600 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">02</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-extra-medium-gray"></span>
                                </div>
                                <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                    <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Select your favorite</span>
                                    <p class="w-80 lg-w-100">Choose the property that fits your lifestyle best.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-55px w-55px bg-base-color-light alt-font fs-15 fw-600 fw-600 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">03</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                </div>
                                <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                    <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Take your property key</span>
                                    <p class="w-80 lg-w-100">Unlock your new home and begin your journey.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 position-relative" data-anime="{ &quot;effect&quot;: &quot;slide&quot;, &quot;color&quot;: &quot;#262b35&quot;, &quot;direction&quot;:&quot;tb&quot;, &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;delay&quot;:50}">
                    <figure class="position-relative m-0">
                        <img src="https://luxely.lk/img/properties/8157207-9413443.jpeg" alt>
                        <figcaption class="position-absolute top-50 translate-middle-y left-0px d-none d-md-block animation-float">
                            <!-- <img src="/images/main/demo-real-estate-sell-03.png" class="animation-float" alt> -->
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mt-50px" data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-12 text-center align-items-center">
                    <!-- <div class="bg-white border border-1 border-color-extra-medium-gray box-shadow-extra-large alt-font fs-12 fw-700 text-dark-gray text-uppercase border-radius-30px ps-20px pe-20px me-10px sm-me-0 sm-m-5px d-inline-block align-middle">Fun facts</div> -->
                    <!-- <div class="fs-22 text-dark-gray d-block d-sm-inline-block align-middle alt-font fw-600">World's famous ratings companies we worked with us.</div> -->
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-light bg-gradient-very-light-gray pb-0">
        <!-- <div class="container position-relative pt-3 pb-3 overlap-section md-mb-15px">
            <div class="position-absolute left-0px top-0px background-no-repeat background-size-100 h-100 w-100 animation-float" style="background-image: url('/images/main/demo-real-estate-10.png')"></div>

            <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center bg-base-color pt-4 pb-4 ps-6 pe-6 lg-p-5 border-radius-6px g-0">
                <div class="col-xl-6 col-lg-7 md-mb-25px sm-mb-15px position-relative text-center text-lg-start">
                    <h3 class="alt-font fw-500 text-white ls-minus-1px mb-10px shadow-none" data-shadow-animation="true" data-animation-delay="700">Subscribe to <span class="fw-700 text-highlight d-inline-block">newsletter<span class="bg-white h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                    <span class="fs-20 text-white">Get updates regarding our properties.</span>
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

        </div> -->
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-auto d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                    <div class="text-dark-gray fs-28 alt-font fw-500">1M+ property ready to <span class="fw-700 text-decoration-line-bottom">buying and selling.</span></div>
                    <div class="bg-white border-radius-50px d-flex align-items-center p-10px ps-35px ms-20px md-ps-20px md-ms-15px box-shadow-medium sm-m-20px">
                        <a href="#" class="text-dark-gray fs-22 alt-font fw-500 me-10px overflow-hidden">Say, <span class="fw-700 w-121px text-start d-inline-block" data-fancy-text="{ &quot;effect&quot;: &quot;rotate&quot;, &quot;string&quot;: [&quot;Hello!&quot;, &quot;Ayubowan!&quot;, &quot;Wanakkam!&quot;] }"></span></a>
                        <span class="text-dark-gray h-45px w-45px text-center d-flex align-items-center justify-content-center border-radius-100 bg-base-color-transparent fs-20">&#128075;</span>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center mt-5 mb-4 sm-mb-35px">

                <div class="col-lg-3 last-paragraph-no-margin md-mb-35px text-center text-lg-start">
                    <a href="#" class="footer-logo mb-10px d-inline-block"><img src="/images/main/logo.png" data-at2x="/images/main/logo.png" alt></a>
                    <p class="w-85 lg-w-100">Connecting you with your dream home, effortlessly.</p>
                    <div class="elements-social social-icon-style-02 mt-15px">
                        <ul class="small-icon dark">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="dribbble" href="http://www.dribbble.com/" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                            <li><a class="twitter" href="https://www.twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                    <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Company</span>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our agent</a></li>
                        <li><a href="#">Latest blog</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>


                <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                    <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Resources</span>
                    <ul>
                        <li><a href="#">Rent a home</a></li>
                        <li><a href="#">Sell a home</a></li>
                        <li><a href="#">Ready to move</a></li>
                        <li><a href="#">Budget homes</a></li>
                    </ul>
                </div>


                <div class="col-6 col-lg-2 col-md-3">
                    <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Customer</span>
                    <ul>
                        <li><a href="#">Client support</a></li>
                        <li><a href="#">Help center</a></li>
                        <li><a href="#">System status</a></li>
                        <li><a href="#">Feedback</a></li>
                    </ul>
                </div>


                <div class="col-6 col-lg-2 col-md-3">
                    <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-10px">Say hello</span>
                    <span class="d-block lh-normal">Need support?</span>
                    <a href="/cdn-cgi/l/email-protection.html#731a1d151c33171c1e121a1d5d101c1e" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block mb-20px"><span class="" data-cfemail="fc95929a93bc9893919d9592d29f9391">info@capitaltrust.lk</span></a>
                    <span class="d-block lh-normal">Customer care</span>
                    <a href="/tel:12345678910" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block">+94 70 444 4555</a>
                </div>

            </div>

            <div class="row align-items-center pb-35px pt-10px">
                <div class="col-xl-12  col-sm-6 text-center text-sm-start last-paragraph-no-margin fs-15 text-dark-gray order-3 order-md-1">
<p class="text-center">
    © Copyright <?php echo date("Y"); ?> Capital Trust Properties | Crafted By 
    <a href="https://sparksolutions.lk/?i=3" target="_blank" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">
        Spark Solutions
    </a>
</p>
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
    <script>
        const provinceWiseDistricts = [
            ['All Districts', 'Matara District', 'Galle District', 'Hambanthota District'],
            ['All Districts', 'Colombo District', 'Gampaha District', 'Kalutara District'],
            ['All Districts', 'Kandy District', 'Matale District', 'NuwaraEliya District'],
            ['All Districts', 'Kagalle District', 'Rathnapura District'],
            ['All Districts', 'Ampara District', 'Baticloe District', 'Trincomalee District'],
            ['All Districts', 'Badulla District', 'Monaragala District'],
            ['All Districts', 'Kurunagala District', 'Puththalama District'],
            ['All Districts', 'Anuradhapura District', 'Polonnaruwa District'],
            ['All Districts', 'Jaffna District', 'Kilinochchi District', 'Mulathiv District', 'Wawniya District', 'Manner District']

        ]

        function setDistricts(id) {
            var district = document.getElementById("district")
            district.innerHTML = '';
            provinceWiseDistricts[id].forEach(element => {
                district.innerHTML += '<option id=' + element + ' value=' + element + '>' + element + '</option>';

            });
        }

        function setDefaults() {
            const params = new URLSearchParams(window.location.search);
            var district = params.get('district');
            var province = params.get('province');
            document.getElementById(province).selected = true;
            setDistricts(province);
            document.getElementById(district).selected = true;
        }
    </script>
</body>

</html>