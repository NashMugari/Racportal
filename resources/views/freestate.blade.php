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
    <div class="mainbar">

        <div class="matter">
            <div class="container-fluid">

                <!-- Title starts -->
                <div class="page-title">
                    <h2>FREE STATE<span>Regional Advisory Committee</span></h2>
                </div>
                <!-- Title ends -->

                <!-- Content starts -->

                <div class="box-body blog">
                    <div class="row-fluid">

                        <div class="span5">
                            <div class="posts">

                                <!-- Each posts should be enclosed inside "entry" class" -->
                                <!-- Post one -->
                                <div class="entry">

                                    <!-- Thumbnail -->
                                    <div class="bthumb">
                                        <a href="#"><img src="img/blog5.jpg" alt="" /></a>
                                    </div>

                                    <!-- Para -->
                                    <h6 align="justify" style="color:black">The Participating Employers in the Free State Region justifies the vastness of the Mineworkers Provident Fund. Company representatives and member representatives make up the Board of Trustees Structure.
                                        <br><br>
                                        The Advisory Committee in the Free State Region of South Africa also serves as communication tool towards members on all the new developments within the Fund.</h6>

                                    <!-- Read more -->

                                </div>

                                <!-- Pagination -->

                            </div>
                        </div>

                        <div class="span4">

                            <!-- Sidebar 2 -->

                            <div class="blog-sidebar">
                                <!-- Widget -->
                                <div class="widget">
                                    <h4>Search</h4>
                                    <form method="get" id="searchform" action="#" class="form-search">
                                        <input type="text" value="" name="s" id="s" class="input-medium"/>
                                        <button type="submit" class="btn">Search</button>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h4 style="color:#e7e5af">2020 RAC MEETINGS</h4>
                                    <ul>

                                        <li>21 February 2020</li>

                                        <li>29 May 2020</li>

                                        <li>31 July 2020</li>

                                    </ul>
                                </div>
                                <div class="widget">
                                    <h4>About Free State Mining Region</h4>
                                    <p align="justify">The Advisory Committee in the Free State Region of South Africa also serves as communication tool towards members on all the new developments within the Fund. <a href="#">Free State  Region</a> </p>
                                </div>
                            </div>
                        </div>



                        <div class="span3">

                            <!-- Sidebar 1 -->
                            <div class="blog-sidebar">
                                <div class="widget">
                                    <h4><br>For More Info on Regional Advisory Committees, use the following contact details: </h4>

                                    <h6>Head Office</h6>

                                    <p>Tel: +27 (0)10 100-3001<br>

                                        Fax: +27 (0)86 661 9532<br><br>

                                    <h6>Send us an Email</h6>

                                    clientservices@mineworkers.co.za



                                </div>

                                <div class="widget">



                                    <h6>Address</h6>

                                    26 Ameshoff Street<br>

                                    3rd and 4th Floor<br>

                                    Braamfontein, 2001<br>

                                    Johannesburg</p>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Content ends -->

            </div>
        </div>


    </div>
    <!-- Mainbar ends -->
<!-- Mainbar ends -->
<div class="clearfix"></div>



</div>
@include('layouts.footer')