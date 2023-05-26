@include('layouts.racfront')

@include('layouts.topnav')

@yield('content')

<!-- Sliding box starts -->

<div class="slide-box">

    <div class="bor"></div>

    <div class="padd">

        <div class="slide-box-button">

            <i class="icon-chevron-left"></i>

        </div>

        <h5 style="color:red ">Welcome to MWPF RACs</h5>

        <p align="justify" style="color:black ">The Regional Advisory Committees, RACs, are support structures to the board. The Mineworkers Provident Fund has a committee in each region where there are members.</p>



        <hr />



        <div class="social">

            <a href="#"><i class="icon-facebook facebook"></i></a>

            <a href="#"><i class="icon-twitter twitter"></i></a>

            <a href="#"><i class="icon-linkedin linkedin"></i></a>

            <a href="#"><i class="icon-google-plus google-plus"></i></a>

            <a href="#"><i class="icon-pinterest pinterest"></i></a>

        </div>



    </div>

</div>


@include('layouts.leftnav')


            <br/>

            <div class="clearfix"></div>

            <br/>
            <!-- Sidebar widget -->

            <div class="s-widget">

                <h6 align="center" style="color: #b90f00"><strong>FULL CALENDAR 2020</strong></h6><br>

                <a href="planner/2020_Final_Year_Planner.pdf" target="_blank"><img src="planner/RAC.jpg" alt="" style="width:100%"/></a>
                <br/>

            </div>

            <!-- Sidebar search -->


            <form class="form-search">

                <div class="input-append">

                    <input type="text" class="input-small search-query">

                    <button type="submit" class="btn btn-danger">Search</button>

                </div>

            </form>

        </div>
    </div>

    <!-- Sidebar ends -->

    <!-- Mainbar starts -->

    <!-- Mainbar starts -->
    <div class="mainbar">

        <div class="matter">
            <div class="container-fluid">

                <!-- Title starts -->
                <div class="page-title">
                    <h2>Contact Us<span>Looking Forward to Serving You Better  </span></h2>
                </div>
                <!-- Title ends -->

                <!-- Content starts -->

                <div class="box-body contactus">

                    <div class="row-fluid">
                        <div class="span12">
                            <!-- Google maps -->
                            <div class="gmap">
                                <!-- Google Maps. Replace the below iframe with your Google Maps embed code -->
                                <iframe height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Mine+Workers+Provident+Fund, Johannesburg+South+Africa&&amp;aq=0&amp;oq=Oakdene&amp;sll=-26.1913740,28.0358940&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Johannesburg,+Braamfontein&amp;t=m&amp;z=7&amp;iwloc=A&amp;output=embed"></iframe>
                            </div>

                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">

                            <div class="well" >

                                <div class="fwidget"><br>

                                    <div class="address">
                                        <address>
                                            <!-- Address -->
                                            <h5 style="color:#e7e5af">M W P F&nbsp; &nbsp;  H E A D&nbsp; &nbsp;  O F F I C E</h5>
                                            <hr />
                                            <h6 style="color: white;">3rd & 4th Floor <em>&nbsp;| &nbsp;</em>26 Ameshoff Street<em>&nbsp; | &nbsp;</em> Braamfontein, 2001<em>&nbsp; | &nbsp;</em>JOHANNESBURG - SOUTH AFRICA</h6>

                                            <h6 ><abbr title="Phone">Tel:</abbr> +27 (0)10 100-3001 &nbsp;| &nbsp; <abbr title="Fax">Fax:</abbr> +27 (0)86 661 9532

                                                &nbsp;| &nbsp; Email: &nbsp;<a href="mailto:clientservices@mineworkers.co.za">clientservices@mineworkers.co.za</a></h6 >

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    <!-- Address section -->


    <!-- Content ends -->




@include('layouts.footer')