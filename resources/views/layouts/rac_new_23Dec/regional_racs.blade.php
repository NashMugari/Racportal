 @extends('layouts.rac_new.layout')


@section('css')

    @include('layouts.rac_new.page_css.regionalcss')
@endsection

@section('content')

     
  <section>
    <div class="header-inner  ">
      <div class="inner text-center"><br><br><br>
        <h3 class="section-title-3 text-white uppercase" style=" color:#b91900; text-shadow: 2px 2px 4px #fff;font-weight:600">MWPF RACS </h3>
        <h4 class="title-4 uppercase" style="color:#b91900">Regional Advisory Committees</h4>
      </div>
      <div class="overlay bg-opacity-1"></div>
      <img src="{{asset('rac_new/images/title-back.jpg')}}" alt="" class="img-responsive"/> </div>
  </section>
  <!-- end header inner -->
  <div class="clearfix"></div>
  
  
  <section class="sec-padding ">
    <div class="container">
      <div class="dotted-map">
        <div class="row">
		
          <div class="col-md-4 col-sm-6">
            <div class="feature-box61 bmargin">
              <div class="image-holder">
                <div class="overlay bg-opacity-4">
                  <div class="text">
                    <h3 class="text-white oswald" align="right">Respect</h3><br>
                              
				  </div>
                </div>
                <img src="{{asset('rac_new/images/p6.jpg')}}" alt="" class="img-responsive"/> </div>
            </div>
          </div>
          <!--end item -->
          
          <div class="col-md-4 col-sm-6">
            <div class="feature-box61 bmargin">
              <div class="image-holder">
                <div class="overlay bg-opacity-4">
                  <div class="text" >
                    <h3 class="text-white oswald" align="right">Dignity</h3><br>
                               
				  </div>
                </div>
                <img src="{{asset('rac_new/images/p4.jpg')}}" alt="" class="img-responsive"/> </div>
            </div>
          </div>
          <!--end item -->
          
          <div class="col-md-4 col-sm-6">
            <div class="feature-box61 bmargin">
              <div class="image-holder">
                <div class="overlay bg-opacity-4">
                  <div class="text">
                    <h3 class="text-white oswald" align="right">Legacy</h3><br>
                               
				  </div>
                </div>
                <img src="{{asset('rac_new/images/p5.jpg')}}" alt="" class="img-responsive"/> </div>
            </div>
          </div>
          <!--end item -->
          <div class="clearfix"></div>
          <br/>
        

        </div>
      </div>
    </div>
  </section>
  <!--end item -->
  <div class="clearfix"></div>  

  <section class="sec-padding section-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="tabs1">
          <li><a href="#example-1-tab-1" target="_self">MWPF RACs</a></li>
          <li><a href="#example-1-tab-2" target="_self">Geo Representation</a></li>

        </ul>
        <div class="tabs-content1">
          <div id="example-1-tab-1" class="tabs-panel1">
            <div class="col-md-6"><img src="{{asset('rac_new/images/p4.jpg')}}" alt="" class="img-responsive" /></div>
            <div class="col-md-3 padding-left-2"><br>
              <h2 class=" oswald text-dark">Representativity</h2>
			   <div class="title-line-4 orange-3 less-margin align-center"></div><br>
			   <p align="justify"> There are nine (9) RACs across South Africa:</p>           
              <ul class="iconlist orange">
                <li><i class="fa fa-check"></i> Free State </li>
                <li><i class="fa fa-check"></i> Matlosane, </li>
                <li><i class="fa fa-check"></i> Carltonville</li>
				<li><i class="fa fa-check"></i> Westonaria </li>
              </ul>
              <div class="bottom-margin5"></div>
             
          </div>
          <!-- end tab 1 -->
		  
            <div class="col-md-3 padding-left-2">   
              <ul class="iconlist orange"><br><br><br><br><br>
              
                <li><i class="fa fa-check"></i> Emalalheni </li>
                <li><i class="fa fa-check"></i> Kwazulu-Natal</li>				
                <li><i class="fa fa-check"></i> Secunda </li>
                <li><i class="fa fa-check"></i> Rustenburg </li>
                <li><i class="fa fa-check"></i> Phalaborwa </li>
              </ul>
              <div class="bottom-margin5"></div>
             
          </div>
          <!-- end tab 1 -->		  
          
          <div id="example-1-tab-2" class="tabs-panel1">
			<div id="map" style="height: 500px; width: 100%; position: relative; overflow: hidden;">
			<div id="infowindow-content">
			  <img src="" width="12" height="12" id="place-icon">
			  <span id="place-name"  class="title"></span><br>
			  <span id="place-address"></span>
			</div>	
          </div>
          <!-- end tab 2 -->
          
        </div>
        <!-- end all tabs --> 
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<div class="clearfix"></div> 
  
  <section class="sec-padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li><a href="#rac1" target="_self">Free State RAC</a></li>
			<li><a href="#rac2" target="_self">Matlosane RAC</a></li>		
            <li><a href="#rac3" target="_self">Carletonville RAC</a></li>
			<li><a href="#rac4" target="_self">Westonaria RAC</a></li>
            <li><a href="#rac5" target="_self">Emalahleni RAC</a></li>
			<li><a href="#rac6" target="_self">Kwazulu-Natal RAC</a></li>
            <li><a href="#rac7" target="_self">Secunda RAC</a></li>
			<li><a href="#rac8" target="_self">Rustenburg RAC</a></li>
            <li><a href="#rac9" target="_self">Phalaborwa RAC</a></li>	
			
		
          </ul>
          <div class="tabs-content">  
		  
            <div id="rac1" class="tabs-panel">
              <div class="col-md-4"><br>
                <h3 class="oswald uppercase text-dark title1 font-weight-6">Free State RAC</h3>
                <br/>
                <div class="title-line-7"></div>			  
                <p align="justify">The Participating Employers in the Free State Region justifies the vastness of the Mineworkers Provident Fund. Company representatives and member representatives make up the Board of Trustees Structure.</p>
                <br/>
                <p align="justify">The Advisory Committee in the Free State Region of South Africa also serves as communication tool towards members on all the new developments within the Fund.</p>
              </div>
              <div class="col-md-8"> <img src="{{asset('rac_new/images/blog1.jpg')}}" alt="" class="img-responsive img-align-left"/> </div>
            </div>
            <!-- end tab 1 -->
			
            <div id="rac2" class="tabs-panel">
              <div class="col-md-4"><br>
                <h3 class="oswald uppercase text-dark title1 font-weight-6">Matlosane RAC</h3>
                <br/>
                <div class="title-line-7"></div>			  
                <p align="justify">The Participating Employers in the Matlosane Region justifies the vastness of the Mineworkers Provident Fund. Company representatives and member representatives make up the Board of Trustees Structure.</p>
                <br/>
                <p align="justify">The Advisory Committee in the Matlosane Region of South Africa also serves as communication tool towards members on all the new developments within the Fund.</p>
              </div>
              <div class="col-md-8"> <img src="{{asset('rac_new/images/blog3.jpg')}}" alt="" class="img-responsive img-align-left"/> </div>
            </div>
            <!-- end tab 2 -->
			
            <div id="rac3" class="tabs-panel">
              <div class="col-md-4"><br>
                <h3 class="oswald uppercase text-dark title1 font-weight-6">Carletonville RAC</h3>
                <br/>
                <div class="title-line-7"></div>			  
                <p align="justify">The Participating Employers in the Carltonville Region justifies the vastness of the Mineworkers Provident Fund. Company representatives and member representatives make up the Board of Trustees Structure.</p>
                <br/>
                <p align="justify">The Advisory Committee in the Carltonville Region of South Africa also serves as communication tool towards members on all the new developments within the Fund.</p>
              </div>
              <div class="col-md-8"> <img src="{{asset('rac_new/images/blog4.jpg')}}" alt="" class="img-responsive img-align-left"/> </div>
            </div>
            <!-- end tab 3 -->
			
            <div id="rac4" class="tabs-panel">
              <div class="col-md-4"><br>
                <h3 class="oswald uppercase text-dark title1 font-weight-6">Westonaria RAC</h3>
                <br/>
                <div class="title-line-7"></div>			  
                <p align="justify">The Participating Employers in the Westonaria Region justifies the vastness of the Mineworkers Provident Fund. Company representatives and member representatives make up the Board of Trustees Structure.</p>
                <br/>
                <p align="justify">The Advisory Committee in the Westonaria Region of South Africa also serves as communication tool towards members on all the new developments within the Fund.</p>
              </div>
              <div class="col-md-8"> <img src="{{asset('rac_new/images/blog5.jpg')}}" alt="" class="img-responsive img-align-left"/> </div>
            </div>
            <!-- end tab 4 -->

            <div id="rac5" class="tabs-panel">
              <div class="col-md-4"><br>
                <h3 class="oswald uppercase text-dark title1 font-weight-6">Emalahleni RAC</h3>
                <br/>
                <div class="title-line-7"></div>			  
                <p align="justify">The Participating Employers in the Emalalheni Region justifies the vastness of the Mineworkers Provident Fund. Company representatives and member representatives make up the Board of Trustees Structure.</p>
                <br/>
                <p align="justify">The Advisory Committee in the Emalalheni Region of South Africa also serves as communication tool towards members on all the new developments within the Fund.</p>
              </div>
              <div class="col-md-8"> <img src="{{asset('rac_new/images/blog4.jpg')}}" alt="" class="img-responsive img-align-left"/> </div>
            </div>
            <!-- end tab 5 -->

            <div id="rac6" class="tabs-panel">
              <div class="col-md-4"><br>
                <h3 class="oswald uppercase text-dark title1 font-weight-6">Kwazulu-Natal RAC</h3>
                <br/>
                <div class="title-line-7"></div>			  
                <p align="justify">The Participating Employers in the Kwazulu-Natal Region justifies the vastness of the Mineworkers Provident Fund. Company representatives and member representatives make up the Board of Trustees Structure.</p>
                <br/>
                <p align="justify">The Advisory Committee in the Kwazulu-Natal Region of South Africa also serves as communication tool towards members on all the new developments within the Fund.</p>
              </div>
              <div class="col-md-8"> <img src="{{asset('rac_new/images/blog3.jpg')}}" alt="" class="img-responsive img-align-left"/> </div>
            </div>
            <!-- end tab 6 -->

            <div id="rac7" class="tabs-panel">
              <div class="col-md-4"><br>
                <h3 class="oswald uppercase text-dark title1 font-weight-6">Secunda RAC</h3>
                <br/>
                <div class="title-line-7"></div>			  
                <p align="justify">The Participating Employers in the Secunda Region justifies the vastness of the Mineworkers Provident Fund. Company representatives and member representatives make up the Board of Trustees Structure.</p>
                <br/>
                <p align="justify">The Advisory Committee in the Secunda Region of South Africa also serves as communication tool towards members on all the new developments within the Fund.</p>
              </div>
              <div class="col-md-8"> <img src="{{asset('rac_new/images/blog9.jpg')}}" alt="" class="img-responsive img-align-left"/> </div>
            </div>
            <!-- end tab 7 -->

            <div id="rac8" class="tabs-panel">
              <div class="col-md-4"><br>
                <h3 class="oswald uppercase text-dark title1 font-weight-6">Rustenburg RAC</h3>
                <br/>
                <div class="title-line-7"></div>			  
                <p align="justify">The Participating Employers in the Rustenburg Region justifies the vastness of the Mineworkers Provident Fund. Company representatives and member representatives make up the Board of Trustees Structure.</p>
                <br/>
                <p align="justify">The Advisory Committee in the Rustenburg Region of South Africa also serves as communication tool towards members on all the new developments within the Fund.</p>
              </div>
              <div class="col-md-8"> <img src="{{asset('rac_new/images/blog10.jpg')}}" alt="" class="img-responsive img-align-left"/> </div>
            </div>
            <!-- end tab 8 -->

            <div id="rac9" class="tabs-panel">
              <div class="col-md-4"><br>
                <h3 class="oswald uppercase text-dark title1 font-weight-6">Phalaborwa RAC</h3>
                <br/>
                <div class="title-line-7"></div>			  
                <p align="justify">The Participating Employers in the Phalaborwa Region justifies the vastness of the Mineworkers Provident Fund. Company representatives and member representatives make up the Board of Trustees Structure.</p>
                <br/>
                <p align="justify">The Advisory Committee in the Phalaborwa Region of South Africa also serves as communication tool towards members on all the new developments within the Fund.</p>
              </div>
              <div class="col-md-8"> <img src="{{asset('rac_new/images/blog11.jpg')}}" alt="" class="img-responsive img-align-left"/> </div>
            </div>
            <!-- end tab 9 -->
			

            
          </div>
        </div>
        <!--end tab style 2--> 
        
        <br/>
        <br/>
        <br/>
        <br/>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="parallax-section42">
    <div class="section-overlay bg-opacity-7">
      <div class="container sec-tpadding-2 sec-bpadding-2">
        <div class="row slide-controls-color-3 line-style">
          <div class="col-md-6 text-left">
            <div id="owl-demo2" class="owl-carousel">
              <div class="item"> <br/>
                <h1 class="oswald uppercase text-white title1 font-weight-6">Who can Join the Fund?</h1>
                <br/>
                <div class="title-line-7"></div>
                <p class="text-white" align="justify">The Fund is open for membership to all workers in the Mining industry whose employers are participating employers in the MineWorkers Provident Fund. Workers of other members of the Chamber of Mines in South Africa and workers of other employers whose participation in the Fund has been approved by the Trustees, may also join. Joining members must be under the age of 60 for underground employees and 63 for other employees.</p>
                <br/>
				<a class="btn btn-border white" href="https://www.mwpf.co.za/index.html" target="_blank">Find out more</a> 
              </div>
              <!--end slide item-->
              
              <div class="item"> <br/>
                <h1 class="oswald uppercase text-white title1 font-weight-6">HONEST AND DEPENDABLE</h1>
                <br/>
                <div class="title-line-7"></div>
                <p class="text-white"align="justify">According to the audited financial statements as at 31 December 2014, the membership of the Fund was 100 136. The Fund is mostly made up of members from category two to category eight. The bulk of the MineWorkers Provident Fund membership is made up of members belonging to the National Union of Mineworkers. </p>
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
@endsection



@section('js')

    @include('layouts.rac_new.page_js.regionaljs')

@endsection

