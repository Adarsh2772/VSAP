<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.hasthemes.com/financo-preview/financo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 05:49:20 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Our Partners || VSAP & Company</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/gif" href="{{ asset(' dist/img/logo.jpg') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">

    <style type="text/css">
        @media screen and (min-width: 767px) {
            .txt {
                text-align: center;
                margin-left: 30px;
                text-align: justify;
            }

            .img1 {
                width: 100px;
                height: 200px;
                transition-duration: 4s;
                margin: 0 auto;
                display: block;

            }

            div.ca1 {
                margin-top: 50px;
                margin-left: 9px;
            }

            .bg-overlay-dark {
                background-image: url({{ asset('dist/img/business2.jpg') }});
                background-size: cover;
                margin-bottom: -55px;
            }

            li {
                padding-bottom: 5px;
                text-align: justify;
            }

            .img1:hover {
                transform: scale(1.3);
                -webkit-transform: scale(1.3);
                -moz-transform: scale(1.3);
                z-index: 0;
            }


            .team-area {
                margin-bottom: -35px;
            }

            .bold {
                margin-left: 70px;
            }

            div.ca2 {
                margin-left: 30px;
                margin-top: 50px;
                padding-right: 70px;
            }

            div.team {
                margin-left: 35px;
                margin-top: 50px;
                padding-right: 20px;
            }

            div.team3 {
                margin-left: 30px;
                margin-top: 50px;
                padding-right: 40px
            }

            .member-image {
                margin-top: 40px
            }


            .single-team-member {
                width: 70%;
                margin-left: 20px;
            }

            .photo {
                margin-left: 7%;
            }

            .part {
                margin-top: 30px;
            }
        }

        @media screen and (max-width: 767px) {
            .bg-overlay-dark {
                margin-top: -10px;
                margin-bottom: -85px;
            }

            .partner {
                margin-right: -100px;
                margin-left: 30px;
            }

            .team-area {
                padding-top: 50px;
                margin-bottom: -50px;
            }

            .info {
                margin-top: 15px;
            }

            li {
                text-align: justify;
            }

            .member-text {
                width: 70%;
            }

            .font {
                font-size: 14px;
            }

            .single-team-member {
                margin-right: 95px;
                width: 70%;
                margin-left: 15px
            }

            div.ca1 {
                /* padding-right: 0px; */
                margin-left: 0px;
                margin-top: 15px;
            }

            .member-image {
                width: 100%;
                height: 40%;
            }

            div.ca2 {
                padding-right: 100px;

                margin-top: 15px;
                margin-left: -55px;
                padding-right: 175px;
            }



            div.col-12.ca3 {
                margin-top: 40px;
                margin-right: 64px;
                padding-right: 170px;
                margin-left: -60px;
            }

            div.mem-team {
                margin-left: -15px;
            }

            div.team2 {
                margin-left: -20px;
            }



        }
    </style>

</head>
{{-- include style --}}
@include('weblayout.header')

<body>
    <div class="breadcrumbs-area bg-overlay-dark">
        <div class="container part">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-text text-left">
                        <h2 style="color: #002e5b;">OUR PARTNERS</h2>
                        <div class="breadcrumbs-bar">
                            <ul class="breadcrumbs">
                                <li><a href="/">HOME</a></li>
                                <li>ABOUT</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="team-area fix pt-30 pb-85">
        <div class="container">
            @foreach ($partner as $partners)
                <div class="row roww" style="margin-right: -15%;">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 photo">
                        <div class="single-team-member">
                            <div class="member-image">
                                <a href="#" class="block">
                                    <img src="{{ asset('/storage/CareerDocuments/' . $partners->ca_img . '') }}"
                                        alt="" class="img1">
                                </a>
                            </div>
                            <div class="member-text">
                                <h3><a href="" class="font">{{ $partners->caname }}</a></h3>
                                <span class="font">{{ $partners->qualification }}</span>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-12 ca1">
                        <p><b>Email id :</b> {{ $partners->email }}
                            <b class="bold">Mobile no :</b> +91 {{ $partners->mob_no }}
                        </p>

                        <ul style="text-align: left;">
                            <?php
                                $desk=explode("/",$partners->descript);
                                $j=0;
                                if($j<1)
                                {
                                    for($i=0;$i<sizeof($desk);$i++)
                                    {
                                ?>
                                    <li><i class="fa fa-check-circle-o"
                                    style="margin-right: 10px;color: #798fd1"></i><?php echo $desk[$i]; ?></li>
                            <?php
                                    }
                                }
                                $j++;
                            ?>
                        </ul>
                    </div>

                </div>
            @endforeach

            <br>
            <div class="row">
                <div class="col-12">
                    <div class="container msg1">
                        <h4 class="branch"style="text-align: center;color:#053b5adb;margin-left: -10%;margin-bottom: -28px;">Our Associate</h4>
                    </div>
                </div>
            </div>

            @foreach ($associate as $associates)
                <div class="row roww" style="margin-right: -15%;">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 photo">
                        <div class="single-team-member">
                            <div class="member-image">
                                <a href="#" class="block">
                                    <img src="{{ asset('/storage/CareerDocuments/' . $associates->ca_img . '') }}"
                                        alt="" class="img1">
                                </a>
                            </div>
                            <div class="member-text">
                                <h3><a href="" class="font">{{ $associates->caname }}</a></h3>
                                <span class="font">{{ $associates->qualification }}</span>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-12 ca1">
                        <p><b>Email id :</b> {{ $associates->email }}
                            <b class="bold">Mobile no :</b> +91 {{ $associates->mob_no }}
                        </p>

                        <ul style="text-align: left;">
                            <?php
                                $desk=explode("/",$associates->descript);
                                $j=0;
                                if($j<1)
                                {
                                    for($i=0;$i<sizeof($desk);$i++)
                                    {
                                ?>
                                    <li><i class="fa fa-check-circle-o"
                                    style="margin-right: 10px;color: #798fd1"></i><?php echo $desk[$i]; ?></li>
                            <?php
                                    }
                                }
                                $j++;
                            ?>
                        </ul>
                    </div>

                </div>
            @endforeach

        </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    @include('weblayout.footer')

</body>

</html>
