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
    <style>
        body {
            background-color: #f8f9fa;
        }

        .services-section {
            margin-top: 3rem;
            padding: 2rem;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .icon-check {
            color: green;
        }

        .image-container img {
            width: 100%;
            border-radius: 10px;
            object-fit: cover;
        }
    </style>
</head>

<body data-mobile-nav-style="classic">

    @include('navbar')

    <section class="p-0 top-space-margin">
        <div class="swiper full-screen md-h-600px sm-h-500px swiper-number-pagination-style-01 magic-cursor drag-cursor" data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.swiper-number&quot;, &quot;clickable&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;autoplay&quot;: { &quot;delay&quot;: 4000, &quot;disableOnInteraction&quot;: false },  &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;effect&quot;: &quot;slide&quot; }" data-number-pagination="1">
            <div class="swiper-wrapper">
                <div class="container">
                    <div class="row align-items-center services-section">
                        <!-- Text Section -->
                        <div class="col-lg-6 col-md-12 mb-4">
                            <h2 class="fw-bold">{{$news->title}}</h2>
                            <p>
                                {{$news->description}}
                            </p>
                        </div>

                        <!-- Image Section -->
                        <div class="col-lg-6 col-md-12 image-container">
                            <img src="/images/{{$news->image}}" alt="Property Image">
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

            <!-- <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center bg-base-color pt-4 pb-4 ps-6 pe-6 lg-p-5 border-radius-6px g-0">
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
            </div> -->

        </div>
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
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="/js/customFunctions.js"></script>

</body>

</html>