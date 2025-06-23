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

  <section>
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 md-mb-50px position-relative" data-anime="{ &quot;effect&quot;: &quot;slide&quot;, &quot;color&quot;: &quot;#262b35&quot;, &quot;direction&quot;:&quot;lr&quot;, &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;delay&quot;:50}">
          <figure class="position-relative mb-0 overflow-hidden border-radius-6px">
            <img src="https://i.ibb.co/C5Y93FrY/demo-real-estate-09.png"  alt class="w-100">
           
          </figure>
        </div>
        <div class="col-xl-5 offset-xl-1 col-lg-6" data-anime="{ &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
          <span class="fs-20 d-inline-block mb-15px text-base-color">About Us</span>
          <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none sm-w-85" data-shadow-animation="true" data-animation-delay="700">Helping you find your <span class="fw-700 text-highlight text-green">dream property.<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
          <p class="w-80 md-w-100 cus_justi">At Capital Trust Properties, we  specialize in premier real estate solutions with a focus on buying, selling and investing.</p>
          <div class="mb-35px">

            <div class="icon-with-text-style-08 mb-10px">
              <div class="feature-box feature-box-left-icon-middle overflow-hidden">
               <div class="feature-box-icon feature-box-icon-rounded w-80px h-80px bg-white rounded-circle me-15px">
  <img src="https://i.ibb.co/WrBfGwv/Whats-App-Image-2025-05-27-at-21-45-32-removebg-preview.png"  alt="Image" class="w-100 h-100 rounded-circle">
</div>

                <div class="feature-box-content">
                  <span class="text-dark-gray">Backed by over 10 years ofexperience, we offer expert guidance to help you navigate you property journey with confidence.</span>
                </div>
              </div>
            </div>


            <div class="icon-with-text-style-08">
              <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                  <div class="feature-box-icon feature-box-icon-rounded w-80px h-80px bg-white rounded-circle me-15px">
  <img src="https://i.ibb.co/WrBfGwv/Whats-App-Image-2025-05-27-at-21-45-32-removebg-preview.png"  alt="Image" class="w-300 h-300 rounded-circle">
</div>
                <div class="feature-box-content">
                  <span class="text-dark-gray">Trusted by thousands of Sri Lankans, we're commited to maximizing your investment potential and ensuring your satisfaction every step of the way.</span>
                </div>
              </div>
            </div>

          </div>
          <div class="d-inline-block">
            <a href="/company" class="btn btn-dark-gray btn-medium btn-round-edge me-25px">About Us</a>
            <a href="/all" class="btn btn-large btn-link btn-hover-animation-switch text-dark-gray p-0">
              <span>
                <span class="btn-text">Find property</span>
                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-3 d-none">
 <div class="container">
  <div class="row align-items-center justify-content-center">
    <div class="col-12">
      <div class="d-flex flex-wrap align-items-center justify-content-center">
        
        <!-- Title section -->
        <div class="mx-4 my-2 text-start" style="min-width: 200px;">
          <h6 class="mb-0" style="font-weight: 500;">Active Global</h6>
          <h6 class="mb-0" style="color: green; font-weight: 600;">Real Estate Partners</h6>
        </div>

        <!-- Logo 1 -->
        <div class="mx-4 my-2">
          <img src="https://i.ibb.co/5hGjZp4x/Knight-Frank-Logo-svg-1.png" alt="Knight Frank" class="img-fluid" style="max-height: 50px;">
        </div>

        <!-- Logo 2 -->
        <div class="mx-4 my-2">
          <img src="https://i.ibb.co/LhDKSBLg/Colliers-Logo-Color-Gradient.png" alt="Colliers" class="img-fluid" style="max-height: 50px;">
        </div>

        <!-- Logo 3 -->
        <div class="mx-4 my-2">
          <img src="https://i.ibb.co/hRfN29KD/CBRE-Group-logo-till-2021-svg.png" alt="CBRE" class="img-fluid" style="max-height: 50px;">
        </div>

      </div>
    </div>
  </div>
</div>

      </div>
    </div>
  </div>
</section>

  <section class="p-0 border-top border-color-extra-medium-gray">
    <div class="container">
      <div class="row row-cols-1 row-cols-lg-6 row-cols-md-3 row-cols-sm-2 justify-content-center g-0 bg-white" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

        <div class="col d-flex align-items-center text-center text-lg-start icon-with-text-style-04 border-end md-border-start md-border-bottom sm-border-start-0 xs-border-end-0 border-color-extra-medium-gray position-relative xs-pt-60px xs-pb-60px">
          <span class="fs-26 lh-30 d-inline-block alt-font text-dark-gray fw-600 mb-0 w-100 sm-w-85 mx-auto shadow-none" data-shadow-animation="true" data-animation-delay="700">What are you <span class="fw-600 text-highlight">looking<span class="bg-base-color h-6px bottom-3px opacity-3 separator-animation"></span></span> for?</span>
        </div>


        <div class="col icon-with-text-style-04 border-end md-border-bottom sm-border-end-0 border-color-extra-medium-gray position-relative">
          <div class="feature-box pt-45px pb-25px">
            <div class="feature-box-icon mb-10px">
              <!-- <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">20K</div> -->
              <a href="#" class="d-block">
                <img src="/images/main/demo-real-estate-icon-apartment.svg" alt>
              </a>
            </div>
            <div class="feature-box-content">
              <a href="#" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Apartment</a>
            </div>
          </div>
        </div>


        <div class="col icon-with-text-style-04 border-end md-border-bottom xs-border-end-0 border-color-extra-medium-gray position-relative">
          <div class="feature-box pt-45px pb-25px">
            <div class="feature-box-icon mb-10px">
              <!-- <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">18K</div> -->
              <a href="#" class="d-block">
                <img src="/images/main/demo-real-estate-icon-condominium.svg" alt>
              </a>
            </div>
            <div class="feature-box-content">
              <a href="#" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Condominium</a>
            </div>
          </div>
        </div>


        <div class="col icon-with-text-style-04 border-end md-border-start sm-border-end-0 sm-border-start-0 sm-border-bottom border-color-extra-medium-gray position-relative">
          <div class="feature-box pt-45px pb-25px">
            <div class="feature-box-icon mb-10px">
              <!-- <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">22K</div> -->
              <a href="#" class="d-block">
                <img src="/images/main/demo-real-estate-icon-home.svg" alt>
              </a>
            </div>
            <div class="feature-box-content">
              <a href="#" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">House</a>
            </div>
          </div>
        </div>


        <div class="col icon-with-text-style-04 border-end xs-border-end-0 xs-border-bottom border-color-extra-medium-gray position-relative">
          <div class="feature-box pt-45px pb-25px">
            <div class="feature-box-icon mb-10px">
              <!-- <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">09K</div> -->
              <a href="#" class="d-block">
                <img src="/images/main/demo-real-estate-icon-office.svg" alt>
              </a>
            </div>
            <div class="feature-box-content">
              <a href="#" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Office</a>
            </div>
          </div>
        </div>


        <div class="col icon-with-text-style-04 border-color-extra-medium-gray md-border-end sm-border-end-0 position-relative">
          <div class="feature-box pt-45px pb-25px">
            <div class="feature-box-icon mb-10px">
              <!-- <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">20K</div> -->
              <a href="#" class="d-block">
                <img src="/images/main/demo-real-estate-icon-shop.svg" alt>
              </a>
            </div>
            <div class="feature-box-content">
              <a href="#" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Shop</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="bg-very-light-gray">
    <div class="container">
      <div class="row align-items-center mb-6 xs-mb-8">
        <div class="col-md-8 text-center text-md-start sm-mb-20px" data-anime="{ &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
          <h3 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Explore Real Estate <span class="fw-700 text-highlight d-inline-block text-green">For Sale and Rent<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
        </div>
        <div class="col-md-4" data-anime="{ &quot;translateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
          <div class="d-flex justify-content-center justify-content-md-end">
            @if(!empty($properties))
            {{$properties->links('vendor.pagination.bootstrap-4')}}
            @endif
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
        @forelse ($properties as $prop)

        <div class="col mb-30px">
          <div class="border-radius-6px overflow-hidden box-shadow-large">
            <div class="image position-relative">
              <a href="#">
            <img style="height:175px; width:100%; object-fit:cover" src="./images/{{$prop->mainImage->image}}" alt>

              </a>
              @if($prop->deal_type=='forBuy')
              <div class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Sell</div>
              @else
              <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent</div>
              @endif
            </div>
            <div class="bg-white">
              <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                @if($prop->deal_type=='forBuy')
                @if($prop->property_type=='Other')
                <a href="#" style="height:30px; overflow:hidden" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Property For Sale</a>
                @else
                <a href="#" style="height:30px; overflow:hidden" class="alt-font text-dark-gray fw-700 fs-22 me-10px">{{ucwords($prop->property_type)}} For Sale</a>
                @endif
                @else
                @if($prop->property_type=='Other')
                <a href="#" style="height:30px; overflow:hidden" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Property For Rent </a>
                @else
                <a href="#" style="height:30px; overflow:hidden" class="alt-font text-dark-gray fw-700 fs-22 me-10px">{{ucwords($prop->property_type)}} For Rent </a>

                @endif

                @endif
                <p style="height:60px; overflow:hidden" class="mb-20px">{{$prop->location}}</p>
                <div class="row g-0">
                  @if($prop->property_type == 'Residential Land' || $prop->property_type == 'Commercial Land' || $prop->property_type == 'Estate')
                  <div class="col">
                    <div class="d-flex align-items-center">
                      <img src="/images/main/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt>
                      <span class="fw-600 alt-font text-dark-gray">{{$prop->land_extent}} perches</span>
                    </div>
                  </div>

                  @elseif($prop->property_type == 'Commercial Building' || $prop->property_type == 'Warehouse')
                  <div class="col">
                    <div class="d-flex align-items-center">
                      <img src="/images/main/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt>
                      <span class="fw-600 alt-font text-dark-gray">{{$prop->square_feet}} sqft</span>
                    </div>
                    <span class="d-block lh-18 fs-15">Living area</span>
                  </div>
                  @else
                  <div class="col">
                    <div class="d-flex align-items-center">
                      <img src="/images/main/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt>
                      <span class="fw-600 alt-font text-dark-gray">{{$prop->bed_rooms}}</span>
                    </div>
                    <span class="d-block lh-18 fs-15">Bedrooms</span>
                  </div>
                  <div class="col">
                    <div class="d-flex align-items-center">
                      <img src="/images/main/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt>
                      <span class="fw-600 alt-font text-dark-gray">{{$prop->bath_rooms}}</span>
                    </div>
                    <span class="d-block lh-18 fs-15">Bathrooms</span>
                  </div>
                  <div class="col">
                    <div class="d-flex align-items-center">
                      <img src="/images/main/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt>
                      <span class="fw-600 alt-font text-dark-gray">{{$prop->square_feet}} sqft</span>
                    </div>
                    <span class="d-block lh-18 fs-15">Living area</span>
                  </div>


                  @endif
                </div>
              </div>
              <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                <div class="col">
                  <a href="/propertyDetails/{{$prop->id}}" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                </div>
                <div class="col text-end">
                  @if(strlen($prop->asking_price)< 4)
                    <span class="fs-24 alt-font text-dark-gray fw-700 mb-0">LKR {{$prop->asking_price}} .00 </span>
                    @elseif(strlen($prop->asking_price)< 6)
                      <span class="fs-18 alt-font text-dark-gray fw-700 mb-0">LKR {{$prop->asking_price}} .00 </span>
                      @else
                      <span class="fs-15 alt-font text-dark-gray fw-700 mb-0">LKR {{$prop->asking_price}} .00 </span>
                      @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        @empty
        <h2>No items to show!</h2>
        @endforelse

      </div>
    </div>
  </section>


  <section>
    <div class="container">
      <div class="row align-items-center justify-content-center mb-7">
        <div class="col-lg-5 md-mb-50px" data-anime="{ &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
          <span class="fs-20 d-inline-block mb-15px text-base-color">Why choose our services?</span>
          <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">We provide precise and trustworthy<span class="fw-700 text-highlight d-inline-block text-green">property listings<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span> details.</h3>
          <div class="mt-50px mb-50px sm-mt-40px sm-mb-40px">

            <div class="icon-with-text-style-08 mb-30px">
              <div class="feature-box feature-box-left-icon overflow-hidden">
                <div class="feature-box-icon">
                  <img src="https://i.ibb.co/BK7Sj9nq/Whats-App-Image-2025-06-03-at-09-06-42.jpg" class="w-80px" alt>
                </div>
                <div class="feature-box-content last-paragraph-no-margin">
                  <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Expert Market knowledge</span>
                  <p class="w-80 lg-w-100">We know the real estate market inside and out, esuring you get the best possible deal.</p>
                </div>
              </div>
            </div>


            <div class="icon-with-text-style-08">
              <div class="feature-box feature-box-left-icon overflow-hidden">
                <div class="feature-box-icon">
                  <img src="https://i.ibb.co/BK7Sj9nq/Whats-App-Image-2025-06-03-at-09-06-42.jpg" class="w-80px" alt>
                </div>
                <div class="feature-box-content last-paragraph-no-margin">
                  <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Personalized Client Service</span>
                  <p class="w-80 lg-w-100">We put your goals at the heart of everything we do, ensuring tailored support and clarity throughout your property journey.
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="d-inline-block">
            <a href="/company" class="btn btn-dark-gray btn-medium btn-round-edge me-15px xs-mb-10px">More</a>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 position-relative" data-anime="{ &quot;effect&quot;: &quot;slide&quot;, &quot;color&quot;: &quot;#262b35&quot;, &quot;direction&quot;:&quot;lr&quot;, &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;delay&quot;:50}">
<figure class="position-relative mb-0 border-radius-6px overflow-hidden" style="cursor: pointer;" onclick="window.open('https://www.youtube.com/watch?v=7Fh2RgvcmFc', '_blank');">
  <img src="https://cdn.pixabay.com/photo/2016/08/26/15/06/home-1622401_1280.jpg" class="w-100 border-radius-6px" alt="Image description">
  <div class="absolute-middle-center text-center rounded-circle video-icon-box video-icon-large">
    <span class="video-icon bg-white">
      <i class="fa-solid fa-play text-dark-gray"></i>
      <span class="video-icon-sonar">
        <span class="video-icon-sonar-bfr border border-color-white"></span>
      </span>
    </span>
  </div>
  <figcaption class="position-absolute text-center border-radius-5px right-25px bottom-25px ps-30px pe-30px blur-box bg-white-transparent">
    <h1 class="mx-auto mb-0 fw-700 alt-font text-dark-gray mb-5px mt-25px">4.2</h1>
    <div class="text-base-color fs-19 ls-2px lh-10">
      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
    </div>
    <span class="text-dark-gray text-uppercase fs-13 fw-700 alt-font mb-15px d-inline-block">Reviews</span>
  </figcaption>
</figure>



        </div>
      </div>
      <div class="row justify-content-center" data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
        <div class="col-auto icon-with-text-style-08">
          <div class="feature-box feature-box-left-icon-middle">
            <div class="feature-box-icon me-10px">
              <i class="bi bi-pin-map icon-medium text-base-color"></i>
            </div>
            <div class="feature-box-content alt-font text-dark-gray fs-22 fw-600">
              Explore a wide range of properties for rent and sale <span class="text-decoration-line-bottom">and discover the perfect one that feels like home.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="overflow-hidden bg-gradient-very-light-gray">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-4 col-lg-5 md-mb-50px sm-mb-35px">
          <span class="fs-20 d-inline-block mb-15px text-base-color">Let us help you find your dream property.</span>
          <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px w-90 xl-w-100 shadow-none" data-shadow-animation="true" data-animation-delay="700">Wether you are looking to rent or buy, we've got great places in the best neighborhoods.<span class="fw-700 text-highlight d-inline-block text-green">find yours today<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
          <p class="mb-30px w-90 md-w-100">Explore all your options and find the place that truly feels like home.</p>
          <div class="d-flex">

            <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i></div>
            <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i></div>

          </div>
        </div>
        <div class="col-xl-8 col-lg-7">
          <div class="outside-box-right-20 sm-outside-box-right-0" data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <div class="swiper magic-cursor slider-one-slide" data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 30, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-three-slide-pagination&quot;, &quot;clickable&quot;: true, &quot;dynamicBullets&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 2 }, &quot;320&quot;: { &quot;slidesPerView&quot;: 1 } }, &quot;effect&quot;: &quot;slide&quot; }">
              <div class="swiper-wrapper">

                <div class="swiper-slide">

                  <div class="col interactive-banner-style-05">
                    <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                      <a href="#">
                        <img src="https://i.ibb.co/Gfgst6Z1/colombo.png" class="w-100 border-radius-6px" alt />
                        <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                        <div class="position-absolute top-25px right-25px bg-orange border-radius-50px ps-5px pe-15px lh-28">
                          <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-orange lh-18">
                            <i class="fa-solid fa-check fs-10"></i>
                          </div>
                        </div>
                      </a>
                      <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                        <img src="/images/main/demo-real-estate-icon-07.png" class="mb-auto h-70px" alt />
                        <a href="#" class="text-white alt-font fw-600 fs-26">Colombo, Sri Lanka</a>
                        <a href="/all?province=1&district=Colombo" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                      </figcaption>
                    </figure>
                  </div>

                </div>


                <div class="swiper-slide">

                  <div class="col interactive-banner-style-05">
                    <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                      <a href="#">
                        <img src="https://i.ibb.co/7xf6Qvxd/galle.png" class="w-100 border-radius-6px" alt />
                        <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                        <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                          <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                            <i class="fa-solid fa-check fs-10"></i>
                          </div>
                        </div>
                      </a>
                      <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                        <img src="/images/main/demo-real-estate-icon-07.png" class="mb-auto h-70px" alt />
                        <a href="#" class="text-white alt-font fw-600 fs-26">Galle, Sri Lanka</a>
                        <a href="/all?province=0&district=Galle" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                      </figcaption>
                    </figure>
                  </div>

                </div>


                <div class="swiper-slide">

                  <div class="col interactive-banner-style-05">
                    <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                      <a href="#">
                        <img src="https://i.ibb.co/fJG2PSC/matara.png" class="w-100 border-radius-6px" alt />
                        <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                        <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                          <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                            <i class="fa-solid fa-check fs-10"></i>
                          </div>
                        </div>
                      </a>
                      <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                        <img src="/images/main/demo-real-estate-icon-07.png" class="mb-auto h-70px" alt />
                        <a href="#" class="text-white alt-font fw-600 fs-26">Matara, Sri Lanka</a>
                        <a href="/all?province=0&district=Matara" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                      </figcaption>
                    </figure>
                  </div>

                </div>


                <!-- <div class="swiper-slide">

                  <div class="col interactive-banner-style-05">
                    <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                      <a href="#">
                        <img src="/images/main/demo-real-estate-03.jpg" class="w-100 border-radius-6px" alt />
                        <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                        <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                          <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                            <i class="fa-solid fa-check fs-10"></i>
                          </div>
                        </div>
                      </a>
                      <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                        <img src="/images/main/demo-real-estate-icon-07.png" class="mb-auto h-70px" alt />
                        <a href="#" class="text-white alt-font fw-600 fs-26">Kaluthara, Sri Lanka</a>
                        <a href="/all?province=1&&district=Kaluthara" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                      </figcaption>
                    </figure>
                  </div>

                </div> -->

                <div class="swiper-slide">

                  <div class="col interactive-banner-style-05">
                    <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                      <a href="#">
                        <img src="https://i.ibb.co/G4Rjwxf1/kandy.png" class="w-100 border-radius-6px" alt />
                        <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                        <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                          <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                            <i class="fa-solid fa-check fs-10"></i>
                          </div>
                        </div>
                      </a>
                      <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                        <img src="/images/main/demo-real-estate-icon-07.png" class="mb-auto h-70px" alt />
                        <a href="#" class="text-white alt-font fw-600 fs-26">Kandy, Sri Lanka</a>
                        <a href="/all?province=2&district=Kandy" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                      </figcaption>
                    </figure>
                  </div>

                </div>


                <div class="swiper-slide">

                  <div class="col interactive-banner-style-05">
                    <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                      <a href="#">
                        <img src="https://i.ibb.co/hRFSjMJS/gampaha.png" class="w-100 border-radius-6px" alt />
                        <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                        <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                          <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                            <i class="fa-solid fa-check fs-10"></i>
                          </div>
                        </div>
                      </a>
                      <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                        <img src="/images/main/demo-real-estate-icon-07.png" class="mb-auto h-70px" alt />
                        <a href="#" class="text-white alt-font fw-600 fs-26">Gampaha, Sri Lanka</a>
                        <a href="/all?province=1&district=Gampaha" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                      </figcaption>
                    </figure>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="py-0">
    <div class="container">
      <div class="row justify-content-center align-items-center mb-40px md-mb-30px">
        <div class="col text-center" data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
          <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Trusted for  consistently going above and beyond <span class="fw-700 text-highlight d-inline-block text-green">for our clients<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
        </div>
      </div>
      <div class="row g-0 row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

        <div class="col icon-with-text-style-10 transition-inner-all md-mb-50px sm-mb-30px">
          <div class="feature-box text-center border-end xs-border-end-0 border-color-extra-medium-gray">
            <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-15px">
              <i class="bi bi-house-door icon-large text-dark-gray"></i>
            </div>
            <div class="feature-box-content last-paragraph-no-margin">
              <span class="alt-font fw-600 text-dark-gray fs-19 d-inline-block mb-5px">Sell your property</span>
              <p class="w-80 md-w-70 mx-auto">Sell quickly and confidently with expert support exery step of the way</p>
            </div>
          </div>
        </div>


        <div class="col icon-with-text-style-10 transition-inner-all md-mb-50px sm-mb-30px">
          <div class="feature-box text-center border-end md-border-end-0 border-color-extra-medium-gray">
            <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-15px">
              <i class="bi bi-camera icon-large text-dark-gray"></i>
            </div>
            <div class="feature-box-content last-paragraph-no-margin">
              <span class="alt-font fw-600 text-dark-gray fs-19 d-inline-block mb-5px">Free photoshoot</span>
              <p class="w-80 md-w-70 mx-auto">Show your property at its best with stunning professional photography, completely free.</p>
            </div>
          </div>
        </div>


        <div class="col icon-with-text-style-10 transition-inner-all xs-mb-30px">
          <div class="feature-box text-center border-end xs-border-end-0 border-color-extra-medium-gray">
            <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-15px">
              <i class="bi bi-key icon-large text-dark-gray"></i>
            </div>
            <div class="feature-box-content last-paragraph-no-margin">
              <span class="alt-font fw-600 text-dark-gray fs-19 d-inline-block mb-5px">Buy a property</span>
              <p class="w-80 md-w-70 mx-auto">Find your dream property with personalized guidance tailored to your needs.</p>
            </div>
          </div>
        </div>


        <div class="col icon-with-text-style-10 transition-inner-all">
          <div class="feature-box text-center">
            <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-15px">
              <i class="bi bi-gear icon-large text-dark-gray"></i>
            </div>
            <div class="feature-box-content last-paragraph-no-margin">
              <span class="d-inline-block alt-font fw-600 text-dark-gray fs-19 d-inline-block mb-5px">Property appraisal</span>
              <p class="w-80 md-w-70 mx-auto">Get a clear, accurate valuation backed by trusted market insights.</p>
            </div>
          </div>
        </div>

      </div>
      <div class="row justify-content-center mt-6 sm-mt-50px">
        <div class="col-auto icon-with-text-style-08">
          <div class="feature-box feature-box-left-icon-middle">
            <div class="feature-box-icon me-15px">
              <i class="bi bi-patch-check icon-medium text-base-color"></i>
            </div>
            <div class="feature-box-content alt-font text-dark-gray fs-22 fw-600">
              Join our expansive network! Capital Trust has <span class="text-decoration-line-bottom">partners in over 130+ countries</span>
            </div>
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
          <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Here's what our <span class="fw-700 text-highlight d-inline-block text-green">clients<span class="bg-base-color h-10px bottom-4px opacity-3 separator-animation"></span></span> have to say</h2>
          <div class="swiper position-relative" data-slider-options="{ &quot;autoHeight&quot;: true, &quot;loop&quot;: true, &quot;allowTouchMove&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 4000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next&quot;, &quot;prevEl&quot;: &quot;.swiper-button-prev&quot; }, &quot;effect&quot;: &quot;fade&quot; }">
            <div class="swiper-wrapper mb-40px">

              <div class="swiper-slide review-style-08">
                <p class="w-80 xl-w-90 lg-w-100">Capital Trust Properties led by Minoli Wickramasinghe and her team have been efficient and professional in helping us with our real estate requirements over the years. A leading Real Estate services provider in Sri Lanka, Capital Trust Properties is well equipped with a wealth of knowledge about the industry and handle a diverse portfolio of properties in the country. They are also well known for their ethical and professional conduct at all times.</p>
                <div class="mt-20px">
                  <img class="rounded-circle w-95px h-95px me-15px" src="https://images.crunchbase.com/image/upload/c_thumb,h_256,w_256,f_auto,g_face,z_0.7,q_auto:eco,dpr_1/lqavbydan90awwg6yltp" alt>
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


  <section class="p-0 overlap-height">
    <div class="container overlap-gap-section">
      <div class="row align-items-center mb-2" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
        <div class="col-12 text-center">
          <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Latest <span class="fw-700 text-highlight d-inline-block text-green ">News<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <ul class="blog-classic blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <li class="grid-sizer"></li>

            @forelse ($news as $new)
            <li class="grid-item">
              <div class="card bg-transparent border-0 h-100">
                <div style="height:300px; width:300px" class="blog-image position-relative overflow-hidden border-radius-6px ">
                  @if(!$new->link)
                  <a href="detailedNews/{{$new->id}}"><img style="height:300px; width:300px" src="/images/{{$new->image}}" alt /></a>
                  @else
                  <a href="{{$new->link}}"><img style="height:300px; width:300px" src="/images/{{$new->image}}" alt /></a>
                  @endif
                </div>
                <div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
                  <span class="fs-14 text-uppercase"><a href="#" class="blog-date">{{$new->created_at}}</a></span>
                  <p class="card-title mb-10px alt-font fw-600 lh-30 text-dark-gray d-inline-block w-95 fs-19">{{$new->title}}</p>
                </div>
              </div>
            </li>
            @empty
            <h3>No News found yet</h3>
            @endforelse


            <!-- 

<li class="grid-item">
<div class="card bg-transparent border-0 h-100">
<div class="blog-image position-relative overflow-hidden border-radius-6px">
<a href="/demo-real-estate-blog-single-creative.html"><img src="/images/main/demo-real-estate-blog-04.jpg" alt /></a>
</div>
<div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
<span class="fs-14 text-uppercase"><a href="#" class="text-dark-gray fw-500 categories-text">Residential</a><a href="#" class="blog-date">18 August 2023</a></span>
<a href="/demo-real-estate-blog-single-creative.html" class="card-title mb-10px alt-font fw-600 lh-30 text-dark-gray d-inline-block w-95 fs-19">Don't wait to buy real estate buy real estate and wait.</a>
</div>
</div>
</li> -->

          </ul>
        </div>
      </div>
    </div>
  </section>


  <footer class="footer-light bg-gradient-very-light-gray pb-0">
    <!-- <div class="container position-relative pt-3 pb-3 overlap-section md-mb-15px">
      <div class="position-absolute left-0px top-0px background-no-repeat background-size-100 h-100 w-100 animation-float" style="background-image: url('/images/main/demo-real-estate-10.png')"></div>

      <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center bg-base-color pt-4 pb-4 ps-6 pe-6 lg-p-5 border-radius-6px g-0">
        <div class="col-xl-6 col-lg-7 md-mb-25px sm-mb-15px position-relative text-center text-lg-start">
          <h3 class="alt-font fw-500 text-white ls-minus-1px mb-10px shadow-none" data-shadow-animation="true" data-animation-delay="700">Subscribe to our <span class="fw-700 text-highlight d-inline-block">newsletter<span class="bg-white h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
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

         <section class="pt-0 pb-50px mt-5 ps-6 pe-6 xxl-ps-2 xl-pe-2 lg-ps-30px lg-pe-30px xs-ps-15px xs-pe-15px"> -->
     <!-- <div class="container-fluid">
    <div class="row">
 <div class="col-md-8 text-center text-md-start sm-mb-20px" data-anime="{ &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
          <h3 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Related <span class="fw-700 text-highlight d-inline-block text-green">Companies<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
        </div>    </div>
    <div class="row">
        <div class="col-6 mt-2 swiper slider-four-slide portfolio-slider"
            data-slider-options='{
                "slidesPerView": 1,
                "spaceBetween": 25,
                "loop": true,
                "pagination": { "el": ".slider-four-slide-pagination", "clickable": true },
                "autoplay": { "delay": 3000, "disableOnInteraction": false },
                "navigation": { "nextEl": ".slider-four-slide-next", "prevEl": ".slider-four-slide-prev" },
                "keyboard": { "enabled": true, "onlyInViewport": true },
                "breakpoints": {
                    "1200": { "slidesPerView": 4 },
                    "992": { "slidesPerView": 3 },
                    "768": { "slidesPerView": 2 }
                },
                "effect": "slide"
            }'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="portfolio-box transition-inner-all">
                        <div class="portfolio-image bg-dark-gray">
                            <img src="https://i.ibb.co/vv34MTxW/Whats-App-Image-2025-05-29-at-09-24-40.jpg" alt class="rounded" />
                            <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="portfolio-box transition-inner-all">
                        <div class="portfolio-image bg-dark-gray">
                            <img src="https://i.ibb.co/RpsGRyTP/Whats-App-Image-2025-05-29-at-09-24-41.jpg" alt class="rounded" />
                            <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="portfolio-box transition-inner-all">
                        <div class="portfolio-image bg-dark-gray">
                            <img src="https://i.ibb.co/mQTWz3q/Whats-App-Image-2025-05-29-at-09-24-42-1.jpg" alt class="rounded" />
                            <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="portfolio-box transition-inner-all">
                        <div class="portfolio-image bg-dark-gray">
                            <img src="https://i.ibb.co/SX4srs2s/Whats-App-Image-2025-05-29-at-09-24-42.jpg" alt class="rounded" />
                            <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="portfolio-box transition-inner-all">
                        <div class="portfolio-image bg-dark-gray">
                            <img src="https://i.ibb.co/BVs7jCL9/Whats-App-Image-2025-05-29-at-09-24-43-1.jpg" alt class="rounded" />
                            <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="portfolio-box transition-inner-all">
                        <div class="portfolio-image bg-dark-gray">
                            <img src="https://i.ibb.co/JjGdS0ft/Whats-App-Image-2025-05-29-at-09-24-43-2.jpg" alt class="rounded" />
                            <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="portfolio-box transition-inner-all">
                        <div class="portfolio-image bg-dark-gray">
                            <img src="https://i.ibb.co/4wNndDTb/Whats-App-Image-2025-05-29-at-09-24-43.jpg" alt class="rounded" />
                            <a href="#" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<style>
    .rounded {
        border-radius: 10px !important; /* Adjust the value as needed */
    }
</style>

        <div class="row justify-content-center align-items-center mt-5 md-mt-7" data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <div class="col-12 text-center align-items-center">
                <div class="bg-dark-gray alt-font fs-12 fw-700 text-white text-uppercase border-radius-30px ps-20px pe-20px me-10px sm-m-5px d-inline-block align-middle"></div>
            </div>
        </div>
        </div>
    </section>


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
          <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Services</span>
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
<a href="/cdn-cgi/l/email-protection.html#731a1d151c33171c1e121a1d5d101c1e" 
   class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block mb-20px" 
   style="font-size: 15px;">
   <span data-cfemail="fc95929a93bc9893919d9592d29f9391">properties@capitaltrust.lk</span>
</a>
          <span class="d-block lh-normal">Hotline</span>
          <a href="/tel:12345678910" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block">+94 70 444 4555</a>
        </div>

      </div>

      <div class="row align-items-center pb-35px pt-10px">
        <div class="col-xl-12 col-sm-6 text-center text-sm-start last-paragraph-no-margin fs-15 text-dark-gray order-3 order-md-1">
<p class="text-center">
    © Copyright <?php echo date("Y"); ?> Capital Trust Properties | Crafted By 
    <a href="https://sparksolutions.lk/?i=3" target="_blank" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">
        Spark Solutions
    </a>
</p>
        </div>
      </div>
  </footer>

  <!-- 
<div id="subscribe-popup" class="mfp-hide subscribe-popup">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-10 col-md-10 bg-white">
<div class="row position-relative box-shadow-quadruple-large">
<div class="col-lg-6 cover-background md-h-400px xs-h-300px" style="background-image:url('/images/main/demo-real-estate-popup.jpg');"></div>
<div class="col-lg-6 newsletter-popup p-8 lg-p-5 md-p-6 xs-p-8 position-relative">
<span class="text-base-color mb-10px d-block" style>We offer a wide range of options</span>
<h4 class="d-inline-block alt-font text-dark-gray mb-20px">1M+ property ready to <span class="fw-700 d-inline-flex text-highlight">buying & selling.<span class="bg-base-color h-10px bottom-8px opacity-3"></span></span></span></h4>
<p>Subscribe to our newsletters and get the property for sell and rent updates.</p>
<div class="d-inline-block w-100 newsletter-style-05 position-relative mb-20px">
<form action="/newSubscriber" method="post">
<input class="input-medium w-100 border-radius-4px form-control required mb-15px" type="email" maxlength="30" name="email" placeholder="Enter your email address" />
<input type="hidden" name="redirect" value>
<button type="submit" onclick="" aria-label="submit" class="btn btn-medium btn-round-edge btn-dark-gray btn-box-shadow w-100 submit">Subscribe now!</button>
<div class="form-results border-radius-4px mt-10px lh-normal pt-10px pb-10px ps-15px pe-15px fs-16 w-100 text-center position-absolute z-index-1 d-none"></div>
</form>
</div>
<label for="newsletter-off" class="fs-15"><input class="w-auto me-10px position-relative top-1px p-0" type="checkbox" id="newsletter-off" name="newsletter-off">Don't show this popup again</label>
</div>
<button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
</div>
</div>
</div>
</div>
</div> -->


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