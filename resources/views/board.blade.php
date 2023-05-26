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



<!-- Sliding box ends -->



<!-- Main content starts -->




        @include('layouts.leftnav')


        <br>

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
    <div class="mainbar">

        <div class="matter">
            <div class="container-fluid">

                <!-- Title starts -->
                <div class="page-title">
                    <h2>BOARD OF TRUSTEES<span>Independent Board of Trustees</span></h2>
                </div>
                <!-- Title ends -->

                <!-- Content starts -->

                <!-- Content starts -->

                <div class="box-body aboutus">
                    <div class="row-fluid">
                        <div class="span4">
                            <!-- Staff #1 -->
                            <div class="staff">
                                <!-- Picture -->

                                <!-- Details -->
                                <div class="details">
                                    <!-- Name and designation -->
                                    <div class="desig pull-left">
                                        <h6 class="name" style="color:red"></h6>
                                        <em> </em>
                                    </div>
                                    <div class="clearfix"></div>
                                    <!-- Description -->
                                    <br>
                                    <!-- Para -->
                                    <h6 align="justify" style="color:black">The Board of Trustees is responsible for the governance of the Fund, serves to oversee and shape the overall fund policies. <br> <br> Together, the Chairperson and the Trustees are responsible for the implementation of The Fund policies. </h6> <br>

                                    <br>
                                    <!-- Read more -->
                                    <a href="{{url('/trustee')}}" class="btn btn-danger">More on Trustees...</a>
                                </div>
                            </div>
                        </div>


                        <div class="span4">
                            <!-- Staff #4 -->
                            <div class="staff">
                                <div class="pic">
                                    <img src="trustees/ThomasK.jpg" alt="" />
                                </div>
                                <div class="details">
                                    <div class="desig pull-left">
                                        <h6 class="name"style="color:red">Thomas Kgokolo</h6>
                                        <em>Chairperson of the Board</em>
                                    </div>
                                    <div class="clearfix"></div>
                                    <!-- Description -->
                                    <br>
                                    <!-- Para -->
                                    <h6 align="justify" style="color:black"> </h6>

                                </div>
                            </div>
                        </div>




                        <div class="span4">

                            <!-- Sidebar 1 -->
                            <div class="blog-sidebar">
                                <div class="widget">
                                    <h4>MEETING THE OBJECTIVE</h4>
                                    <p align="justify">Since becoming a self-administered fund, MWPF is proven to be more efficient and remains firm in its commitment to member centricity. Over and above the statutory audit, the Fund had commissioned an independent triennial review in order to check alignment to its stated objective of embarking on the self-journey.</p>
                                </div>
                                <br>

                                <!-- Read more -->
                                <a href="{{url('/trustee')}}" class="btn btn-danger" style="margin-left:25%"><strong>MORE TRUSTEES...</strong></a>
                                <br>
                                <br>
                                <div class="widget">
                                    <h4>Contact us</h4>
                                    <h6>MWPF Head Office</h6>
                                    <p>Tel: +27 (0)10 100-3001<br>
                                        Fax: +27 (0)86 661 9532<br>
                                        clientservices@mineworkers.co.za<br>
                                        <br>
                                        3rd and 4th Floor<br>

                                        26 Ameshoff Street<br>
                                        Braamfontein, 2001<br>
                                        Johannesburg<br>

                                        South Africa</p>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>

                <!-- Content ends -->

            </div>
        </div>


    </div>

</div>
<!-- Mainbar ends -->
<div class="clearfix"></div>



</div>
@include('layouts.footer')