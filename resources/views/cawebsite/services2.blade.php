<!doctype html>
<html class="no-js" lang="en">
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Services || VSAP & Company</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('dist/img/caicon.png')}}">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet"> 
        
        <!-- All css here -->
        <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/shortcode/shortcodes.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('website/style.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/responsive.css')}}">
        <script src="{{asset('website/js/vendor/modernizr-2.8.3.min.js')}}"></script>


         <style type="text/css">
    @media screen and (min-width: 767px) {

    .bg-overlay-dark
         {   background-image: url('dist/img/business2.jpg'); 
             background-size: cover;
         }
     .txt{ text-align: justify; 
            font-size: 15px;}

      .sidebar{margin-bottom: -60px;
        margin-top: -35px;}

      
    .categories .btn:hover{
            border-bottom: 1px solid #007bff ;
            font-size: 20px;
          }
    .categories .btn:hover a {
                color: #000;
                cursor: pointer;
                
            }
    .categories .active {color: #007bff;
          background-color: transparent;
          background-image: none;
          border-color: #007bff; 
          height: 45px;
          padding-top: 11px;
          width: 100%;
         }
   
}
@media screen and (max-width: 767px) {
  .bg-overlay-dark{
       margin-top: -10px;
       margin-bottom: -85px;
    }
  .txt{ text-align: justify; 
        font-size: 15px;}

  .header1{margin-top: -24px;}

  ul.categories{ margin-bottom: 60px;}
  .card-body{margin-left: -60px;
              margin-right: -50px;}
  .service2{margin-left: -40px;}
  .categories .btn:hover{
            border-bottom: 1px solid #007bff ;
            font-size: 20px;
          }
  .categories .btn:hover a {
            color: #000;
            cursor: pointer;
                
    }
  .categories .active {color: #007bff;
          background-color: transparent;
          background-image: none;
          border-color: #007bff; 
          height: 45px;
          padding-top: 11px;
          width: 100%;
         }
    
  } 

</style>

    </head>
    <body>
        
      
         {{--include style--}}
      @include('weblayout.header')
       
 <div class="breadcrumbs-area bg-overlay-dark"> 
   <div class="container">
    <div class="row">
     <div class="col-12">
      <div class="breadcrumbs-text text-left">
        <h2 style="color: #002e5b;">SERVICES</h2>
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
        <!-- breadcrumbs Area End -->
        <!-- Blog Area Start -->
  <div class="blog-section pt-120 pb-115 sidebar">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-12">
         <div class="single-sidebar-widget fix" id="myDiv" style="margin-top: -70px;width: 85%;">
          <div class="sidebar-widget-title">
            <h5 class="header1"style="font-size:25px;">Services</h5>
          </div>  
        <ul class="categories">
          <li class="btn active"><a href="#" onclick="audit()" style="color: #023f62;font-size: 17px;margin-left:-20px;" class="">Audit & Assurance</a></li>
          <li class="btn"><a href="#" onclick="acc()" style="color: #023f62;font-size: 17px;margin-left:-72px;">Accounting</a></li>
          <li class="btn"><a href="#" onclick="register()" style="color: #023f62;font-size: 17px;margin-left:-60px;">Registrations</a></li>
          <li class="btn"><a href="#" onclick="process()" style="color: #023f62;font-size: 17px;margin-left:-40px;">Process Set-up</a></li>
          <li class="btn"><a href="#" onclick="gst()" style="color: #023f62;font-size: 17px;margin-left:-130px;">GST</a></li>
          <li class="btn"><a href="#" onclick="project()" style="color: #023f62;font-size: 17px;margin-left:15px;"> Project & Retail Finance</a></li>
          <li class="btn"><a href="#" onclick="services()" style="color: #023f62;font-size: 17px;margin-left:-60px;">NRI Services</a></li>
          <li class="btn"><a href="#" onclick="payroll()" style="color: #023f62;font-size: 17px;margin-left:-40px;">Payroll Service</a></li>
          <li class="btn"><a href="#" onclick="subsidy()" style="color: #023f62;font-size: 17px;margin-left:0px;">Subsidy Consulting</a></li>
          <li class="btn"><a href="#" onclick="real()" style="color: #023f62;font-size: 17px;margin-left:-115px;">RERA</a></li>
        </ul>
       </div>
      </div>
  

    <div class="col-md-9 col-12" id="audit" style="margin-top: -30px; display: block;">
      <h4 class="service2" style="color: #023f62;">Audit & Assurance</h4>
      <div class="card-body" style="margin-top: 15px;">     
      <p class="txt">We take care of all audit requirements, whether internal, external or statutory. We implement the best industry standards in carrying our audit processes and assist you with tailor-made solutions to meet your specific audit need. Our experienced team will evaluate the control over the internal compliance mechanism of your organization and ensure that all reporting needs are complied with.</p>
      <ul style="list-style-type: disc;font-size: 15px;padding-top: 5px"><b>We conduct the following types of audits - </b>
        <li>Statutory Audit</li>
        <li>Internal Audit</li>
        <li>Concurrent Audit for banks as well as companies</li>
        <li>Due Diligence Audit</li>
        <li>Special Investigation Audit</li>
        <li>Management Audit</li>
        <li>Branch Audit and vendor audit</li>
      </ul>
        <p class="txt">We ensure, the audit is carried out with a view to provide measurable value addition to the cost, process TAT and non-compliances if any.</p>
      </div>
    </div>

    <div class="col-md-9 col-12" id="acc" style="margin-top: -30px; display: none;">
    <h4 class="service2" style="color: #023f62;">Accounting</h4>   
    <div class="card-body" style="margin-top: 15px;">     
    <p class="txt">We offer full range of book keeping & accountancy services for small and mid-sized businesses. Based on your business model, we develop unique and simple method of accounting in compliance with Indian Accounting Standards. All of our accounting services and solutions are scalable during periods of peak activity, and then can be scaled back when they are no longer required. By partnering with us to help you manage key non-core functions, you can concentrate efforts on maximizing your core business, which is essential to businesses that are positioned for growth. Accounting Services includes the data entry and data transcription services across industries. With the process of accounting, we ensure timely payments of various taxes, viz. Advance Income Tax, Monthly Service Tax, Periodic VAT, excise and any other taxes wherever applicable. The accounting process is provided is in line with various statutes, accounting standards to capture necessary information and tax liabilities. This includes accounting for manufacturers, traders, service providers, etc. </p>
    <ul style="list-style-type: disc;font-size: 15px;padding-top: 5px;font-size: 15px"><b>Features of accounting services -</b>
      <li>Understand the business transactions</li>
      <li>Develop a unique and simple process</li>
      <li>Compliance with GST, Indian Accounting Standards, Income Tax and other local laws</li>
      <li>Scale up during peak period and scale back in recession</li>
      <li>You focus on core business activities, we focus on compliance</li>
      <li>Ease in ascertaining GST, advance tax, TDS, etc.</li>
      <li>Extended to manufacturers, traders, service providers, etc.</li>
    </ul>
    </div>  
  </div>

  <div class="col-md-9 col-12" id="register" style="margin-top: -30px; display: none;">
    <h4 class="service2" style="color: #023f62;">Registrations</h4>   
  <div class="card-body" style="margin-top: 15px;">     
    <p class="txt">In India there are various laws at National, State and Local level where your organization is supposed to comply with. We help you to understand applicability of these laws to your business, liaison with Regulatory, Government authorities and ensure your organization is complying with the necessary statutes. Drafting of agreements, MoUs, offers and communications are important from legal and compliance point of view. We consult in drafting, vetting and registration of various important documents</p>
    <ul style="list-style-type: disc;font-size: 15px;padding-top: 5px;font-size: 15px"><b>The business registrations / license involves –</b>
    <li>PAN – Permanent Account Number</li>
    <li>TAN – Tax Deduction Account Number</li>
    <li>Shop Act License</li>
    <li>GST (Goods & Services Tax) registration</li>
    <li>IEC Code (Import – Export Code)</li>
    <li>Partnership firm registration</li>
    <li>LLP (Limited Liability Partnership) registration</li>
    <li>Private & Public Limited Company registration</li>
    <li>Hindu Undivided Family (HUF)</li>
    <li>Trademark registration</li>
    <li>RERA registration</li>
    <li>Trust registration</li>
    <li>AOP (Association of Persons) registration</li>
    <li>Getting various grants / certificates / licenses from statutory authorities</li>
    </ul>
  </div>
</div>


  <div class="col-md-9 col-12" id="process" style="margin-top: -30px; display: none;">
    <h4 class="service2" style="color: #023f62;">Process Set-up</h4>
    <div class="card-body" style="margin-top: 15px;">     
    <p class="txt">We provide the consultancy services for starting a new business, opening new branches, expansion of existing business, setting up the process flow and training of new staff for necessary activities.</p>
    <ul style="list-style-type: disc;font-size: 15px;padding-top: 5px;font-size: 15px"><b>Steps Involved in process setup -</b>
      <li>Understanding / Analysis of your business model</li>
      <li>Study / Analysis of domain market or competitors business model</li>
      <li>Preparing a Phase wise draft on processes involved and presentation to management</li>
      <li>Training of staff, Implementation of process, consistent improvement in process</li>
      <li>Audit of the branch / business to identify potential errors, loop holes and to decide accountability</li>
    </ul>
    </div>
  </div>

   <div class="col-md-9 col-12" id="gst" style="margin-top: -30px; display: none;">
    <h4 class="service2" style="color: #023f62;">GST</h4> 
    <div class="card-body" style="margin-top: 15px;">     
    <p class="txt"> GST has replaced most Central and State level indirect taxes like VAT, Service tax, Excise etc from 1st July, 2017. We understand your business products and transactions and consult in GST applicability. Along with consulting we extend our services to GST compliant accounting, filing of GST returns and GST audit.</p>
    <ul style="list-style-type: disc;font-size: 15px;padding-top: 5px;font-size: 15px"><b>Main services under GST are –</b>
      <li>GST registration</li>
      <li>Consulting</li>
      <li>Accounting</li>
      <li>Return filing</li>
      <li>GST auditing</li>
      <li>Internal reporting on compliance and process</li>
    </ul>
    <p>Branch Audit and vendor audit. We ensure, the audit is carried out with a view to provide measurable value addition to the cost, process TAT and non-compliances if any.</p>
    </div>
  </div>

  <div class="col-md-9 col-12" id="project" style="margin-top: -30px; display: none;">
   <h4 class="service2" style="color: #023f62;">Project & Retail Finance</h4>
    <div class="card-body" style="margin-top: 15px;">     
      <p class="txt">Financing a business at best cost is of utmost importance. We understand your requirement and provide best suitable, economical option to fulfill your requirements. We have internal team for documentation and appraisal of your requirements. We have tie-ups with licensed consultants for legal and technical aspects.Our partner CA Vaibhav R Mayur has 5 years banking experience and other employees with rich experience from credit appraisal, documentation, legal and technical aspects. Since 2013 till December-2017, we have successfully consulted and disbursed proposals having total value over 100 Crores.</p>
      <ul style="list-style-type: disc;font-size: 15px;padding-top: 5px;font-size: 15px"><b>Our services includes –</b>
        <li>Consulting – Strategic project finance</li>
        <li>Preparation of Project report / CMA</li>
        <li>Documentation</li>
        <li>Presentation before banks / NBFCs / FI, etc.</li>
      </ul>
      <ul style="list-style-type: disc;font-size: 15px;padding-top: 5px"><b>Financial products –</b>
        <li>Term Loan</li>
        <li>Working Capital (CC)</li>
        <li>Bank Guarantee (Fund based / Non fund based)</li>
        <li>Letter of Credit (Domestic / Foreign)</li>
        <li>External Commercial Borrowings (ECB) Certification</li>
      </ul>
      </div>
    </div>

    <div class="col-md-9 col-12" id="services" style="margin-top: -30px; display: none;">
    <h4 class="service2" style="color: #023f62;">NRI Services</h4>
    <div class="card-body" style="margin-top: 15px;">     
    <ul style="list-style-type: disc;font-size: 15px;padding-top: 5px;font-size: 15px"><b>We conduct the following types of audits-</b>
      <li>Registration for tax purpose (PAN / TAN / GST)</li>
      <li>Tax planning for planned transaction</li>
      <li>Obtaining certifications for lower TDS</li>
      <li>Certification for foreign remittance</li>
      <li>Filing Income Tax return</li>
      <li>Consulting on tax saving options</li>
    </ul>
    </div> 
  </div>

   <div class="col-md-9 col-12" id="payroll" style="margin-top: -30px; display: none;">
   <h4 class="service2" style="color: #023f62;">Payroll Service</h4>
    <div class="card-body" style="margin-top: 15px;">     
    <ul style="list-style-type: disc;font-size: 15px;padding-top: 5px">
     <li>Payroll Processing</li>
     <li>Staff tax planning and managing investment declaration for TDS purpose </li>
     <li>Preparation of pay slip and income tax computation sheet for every employee</li>
     <li>Annual collection and verification of Investment proofs submitted by employees</li>
     <li>Annual preparation of Form No.16</li>
     <li>Annual professional guidance to your employees for Tax Planning</li>
    </ul>
    </div>
  </div>

  <div class="col-md-9 col-12" id="subsidy" style="margin-top: -30px; display: none;">
    <h4 class="service2" style="color: #023f62;">Subsidy Consulting</h4>
    <div class="card-body"style="margin-top: 15px;">     
    <ul style="list-style-type: disc;font-size: 15px;padding-top: 5px"><b>We offer consultancy in –</b>
     <li>Central Government – Capital investment subsidy</li>
     <li>Central Government – Textile Industry’s subsidy </li>
     <li>State Government – Capital investment subsidy</li>
     <li>Interest subsidy</li>
     <li>Annual preparation of Form No.16</li>
     <li>Subsidy for Schedule Caste & Schedule Tribes (SC /ST)</li>
    </ul>
  </div>
  </div>

  <div class="col-md-9 col-12" id="real" style="margin-top: -30px; display: none;">
   <h4 class="service2" style="color: #023f62;">RERA (Real Estate Regulatory Authority)</h4> 
    <div class="card-body"> 
    <p class="txt">We aims at providing all services under The Real Estate ( Regulation & Development ) Act, 2016 to the promoters , agents including consultancy services to various stakeholders from registration of projects and all other matters, related and ancillary to the registration of projects.</p>    
    <ul style="list-style-type: disc;font-size: 15px;padding-top: 5px"><b>Our services includes -</b>
     <li>Consultation</li>
     <li>Preparation of Quarterly CA certificates </li>
     <li>Replies to objections by RERA Authority</li>
     <li>Updation of details with RERA Authority {{asset('website</li>
     <li>Annual Audit under RERA and CA Report</li>
    </ul>
</div>
</div>

</div> 
</div>
</div>

    

<script>
function acc() {
  var x = document.getElementById("acc");
  var y = document.getElementById("audit");
  var r = document.getElementById("register");
  var p = document.getElementById("process");
  var g = document.getElementById("gst");
  var f = document.getElementById("project");
  var s = document.getElementById("services");
  var p1 = document.getElementById("payroll");
  var s1 = document.getElementById("subsidy");
  var r1 = document.getElementById("real");
  
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    r.style.display = "none";
    p.style.display = "none";
    g.style.display = "none";
    f.style.display = "none";
    s.style.display = "none";
    p1.style.display = "none";
    s1.style.display = "none";
    r1.style.display = "none";
  
   } 
   // else {
  //   x.style.display = "none";
  //   y.style.display = "none";
  //   r.style.display = "none";
  //   p.style.display = "none";
  //   g.style.display = "none";
  //   f.style.display = "none";
  //   s.style.display = "none";
  //   p1.style.display = "none";
  //   s1.style.display = "none";
  //   r1.style.display = "none";
  
  // }
}

function audit() {
  var x = document.getElementById("audit");
  var y = document.getElementById("acc");
  var r = document.getElementById("register");
  var p = document.getElementById("process");
  var g = document.getElementById("gst");
  var f = document.getElementById("project");
  var s = document.getElementById("services");
  var p1 = document.getElementById("payroll");
  var s1 = document.getElementById("subsidy");
  var r1 = document.getElementById("real");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    r.style.display = "none";
    p.style.display = "none";
    g.style.display = "none";
    f.style.display = "none";
    s.style.display = "none";
    p1.style.display = "none";
    s1.style.display = "none";
    r1.style.display = "none";

  } 
}


function register() {
  var x = document.getElementById("acc");
  var y = document.getElementById("audit");
  var r = document.getElementById("register");
  var p = document.getElementById("process");
  var g = document.getElementById("gst");
  var f = document.getElementById("project");
  var s = document.getElementById("services");
  var p1 = document.getElementById("payroll");
  var s1 = document.getElementById("subsidy");
  var r1 = document.getElementById("real");
  if (r.style.display === "none") {
    x.style.display = "none";
    y.style.display = "none";
    r.style.display = "block";
    p.style.display = "none";
    g.style.display = "none";
    f.style.display = "none";
    s.style.display = "none";
    p1.style.display = "none";
    s1.style.display = "none";
    r1.style.display = "none";
  } 
}

function process() {
  var x = document.getElementById("acc");
  var y = document.getElementById("audit");
  var r = document.getElementById("register");
  var p = document.getElementById("process");
  var g = document.getElementById("gst");
  var f = document.getElementById("project");
  var s = document.getElementById("services");
  var p1 = document.getElementById("payroll");
  var s1 = document.getElementById("subsidy");
  var r1 = document.getElementById("real");
  if (p.style.display === "none") {
    x.style.display = "none";
    y.style.display = "none";
    r.style.display = "none";
    p.style.display = "block";
    g.style.display = "none";
    f.style.display = "none";
    s.style.display = "none";
    p1.style.display = "none";
    s1.style.display = "none";
    r1.style.display = "none";
  } 
}

function gst() {
  var x = document.getElementById("acc");
  var y = document.getElementById("audit");
  var r = document.getElementById("register");
  var p = document.getElementById("process");
  var g = document.getElementById("gst");
  var f = document.getElementById("project");
  var s = document.getElementById("services");
  var p1 = document.getElementById("payroll");
  var s1 = document.getElementById("subsidy");
  var r1 = document.getElementById("real");
  if (g.style.display === "none") {
    x.style.display = "none";
    y.style.display = "none";
    r.style.display = "none";
    p.style.display = "none";
    g.style.display = "block";
    f.style.display = "none";
    s.style.display = "none";
    p1.style.display = "none";
    s1.style.display = "none";
    r1.style.display = "none";
  } 
}

function project() {
  var x = document.getElementById("acc");
  var y = document.getElementById("audit");
  var r = document.getElementById("register");
  var p = document.getElementById("process");
  var g = document.getElementById("gst");
  var f = document.getElementById("project");
  var s = document.getElementById("services");
  var p1 = document.getElementById("payroll");
  var s1 = document.getElementById("subsidy");
  var r1 = document.getElementById("real");
  if (f.style.display === "none") {
    x.style.display = "none";
    y.style.display = "none";
    r.style.display = "none";
    p.style.display = "none";
    g.style.display = "none";
    f.style.display = "block";
    s.style.display = "none";
    p1.style.display = "none";
    s1.style.display = "none";
    r1.style.display = "none";
  } 
}

function services() {
  var x = document.getElementById("acc");
  var y = document.getElementById("audit");
  var r = document.getElementById("register");
  var p = document.getElementById("process");
  var g = document.getElementById("gst");
  var f = document.getElementById("project");
  var s = document.getElementById("services");
  var p1 = document.getElementById("payroll");
  var s1 = document.getElementById("subsidy");
  var r1 = document.getElementById("real");
  if (s.style.display === "none") {
    x.style.display = "none";
    y.style.display = "none";
    r.style.display = "none";
    p.style.display = "none";
    g.style.display = "none";
    f.style.display = "none";
    s.style.display = "block";
    p1.style.display = "none";
    s1.style.display = "none";
    r1.style.display = "none";
  } 
}

function payroll() {
  var x = document.getElementById("acc");
  var y = document.getElementById("audit");
  var r = document.getElementById("register");
  var p = document.getElementById("process");
  var g = document.getElementById("gst");
  var f = document.getElementById("project");
  var s = document.getElementById("services");
  var p1 = document.getElementById("payroll");
  var s1 = document.getElementById("subsidy");
  var r1 = document.getElementById("real");
  if (p1.style.display === "none") {
    x.style.display = "none";
    y.style.display = "none";
    r.style.display = "none";
    p.style.display = "none";
    g.style.display = "none";
    f.style.display = "none";
    s.style.display = "none";
    p1.style.display = "block";
    s1.style.display = "none";
    r1.style.display = "none";
  } 
}

function subsidy() {
  var x = document.getElementById("acc");
  var y = document.getElementById("audit");
  var r = document.getElementById("register");
  var p = document.getElementById("process");
  var g = document.getElementById("gst");
  var f = document.getElementById("project");
  var s = document.getElementById("services");
  var p1 = document.getElementById("payroll");
  var s1 = document.getElementById("subsidy");
  var r1 = document.getElementById("real");
  if (s1.style.display === "none") {
    x.style.display = "none";
    y.style.display = "none";
    r.style.display = "none";
    p.style.display = "none";
    g.style.display = "none";
    f.style.display = "none";
    s.style.display = "none";
    p1.style.display = "none";
    s1.style.display = "block";
    r1.style.display = "none";
  } 
}
function real() {
  var x = document.getElementById("acc");
  var y = document.getElementById("audit");
  var r = document.getElementById("register");
  var p = document.getElementById("process");
  var g = document.getElementById("gst");
  var f = document.getElementById("project");
  var s = document.getElementById("services");
  var p1 = document.getElementById("payroll");
  var s1 = document.getElementById("subsidy");
  var r1 = document.getElementById("real");
  if (r1.style.display === "none") {
    x.style.display = "none";
    y.style.display = "none";
    r.style.display = "none";
    p.style.display = "none";
    g.style.display = "none";
    f.style.display = "none";
    s.style.display = "none";
    p1.style.display = "none";
    s1.style.display = "none";
    r1.style.display = "block";
  } 
}

var header = document.getElementById("myDiv");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}

</script>

@include('weblayout.footer')      
 </body>
</html>