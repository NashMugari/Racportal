 {{-- Home --}}
    @if(\Request::is('/'))
        <li><a href="{{url('/')}}" class="dropdown-toggle active">Home </a></li>	
    @else
         <li><a href="{{url('/')}}" class="dropdown-toggle">Home </a></li>	
    @endif

{{-- Board --}}
    @if(\Request::is('board_of_trustees'))
         <li><a href="{{url('board_of_trustees')}}" class="dropdown-toggle active">Board of Trustees </a></li>	
    @else
         <li><a href="{{url('board_of_trustees')}}" class="dropdown-toggle">Board of Trustees</a></li>	
    @endif

 {{-- Regional --}}
    @if(\Request::is('regional_racs'))
         <li><a href="{{url('regional_racs')}}" class="dropdown-toggle active">Regional RACs </a>
    @else
         <li><a href="{{url('regional_racs')}}" class="dropdown-toggle">Regional RACs</a>
    @endif
    <ul class="dropdown-menu" role="menu">		  
                
        <li> <a href="racs.html#rac1">Free State RAC</a> </li>
        <li> <a href="racs.html#rac2">Matlosansdsae RAC</a> </li>

        <li> <a href="racs.html#rac2">Matlosansdsae RAC</a> </li>

        <li> <a href="racs.html#rac2">Matlosane RAC</a> </li>
        <li> <a href="racs.html#rac3">Carletonville RAC</a> </li>
        <li> <a href="racs.html#rac4">Westonaria RAC</a> </li>
        <li> <a href="racs.html#rac5">Emalahleni RAC</a> </li>
        <li> <a href="racs.html#rac6">Kwazulu-Natal RAC</a> </li>
        <li> <a href="racs.html#rac7">Secunda RAC</a> </li>
        <li> <a href="racs.html#rac8">Rustenburg RAC</a> </li>
        <li> <a href="racs.html#rac9">Phalaborwa RAC</a> </li>	
    </ul>
        </li>	
            
{{-- Board --}}
    @if(\Request::is('meetings_and_events'))
         <li><a href="{{url('meetings_and_events')}}" class="dropdown-toggle active">Meetings & Events</a></li>	
    @else
         <li><a href="{{url('meetings_and_events')}}" class="dropdown-toggle">Meetings & Events</a></li>	
    @endif       
				
{{-- Gallary --}}
    @if(\Request::is('gallery_rac'))
         <li><a href="{{url('gallery_rac')}}" class="dropdown-toggle active">Gallery</a></li>	
    @else
         <li><a href="{{url('gallery_rac')}}" class="dropdown-toggle">Gallery</a></li>	
    @endif              