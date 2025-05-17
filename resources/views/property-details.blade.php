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


@foreach($images as $image)
<div class="swiper-slide cover-background" style="background-image:url('/images/{{$image->image}}');">
</div>
@endforeach
</div>



</div>
@if(!empty($images))
{{$images->links('vendor.pagination.bootstrap-4')}}
@endif
</div>
</div>
</div>
</section>

<section class="position-relative">
<div class="container">
<div class="d-flex justify-content-center">
<div class="col-12 md-mb-50px">
<div class="row mb-15px">
<div class="col-12">
<h3 class="alt-font text-center text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700"><span class="fw-700 text-highlight d-inline-block">Property description<span class="bg-base-color h-10px bottom-5px opacity-3 separator-animation"></span></span></h3>
@if($property->description!=='Requirements')
<p>{{ $property->description  }}</p>
@endif
</div>
</div>
@if(!($property->property_type == 'Residential Land' || $property->property_type == 'Commercial Land' || $property->property_type == 'Estate' || $property->property_type == 'Commercial Building' || $property->property_type == 'Warehouse')) 
<div  class="row g-0">
<div style="min-width:70vw;" class="col bg-very-light-gray p-35px lg-ps-15px lg-pe-15px border-radius-6px fs-16">
<div class="row row-cols-2 row-cols-md-5 row-cols-sm-2">
<div class="col text-center border-end border-color-extra-medium-gray sm-mb-30px">
<img src="/images/main/demo-real-estate-icon-bed.svg" class="w-50px mb-15px" alt>
<span class="text-dark-gray d-block lh-20">{{$property->bed_rooms}} Bedrooms</span>
</div>
<div class="col text-center border-end sm-border-end-0 border-color-extra-medium-gray sm-mb-30px">
<img src="/images/main/demo-real-estate-icon-bath.svg" class="w-50px mb-15px" alt>
<span class="text-dark-gray d-block lh-20">{{$property->bath_rooms}} Bathrooms</span>
</div>
<div class="col text-center border-end border-color-extra-medium-gray">
<img src="/images/main/demo-real-estate-icon-car.svg" class="w-50px mb-15px" alt>
<span class="text-dark-gray d-block lh-20">{{$property->parking}} Parking slots</span>
</div>
<div class="col text-center border-end border-color-extra-medium-gray">
<img src="/images/main/demo-real-estate-icon-swimming.svg" class="w-50px mb-15px" alt>
<span class="text-dark-gray d-block lh-20">{{$property->furnished?'furnished':'unfurnished'}}</span>
</div>
<div class="col text-center">
<img src="/images/main/demo-real-estate-icon-shop.svg" class="w-50px mb-15px" alt>
@if($property->asking_price < 1000000)
@if($property->asking_price < 100000)
<h4 style="max-height: 120px; font-size:1.2em" class="text-dark-gray text-nowrap  fw-700 alt-font mb-0 ls-minus-1px">LKR {{number_format($property->asking_price, 0, '.', ' ') }} .00</h4>
@elseif($property->asking_price < 10000)
<h4 style="max-height: 120px; font-size:1.3em" class="text-dark-gray text-nowrap  fw-700 alt-font mb-0 ls-minus-1px">LKR {{number_format($property->asking_price, 0, '.', ' ') }} .00</h4>
@elseif($property->asking_price < 1000)
@else
<h4 style="max-height: 120px; font-size:1.4em" class="text-dark-gray text-nowrap  fw-700 alt-font mb-0 ls-minus-1px">LKR {{number_format($property->asking_price, 0, '.', ' ') }} .00</h4>
@endif

@else
<h4  class="text-dark-gray text-nowrap fw-700 alt-font mb-0 ls-minus-1px">LKR {{(number_format($property->asking_price/1000000,1))}} mn</h4>
@endif

@endif</div>
</div>
</div>
</div>
</section>
<!-- <section class="position-relative">
<div class="container">
<div class="row m-5">
<div class="bg-base-color-light border-radius-6px position-sticky top-120px">
<div class="bg-base-color border-radius-6px feature-box feature-box-left-icon-middle overflow-hidden icon-with-text-style-08 ps-35px pe-35px pt-25px pb-20px xs-p-25px">

<div class="feature-box-icon feature-box-icon-rounded w-90px h-90px overflow-visible me-20px position-relative">
<img src="images/main/agent-prof.webp" class="rounded-circle" alt>
<span class="animation-zoom d-inline-block bg-orange border border-2 border-color-white h-20px w-20px border-radius-100 position-absolute right-0px top-5px"></span>
</div>


<div class="feature-box-content last-paragraph-no-margin">
<span class="text-white alt-font fw-600 fs-20 d-block">CTP Agent</span>
<div class="lh-24 d-block">
<span class="me-5px text-white opacity-8">17 properties</span>
<div class="bg-white border-radius-2px text-uppercase alt-font fw-700 text-dark-gray fs-12 lh-24 ps-10px pe-10px d-inline-block align-middle">Verified</div>
</div>
</div>


<div class="elements-social social-icon-style-02 mt-5px w-100 text-start text-lg-center">
<ul class="medium-icon">
<li class="m-0"><a class="facebook text-white" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
<li class="m-0"><a class="dribbble text-white" href="http://www.dribbble.com/" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
<li class="m-0"><a class="twitter text-white" href="https://www.twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
<li class="m-0"><a class="instagram text-white" href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
</ul>
</div>

</div>
<div class="ps-45px pe-45px pt-35px pb-45px xs-p-25px contact-form-style-01 mt-0">
<div class="mb-20px last-paragraph-no-margin">
<p class="mb-0 alt-font fw-500 text-dark-gray"><i class="feather icon-feather-phone-call icon-small text-base-color me-10px"></i><span class="fw-600 w-20 sm-w-15 xs-w-20 d-inline-block">Phone:</span><a href="tel:+94771234567" class="text-dark-gray text-base-color-hover">+94 77 123 4567</a></p>
<p class="alt-font fw-500 text-dark-gray"><i class="feather icon-feather-mail icon-small text-base-color me-10px"></i><span class="fw-600 w-20 sm-w-15 xs-w-20 d-inline-block">Email:</span><a href="cdn-cgi/l/email-protection.html#0e676068614e6a61636f6760206d6163" class="text-dark-gray text-decoration-line-bottom"><span class="" data-cfemail="f891969e97b89c9795999196d69b9795">agent1@capitaltrust.lk</span></a></p>
</div>
<span class="alt-font fs-20 fw-600 text-dark-gray d-block mb-25px">Leave your message here</span>

<form action="/newMessage" method="post">
<div class="position-relative form-group mb-15px">
<span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
<input type="text" name="name" class="form-control border-color-white box-shadow-large required" placeholder="Your name*" />
</div>
<div class="position-relative form-group mb-15px">
<span class="form-icon"><i class="bi bi-envelope"></i></span>
<input type="email" name="email" class="form-control border-color-white box-shadow-large required" placeholder="Your email address*" />
</div>
<div class="position-relative form-group mb-15px">
<span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
<input type="tel" name="phone" class="form-control border-color-white box-shadow-large" placeholder="Your phone" />
</div>
<div class="position-relative form-group form-textarea">
<span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
<textarea placeholder="Your message" name="comment" class="form-control border-color-white box-shadow-large" rows="3"></textarea>
<input type="hidden" name="redirect" value>
<button class="btn btn-small btn-round-edge btn-base-color mt-20px submit " type="submit">Send message</button>
<div class="form-results mt-20px d-none"></div>
</div>
</form> 

</div>
</div>
</div>

</div>
</div>
</section>
-->

<section class="bg-gradient-very-light-gray">
<div class="container">
<div class="row mb-4">
<div class="col-12 text-center">
<h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Similar <span class="fw-700 text-highlight d-inline-block">properties<span class="bg-base-color h-10px bottom-5px opacity-3 separator-animation"></span></span></h3>
</div>
</div>
<div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 justify-content-center">

@forelse($similar as $sp)
  
<div class="col mb-30px">
<div class="border-radius-6px overflow-hidden box-shadow-large">
<div class="image position-relative">
<a href="#">
<img 
    src="/images/{{$sp->mainImage->image}}" 
    alt="Main Image"
    class="w-full h-[175px] object-cover rounded"
/>
</a>
<div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent</div>
</div>
<div class="bg-white">
<div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
<div class="d-flex align-items-center">
 @if($sp->deal_type=='forBuy')   
<a href="#" style="height:30px; overflow:hidden" class="alt-font text-dark-gray fw-700 fs-22 me-10px">{{ucwords($sp->property_type)}} For Sale</a>
 @else
 <a href="#" style="height:30px; overflow:hidden" class="alt-font text-dark-gray fw-700 fs-22 me-10px">{{ucwords($sp->property_type)}} For Rent </a>
 @endif
</div>
<p style="height:60px; overflow:hidden" class="mb-20px">{{$sp->location}}</p>
<div class="row g-0">
<div class="col">
<div class="d-flex align-items-center">
<img src="/images/main/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt>
<span class="fw-600 alt-font text-dark-gray">{{$sp->bed_rooms}}</span>
</div>
<span class="d-block lh-18 fs-15">Bedrooms</span>
</div>
<div class="col">
<div class="d-flex align-items-center">
<img src="/images/main/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt>
<span class="fw-600 alt-font text-dark-gray">{{$sp->bath_rooms}}</span>
</div>
<span class="d-block lh-18 fs-15">Bathrooms</span>
</div>
<div class="col">
<div class="d-flex align-items-center">
<img src="/images/main/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt>
<span class="fw-600 alt-font text-dark-gray">{{$sp->square_feet}} sq. feet</span>
</div>
<span class="d-block lh-18 fs-15">Living area</span>
</div>
</div>
</div>
<div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
<div class="col">
<a href="/propertyDetails/{{$sp->id}}" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
</div>
<div class="col text-end">
@if(strlen($sp->asking_price)< 4)  
<span class="fs-24 alt-font text-dark-gray fw-700 mb-0">LKR {{number_format($sp->asking_price, 0, '.', ' ') }} .00  </span>
@elseif(strlen($sp->asking_price)< 6)  
<span class="fs-18 alt-font text-dark-gray fw-700 mb-0">LKR {{number_format($sp->asking_price, 0, '.', ' ') }} .00   </span>
@else
<span class="fs-15 alt-font text-dark-gray fw-700 mb-0">LKR {{number_format($sp->asking_price, 0, '.', ' ') }} .00   </span>
@endif
</div>
</div>
</div>
</div>
</div>
@empty
<h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700"><span class="fw-700 text-highlight d-inline-block text-center">No Similar properties right now<span class="bg-base-color h-10px bottom-5px opacity-3 separator-animation"></span></span></h3>
@endforelse 



</div>

</div>
<div class="row w-full m-3">
@if(!empty($sp))
{{$similar->links('vendor.pagination.bootstrap-4')}}
@endif  
</div>
</section>


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
<button  onclick="$('#email').val() && alert('Subscription Added!')" class="btn btn-large text-dark-gray ls-0px left-icon submit fw-700" aria-label="submit"><i class="icon feather icon-feather-mail icon-small text-base-color"></i><span>Subscribe</span></button>
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
        <p class=" text-center" >© Copyright 2024 Capital Trust Properties | Crafted By <a href="https://sparksolutions.lk/?i=3" target="_blank" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">Spark Solutions</a></p>
        </div>
    </div>
    </footer>
    
    
    
    <div class="scroll-progress d-none d-xxl-block">
    <a href="#" class="scroll-top" aria-label="scroll">
    <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
    </a>
    </div>
    
    
  
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/vendors.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/customFunctions.js"></script>
    <script type="text/javascript" src="/js/customFunctions.js"></script>

    </body>
    </html>