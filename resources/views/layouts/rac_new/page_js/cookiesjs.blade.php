<!-- ============ JS FILES ============ -->
 
<script type="text/javascript" src="{{asset('rac_new/js/universal/jquery.js')}}"></script> 
<script src="{{asset('rac_new/js/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('rac_new/js/masterslider/jquery.easing.min.js')}}"></script> 
<script src="{{asset('rac_new/js/masterslider/masterslider.min.js')}}"></script> 
<script type="text/javascript">
(function($) {
 "use strict";
	var slider = new MasterSlider();
	// adds Arrows navigation control to the slider.
	slider.control('arrows');
	slider.control('bullets');
	
	slider.setup('masterslider' , {
		 width:1600,    // slider standard width
		 height:800,   // slider standard height
		 space:0,
		 speed:45,
		 layout:'fullwidth',
		 loop:true,
		 preload:0,
		 autoplay:true,
		 view:"parallaxMask"
	});

})(jQuery);
</script> 
<script>
$(function(){
   // Add click-event listener
   $("#header11 .navbar-nav li a").on("click",function(){
      // Remove the current class from all a tags
      $("#header11 .navbar-nav li a").removeClass("current");
      // Add the current class to the clicked a
      $(this).addClass("current");
   });
   
});

</script>	

<style>

#map  {
    width:100%;
    height:320px;
  }

  .pac-card {
    margin: 10px 10px 0 0;
    border-radius: 2px 0 0 2px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.7);
    background-color: #fff;
    font-family: Roboto;
  }

  #pac-container {
    padding-bottom: 0px;
    margin-right: 2px;
	
  }

  .pac-controls {
    display: inline;
    padding: 5px 11px;
  }

  .pac-controls label {
    font-family: Roboto;
    font-size: 15px;
    font-weight: 400;
  }

  #pac-input {
    background-color: #fff;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 400; 
	margin-right: 0px;
    padding: 5px 5px;
    text-overflow: ellipsis;
    width:100%;
    border: #e0e0e0 1px solid;
  }

  #pac-input:focus {
    outline: none;
  }

  #label {
    color: #fff;
    background-color: #ffffff;
    font-size: 20px;
    font-weight: 500;
    padding: 6px 6px;
	
	
  }
  div#pac-card.pac-card{
    z-index: 0;
    position: relative;
	background-color: rgba(255,255,255,0.5);
    left: 0px;
    top: 10px;
  }
  
  #location-error {
    display: inline-block;
    padding: 6px;
    background: #e4a7a7;
    border: #d49c9c 1px solid;
    font-size: 1.3em;
    color: #333;
    display:none;
    margin: 12px;
  }
			
    </style>
	

	

    <script>
    function initMap() {
    	var centerCoordinates = new google.maps.LatLng(-28.8344912,22.3998209);
        var map = new google.maps.Map(document.getElementById('map'), {
        center: centerCoordinates,
        zoom: 4
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var infowindowContent = document.getElementById('infowindow-content');
        
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);
        var infowindow = new google.maps.InfoWindow();
        infowindow.setContent(infowindowContent);
        
        var marker = new google.maps.Marker({
          map: map
        });

        autocomplete.addListener('place_changed', function() {
 	        document.getElementById("location-error").style.display = 'none';
            infowindow.close();
            marker.setVisible(false);
        		var place = autocomplete.getPlace();
        		if (!place.geometry) {
        		  	document.getElementById("location-error").style.display = 'inline-block';
        		  	document.getElementById("location-error").innerHTML = "Cannot Locate '" + input.value + "' on map";
        		    return;
        		}
        		
        		map.fitBounds(place.geometry.viewport);
        		marker.setPosition(place.geometry.location);
        		marker.setVisible(true);
        		    
        		infowindowContent.children['place-icon'].src = place.icon;
        		infowindowContent.children['place-name'].textContent = place.name;
        		infowindowContent.children['place-address'].textContent = input.value;
        		infowindow.open(map, marker);
        });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAX9XsJQba0oaPMV4gi43X4avW_Acfdue8&libraries=places&callback=initMap"
        async defer></script>
 
<script src="{{asset('rac_new/js/mainmenu/customeUI.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/cubeportfolio/jquery.cubeportfolio.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/cubeportfolio/main.js')}}"></script> 
<script src="{{asset('rac_new/js/owl-carousel/owl.carousel.js')}}"></script> 
<script src="{{asset('rac_new/js/owl-carousel/custom.js')}}"></script> 
<script src="{{asset('rac_new/js/tabs/assets/js/responsive-tabs.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('rac_new/js/scrolltotop/totop.js')}}"></script> 
<script src="{{asset('rac_new/js/mainmenu/jquery.sticky.js')}}"></script> 
<script src="{{asset('rac_new/js/pagescroll/animatescroll.js')}}"></script> 
 
<script type="text/javascript" src="{{asset('rac_new/js/smart-forms/jquery.form.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/smart-forms/jquery.validate.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/smart-forms/additional-methods.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/smart-forms/smart-form.js')}}"></script> 
<script src="{{asset('rac_new/js/scripts/functions.js')}}" type="text/javascript"></script>

<script type="text/javascript" src="{{asset('rac_new/js/cubeportfolio/jquery.cubeportfolio.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/cubeportfolio/main.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/cubeportfolio/main4.js')}}"></script> 
