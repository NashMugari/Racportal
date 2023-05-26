<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--<![endif]-->
<html lang="en">
<head>
<title>MWPF RAC - Regional Advisory Committees</title>
<meta charset="utf-8">
<!-- Meta -->
<meta name="keywords" content="" />
<meta name="author" content="">
<meta name="robots" content="" />
<meta name="description" content="" />

<!-- this styles only adds some repairs on idevices  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.png">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css"> 
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
  <script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit"></script>
<style>
     #swal_message{
      font-size: 19px;
      font-family: Arial, Helvetica, sans-serif;
    }

     #marker_results
    {
      font-weight: bold;
     font-family: arial;
     color: black;
   
    }

    #error1, #error2, #error3, #error4, #error5, #error6, #error7, #error8, #error9
  {
    color: red;
    font-weight: bold;
    font-family: arial;
    font-size: 13px;
  }
    #word_count{
    font-size: 14px;
    color: black;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
  }
</style>


@yield('css')
<!-- Remove the below comments to use your color option -->
<!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
<!--<link rel="stylesheet" href="css/colors/orange.css" />-->
<!--<link rel="stylesheet" href="css/colors/green.css" />-->
<!--<link rel="stylesheet" href="css/colors/pink.css" />-->
<!--<link rel="stylesheet" href="css/colors/red.css" />-->
<!--<link rel="stylesheet" href="css/colors/purple.css" />-->
<!--<link rel="stylesheet" href="css/colors/bridge.css" />-->
<!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
<!--<link rel="stylesheet" href="css/colors/violet.css" />-->
<!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
<!--<link rel="stylesheet" href="css/colors/mossgreen.css" />-->

</head>

<body>
<div class="site_wrapper">
  <div class="topbar  topbar-padding" style="background-color:#c3c6c7">
    <div class="container">
		<div class="row">
			<div class="col-md-4 ">
				<div class="toplist toppadding pull-left">					
					<a href="#" class=" btn btn-border btn btn-white less-top-bottom-padding btn-xround btn-small-2" data-toggle="modal" data-target="#modalContact"><i class="fa fa-envelope-o"></i> &nbsp; Contact  <b>us</b></a>	
				</div>				

				<ul class="toplist toppadding pull-left paddtop">
				  <li><a href="https://www.facebook.com/Mineworkers-Provident-Fund-286779041799206/" target="_blank"><i class="fa fa-facebook"></i></a></li>
				  <li class="last"><a href="https://twitter.com/Mineworkerspf/" target="_blank"><i class="fa fa-twitter"></i></a></li>
				  <li class="last"><a href="https://www.linkedin.com/in/mineworkers-provident-fund-68386414a/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				  <li class="last"><a href="https://www.youtube.com/watch?v=zeZ5zw3T_z8/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>				  			  
				</ul>			  
			</div>  
			  <!--end left-->
			<div class="col-md-3 ">   
			  <div class="topbar-center-items">
				<a href="https://sacoronavirus.co.za" target="_blank"><img src="{{asset('rac_new/images/covid-500x.png')}}"  alt="" class="img-responsive"/></a>			 
			  </div>
			</div>   
			  <!--end center-->	  
			  			
			<div class="col-md-5 "> 
				<ul class="toplist toppadding  paddtop">					
					<li> <a href="#" class=" btn btn-pink-3 less-top-bottom-padding btn-xround btn-small-2" data-toggle="modal" data-target="#modallogin"><i class="fa fa-user"></i> &nbsp; RAC <b> Login  </b>  </a></li>	
					<li> <a href="#" class=" btn btn-orange-2 less-top-bottom-padding btn-xround btn-small-2"  data-toggle="modal" data-target="#modalchat"><i class="fa fa-comments-o"></i>&nbsp;  Chat <b>to us </b>  </a></li>							
				</ul>	
			</div> 
	    </div>		
    </div>			
    </div>
  </div>
  <div class="clearfix"></div>
  
  <div id="header" >
    <div class="container">
      <div class="navbar pink-3 navbar-default yamm">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="{{url('/')}}" class="navbar-brand less-top-padding"><img src="{{asset('rac_new/images/b-logo.png')}}"  style="display: block; margin-top:-10px;" alt=""/></a> </div>
        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
          <ul class="nav pink-3 navbar-nav">
           
            @include('layouts.rac_new.includes.route_active')

          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--end menu-->
  <div class="clearfix"></div>

  @yield('content')
  



   
  <section class="section-dark sec-padding" style="padding: 20px; background-color: #393e45">
    <div class="container">
      <div class="row">
        <div class="col-md-3 clearfix">
          <div class="item-holder">
            <h5 class="uppercase footer-title less-mar3">RAC Calendar 2022</h5>
            <div class="footer-title-bottomstrip"></div>
            <div class="clearfix"></div>
            <div class="image-left"><a href="{{asset('rac_new/planner/2022_Final_Year_Planner.pdf')}}" target="_blank"><img src="{{asset('rac_new/planner/2022_Final_Year_Planner.jpg')}}" alt="" class="img-responsive"/></a></div>         
            <div class="text-box">
              <h5 class="text-white less-mar3"><a href="{{asset('rac_new/planner/2022_Final_Year_Planner.pdf')}}" target="_blank">View Full Calendar</a></h5>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <h5 class="uppercase footer-title less-mar3">Resources</h5>
          <div class="clearfix"></div>
          <div class="footer-title-bottomstrip"></div>
          <ul class="usefull-links orange2">
          <li><a href="{{url('/')}}"><i class="fa fa-angle-right"></i> About MWPF RACs</a></li>
          <li><a href="{{url('board_of_trustees')}}"><i class="fa fa-angle-right"></i> Board of Trustees</a></li>
          <li><a href="{{url('gallery_rac')}}"><i class="fa fa-angle-right"></i> Gallery</a></li>
            <li class="last"><a href="#" data-toggle="modal" data-target="#modalContact"><i class="fa fa-angle-right"></i> Contact us</a></li>
          </ul>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          {{--<div class="item-holder">--}}
            {{--<h5 class="uppercase footer-title less-mar3">Newsletter</h5>--}}
            {{--<div class="clearfix"></div>--}}
            {{--<div class="footer-title-bottomstrip"></div>--}}
            {{--<div class="newsletter">--}}
              {{--<p style="color:#c3c6c7"; align="left">Subscribe to our Newsletter to remain up to date on products and news from the Minewrokers Provident Fund. </p>--}}
              {{--<br />--}}
              {{--<form method="get" action="{{url('/')}}">--}}
                {{--<input class="email_input" name="samplees" id="samplees" value="E-mail Address" onFocus="if(this.value == 'E-mail Address') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'E-mail Address';}" type="text">--}}
                {{--<input name="" value="Go" class="input_submit orange2" type="submit">--}}
              {{--</form>--}}
            {{--</div>--}}
            {{--<div class="margin-top3"></div>--}}
            {{--<div class="clearfix"></div>--}}
          {{--</div>--}}
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <div class="item-holder">
            <h5 class="uppercase footer-title less-mar3">useful links</h5>
            <div class="clearfix"></div>
            <div class="footer-title-bottomstrip"></div>
            <ul class="usefull-links orange2">
              <li><a href="https://www.mwpf.co.za/" target="_blank"><i class="fa fa-angle-right"></i> MWPF Website</li>
              <li><a href="https://unclaimed.mwpf.co.za/" target="_blank"><i class="fa fa-angle-right"></i> Unclaimed Benefit</a></li>
              <li><a href="https://complaints.mwpf.co.za/" target="_blank"><i class="fa fa-angle-right"></i> Complaints</a></li>
               <li class="last"><a href="https://supplychain.mwpf.co.za/" target="_blank"><i class="fa fa-angle-right"></i> Supply Chain</a></li>
            </ul>
          </div>
        </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <div class="clearfix"></div> 
 
 <div class="divider-line solid light opacity-7"></div> 
  
  <section class="section-copyrights"  style="padding: 20px; background-color: #b91900">
    <div class="container">
      <div class="row">
        <div class="col-md-4 "> 
          <ul class="payment-type pull-left">
            <li style="color:#ffffff" align="center"> © Copyright 2022 <a href="https://www.mwpf.co.za" style="color: #ffffff"><strong>MWPF</strong></a> &nbsp; | &nbsp; All rights reserved. </li>
          </ul>		
		</div>	  
		<div class="col-md-4 ">
           <ul class="payment-type pull-left" >
           <li><a href="{{url('terms')}}" target="_blank" style="color:#ffffff" >&nbsp; Terms & Conditions &nbsp; | </a>  
           <a href="{{url('cookies')}}" target="_blank" style="color:#ffffff" >&nbsp; Cookies Policy</a>  </li>  			
          </ul>
        </div>	  
		<div class="col-md-4 ">
		  <ul class=" social-icons-3 pull-center">
			  <li><a href="https://www.facebook.com/Mineworkers-Provident-Fund-286779041799206/" target="_blank"><i class="fa fa-facebook"></i></a></li>
			  <li><a href="https://twitter.com/Mineworkerspf/" target="_blank"><i class="fa fa-twitter"></i></a></li>
			  <li><a href="https://www.instagram.com/mineworkers_pf/" target="_blank"><i class="fa fa-instagram"></i></a></li>
			 <li><a href="#" target="_blank"><i class="fa fa-comments-o"></i></a></li>  
			</ul>		  		  
		</div>

      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>      
  
  <a href="#" class="scrollup orange-4"></a><!-- end scroll to top of the page--> 
</div>
<!-- end site wraper --> 

 
@yield('js')


<script>

    var CaptchaCallback = function() {
    var widgetId1;
    var widgetId2;
    widgetId1 = grecaptcha.render('RecaptchaField1', {'sitekey' : '6LcS1MUZAAAAANDBh02ksvm8dw9ofBJbF25OZZu7', 'callback' : correctCaptcha_quote});
    widgetId2 = grecaptcha.render('RecaptchaField2', {'sitekey' : '6LcS1MUZAAAAANDBh02ksvm8dw9ofBJbF25OZZu7', 'callback' : correctCaptcha_contact});
};

var correctCaptcha_quote = function(response) {
    $("#qt_hiddenRecaptcha").val(response);
};

var correctCaptcha_contact = function(response) {
    $("#ct_hiddenRecaptcha").val(response);
};

    var content;
  $('textarea').on('keyup', function(){
    // count words
    var words = $(this).val().length;
    $('#word_count').text("("+(words)+" characters)");
    
       
        content = $(this).val();
    
});
  function contact_form() {
  var sendername = document.getElementById('sendername').value;
  var emailaddress = document.getElementById('emailaddress').value;
  var telephone = document.getElementById('telephone').value;
  var senderorganisation = document.getElementById('senderorganisation').value;
  var sendermessage = document.getElementById('sendermessage').value;
  var id = document.getElementById('qt_hiddenRecaptcha').value;

   var letters = /^[A-Za-z]+$/;
   var email_validation = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   var phone_number_validation = /^\d{10}$/;

      if(sendername == "" || sendername == null)
      {
        document.getElementById("error4").innerHTML  = "Please enter your name and surname!";
      }
    //   else if(!letters.test(sendername))
    //   {
    //   document.getElementById("error4").innerHTML  = "Please input alphabet characters only!";
    //   }
      else
      {
        document.getElementById("error4").innerHTML  = "";
        sendername = true;
      }


       if(emailaddress == "" || emailaddress == null)
      {
        document.getElementById("error5").innerHTML  = "Please enter your email address!";
      }
      else if(!email_validation.test(emailaddress))
      {
         document.getElementById("error5").innerHTML  = "You have entered an invalid email address!";
       
      }
      else
      {
        document.getElementById("error5").innerHTML  = "";
        emailaddress = true;
      }

      if(telephone == "" || telephone == null)
      {
        document.getElementById("error6").innerHTML  = "Please enter your telephone number!";
      }
      else if(!phone_number_validation.test(telephone))
      {
         document.getElementById("error6").innerHTML  = "You have entered an invalid phone number!";
      }
      else
      {
        document.getElementById("error6").innerHTML  = "";
        telephone = true;
      }

      if(senderorganisation == "" || senderorganisation == null)
      {
        document.getElementById("error7").innerHTML  = "Please enter your organisation name!";
      }
      else
      {
        document.getElementById("error7").innerHTML  = "";
        senderorganisation = true;
      }

       if(sendermessage == "" || sendermessage == null)
      {
        document.getElementById("error8").innerHTML  = "Please enter your message!";
      }
      else if(sendermessage.length < 80 || sendermessage.length > 300 )
      {
       document.getElementById("error8").innerHTML  = "Please enter between 80 - 300 characters!";
      }
      else
      {
        document.getElementById("error8").innerHTML  = "";
        sendermessage = true;
      }

       if(id == "" || id == null)
      {
        document.getElementById("error9").innerHTML  = "Please complete the captcha";
      }
      else
      {
        document.getElementById("error9").innerHTML  = "";
        id = true;
      }

      if(sendername == true && emailaddress == true && id == true && telephone == true && senderorganisation == true && sendermessage == true)
      {
       
        $('#contact_form_id').submit();
      }

      

  }

  function login_form() {
   // var id = document.getElementById('ct_hiddenRecaptcha').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

      if(email == "" || email == null)
      {
        document.getElementById("error1").innerHTML  = "Please enter your email address!";
      }
      else
      {
        document.getElementById("error1").innerHTML  = "";
        email = true;
      }


      if(password == "" || password == null)
      {
        document.getElementById("error2").innerHTML  = "Please enter your password!";
      }
      else
      {
        document.getElementById("error2").innerHTML  = "";
        password = true;
      }


//      if(id == "" || id == null)
//      {
//        document.getElementById("error3").innerHTML  = "Please complete the captcha";
//      }
//      else
//      {
//        document.getElementById("error3").innerHTML  = "";
//        id = true;
//      }

//      if(email == true && password == true && id == true)
//      {
//        $('#form_id').submit();
//      }


    if(email == true && password == true)
    {
      $('#form_id').submit();
    }


    // alert(id);


      
  
}

</script>
</body>
</html>
