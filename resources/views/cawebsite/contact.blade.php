<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us || VSAP & Company</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/gif" href="{{ asset(' dist/img/logo.jpg') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
    <style type="text/css">
        @media screen and (min-width: 767px) {

            .bg-overlay-dark {
                background-image: url({{ asset('dist/img/business2.jpg') }});
                background-size: cover;
            }

            input[type=text] {
                background-color: #cacaca;
                ;
                color: #222222;
            }

            b {
                text-align: justify;
            }

            h4:hover {
                text-decoration: underline;
            }

            .msg1 {
                margin-top: 50px;
            }

            .pune {
                margin-left: -10px;
                margin-right: -15px;
            }

            .nagar {
                margin-left: -45px;
                px;
                margin-right: -15px;
            }

            .shirpur {
                margin-left: -15px;
            }

            /* .fix{margin-left: 30px}*/


            .area {
                margin-left: 10px;
                margin-right: -15px;
            }

            .head1 {
                margin-top: -40px;
            }

        }

        @media screen and (max-width: 767px) {
            .bg-overlay-dark {
                margin-top: -10px;
                margin-bottom: -85px;
            }

            .branch {
                text-align: center;
                color: #053b5adb;
                margin-top: 36px;
            }

            .text1 {
                text-align: justify;
            }

            #contact-form {
                margin-bottom: 40px;
            }

        }
    </style>

</head>

<body>

    {{-- include style --}}
    @include('weblayout.header')


    <div class="breadcrumbs-area bg-overlay-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-text text-left">
                        <h2 style="color: #002e5b;">CONTACT US</h2>
                        <div class="breadcrumbs-bar">
                            <ul class="breadcrumbs">
                                <li><a href="/">HOME</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-light fix" style="margin-left:30px">
        <div class="row">
            <div class="col-12">
                <div class="container msg1">
                    <h4 class="branch"style="margin-bottom: 50px;text-align: center;color:#053b5adb;">Our Branch</h4>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 20px; margin-right: -120px;padding-left:5px;">
            <div class="col-md-4 area head1">
                <h5 style="color:#053b5adb;"><b>Head Office</b></h5>
                <br>
                <h6 style="color:#053b5adb;">PIMPRI OFFICE</h6>

                <span class="text1">
                    <p>
                        <i class="fa fa-map-marker"></i>
                        <b>ASPIRO, Office No.102, Pimpri Station Road, Opp. THYSSENKRUPP,<br> Pimpri, Pune - 411
                            018</b>
                    </p>
                    <p>
                        <i class="fa fa-envelope"></i>
                        <b>Email id : vaibhav@vsap.co.in</b>
                    </p>
                    <p>
                        <i class="fa fa-phone"></i>
                        <b>Office Number : CA Vaibhav Mayur <br> +91 9322120781</b>
                    </p>
                </span>
            </div>

            <div class="col-md-4 pune">

                <h6 style="color:#053b5adb;padding-bottom: 5px">PUNE OFFICE</h6>

                <span class="text1">
                    <p>
                        <i class="fa fa-map-marker"></i>
                        <b>1194/24, Asmita Apartment, Flat no. 11, 2nd Floor,<br> Ghole Road, Behind ICICI Bank, Shivaji
                            Nagar, Pune-411005.</b>
                    </p>
                    <p>
                        <i class="fa fa-envelope"></i>
                        <b>E-mail : vsap.pune@gmail.com</b>
                    </p>
                    <p>
                        <i class="fa fa-phone"></i>
                        <b>Office Number : CA Sachin Malpani<br> +91 7387777150</b>
                    </p>
                </span>
            </div>
            <div class="col-md-4 shirpur">

                <h6 style="color:#053b5adb;padding-bottom: 5px">SHIRPUR, DHULE OFFICE</h6>

                <span class="text1">
                    <p>
                        <i class="fa fa-map-marker"></i>
                        <b>C.S. No. 623, Marwari Galli,Nr. Bhandari
                            Dawakhana,<br> Shirpur, Dhule, Maharashtra 425405</b>
                    </p>
                    <p>
                        <i class="fa fa-envelope"></i>
                        <b>E-mail : vsapandco2012@gmail.com</b>
                    </p>
                    <p>
                        <i class="fa fa-phone"></i>
                        <b>Office Number : CA Swapnil R Rathi <br>+91 9405015942</b>
                    </p>
                </span>
            </div>


        </div>


    </div>
    </div>
    </div>
    <div class="contact-form-area fix" style="margin-bottom: 50px;">
        <div class="container msg1">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="contact-form-left">
                        <h4 class="details-title">Leave a Message</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <form action="/sendmail" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input type="text" name="name" placeholder="Your name" maxlength="50" required>
                            <input type="email" name="email" placeholder="Email here" required maxlength="50">
                            <textarea name="message" cols="30" rows="2" placeholder="Write here" maxlength="255"></textarea>
                            <div class="w-100 fix">
                                <button type="submit" class="default-button submit-btn">SUBMIT</button>
                            </div>
                            <p class="form-messege"></p>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3780.906422369367!2d73.8023775148943!3d18.623278287349223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sASPIRO%2C%20Office%20No.%20102%2C%20Pimpri%20Station%20Road%2C%20Opp.%20THYSSENKRUPP%2C%20Pimpri%2C%20Pune%20-%20411%20018!5e0!3m2!1sen!2sin!4v1606298491373!5m2!1sen!2sin"
                        width="100%" height="455" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>

            </div>
        </div>
    </div>
    </div>


    </div>
    </div>





    {{-- include style --}}
    @include('weblayout.footer')

</body>

</html>
