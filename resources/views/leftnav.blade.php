<!-- Main content starts -->

<div class="content">

    <!-- Sidebar starts -->
    <div class="sidebar">

        <!-- Logo -->
        <div class="logo"><br>
            <a href="index.html"><img src="img/b-logo.png" style="margin-left:3%" alt=""></a>
        </div>

        <br>


        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->

        <!-- Colors: Add the class "br-red" or "br-blue" or "br-gray" or "br-orange" or "br-purple" or "br-yellow" to anchor tags to create colorful left border -->
        <div class="s-content">


<ul id="nav">

    <!-- Main menu with font awesome icon -->

    <li><a href="{{url('/')}}" class="open br-red"><i class="icon-home"></i> Home</a>

        <!-- Sub menu markup

        <ul>

          <li>Submenu #1</a></li>

          <li>Submenu #2</a></li>

          <li>Submenu #3</a></li>

        </ul>-->

    </li>



    <li><a href="{{url('/board')}}" class="br-orange"><i class="icon-list-alt"></i> Board of Trustees </a></li>




    <li class="has_sub"><a href="aboutus.html" class="br-orange"><i class="icon-user"></i> Regional RACs <span class="pull-right"><i class="icon-chevron-right"></i></span></a>

        <ul>

            <li><a href="{{url('freestate')}}"> Free State</a></li>

            <li><a href="{{url('/matlosane')}}"> Matlosane</a></li>

            <li><a href="{{url('/carltonville')}}"> Carltonville</a></li>

            <li><a href="{{url('/westonaria')}}"> Westonaria</a></li>

            <li><a href="{{url('/emalalheni')}}"> Emalalheni</a></li>

            <li><a href="{{url('/kwazulu')}}"> Kwazulu-Natal</a></li>

            <li><a href="{{url('/secunda')}}"> Secunda</a></li>

            <li><a href="{{url('/rustenburg')}}"> Rustenburg</a></li>

            <li><a href="{{url('/phalaborwa')}}"> Phalaborwa</a></li>
            <li><a href="{{url('/login')}}"> Login</a></li>
        </ul>



    <li class="has_sub"><a href="#" class="br-orange"><i class="icon-comments"></i> Meetings & Events  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>

        <ul>

            <li><a href="{{url('/upcoming')}}">Upcoming Meetings</a></li>







        </ul>

    </li>



    <li><a href="{{url('/contactus')}}" class="br-red"><i class="icon-envelope-alt"></i> Contact Us</a></li>

</ul>
