@extends('layouts.rac_new.layout')

@section('css')

@include('layouts.rac_new.page_css.gallerycss')

@endsection

@section('content')
      
  <section>
    <div class="header-inner  ">
      <div class="inner text-center"><br><br><br>
        <h3 class="section-title-3 text-white uppercase" style=" color:#b91900; text-shadow: 2px 2px 4px #fff;font-weight:600">Gallery</h3>
        <h4 class="title-4 uppercase" style="color:#b91900">in-touch with members </h4>
      </div>
      <div class="overlay bg-opacity-1"></div>
      <img src="{{asset('rac_new/images/title-back.jpg')}}" alt="" class="img-responsive"/> </div>
  </section>
  <!-- end header inner -->
  <div class="clearfix"></div>
  
<section class="sec-padding">
    
    <div class="demo-masonry">
      <div class="cbp-panel">
        <div id="grid-container" class="cbp">
          <div class="cbp-item identity"> <a class="cbp-caption cbp-lightbox" data-title="Gold Standard <br>" 
					href="{{asset('rac_new/images/photos/a.jpg')}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('rac_new/images/photos/1.jpg')}}" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Gold Standard </div>
                  <div class="cbp-l-caption-desc"></div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item web-design"> <a class="cbp-caption cbp-lightbox" data-title="Gold Standard  <br>"
                  href="{{asset('rac_new/images/photos/b.jpg')}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('rac_new/images/photos/2.jpg')}}" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Gold Standard  </div>
                  <div class="cbp-l-caption-desc"></div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item graphic identity"> <a class="cbp-caption cbp-lightbox" data-title="Road Show <br>"
                  href="{{asset('rac_new/images/photos/c.jpg')}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('rac_new/images/photos/3.jpg')}}" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Road Show </div>
                  <div class="cbp-l-caption-desc"></div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item graphic"> <a class="cbp-caption cbp-lightbox" data-title="Golf day <br>"
                  href="{{asset('rac_new/images/photos/d.jpg')}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('rac_new/images/photos/4.jpg')}}" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Golf day</div>
                  <div class="cbp-l-caption-desc"></div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item identity"> <a class="cbp-caption cbp-lightbox" data-title="Gold Standard<br>"
                 href="{{asset('rac_new/images/photos/e.jpg')}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('rac_new/images/photos/5.jpg')}}" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Gold Standard</div>
                  <div class="cbp-l-caption-desc"></div>
                </div>
              </div>
            </div>
            </a> </div> <div class="cbp-item graphic"> <a class="cbp-caption cbp-lightbox" data-title="Gold Standard<br>" 
					href="{{asset('rac_new/images/photos/f.jpg')}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('rac_new/images/photos/6.jpg')}}" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Gold Standard</div>
                  <div class="cbp-l-caption-desc"></div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item web-design"> <a class="cbp-caption cbp-lightbox" data-title="Road Show<br>" 
				href="{{asset('rac_new/images/photos/g.jpg')}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('rac_new/images/photos/7.jpg')}}" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Road Show</div>
                  <div class="cbp-l-caption-desc"></div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item identity"> <a class="cbp-caption cbp-lightbox" data-title="Road Show<br>" 
					href="{{asset('rac_new/images/photos/h.jpg')}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('rac_new/images/photos/8.jpg')}}" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Road Show</div>
                  <div class="cbp-l-caption-desc"></div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item identity"> <a class="cbp-caption cbp-lightbox" data-title="Gold Standard<br>" 
				href="{{asset('rac_new/images/photos/i.jpg')}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('rac_new/images/photos/9.jpg')}}" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Gold Standard </div>
                  <div class="cbp-l-caption-desc"></div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item web-design graphic"> <a class="cbp-caption cbp-lightbox" data-title="Golf day <br>"
                  href="{{asset('rac_new/images/photos/j.jpg')}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('rac_new/images/photos/10.jpg')}}" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Golf day </div>
                  <div class="cbp-l-caption-desc"></div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item web-design graphic"> <a class="cbp-caption cbp-lightbox" data-title="Road Show<br>"
                  href="{{asset('rac_new/images/photos/k.jpg')}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('rac_new/images/photos/11.jpg')}}" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Road Show</div>
                  <div class="cbp-l-caption-desc"></div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item web-design graphic"> <a class="cbp-caption cbp-lightbox" data-title="Road Show <br>"
					href="{{asset('rac_new/images/photos/l.jpg')}}">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('rac_new/images/photos/12.jpg')}}" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Road Show </div>
                  <div class="cbp-l-caption-desc"></div>
                </div>
              </div>
            </div>
            </a> </div>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
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
<!-- end section --> 

@endsection

@section('js')

@include('layouts.rac_new.page_js.galleryjs')

@endsection