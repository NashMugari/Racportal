<!-- ========== Js files ========== --> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{asset('rac_new/js/cookieBubble.min.js')}}"></script>
<script>
	(function ($) {
			$.cookieBubble();
	})(jQuery);
</script>

<script type="text/javascript" src="{{asset('rac_new/js/universal/jquery.js')}}"></script> 
<script src="{{asset('rac_new/js/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/ytplayer/jquery.mb.YTPlayer.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/ytplayer/elementvideo-custom.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/ytplayer/play-pause-btn.js')}}"></script> 
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
		 height:650,   // slider standard height
		 space:0,
		 speed:45,
		 layout:'fullwidth',
		 loop:true,
		 preload:0,
		 autoplay:true,
		 view:"parallaxMask"
	});
	
	var slider = new MasterSlider();
    slider.setup('masterslider2' , {
        loop:true,
        width:110,
        height:110,
        speed:20,
        view:'focus',
        preload:0,
        space:0,
        space:30,
        viewOptions:{centerSpace:1.6}
    });
    slider.control('arrows');
    slider.control('slideinfo',{insertTo:'#staff-info'});
	
})(jQuery);
</script> 
<script src="{{asset('rac_new/js/mainmenu/customeUI.js')}}"></script> 
<script src="{{asset('rac_new/js/mainmenu/jquery.sticky.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/cubeportfolio/jquery.cubeportfolio.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/cubeportfolio/main.js')}}"></script> 
<script src="{{asset('rac_new/js/owl-carousel/owl.carousel.js')}}"></script> 
<script src="{{asset('rac_new/js/owl-carousel/custom.js')}}"></script> 
<script src="{{asset('rac_new/js/tabs/assets/js/responsive-tabs.min.js')}}" type="text/javascript"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/tabs/smk-accordion.js')}}"></script>
<script type="text/javascript" src="{{asset('rac_new/js/tabs/custom.js')}}"></script> 
<script src="{{asset('rac_new/js/scrolltotop/totop.js')}}"></script> 
<script src="{{asset('rac_new/js/progress-circle/jquery.knob.js')}}"></script> 
<script src="{{asset('rac_new/js/progress-circle/custom.js')}}"></script> 

<script src="{{asset('rac_new/js/scripts/functions.js')}}" type="text/javascript"></script>