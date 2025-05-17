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
<div id="myElement" class="alert w-25 w-sm-75 alert-success alert-dismissible text-center m-4 fade show position-fixed end-0 d-flex justify-content-center" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
<div id="myElement" class="alert w-25 w-sm-75 alert-danger alert-dismissible text-center m-4 fade show position-fixed end-0 d-flex justify-content-center" role="alert">
        {{ session('error') }}
        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
    </div>
@endif
<!------
    
<!----------------------- Main Container -------------------------->
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!----------------------- Login Container -------------------------->
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
 
    <form enctype="multipart/form-data" action="/addNewNews" method="POST">
    <!--------------------------- Left Box ----------------------------->
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Hey There</h2>
                     <p>Add new News</p>
                </div>
                @Csrf
                <div class="input-group mb-3">
                    <input type="text" name="title" class="form-control form-control-lg bg-light fs-6" placeholder="Title">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="author" maxlength="30" class="form-control form-control-lg bg-light fs-6" placeholder="Author">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="link" class="form-control form-control-lg bg-light fs-6" placeholder="News page link(if there's any)">
                </div>
                <div class="input-group mb-3">
                <input required name="image"  accept="image/*" type="file" class="form-control form-control-lg bg-light fs-6" >   
                </div>
                <div class="input-group mb-3">
                <textarea onkeyup="addPlaceholderText(this)" maxlength="500" onclick="shiftPlaceholderText(this)" class="form-control form-control-lg bg-light fs-6" name="description">Description</textarea>  
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                    </div> -->
                    <!-- <div class="forgot">
                        <small><a href="#">Forgot Password?</a></small>
                    </div> -->
                </div>
                <div class="d-flex flex-row-reverse">
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn_mc w-100 fs-6">Add</button>
                </div>
                </form>
                <div class="input-group mb-3">
                    <button onclick="location.href='/adminDashboard'" class="btn btn-lg btn-light w-100 fs-6"><small>Go Back Home</small></button>
                </div>
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
<script type="text/javascript" src="/js/autoComplete.js"></script>
<script type="text/javascript">
    function shiftPlaceholderText(element)
{
  if(element.value =="Description")
  {
    element.value="";
  }
 
}

function addPlaceholderText(element)
{
  if(element.value =="")
  {
    element.value="Description";
  }
 
}

window.onload = function () {
    removeElementAfterDelay("myElement");
};

function removeElementAfterDelay(elementId, delay = 500) {
    let element = document.getElementById(elementId);
    if (element) {
        setTimeout(() => {
            element.remove();
        }, delay);
    }
}
</script>
</body>
</html>