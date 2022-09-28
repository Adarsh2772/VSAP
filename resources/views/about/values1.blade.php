<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Our Values || VSAP & Company</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon Icon -->
         <link rel="shortcut icon" type="image/gif" href="{{asset(' dist/img/logo.jpg')}}">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

		<!-- All css here -->
         <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/shortcode/shortcodes.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('website/style.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/responsive.css')}}">

        <script src="{{asset('website/js/vendor/modernizr-2.8.3.min.js')}}"></script>


    </head>
    <body>
		<!-- Header Area Start -->
        {{--include style--}}
        @include('weblayout.header')

<style type="text/css">
@media screen and (min-width: 767px) {

    .bg-overlay-dark
    {   background-image: url({{asset('dist/img/business2.jpg')}});
        background-size: cover;
    }
     .solution{
        margin-top: 40px;
    }
    div.col-md-4{margin-top: 20px}
}
@media screen and (max-width: 767px) {
  .bg-overlay-dark{
        margin-top: -10px;
        margin-bottom: -85px;
    }
    .addition{margin-bottom: 20px;}

  }

</style>



		<!-- Header Area End -->
		<!-- breadcrumbs Area Start-->
	<div class="breadcrumbs-area bg-overlay-dark">
	 <div class="container">
	   <div class="row">
		 <div class="col-12">
			<div class="breadcrumbs-text text-left">
			  <h2 style="color: #002e5b;">OUR VALUES</h2>
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

      <style type="text/css">
         .text-center:hover {text-decoration: underline;}


      </style>

    <div class="service-area pt-40 pb-105" style="margin-bottom: -60px;">
     <div class="container">


        <div class="single-item">
          <div class="row" >
            @foreach($value as $valuelist)
           <div class="col-md-4 box-border" >



             <h4 class="text-center" style="color: #053b5adb">{{$valuelist->title}}</h4>
              <p style="text-align: justify;margin-top: 15px"><b>{{$valuelist->descript}}</b></p>

          </div>
            @endforeach
       <!--  <div class="col-md-4 box-border" >
        <i class="far fa-fist-raised"style="color: #1c8ce8;font-size: 40px;padding-right: 10px"></i>
         <h4 class="text-center" style="color: #053b5adb;" ><i class="fas fa-user-shield"style="color: #1c8ce8;font-size: 40px;padding-right: 10px"></i>{{$valuelist->title}}</h4>
        <p style="text-align: justify;margin-top: 15px"><b>{{$valuelist->descript}}</b></p>
      </div>
      <div class="col-md-4 box-border" >
       <h4 class="text-center" style="color: #053b5adb;"><i class="fas fa-users"style="color: #1c8ce8;font-size: 40px;padding-right: 10px"></i>{{$valuelist->title}}</h4>
        <p style="text-align: justify;margin-top: 15px"><b>{{$valuelist->descript}} </b></p>
        </div>
        </div>
        </div>

        <div class="row solution">
         <div class="col-md-4 box-border" >

        <h4 class="text-center" style="color: #053b5adb;"><i class="fas fa-user-cog" style="color: #1c8ce8;font-size: 40px;padding-right: 10px"></i>{{$valuelist->title}}</h4>
        <p style="text-align: justify;margin-top: 15px"><b>{{$valuelist->descript}}</b></p>
        </div>
      <div class="col-md-4 box-border addition" >
        <h4 class="text-center" style="color:#053b5adb;"><i class="fas fa-user-plus" style="color: #1c8ce8;font-size: 40px;padding-right: 10px" ></i>{{$valuelist->title}}</h4>
        <p style="text-align: justify;margin-top: 15px"><b>{{$valuelist->descript}} </b></p>

        </div> -->

        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

        {{--include style--}}
        @include('weblayout.footer')
      </body>
      </html>
