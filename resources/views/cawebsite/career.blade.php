<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Career || VSAP & Company</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/gif" href="{{ asset('dist/img/caicon.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

    <style type="text/css">
        @media screen and (min-width: 767px) {

            .imgg {
                height: 200px;
                width: 340px;
            }

            .bg-overlay-dark {
                background-image: url({{asset('dist/img/business2.jpg')}});
                background-size: cover;
            }

            .pt-120 {
                margin-top: -70px;
            }

            .text-center:hover {
                text-decoration: underline;
            }

            input[type=submit] {
                color: white;
                background-color: #053b5adb;
                width: 30%;
                margin-left: 325px;
            }

            h5 {
                font-family: "Times New Roman", Times, serif;
            }
        }

        @media screen and (max-width: 767px) {
            .bg-overlay-dark {
                margin-top: -10px;
                margin-bottom: -85px;
            }

            input[type=submit] {
                color: white;
                background-color: #053b5adb;
                width: 30%;
                margin-left: 200px;
            }

            .modal-dialog {
                width: 20%;
            }

            .text-center {
                font-size: 20px;
            }

            .career {
                margin-bottom: 15px;
            }
        }
    </style>





</head>

<body onload="createCaptcha()">
    <!-- Header Area Start -->
    {{-- include style --}}
    @include('weblayout.header')

    <!-- Header Area End -->
    <!-- breadcrumbs Area Start-->
    <div class="breadcrumbs-area bg-overlay-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-text text-left">
                        <h2 style="color: #002e5b;">CAREERS</h2>
                        <div class="breadcrumbs-bar">
                            <ul class="breadcrumbs">
                                <li><a href="/">HOME</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-area pt-120 pb-105">
        <div class="container career">
            <div class="single-item">
                <div class="row">
                    <h3 class="text-center" style="color: #053b5adb;"><u>CAREER WITH US</u></h3>
                    <p style="text-align: justify;margin-top: 15px;font-size: 15px"><b>Over the years, we at VSAP AND
                            COMPANY have earned a reputation for excellence based on our experience in the field of
                            Chartered Accountancy and delivered quality services with an emphasis on knowledge,
                            experience and professionalism. We provide immense opportunities to employees across various
                            industry verticals.</p>
                    <p style="text-align: justify;font-size: 15px">We believe in our ability to guide the forces of
                        change and forge ahead to emerge as leaders in the areas of our operations, but it is the
                        employees of VSAP AND COMPANY who will make the ultimate difference with providing services like
                        Accounting, Auditing, Project Financing, Consultancy etc. We believe that their dedication,
                        energy and professionalism will optimize our business portfolio to unleash growth in the years
                        ahead.</b></p>
                </div>
            </div>
            <div class="row" style="margin-top: 15px;margin-bottom: -45px;">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Apply
                    Now</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>Career Form</h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br />
                            @endif

                            <div class="modal-body">
                                <form id="submitform" role="form" method="post" autocomplete="off"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="fname" name="name"
                                            placeholder="Your name.." required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="cn" name="contact_no"
                                            placeholder="Contact Number" pattern="[7-9]{1}[0-9]{9}" maxlength="10"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="exp" max="99" name="experiance"
                                            placeholder="Experience" required><br>
                                    </div>
                                    <div class="form-group ">
                                        <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"
                                            class="img" accept=".doc,.docx, .pdf"
                                            required>
                                        <center>
                                            <blink>(ONLY INSERT FILES WHICH HAVE EXTENSION OF DOCX AND PDF.)</blink>
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Captcha"
                                                id="cpatchaTextBox" name="cpatchaTextBox" required>
                                            <p class="exist-msg" id="captchanote">Please Enter Valid Captcha.</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('dist/img/refresh.png') }}" class="refresh-img"
                                                onclick="createCaptcha()" alt="refresh icon" style="height: 35px">
                                        </div>
                                        <div class="col-md-4">
                                            <div id="captcha"></div>
                                            <input type="hidden" id="code">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" class="form-control" class="sub"
                                            style="background-color:#053b5adb;color:white">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="{{asset('admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>

    <script type="text/javascript">
        function readresume() {

            var fileInput = document.getElementById('fileToUpload');
            var filePath = fileInput.value;

            var allowedext = /(\.doc|\.docx|\.pdf)$/i;

            if (!allowedext.exec(filePath)) {
                alert('PDF,DOC or DOCX File Format only.');
                fileInput.value = '';
                return false;
            }

            if (this.files[0].size / (1024 * 1024) >= 2) {

                alert('Please select file size less than 2 MB.');

                $('#fileToUpload').val('');
            }

        }
        document.getElementById("fileToUpload").addEventListener("change", readresume);


        //For Captcha

        var code;

        function createCaptcha() {
            //clear the contents of captcha div first
            document.getElementById('captcha').innerHTML = "";
            var charsArray =
                "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
            var lengthOtp = 6;
            var captcha = [];
            for (var i = 0; i < lengthOtp; i++) {
                //below code will not allow Repetition of Characters
                var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
                if (captcha.indexOf(charsArray[index]) == -1)
                    captcha.push(charsArray[index]);
                else i--;
            }
            var canv = document.createElement("canvas");
            canv.id = "captcha";
            canv.width = 100;
            canv.height = 50;
            var ctx = canv.getContext("2d");
            ctx.font = "25px Georgia";
            ctx.strokeText(captcha.join(""), 0, 30);
            //storing captcha so that can validate you can save it somewhere else according to your specific requirements
            code = captcha.join("");
            document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
            $('#code').val(code);
        }


        function validateCaptcha() {
            event.preventDefault();
            debugger
            if (document.getElementById("cpatchaTextBox").value == code) {
                alert("Valid Captcha")
            } else {
                alert("Invalid Captcha. try Again");
                createCaptcha();
            }
        }

        $(document).ready(function() {

            $('#submitform').on('submit', function(event) {
                event.preventDefault();
                var code = $('#code').val();
                event.preventDefault();
                if (document.getElementById("cpatchaTextBox").value != code) {
                    $('#captchanote').show();
                    $("#cpatchaTextBox").removeClass("input-style");
                    $("#cpatchaTextBox").addClass("no-same");
                    alert('Please Enter Valid Captcha.');
                    createCaptcha();
                } else {
                    $('#captchanote').hide();
                    $("#cpatchaTextBox").addClass("input-style");
                    $("#cpatchaTextBox").removeClass("no-same");

                    $.ajax({
                        url: "/store",
                        method: "POST",
                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(msg) {
                            swal(
                                'Success',
                                'Your form has been submitted sucessfully..!',
                                'success'
                            ).then(function() {
                                window.location = "/career";
                            });

                        },
                        error: function(reject) {
                            var errmsg = Object.values(reject.responseJSON.errors)[0];

                            alert(errmsg);
                        }
                    })
                }
            });
        });
    </script>


    {{-- include style --}}
    @include('weblayout.footer')


</body>

</html>
