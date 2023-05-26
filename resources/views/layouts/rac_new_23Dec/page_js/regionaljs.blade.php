<script type='text/javascript' src='https://maps.google.com/maps/api/js?language=en&key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&region=GB'></script>
  <script type="text/javascript" src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script defer>
	function initialize() {
		var mapOptions = {
			zoom: 3,
			// minZoom: 5,
			// maxZoom: 17,
			zoomControl:true,
			zoomControlOptions: {
  				style:google.maps.ZoomControlStyle.DEFAULT
			},
			center: new google.maps.LatLng({{-25.7479}}, {{28.2293}}),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: true,
			panControl:false,
			mapTypeControl:true,
			scaleControl:true,
			overviewMapControl:false,
			rotateControl:true
	  	}
		var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var image = new google.maps.MarkerImage("{{url('assets/images/pin.png')}}", null, null, null, new google.maps.Size(40,52));
        var image2 = new google.maps.MarkerImage("{{url('assets/images/pin3.png')}}", null, null, null, new google.maps.Size(52,52));
        var places = @json($meetings);

      

        
      
       var markers = [];
       var count = 0;
       for(var i = 0; i < places.length; ++i)
       {
        count++;
       }
       var counter = 0;
        for(place in places)
        {
            place = places[place];
           
            if(place.lat && place.lng)
            {

                if(markers.length > 0)
                {
                    for(i = 0; i < markers.length; i++)
                    {
                         if(markers[i].position.lat() == place.lat)
                         {
                          
                           place.lat = parseInt(place.lat) + (Math.random() -.5) / 1500;
                           
                         }
                    }
              
                 }
                
               
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.lat, place.lng),
                    icon:image2,
                    map: map,
                    title: place.name
                });
                
                var infowindow = new google.maps.InfoWindow();
                
                google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                        infowindow.setContent(generateContent(place))
                        infowindow.open(map, marker);
                    }
                })(marker, place));


                 markers.push(marker)

       
               
            }
            
            marker.setMap(map);
            counter = counter + 1;
        }
        
         
    var markerCluster = new MarkerClusterer(map, markers,{

  imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m',
  zoomOnClick: true
});


const styles = markerCluster.getStyles();
for (let i=0; i<styles.length; i++) {
  styles[i].textColor = "black";
  styles[i].textSize = 18;
}

        
	}
	google.maps.event.addDomListener(window, 'load', initialize);

    function generateContent(place)
    {
        if(place.thumbnail == "")
        {
        place.thumbnail = '/assets/images/profile-icon.png';
        }
        
        
        var content = `
            <div class="gd-bubble" style="width: 182px;">
                <div class="gd-bubble-inside">
                    <div class="geodir-bubble_desc">
                    <div class="geodir-bubble_image">
                       
                    </div>
                    </div>
                </div>
                <div class="geodir-bubble-meta-side">
                    <div class="geodir-output-location">
                    <div class="geodir-output-location geodir-output-location-mapbubble">
                     
                           
                             <i class="fa fa-minus" aria-hidden="true"></i>
                          <span id="marker_results">`+place.name+`</span></div>
                         
                        
                      
                            
                             
                            
                            
                      
                         
                              
                        
                    </div>
                    </div>
                </div>
            </div>
            </div>
            </div>`;

    return content;

    }
    </script>

<script type="text/javascript" src="{{asset('rac_new/js/universal/jquery.js')}}"></script> 
<script src="{{asset('rac_new/js/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('rac_new/js/mainmenu/customeUI.js')}}"></script> 
<script src="{{asset('rac_new/js/mainmenu/jquery.sticky.js')}}"></script> 
<script src="{{asset('rac_new/js/scrolltotop/totop.js')}}"></script> 


<script src="{{asset('rac_new/js/owl-carousel/owl.carousel.js')}}"></script> 
<script src="{{asset('rac_new/js/owl-carousel/custom.js')}}"></script> 

<script src="{{asset('rac_new/js/tabs/assets/js/responsive-tabs.min.js')}}" type="text/javascript"></script>  
<script src="{{asset('rac_new/js/scripts/functions.js')}}" type="text/javascript"></script>
