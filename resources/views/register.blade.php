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
<body style="background-image: url('/images/main/Untitled (Website).jpg');
    background-size: cover;
    background-position: center;background-repeat: no-repeat;" data-mobile-nav-style="classic">

@if (session('success'))
    <div class="alert alert-success alert-dismissible m-4 fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


@if (session('error'))
    <div class="alert alert-danger alert-dismissible m-4 fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif 
<!----------------------- Main Container -------------------------->
<div class="container d-flex justify-content-center mt-2 align-items-center min-vh-100">
    <!----------------------- Login Container -------------------------->
       <div class="row border rounded-5 p-3 bg-white shadow box-area">
    <!--------------------------- Left Box ----------------------------->
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: var(--base-color);">
           <div class="featured-image mb-3">
            <img src="/images/main/login/1.png" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">SELL | BUY | RENT</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Capital Trust Properties</small>
       </div> 
    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Hey There</h2>
                     <p>Register with us Now!</p>
                </div>
                <form action="/UserRegister" method="POST">
                @Csrf
                <div class="input-group mb-2">
                    <input type="text" maxlength="30" name="name" class="form-control form-control-lg bg-light fs-6" placeholder="Enter Name">
                </div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="input-group mb-2">
                    <input type="text" name="email" maxlength="30" class="form-control form-control-lg bg-light fs-6" placeholder="Email address"> 
                </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="input-group mb-2">
                    <input type="contact" maxlength="30" name="contact" class="form-control form-control-lg bg-light fs-6" placeholder="Contact Number">
                
                </div>   
                @error('contact')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                <div class="input-group mb-2">
                    <input type="password" name="password" maxlength="30" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                </div>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="input-group mb-2">
                    <input type="password" maxlength="30" name="password_confirmation" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password">    
                </div>
                @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                <div class="input-group mb-5 d-flex justify-content-between">
                    <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                    </div> -->
                    <!-- <div class="forgot">
                        <small><a href="#">Forgot Password?</a></small>
                    </div> -->
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn_mc w-100 fs-6">Register</button>
                </div>
                </form>
                <div class="input-group mb-3">
                    <button onclick="location.href='/'" class="btn btn-lg btn-light w-100 fs-6"><small>Go Back Home</small></button>
                </div>
                <div class="row">
                    <small>Already have an account? <a href="/login">Sign In</a></small>
                </div>
          </div>
       </div> 
      </div>
    </div>

<div class="scroll-progress d-none d-xxl-block">
<a href="#" class="scroll-top" aria-label="scroll">
<span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
</a>
</div>


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/vendors.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
</body>
</html>