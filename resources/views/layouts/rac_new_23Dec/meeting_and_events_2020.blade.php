 @extends('layouts.rac_new.layout')


 @section('css')

@include('layouts.rac_new.page_css.meetingcss')

@endsection


@section('content')
      <section>
    <div class="header-inner  ">
      <div class="inner text-center"><br><br><br>
        <h3 class="section-title-3 text-white uppercase" style=" color:#b91900; text-shadow: 2px 2px 4px #fff;font-weight:600">Meetings</h3>
        <h4 class="title-4 uppercase" style="color:#b91900">RAC Meetings and Events</h4>
      </div>
      <div class="overlay bg-opacity-1"></div>
      <img src="{{asset('rac_new/images/title-back.jpg')}}" alt="" class="img-responsive"/> </div>
  </section>
  <!-- end header inner -->
  <div class="clearfix"></div> 
  
  <section class="sec-padding section-light">
    <div class="container">
      <div class="row">	
        <div class="col-md-3 col-sm-6 text-center">
          <div class="pricetable-holder3 bmargin active">
            <div class="inner-holder">
              <h4 class="text-bold2 title ubuntu">Free State</h4>           
              <ul class="plan_features">
                <li>REGIONAL RAC</li>
				<br/><br/>
                <li >21 February 2020</li>
                <li>29 May 2020</li>
                <li>31 July 2020</li>
              </ul>			 
              <a href="{{url('regional_racs')}}" class=" btn btn-pink-3 less-top-bottom-padding btn-xround btn-small-2"><i class="fa fa-search"></i> &nbsp; Find out<b> more &nbsp;  </b>  </a>        
              <br/><br/>
            </div>
          </div>
        </div>
        <!--end item -->
		
        <div class="col-md-3 col-sm-6 text-center">
          <div class="pricetable-holder3 bmargin active">
            <div class="inner-holder">
              <h4 class="text-bold2 title ubuntu">Kwazulu-Natal</h4>           
              <ul class="plan_features">
                <li>REGIONAL RAC</li>
				<br/>
                <li >13 March 2020</li>
                <li>07 August 2020</li>
                <li>30 October 2020</li>
              </ul>			 
              <a href="{{url('regional_racs')}}" class=" btn btn-pink-3 less-top-bottom-padding btn-xround btn-small-2"><i class="fa fa-search"></i> &nbsp; Find out<b> more &nbsp;  </b>  </a>        
              <br/><br/>
            </div>
          </div>
        </div>
        <!--end item -->

        <div class="col-md-3 col-sm-6 text-center">
          <div class="pricetable-holder3 bmargin active">
            <div class="inner-holder">
              <h4 class="text-bold2 title ubuntu">Emalahleni</h4>           
              <ul class="plan_features">
                <li>REGIONAL RAC</li>
				<br/><br/>
                <li >09 April 2020</li>
                <li>10 July 2020</li>
                <li>07 October 2020</li>
              </ul>			 
              <a href="{{url('regional_racs')}}" class=" btn btn-pink-3 less-top-bottom-padding btn-xround btn-small-2"><i class="fa fa-search"></i> &nbsp; Find out<b> more &nbsp;  </b>  </a>        
              <br/><br/>
            </div>
          </div>
        </div>
        <!--end item -->

        <div class="col-md-3 col-sm-6 text-center">
          <div class="pricetable-holder3 bmargin active">
            <div class="inner-holder">
              <h4 class="text-bold2 title ubuntu">Matlosane</h4>           
              <ul class="plan_features">
                <li>REGIONAL RAC</li>
				<br/><br/>
                <li >31 January 2020</li>
                <li>08 May 2020</li>
                <li>11 September 2020</li>
              </ul>			 
              <a href="{{url('regional_racs')}}" class=" btn btn-pink-3 less-top-bottom-padding btn-xround btn-small-2"><i class="fa fa-search"></i> &nbsp; Find out<b> more &nbsp;  </b>  </a>        
              <br/><br/>
            </div>
          </div>
        </div>
        <!--end item -->

		
	       
      </div>
    </div>
  </section>
  <section>
  <!--end section-->
  <div class="clearfix"></div>
  
  
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 text-center">
          <div class="pricetable-holder3 bmargin active">
            <div class="inner-holder">
              <h4 class="text-bold2 title ubuntu">Westonaria</h4>           
              <ul class="plan_features">
                <li>REGIONAL RAC</li>
				<br/><br/>
                <li >18 February 2020</li>
                <li>12 June 2020</li>
                <li>23 September 2020</li>
              </ul>			 
              <a href="{{url('regional_racs')}}" class=" btn btn-pink-3 less-top-bottom-padding btn-xround btn-small-2"><i class="fa fa-search"></i> &nbsp; Find out<b> more &nbsp;  </b>  </a>        
              <br/><br/>
            </div>
          </div>
        </div>
        <!--end item -->

        <div class="col-md-3 col-sm-6 text-center">
          <div class="pricetable-holder3 bmargin active">
            <div class="inner-holder">
              <h4 class="text-bold2 title ubuntu">Rustenburg</h4>           
              <ul class="plan_features">
                <li>REGIONAL RAC</li>
				<br/><br/>
                <li >16 April 2020</li>
                <li>03 July 2020</li>
                <li>16 October 2020</li>
              </ul>			 
              <a href="{{url('regional_racs')}}" class=" btn btn-pink-3 less-top-bottom-padding btn-xround btn-small-2"><i class="fa fa-search"></i> &nbsp; Find out<b> more &nbsp;  </b>  </a>        
              <br/><br/>
            </div>
          </div>
        </div>
        <!--end item -->

        <div class="col-md-3 col-sm-6 text-center">
          <div class="pricetable-holder3 bmargin active">
            <div class="inner-holder">
              <h4 class="text-bold2 title ubuntu">Carletonville</h4>           
              <ul class="plan_features">
                <li>REGIONAL RAC</li>
				<br/><br/>
                <li >22 January 2020 </li>
                <li>15 May 2020</li>
                <li>04 September 2020</li>
              </ul>			 
              <a href="{{url('regional_racs')}}" class=" btn btn-pink-3 less-top-bottom-padding btn-xround btn-small-2"><i class="fa fa-search"></i> &nbsp; Find out<b> more &nbsp;  </b>  </a>        
              <br/><br/>
            </div>
          </div>
        </div>
        <!--end item -->

        <div class="col-md-3 col-sm-6 text-center">
          <div class="pricetable-holder3 bmargin active">
            <div class="inner-holder">
              <h4 class="text-bold2 title ubuntu">Secunda</h4>           
              <ul class="plan_features">
                <li>REGIONAL RAC</li>
				<br/><br/>
                <li >20 March 2020</li>
                <li>30 June 2020</li>
                <li>23 October 2020</li>
              </ul>			 
              <a href="{{url('regional_racs')}}" class=" btn btn-pink-3 less-top-bottom-padding btn-xround btn-small-2"><i class="fa fa-search"></i> &nbsp; Find out<b> more &nbsp;  </b>  </a>        
              <br/><br/>
            </div>
          </div>
        </div>
        <!--end item -->		
	       
      </div>
    </div>
  </section>
  <section>
  <!--end section-->
  <div class="clearfix"></div>  
  
  
  <section class="sec-padding section-light">
    <div class="container">
      <div class="row">	
        <div class="col-md-3 col-sm-6 text-center">
          <div class="pricetable-holder3 bmargin active">
            <div class="inner-holder">
              <h4 class="text-bold2 title ubuntu">PHALABORWA</h4>           
              <ul class="plan_features">
                <li>REGIONAL RAC</li>
				<br/><br/>
				<li>30 April 2020</li>
				<br/><br/><br/><br/><br/>
      

              </ul>			 
              <a href="{{url('regional_racs')}}" class=" btn btn-pink-3 less-top-bottom-padding btn-xround btn-small-2"><i class="fa fa-search"></i> &nbsp; Find out<b> more &nbsp;  </b>  </a>        
              <br/><br/>
            </div>
          </div>
        </div>
        <!--end item -->

        <div class="col-md-9 col-sm-6 text-center">
          <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="text-box white">
              <div class="text-box-inner min-height-1">
                <h4 class="less-mar1" style="color:#b91900">Mineworkers Provident Fund</h4>
               <h3 class="less-mar1" style="color:#b91900">MWPF</h3><br/>
                <br/>
				<!--<div class="image-holder" align="center"><img src="{{asset('rac_new/images/b-logo.png')}}" alt="" class="img-responsive"/></div>-->
            
 
              </div>
               <ul class="social-icons-2">
				  <li><a href="https://www.facebook.com/Mineworkers-Provident-Fund-286779041799206/" target="_blank"><i class="fa fa-facebook"></i></a></li>
				  <li class="last"><a href="https://twitter.com/Mineworkerspf/" target="_blank"><i class="fa fa-twitter"></i></a></li>
				  <li class="last"><a href="https://www.linkedin.com/in/mineworkers-provident-fund-68386414a/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				  <li class="last"><a href="https://www.youtube.com/watch?v=zeZ5zw3T_z8/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>				  			  
				</ul>
				<br/><br/><br/> 		
            </div>
         
		 </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
			  
				  <div class="feature-box-90 active"><br>
						<div class="icon-plain-small left"> <span class="fa fa-map-marker"></span></div>
						<div class="text-left white less-padding-1">
						<h4 class="title ">Contact <b> MWPF </b></h4>
						  <div class="divider-line solid light margin"></div>
						  <h6 class="title" align="center">Use the following details to contact us </h6>
						</div>				  		  					
					<div class="clearfix"></div>     
						
						<div class="title">3rd & 4th Floor<br>
						26 Ameshoff Street<br>
						Braamfontein, 2001<br>
						Johannesburg<br>
						South Africa<br>
						Tel: +27 (0)10 100-3001 </div>
						<br/>
					<a href="#" class=" btn btn-border btn btn-white less-top-bottom-padding btn-xround btn-2" data-toggle="modal" data-target="#modalContact"><i class="fa fa-envelope-o"></i> &nbsp; Contact<b> us   </b></a></li>
					<br><br>
				  </div>   			  
			<!--end item-->		  		 
          </div>
        </div>
        <!--end item-->
      

  
	       
      </div>
    </div>
  </section>
  <section>
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
<!-- end section --> 
@endsection

@section('js')
@include('layouts.rac_new.page_js.meetingjs')
@endsection