<!doctype html>
<html class="no-js" lang="en">


<head>
    <title>Find Apartments, Houses And Lands For Rent Or Sell | Capital Trust Properties</title>
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

    <link rel="stylesheet" href="css/vendors.min.css" />
    <link rel="stylesheet" href="css/icon.min.css" />
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="stylesheet" href="css/responsive.min.css" />
    <link rel="stylesheet" href="css/customs.css" />
    <style>
        .hover-background {
            background-color: #FFFFFF;
            /* Default background color */
        }

        .hover-background:hover {
            background-color: #F0F8FF;
            /* Background color on hover */
        }

        .darkTextOnHover:hover {
            color: black;
        }


        input:disabled {
            background-color: #f5f5f5;
            /* Light gray background */
            color: #a0a0a0;
            /* Gray text */
            border: 1px solid #dcdcdc;
            /* Light gray border */
            cursor: not-allowed;
            /* Show not-allowed cursor */
            opacity: 0.7;
            /* Slightly faded appearance */
        }
    </style>
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
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Login Container -------------------------->
        <div class="d-flex border justify-content-center rounded-5 p-3 bg-white shadow box-area">

            <div class="row align-items-center">
                <div class="header-text d-flex justify-content-center   mb-4">
                    <div class="d-flex flex-column align-items-center">
                        <h2>Sell/Rent a Property</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                </div>
                <form action="/newProperty" enctype="multipart/form-data" method="POST">
                    @Csrf
                    <div id="part-one">

                        <div class="d-flex flex-md-row flex-column ">

                            <div class="col mb-1 mx-3">
                                <div class="input-group mb-3">
                                    <select name="deal_type" onchange="shiftCommision(this)" required class="form-control form-control-lg bg-light fs-6">
                                        <option value="" selected disabled hidden>Choose Requirement</option>
                                        <option value="forBuy">Sell</option>
                                        <option value="forRent">Rent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col mb-3 mx-3">
                                <div class="input-group ">
                                    <input name="location" maxlength="300" required type="text" id="location" autocomplete="off" class="form-control form-control-lg bg-light fs-6" placeholder="Location">

                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-md-row flex-column ">

                            <div class="col mb-1 mx-3">
                                <div class="input-group mb-3">
                                    <select id="province" onchange="setDistricts(this.value)" name="province" required class="form-control form-control-lg bg-light fs-6">
                                        <option value="" selected disabled hidden>Choose Province</option>
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
                            </div>
                            <div class="col mb-3 mx-3">
                                <div class="input-group ">
                                    <select id="district" name="district" required class="form-control form-control-lg bg-light fs-6">
                                        <option value="" selected disabled hidden>Choose District</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="col  mb-1 mx-3">
                                <div class="input-group mb-3">
                                    <select id="prop" name="property_type" onchange="shiftInputView(this.value)" required class="form-control form-control-lg bg-light fs-6">
                                        <option value="" selected disabled hidden>Property Type</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="House">House</option>
                                        <option value="Residential Land">Residential Land</option>
                                        <option value="Hotel and Villa">Hotel and Villa</option>
                                        <option value="Commercial Land">Commercial Land</option>
                                        <option value="Commercial Building">Commercial Building</option>
                                        <option value="Warehouse">Warehouse</option>
                                        <option value="Estate">Estate</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div id="bedrooms" class="col  mb-3 mx-3">
                                <div class="input-group ">
                                    <input maxlength="10" name="bed_rooms" min="0" type="number" class="form-control form-control-lg bg-light fs-6" placeholder="Bed Rooms">
                                </div>
                            </div>
                            <div id="landextent" style="display: none;" class="col  mb-3 mx-3">
                                <div class="input-group ">
                                    <input maxlength="10" name="land_extent" min="0" type="number" class="form-control form-control-lg bg-light fs-6" placeholder="Land Extent (Perches)">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-md-row">
                            <div id="bathrooms" class="col  mb-3 mx-3">
                                <div class="input-group ">
                                    <input maxlength="10" name="bath_rooms" min="0" type="number" class="form-control form-control-lg bg-light fs-6" placeholder="Bath Rooms">
                                </div>
                            </div>
                            <div id="sqft" class="col  mb-3 mx-3">
                                <div class="input-group ">
                                    <input maxlength="10" name="square_feet" step="any" min="0" type="number" class="form-control form-control-lg bg-light fs-6" placeholder="Square Feet">
                                </div>
                            </div>
                        </div>
                        <div style="display: none;" class="d-flex saleCommision flex-row mb-2 mx-3 ">
                            <label style="display: none;" class="saleCommision">Professional fee for Sale is 3% commission based on the final sale value</label>
                            <input id="cmsn" onchange="shiftTik(this)" class="saleCommision" style="width:2%; margin-left:10%; display: none" name="saleCommision" type="checkbox">

                        </div>
                        <div class="d-flex rentCommision flex-row mb-2 mx-3 " style="display: none;">
                            <label style="display: none;" class="rentCommision">Professional Fee for short term rental 10% commission of the total amount will be applied & if it's a long term rental one month rental will be applied</label>
                            <input id="cmsn" onchange="shiftTik(this)" style="display: none; width:2%; margin-left:10%;" class="rentCommision" name="rentCommision" type="checkbox">

                        </div>
                    </div>
                    <div id="part-two" style="display: none;">

                        <div class="d-flex flex-md-row flex-column ">
                            <div class="col mb-1 mx-3">
                                <div class="input-group mb-3">
                                    <select name="posted_by" onchange="shiftAppear(this)" required class="form-control form-control-lg bg-light fs-6">
                                        <option value="" selected disabled hidden>Owner/Broker</option>
                                        <option value="owner">Owner</option>
                                        <option value="broker">Broker</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col  mb-1 mx-3">
                                <div class="input-group mb-3">
                                    <input maxlength="30" class="special" disabled name="owner" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Owner Name">
                                </div>
                            </div>


                        </div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="col  mb-1 mx-3">
                                <div class="input-group mb-3">
                                    <input maxlength="30" class="special" disabled name="ownerMail" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Owner Mail">
                                </div>
                            </div>
                            <div class="col  mx-3">
                                <div class="input-group mb-3">
                                    <input name="ownerContact" disabled class="special" type="tel" pattern="[0-9]{10}" class="form-control form-control-lg bg-light fs-6" placeholder="owner contact Number">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="col  mb-3 mx-3">
                                <div class="input-group ">
                                    <input required name="asking_price" maxlength="8" step="0.01" min="0" type="number" class="form-control form-control-lg bg-light fs-6" placeholder="Asking Price(LKR)">
                                </div>
                            </div>
                            <div class="col  mb-3 mx-3">
                                <div class="input-group ">
                                    <input required name="images[]" accept=".jpg, .jpeg, .png" type="file" multiple class="form-control form-control-lg bg-light fs-6">
                                </div>
                            </div>
                        </div>


                        <div class="d-flex flex-md-row flex-column ">
                            <div id="furnished" class="col mb-1 mx-3">
                                <div class="input-group mb-3">
                                    <select name="furnished" class="form-control form-control-lg bg-light fs-6">
                                        <option value="" selected disabled hidden>Furnished/Unfurnished</option>
                                        <option value="1">Furnished</option>
                                        <option value="0">Unfurnished</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col  mb-3 mx-3">
                                <div class="input-group ">
                                    <input required name="parking" maxlength="7" type="number" placeholder="parking" multiple class="form-control form-control-lg bg-light fs-6">
                                </div>
                            </div>
                        </div>
                        <div class="col  mx-3">
                            <textarea onkeyup="addPlaceholderText(this)" onclick="shiftPlaceholderText(this)" class="form-control form-control-lg bg-light fs-6" name="description">Requirements</textarea>
                        </div>

                        <div class="input-group mb-5 d-flex justify-content-between">
                            <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                        </div> -->
                        </div>
                    </div>
                    <div class="d-flex flex-md-row-reverse flex-column ">
                        <div class="col mx-3 mb-3">
                            <button style="display:none" id="submit" class="btn btn-lg darkTextOnHover btn-dark w-100 fs-6">Submit</button>
                            <button id="btnnext" disabled onclick="event.preventDefault();shiftPartTwo()" class="btn btn-lg darkTextOnHover btn-dark w-100 fs-6">Next</button>
                        </div>
                </form>
                <div class="col mx-3 mb-3">
                    <button onclick="event.preventDefault();window.location.href='/'" id="back-home" class="btn btn-lg btn-light w-100 fs-6"><small>Go Back Home</small></button>
                    <button onclick="event.preventDefault();shiftPartOne()" style="display:none" id="back-one" class="btn btn-lg btn-light w-100  fs-6"><small>Go Back </small></button>

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


    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/vendors.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/autoComplete.js"></script>
    <script>
        function shiftPartTwo() {
            var partone = document.getElementById("part-one");
            var parttwo = document.getElementById("part-two");
            var backHome = document.getElementById("back-home");
            var backOne = document.getElementById("back-one");
            var submit = document.getElementById("submit");
            var next = document.getElementById("btnnext");

            next.style.display = "none";
            partone.style.display = "none";
            backHome.style.display = "none";
            parttwo.style.display = "block";
            backOne.style.display = "block";
            submit.style.display = "block";
            if (document.getElementById("prop").value == "Residential Land" || document.getElementById("prop").value == "Estate" || document.getElementById("prop").value == "Commercial Land") {
                var furnished = document.getElementById("furnished");
                furnished.style.display = "none";
            } else {
                var furnished = document.getElementById("furnished");
                furnished.style.display = "block";
            }

        }

        function shiftPartOne() {
            var partone = document.getElementById("part-one");
            var parttwo = document.getElementById("part-two");
            var backHome = document.getElementById("back-home");
            var backOne = document.getElementById("back-one");
            var submit = document.getElementById("submit");
            var next = document.getElementById("btnnext");

            submit.style.display = "none";
            partone.style.display = "block";
            next.style.display = "block";
            parttwo.style.display = "none";
            backHome.style.display = "block";
            backOne.style.display = "none";
        }

        const provinceWiseDistricts = [
            ['Matara District', 'Galle District', 'Hambanthota District'],
            ['Colombo District', 'Gampaha District', 'Kalutara District'],
            ['Kandy District', 'Matale District', 'NuwaraEliya District'],
            ['Kagalle District', 'Rathnapura District'],
            ['Ampara District', 'Baticloe District', 'Trincomalee District'],
            ['Badulla District', 'Monaragala District'],
            ['Kurunagala District', 'Puththalama District'],
            ['Anuradhapura District', 'Polonnaruwa District'],
            ['Jaffna District', 'Kilinochchi District', 'Mulathiv District', 'Wawniya District', 'Manner District']

        ]

        function setDistricts(id) {
            var district = document.getElementById("district")
            district.innerHTML = '';
            provinceWiseDistricts[id].forEach(element => {
                district.innerHTML += '<option value=' + element + '>' + element + '</option>';

            });
        }

        function shiftPlaceholderText(element) {
            if (element.value == "Requirements") {
                element.value = "";
            }

        }

        function addPlaceholderText(element) {
            if (element.value == "") {
                element.value = "Requirements";
            }

        }

        function shiftAppear(element) {

            if (element.value == "broker") {
                document.querySelectorAll('.special').forEach(element => {
                    element.classList.add("form-control", "form-control-lg", "bg-light", "fs-6")

                    element.disabled = false;
                });

            } else {
                document.querySelectorAll('.special').forEach(element => {

                    element.classList.remove("form-control", "form-control-lg", "bg-light", "fs-6");
                    element.disabled = true;

                });

            }

        }

        function shiftCommision(elem) {
            if (elem.value == 'forBuy') {

                document.querySelectorAll('.saleCommision').forEach(element => {

                    element.style.display = 'block';
                });
                document.querySelectorAll('.rentCommision').forEach(element => {

                    element.style.display = 'none';
                });

            } else {
                document.querySelectorAll('.saleCommision').forEach(element => {

                    element.style.display = 'none';
                });
                document.querySelectorAll('.rentCommision').forEach(element => {

                    element.style.display = 'block';
                });

            }
        }
        window.onload = function() {
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
        // function checkForTik(){
        //  var res=  document.getElementById("cmsn").checked;
        //  if(res)
        //  {
        //     alert("Please agree for the brokerage")
        //  }
        //  return res;
        // }
        function shiftTik(el) {
            document.getElementById("btnnext").disabled = !el.checked;
        }

        function shiftInputView(el) {
            if (el == "Residential Land" || el == "Estate" || el == "Commercial Land") {
                document.getElementById("bedrooms").style.display = "none"
                document.getElementById("bathrooms").style.display = "none"
                document.getElementById("landextent").style.display = "block"
                document.getElementById("sqft").style.display = "none"

            } else if (el == "Commercial Building" || el == "Warehouse") {
                document.getElementById("bedrooms").style.display = "none"
                document.getElementById("bathrooms").style.display = "none"
                document.getElementById("sqft").style.display = "block"
                document.getElementById("landextent").style.display = "none"

            } else {
                document.getElementById("bedrooms").style.display = "block"
                document.getElementById("bathrooms").style.display = "block"
                document.getElementById("landextent").style.display = "none"
                document.getElementById("sqft").style.display = "block"

            }
        }
    </script>
</body>

</html>