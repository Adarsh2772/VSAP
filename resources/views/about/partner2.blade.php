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
         <link rel="shortcut icon" type="image/gif" href="{{asset('dist/img/caicon.png')}}">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">

<style type="text/css">
@media screen and (min-width: 767px) {
    .txt{
        text-align: center;
        margin-left: 30px;
        text-align: justify;
        }
    .img1{
          width: 100px;
          height: 200px;
          transition-duration: 4s;
          margin: 0 auto;
         display: block;

        }
        div.ca1{margin-top: 50px;
                margin-left: 9px;}

    .bg-overlay-dark
    {   background-image: url({{asset('dist/img/business2.jpg')}});
        background-size: cover;
            margin-bottom: -55px;
    }

    li{padding-bottom: 5px;text-align: justify;  }

    .img1:hover {
        transform: scale(1.3);
        -webkit-transform: scale(1.3);
        -moz-transform: scale(1.3);
        z-index: 0;
    }


    .team-area{margin-bottom: -35px;}

    .bold{ margin-left: 70px;}
    div.ca2{
        margin-left: 30px;
             margin-top: 50px;
                    padding-right: 70px;}

    div.team{margin-left: 35px;
                    margin-top: 50px;
                    padding-right: 20px;}
    div.team3{margin-left: 30px;
                    margin-top: 50px;
                    padding-right: 40px}
    .member-image{margin-top: 40px}


    .single-team-member{width: 70%;
                margin-left: 20px;
    }
    .photo{margin-left: 7%;}
    .part{margin-top:30px;}
}
 @media screen and (max-width: 767px) {
    .bg-overlay-dark{
            margin-top: -10px;
        margin-bottom: -85px;
    }
    .partner{  margin-right: -100px;
               margin-left: 30px;
            }

    .team-area{ padding-top: 50px;
                margin-bottom: -50px;}
    .info{margin-top: 15px;}
    li{text-align: justify;}

    .member-text{width: 70%;}
    .font{font-size: 14px;}

    .single-team-member{margin-right: 95px;
                        width: 70%;
                        margin-left: 15px}

    div.ca1{     /* padding-right: 0px; */
    margin-left: 0px;
    margin-top: 15px;}
   .member-image{ width:100%;
                    height: 40%;}
    div.ca2{padding-right: 100px;

          margin-top: 15px;
            margin-left: -55px;
    padding-right: 175px;}



    div.col-12.ca3{        margin-top: 40px;
    margin-right: 64px;
    padding-right: 170px;
    margin-left: -60px;}
    div.mem-team{    margin-left: -15px;}
    div.team2{    margin-left: -20px;}



}

</style>

</head>
        {{--include style--}}
        @include('weblayout.header')

<body>
    <div class="breadcrumbs-area bg-overlay-dark">
     <div class="container part">
       <div class="row">
         <div class="col-12">
            <div class="breadcrumbs-text text-left" >
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
         @foreach($partner as $partners)
    <div class="row roww" style="margin-right: -15%;">
     <div class="col-xl-3 col-lg-4 col-md-6 col-12 photo">
       <div class="single-team-member">
         <div class="member-image">
           <a href="#" class="block">
            <img src="{{asset('upload/'.$partners->ca_img.'')}}" alt="" class="img1">
           </a>
         </div>
         <div class="member-text">
          <h3><a href="" class="font">{{$partners->caname}}</a></h3>
            <span class="font">{{$partners->qualification}}</span>
        </div>
       </div>
     </div>
     <div class=" col-md-6 col-12 ca1">
        <p><b>Email id :</b> {{$partners->email}}
        <b class="bold">Mobile no :</b> +91 {{$partners->mob_no}}</p>

      <ul style="text-align: left;">
        <?php
            $desk=explode("/",$partners->descript);
            $j=0;
            if($j<1)
            {
                for($i=0;$i<sizeof($desk);$i++)
                {


        ?>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i><?php echo $desk[$i]; ?></li>
        <?php
                   }
            }
            $j++;
        ?>
       <!--  <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>CA Vaibhav is a 2007 passed out Chartered Accountant with exposure in Banking, Finance, Corporate Compliance and implementing effective auditing procedures and process set ups to achieve optimum utilization of resources and cost effective procedures.</li>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>He has handled large projects in his employment with ICICI Bank and Indiabulls for over 5 years.</li>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>Qualified Information Security Auditor from ICAI</li>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>Qualified Lead Auditor for ISO 9001:2008</li>
         <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>He is in charge of our head office and its administration.</li> -->
        </ul>
        </div>

       </div>
       @endforeach

       <!-- <div class="row" style="margin-left: 25px;margin-right: -130px;">
     <div class="col-xl-3 col-lg-4 col-md-6 col-12" style="margin-top:50px;">
      <div class="single-team-member">
        <div class="member-image">
         <a href="#" class="block">
            <img src="dist/img/sachin.jpg" alt="" class="img1">
         </a>
        </div>
      <div class="member-text">
        <h3><a href="/partner" class="font">CA Sachin B Malpani</a></h3>
         <span class="font">FCA, B.com</span>
            </div>
          </div>
         </div>
         <div class=" col-md-6 col-12 ca1" style="margin-top: 50px;">
            <span>
            <p>
            <b>Email id :</b> casachinmalpani@gmail.com</p>
            <p>
            <b>Mobile no :</b>+91 7387777150</p>
        </span>
        <ul style="text-align: left;">
         <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>Membership No.: 150909</li>
         <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>CA Sachin carries with him a strong academic base and a futuristic vision. He has added a sparkle to the organization with his new and innovative ideas for growth.</li>
         <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>He is expertise in the field of Direct and Indirect Taxation, Audit & Assurance and Business set up services</li>
         <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>He is in charge of our GST department and taking care of bank audits as well as co-ordination with other branches.</li>
        </ul>
        </div>
    </div>

    <div class="row" style="margin-left: 25px;margin-right: -130px;">
    <div class="col-xl-3 col-lg-4 col-md-6 col-12" style="margin-top: 50px;">
     <div class="single-team-member mt-sm-30">
        <div class="member-image">
         <a href="#" class="block">
            <img src="dist/img/akshay.jpg" alt="" class="img1">
         </a>
        </div>
       <div class="member-text">
        <h3><a href="/partner" class="font">CA Akshay G Bihani</a></h3>
        <span class="font">FCA, B.com</span>
     </div>
   </div>
  </div>
    <div class=" col-md-6 col-12 ca1" style="margin-top: 50px;" >
        <span>
            <p >
            <b>Email id :</b> akshay@vsap.co.in, caakshaybihani@gmail.com</p>
            <p>
            <b>Mobile no :</b> +91 8408080801</p>
        </span>
    <ul style="text-align: left;">
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>Membership No.: 155081</li>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>Mr. Akshay possesses active interpersonal skills and believes in value added services.</li>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>He has special interest in Project Financing and all other Financial Consultancy Services in addition to Direct Taxation.</li>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>He is incharge of Ahmednagar branch and taking care of Aurangabad and Ahmednagar locations</li>
    </ul>
    </div>

     <div class="row" style="margin-left: 20px;margin-right: -130px;">
    <div class="col-xl-3 col-lg-4 col-md-6 col-12 team">
     <div class="single-team-member team2">
        <div class="member-image">
         <a href="#" class="block">
            <img src="dist/img/swapnil.jpg" alt="" class="img1">
         </a>
        </div>
       <div class="member-text mem-txt">
        <h3><a href="" class="font">CA Swapnil R. Rathi</a></h3>
        <span class="font">FCA, B.com</span>

   </div>
  </div>
</div>
  <div class=" col-md-6 col-12 ca3" style="margin-top: 80px;    margin-right: 64px;">
    <span>
    <p >
    <b>Email id :</b> swapnil@vsap.co.in, caswampnilrathi@gmail.com</p>
    <p>
    <b>Mobile no :</b>+91 9405015942</p>
    </span>
    <ul style="text-align: left;">
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>Membership No.: 147026</li>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>CA Swapnil is very well versed with all major Auditing solutions, Transfer Pricing and company law matters.</li>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>He is incharge of Shirpur, Dhule branch and taking care of Dhule, Jalgaon, Nasik and nearby areas.</li>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>He is an expert in carrying out co-operative as well as nationalized bank audits.</li>
     </ul>
  </div>
</div>

  <div class="row" style="margin-left: 25px;margin-right: -130px;">
    <div class="col-xl-3 col-lg-4 col-md-6 col-12 team3">
     <div class="single-team-member mem-team">
        <div class="member-image">
         <a href="#" class="block">
            <img src="dist/img/aakansha.png" alt="" class="img1">
         </a>
        </div>
       <div class="member-text mem-txt2">
        <h3><a href="" class="font">CA Aakansha Jain</a></h3>
        <span class="font">ACA, B.com</span>
     </div>
   </div>
  </div>
   <div class=" col-md-6 col-12 ca2">
     <ul style="text-align:left;margin-top: 30px">
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>Membership No. 191505</li>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>CA Aakansha is a fresh CA and carries strong academic base.</li>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>She has expertise in Project report preparation and RERA. She has special interest in Project financing and other financial consultancy services along with direct and indirect taxation.</li>
        <li><i class="fa fa-check-circle-o" style="margin-right: 10px;color: #798fd1"></i>She is in fulltime employment with our firm since 2019.</li>

        </ul>
   </div>
</div> -->
</div>
</div>

    </div>
    </div>
    </div>
</div>
        @include('weblayout.footer')

    </body>

</html>
