@extends('layouts.rac_new.layout')

@section('css')

@include('layouts.rac_new.page_css.homecss')

@endsection


@section('content')
      <!-- masterslider -->

        <script>


         jQuery(document).ready(function(){

         // alert('test');
               e.preventDefault();

              //  $.ajaxSetup({
              //     headers: {
              //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              //     }
              // });
            
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/analytics',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: '' ,
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                      //  $(".writeinfo").append(data.msg); 
                    }
                }); 

               });
          
      </script>
  <div class="master-slider ms-skin-default" id="masterslider"> 
  
    <!-- slide 1 -->
    <div class="ms-slide slide-3" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="{{asset('rac_new/js/masterslider/blank.gif')}}" data-src="{{asset('rac_new/images/s4.jpg')}}" alt=""/>
         
      <h3 class="ms-layer text32"			
			style="top: 200px; right:350px;
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)"><span style=" text-shadow: 2px 2px 4px #000;font-weight:800"> TAX CHANGES</span></h3>
			
      <h3 class="ms-layer text31"
			style="top: 280px; right:350px; color:#b91900;  text-shadow: 2px 2px 4px #000;font-weight:800"
			data-type="text"
			data-delay="1200"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)">From 1 March 2021</h3>			

      <h3 class="ms-layer text31"
			style="top: 330px; right:350px; text-shadow: 2px 2px 4px #000; font-weight:600"
			data-type="text"
			data-delay="1400"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)"  >AFFECTING PROVIDENT </h3>
			
      <h3 class="ms-layer text31"
			style="top: 380px; right:350px; text-shadow: 2px 2px 4px #000; font-weight:600"
			data-type="text"
			data-delay="1600"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)"  > FUND MEMBERS</span></h3>             
        
      <a    href="https://www.mwpf.co.za/downloads/Tax_Poster_English.pdf" target="_blank"class="ms-layer sbut5"
			style="right:350px;top: 510px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Read More </a>

		 <a href="https://www.mwpf.co.za/downloads/Tax_Poster_Sesotho.pdf" target="_blank" class="ms-layer sbut1"  target="_blank" style="left: 200px; top: 520px;font-size:20px; padding:4px 12px;" >&nbsp;Sesotho&nbsp;</a>
		 <a href="https://www.mwpf.co.za/downloads/Tax_Poster_Setswana.pdf" target="_blank" class="ms-layer sbut1"  target="_blank" style="left: 380px; top: 520px;font-size:20px; padding:4px 12px; " >Setswana</a>
		 <a href="https://www.mwpf.co.za/downloads/Tax_Poster_Xhosa.pdf" target="_blank" class="ms-layer sbut1"  target="_blank" style="left: 560px; top: 520px;font-size:20px; padding:4px 12px; " >&nbsp;&nbsp;&nbsp;Xhosa&nbsp;&nbsp;&nbsp;</a>
		 <a href="https://www.mwpf.co.za/downloads/Tax_Poster_Zulu.pdf" target="_blank" class="ms-layer sbut1"  target="_blank" style="left: 740px; top: 520px;font-size:20px; padding:4px 12px; " >&nbsp;&nbsp;&nbsp;&nbsp;Zulu&nbsp;&nbsp;&nbsp;&nbsp;</a>
		 <a href="https://www.mwpf.co.za/downloads/Tax_Poster_Tsonga.pdf" target="_blank" class="ms-layer sbut1"  target="_blank" style="left: 920px; top: 520px;font-size:20px; padding:4px 12px; " >&nbsp;&nbsp;Tsonga&nbsp;&nbsp;</a>
           
            </div> 
    <!-- end slide 1 -->  
    
    <!-- slide 2 -->
    <div class="ms-slide slide-1" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="{{asset('rac_new/js/masterslider/blank.gif')}}" data-src="{{asset('rac_new/images/s1.jpg')}}" alt=""/>
      
      <h3 class="ms-layer text31"
			style="top: 320px; right:230px; text-shadow: 2px 2px 4px #000;font-weight:600"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)">Regional Advisory</h3>
            
      <h3 class="ms-layer text32"
			style="top: 390px; right:230px;"
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)"><span style=" text-shadow: 2px 2px 4px #000;font-weight:800"> Committees</span></h3>
            
        
      <a class="ms-layer sbut5"
			style="right: 230px; top: 480px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="left(250)"> Read More </a> 
            
            </div>
    <!-- end slide 2 --> 
    
    <!-- slide 3 -->
    <div class="ms-slide slide-2" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="{{asset('rac_new/js/masterslider/blank.gif')}}" data-src="{{asset('rac_new/images/s2.jpg')}}" alt=""/>
      
      <h3 class="ms-layer text31 text-center"
			style="top: 280px; text-shadow: 2px 2px 4px #000;font-weight:600"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="scale(1.5,1.6)"> Independent Board</h3>
            
      <h3 class="ms-layer text32 text-center"
			style="top: 350px;"
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="scale(1.5,1.6)"><span style=" text-shadow: 2px 2px 4px #000;font-weight:800"> of Trustees</span></h3>
            
        
    <a href="{{url('board_of_trustees')}}" class="ms-layer sbut5"
			style="left: 730px; top: 440px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="scale(1.5,1.6)"> Read More </a> 
            
            </div>
    <!-- end slide 3 -->
    


  </div>

  
  <!-- end of masterslider -->
  <div class="clearfix"></div>
  
  <section class="section-orange-2 section-less-padding-1">
    <div class="container">
      <div class="row">
        <div class="col-md-9"><br>
          <h3 class="text-white ubuntu">Welcome to MWPF RAC Portal</h3>
          <p class="text-white">Regional Advisory Committees, complementary bodies to Board of Trustees.</p>
        </div>
        <div class="col-md-3">
          <div class="margin-top2"></div><br><br>
        <a class="btn btn-border white-2 btn-large pull-right" href="{{url('regional_racs')}}">Regional Racs</a>
		</div>
      </div>
	 <br>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="feature-box15 bmargin"><br>
			<div class="icon-plain-small left"> <span style="color:#b91900" class="fa fa-users"></span></div>
			<div class="text-left white less-padding-1">
			<h4 class="title uppercase" style="color:#b91900;"> Advisory <b> Committees </b></h4>
			  <div class="divider-line solid light margin"></div>
			  <h6 class="title"  style="color:#ccc" align="center">MWPF REGIONAL ADVISORY COMMITTEES </h6>
			</div><br>	           
            <p align="justify">The Regional Advisory Committees, RACs, are support structures to the board. The Mineworkers Provident Fund has a committee in each region where there are members. <br><br>
			The Regional Advisory Committees are complementary bodies to the Board of Trustees. These structures are made up of member representatives and company representatives from all the participating employers..</p>
          </div><br><br>
		  
        </div>
        <!--end item-->
        
        <div class="col-md-8">
          <div class="feature-box15  bmargin">
            <div class="image-holder"><img src="{{asset('rac_new/images/blog2.jpg')}}" alt="" class="img-responsive"/></div>
            <div class="clearfix"></div>
           <br>
            <p align="justify">The most important task of these structures is to keep the members informed on all the new developments within the Fund. These structures are an important communication tool for the Fund. These meetings are held bi-annually.</p>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>

  <section class="parallax-section4">
    <div class="section-overlay bg-opacity-7">
      <div class="container sec-tpadding-2 sec-bpadding-2">
        <div class="row slide-controls-color-3 line-style">
          <div class="col-md-6 text-left">
            <div id="owl-demo2" class="owl-carousel">
              <div class="item"> <br/>
                <h1 class="oswald uppercase text-white title1 font-weight-6">Who can Join the Fund?</h1>
                <br/>
                <div class="title-line-7"></div>
                <p class="text-white" align="justify">The Fund is open for membership to all workers in the Mining industry whose employers are participating employers in the Mineworkers Provident Fund, workers of other members of the Chamber of Mines in South Africa and workers of other employers whose participation in the Fund has been approved by the Trustees, may also join. Joining members must be under the age of 60 for underground employees and 63 for other employees.</p>
                <br/>
				<a class="btn btn-border white" href="https://www.mwpf.co.za/index.html" target="_blank">Find out more</a> 
              </div>
              <!--end slide item-->
              
              <div class="item"> <br/>
                <h1 class="oswald uppercase text-white title1 font-weight-6">HONEST AND DEPENDABLE</h1>
                <br/>
                <div class="title-line-7"></div>
                <p class="text-white"align="justify">According to the audited financial statements as at 31 December 2014, the membership of the Fund was 100 136. The Fund is mostly made up of members from category two to category eight. The bulk of the Mineworkers Provident Fund membership is made up of members belonging to the National Union of Mineworkers. </p>
                <br/>
                <a class="btn btn-border white" href="https://www.mwpf.co.za/index.html" target="_blank">Find out more</a> </div>
              <!--end slide item-->
              
              <div class="item"> <br/>
                <h1 class="oswald uppercase text-white title1 font-weight-6"> ALWAYS IMPROVING</h1>
                <br/>
                <div class="title-line-7"></div>
                <p class="text-white" align="justify">Each year members will receive a benefit statement telling them how much they have contributed, and what their withdrawal, death and disability and retirement benefits amount to at the date of the statement. Members must check their details carefully and refer any queries or errors to the Human Resources Department. </p>
                <br/>
                <a class="btn btn-border white" href="https://www.mwpf.co.za/index.html" target="_blank">Find out more</a> </div>
              <!--end slide item--> 
              
            </div>
            <!--end carousel --> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  
  
@include('layouts.rac_new.includes.login_resets')

@include('layouts.rac_new.includes.errors')
@include('layouts.rac_new.includes.sessions')

<section class="section " style="background-color: #fff;">
<div class="container" > 	
<!-- Modal: modalContact -->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="ContactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body" >
	  <div class="container"style="background-color: #fff;"> 
	  <a href="{{url('/')}}" class="logo  toppadd" align="left"><img class=" w-80 " src="{{asset('rac_new/images/b-logo.png')}}" alt="MWPF"> </a><br>
			<div class="icon-plain-small right " style="color:##393e45"> <span class="fa fa-edit"></span></div>
			<div class="text-right less-padding-1">
			<h5 class="title " style="color:#393e45">  <b>  Contact </b> us</h5>
			</div>		  
		<div class="smart-forms  bmargin-2">	
      		
    <form method="get" action="{{url('contact')}}" id="contact_form_id">			
       <div>			
				<br>
				<div class="spacer-b20 ">
					<div class="tagline "><span>PLEASE ENTER YOUR DETAILS BELOW  </span></div><!-- .tagline -->
				</div> 
		
		<div class="row" style="background-color: #c3c6c7">

		  
          <div class="col-lg-12" >
  
			  <br/>
			  <br/>

                <div>
                  <div class="section">
                    <label class="field prepend-icon">
                      <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter Name and Surname" required>
                      <span class="field-icon"><i class="fa fa-user"></i></span> </label>
                      <small id="error4" class="form-text text-muted"></small>
                  </div>
                  <!-- end section -->
                  
                  <div class="section">
                    <label class="field prepend-icon">
                      <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email Address" required>
                      <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                      <small id="error5" class="form-text text-muted"></small>
                  </div>
                  <!-- end section -->
				  
                <div class="section">
                  <label class="field prepend-icon">
                    <input type="number" name="telephone" id="telephone" class="gui-input" placeholder="Mobile Number" required>
                    <span class="field-icon"><i class="fa fa-phone-square"></i></span> </label>
                    <small id="error6" class="form-text text-muted"></small>
                </div>
                <!-- end section -->				  
                  
                <div class="section">
                  <label class="field prepend-icon">
                    <input type="text" name="senderorganisation" id="senderorganisation" class="gui-input" placeholder="Employer" required>
                    <span class="field-icon"><i class="fa fa-building-o"></i></span> </label>
                    <small id="error7" class="form-text text-muted"></small>
                </div>
                <!-- end section -->
                  
                  <div class="section">
                    <label class="field prepend-icon">
                      <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter Message" required></textarea>
                      <span class="field-icon"><i class="fa fa-comments"></i></span> <span class="input-hint"> <p id="word_count">(0 characters)</p>  <strong>Hint:</strong> Please enter between 80 - 300 characters.</span> </label>
                      <small id="error8" class="form-text text-muted"></small>
                  </div>
                  <!-- end section -->
				  <br/>
				  
                        <div class="section">
                            {{-- <div class="g-recaptcha" id="g-recaptcha" data-sitekey="6LcS1MUZAAAAANDBh02ksvm8dw9ofBJbF25OZZu7"></div> --}}
                            <div class="g-recaptcha-quote" data-sitekey="6LcS1MUZAAAAANDBh02ksvm8dw9ofBJbF25OZZu7" id="RecaptchaField1"></div>
                            <input type="hidden" class="hiddenRecaptcha" name="qt_hiddenRecaptcha" id="qt_hiddenRecaptcha">
                            <small id="error9" class="form-text text-muted"></small>
                        </div>
				<br/>
                <div class="result"></div>
                <!-- end .result  section -->                   
              </div>			
                <!-- end .form-body section -->
                <div class="form-footer" >
                  <button type="button" onclick="contact_form()" data-btntext-sending="Sending..." class="button btn-primary orange-4 ">Submit</button>
                  <button type="reset" class="button btn "> Cancel </button>
				   <span type="close" data-dismiss="modal"> <i class="icon-close "></i></span> 
                </div>
				<br/><br/> 
                <!-- end .form-footer section -->				
            </form>
            </div>
            <!-- end .smart-forms section -->
		
		  </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>


<!--End of Tawk.to Script-->
<!-- end section --> 
@endsection

@section('js')

@include('layouts.rac_new.page_js.homejs')

@endsection
