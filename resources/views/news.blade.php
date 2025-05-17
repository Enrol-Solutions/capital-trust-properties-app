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
  <!-- <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"> -->

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

                @endif<!-- <a href="" class="btn btn-white btn-large border-1 btn-round-edge btn-box-shadow me-15px xs-mt-10px xs-mb-10px">Schedule visit</a> -->
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






    </div>
  </section>

  <!-- Start Content -->
  <section class="pb-2 overlap-height sm-pb-50px">
    <div class="container overlap-gap-section">
      <div class="row">
        <div class="col-14">
          <ul class="blog-classic blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

            <li class="grid-sizer"></li>

            @forelse ($newss as $news)
            <li class="grid-item">
              <div class="card bg-transparent border-0 h-100 shadow-lg rounded-lg overflow-hidden" style="max-width: 100%;">
                <div style="height:270px; width:100%;" class="blog-image position-relative overflow-hidden border-radius-6px">
                  @if(!$news->link)
                  <a href="detailedNews/{{$news->id}}">
                    <img class="w-100 h-100 object-fit-cover" src="/images/{{$news->image}}" alt />
                  </a>
                  @else
                  <a href="{{$news->link}}">
                    <img class="w-100 h-100 object-fit-cover" src="/images/{{$news->image}}" alt />
                  </a>
                  @endif
                </div>
                <div class="card-body px-3 py-4 xs-py-2">
                  <span class="fs-14 text-uppercase d-flex justify-content-between text-dark-gray">
                    <a href="#" class="fw-500 categories-text">{{$news->author}}</a>
                    <span class="blog-date">{{$news->created_at}}</span>
                  </span>
                  <p class="card-title alt-font fw-600 lh-30 text-dark-gray d-inline-block w-95 fs-19 mt-3">
                    {{$news->title}}
                  </p>
                </div>
              </div>
            </li>
            @empty
            <li>No news available</li>
            @endforelse
          </ul>

          <div class="row">
            <div class="col-12 mt-2 d-flex justify-content-center">
              <!-- Pagination or more buttons can go here -->
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- End Content -->

  <footer class="footer-light bg-gradient-very-light-gray pb-0">
    <div class="container position-relative pt-3 pb-3 overlap-section md-mb-15px">
      <div class="position-absolute left-0px top-0px background-no-repeat background-size-100 h-100 w-100 animation-float" style="background-image: url('images/main/demo-real-estate-10.png')"></div>

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

    </div>
    <div class="container">
      <div class="row align-items-center justify-content-center">

        <div class="col-auto d-flex flex-column flex-md-row align-items-center text-center text-md-start">
          <div class="text-dark-gray fs-28 alt-font fw-500">1M+ property ready for <span class="fw-700 text-decoration-line-bottom">buying and selling.</span></div>
          <div class="bg-white border-radius-50px d-flex align-items-center p-10px ps-35px ms-20px md-ps-20px md-ms-15px box-shadow-medium sm-m-20px">
            <a href="#" class="text-dark-gray fs-22 alt-font fw-500 me-10px overflow-hidden">Say, <span class="fw-700 w-121px text-start d-inline-block" data-fancy-text="{ &quot;effect&quot;: &quot;rotate&quot;, &quot;string&quot;: [&quot;Hello!&quot;, &quot;Ayubowan!&quot;, &quot;Wanakkam!&quot;] }"></span></a>
            <span class="text-dark-gray h-45px w-45px text-center d-flex align-items-center justify-content-center border-radius-100 bg-base-color-transparent fs-20">&#128075;</span>
          </div>
        </div>

      </div>
      <div class="row justify-content-center mt-5 mb-4 sm-mb-35px">

        <div class="col-lg-3 last-paragraph-no-margin md-mb-35px text-center text-lg-start">
          <a href="#" class="footer-logo mb-10px d-inline-block"><img src="images/main/logo.png" data-at2x="images/main/logo.png" alt></a>
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
          <a href="cdn-cgi/l/email-protection.html#731a1d151c33171c1e121a1d5d101c1e" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block mb-20px"><span class="" data-cfemail="fc95929a93bc9893919d9592d29f9391">info@capitaltrust.lk</span></a>
          <span class="d-block lh-normal">Customer care</span>
          <a href="tel:12345678910" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block">+94 70 444 4555</a>
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
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/vendors.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="/js/customFunctions.js"></script>

</body>

</html>