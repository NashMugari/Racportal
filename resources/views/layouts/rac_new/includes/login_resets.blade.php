  
 <section class="section ">
<div class="container">	
<!-- Modal: Registration -->
<div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="Login"
  aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body" >
	  <div class="container"style="background-color: #fff;"> 
	  <a href="{{url('/')}}" class="logo  toppadd" align="left"><img class=" w-100 " src="{{asset('rac_new/images/b-logo.png')}}" alt="MWPF"> </a><br>
			<div class="icon-plain-small right " style="color:#393e45"> <span class="fa fa-user"></span></div>
			<div class="text-right less-padding-1">
			<h5 class="title " style="color:##393e45">RAC  <b>  Login</b></h5>
			</div>		  
		<div class="smart-forms  bmargin-2">			
            <form method="POST" action="{{ route('login') }}" id="form_id">	
                @csrf		
       <div>			
				<br>
				<div class="spacer-b20">
					<div class="tagline"><span>PLEASE ENTER YOUR USERNAME & PASSWORD  </span></div><!-- .tagline -->
				</div> 
		
		<div class="row" style="background-color: #c3c6c7">
          
		  
          <div class="col-lg-12" >
		  <br/>
		  <br/>

                    <div class="section">
                        <label class="field prepend-icon">
                            <input type="email" name="email" id="email" value="{{ old('email') }}" id="email" class="gui-input" placeholder="Enter email address" required autofocus>
                            <span class="field-icon"><i class="fa fa-user"></i></span>  
                        </label>
                        <small id="error1" class="form-text text-muted"></small>
                       
                    </div><!-- end section -->                    
                    
                	<div class="section">
                    	<label class="field prepend-icon">
                        	<input type="password" name="password" id="password" required id="password" class="gui-input" placeholder="Enter password">
                            <span class="field-icon"><i class="fa fa-lock"></i></span>  
                        </label>
                        <small id="error2" class="form-text text-muted"></small>
                         
                    </div><!-- end section -->  
                    
                	<div class="section">
                        <label class="switch block">
                            <input type="checkbox" name="remember" id="remember" checked>
                            <span class="switch-label" for="remember" data-on="YES" data-off="NO"></span> 
                            <span> Keep me logged in ?</span>
                        </label>
                    </div><!-- end section -->                                                           
                    

                
                       <div class="section">
                             {{--<div class="g-recaptcha" id="g-recaptcha" data-sitekey="6LcS1MUZAAAAANDBh02ksvm8dw9ofBJbF25OZZu7"></div>--}}
                            {{--<div class="g-recaptcha-contact" data-sitekey="6LcS1MUZAAAAANDBh02ksvm8dw9ofBJbF25OZZu7" id="RecaptchaField2"></div>--}}
                            {{--<input type="hidden" class="hiddenRecaptcha" name="ct_hiddenRecaptcha" id="ct_hiddenRecaptcha">--}}
                            {{--<small id="error3" class="form-text text-muted"></small>--}}

                        </div>

				<br/>
                <div class="result"></div>
                <!-- end .result  section -->                   

                <div class="form-footer pull-right" >
				                
				<button type="reset" class="button btn "> Cancel </button>
				<button type="button" onclick="login_form()" data-btntext-sending="Sending..." class="button btn-primary orange-4 ">Login</button>
				 </div>	
				 
				 <label class="option">
                      
                                {{-- <a class="smart-link pull-left" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> 
                                	<label> --}} <a href="#" data-toggle="modal" data-target="#modalreset" data-dismiss="modal" class="smart-link pull-left"> <i class="icon-key"></i> Forgot password? </a>
                            
                     {{-- <a href="#" class="smart-link pull-left">Forgot password?  </a>   --}}
                    </label> <br><br>

				<br><br>	
              </div>			
                <!-- end .form-body section -->								
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
</section><!-- end section -->

<section class="section ">
<div class="container">	
<!-- Modal: Registration -->
<div class="modal fade" id="modalreset" tabindex="-1" role="dialog" aria-labelledby="reset" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body" >
	  <div class="container"style="background-color: #fff;"> 
	  <a href="index.html" class="logo  toppadd" align="left"><img class=" w-100 " src="{{asset('rac_new/images/b-logo.png')}}" alt="MWPF"> </a><br>
			<div class="icon-plain-small right " style="color:#393e45"> <span class="icon-key"></span></div>
			<div class="text-right less-padding-1">
			<h5 class="title " style="color:##393e45">Reset  <b>  Password</b></h5>
			</div>		  
		<div class="smart-forms  bmargin-2">

      <form method="POST" action="{{ route('password.email') }}" id="account">
        @csrf
         	 {{-- <input type="hidden" name="token" value="{{ $token }}">		 --}}
       <div>			
				<br>
				<div class="spacer-b20">
					<div class="tagline"><span>PLEASE ENTER YOUR EMAIL ADDRESS BELOW  </span></div><!-- .tagline -->
				</div> 
		
		<div class="row" style="background-color: #c3c6c7">
          
		  
          <div class="col-lg-12" >
		  <br/>
		  <br/>

                  <div class="section">
                    <label class="field prepend-icon">
                      <input type="email" name="email"  required autofocus id="email" class="gui-input" placeholder="Email Address">
                      <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                  </div>
                  <!-- end section -->    
                  
                     
          

				<br/>
                <div class="result"></div>
                <!-- end .result  section -->                   

                <div class="form-footer pull-right" >
				                
				<button type="submit" data-btntext-sending="Sending..." class="button btn-primary orange-4 ">Request Reset Password</button>
				 </div>	
				 
				 <label class="option"><a href="#" data-toggle="modal" data-target="#modallogin" data-dismiss="modal" class="smart-link pull-left"><i class="fa fa-user"></i> Return to Login  </a>  </label> <br><br>

				<br><br>	
              </div>			
                <!-- end .form-body section -->								
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
</section><!-- end section -->  

