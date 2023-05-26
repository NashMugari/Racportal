<script type="text/javascript" src="{{asset('rac_new/js/universal/jquery.js')}}"></script> 
<script src="{{asset('rac_new/js/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/ytplayer/jquery.mb.YTPlayer.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/ytplayer/elementvideo-custom.js')}}"></script> 
<script type="text/javascript" src="{{asset('rac_new/js/ytplayer/play-pause-btn.js')}}"></script> 
<script src="{{asset('rac_new/js/masterslider/jquery.easing.min.js')}}"></script> 
<script src="{{asset('rac_new/js/masterslider/masterslider.min.js')}}"></script> 

<script> 
mobiscroll.settings = {
    lang: '',
    theme: 'mobiscroll',
    themeVariant: 'light'
};

// Load the Google API Client
window.onGoogleLoad = function () {
    window.gapi.load('client', initClient);
}

// Load the SDK asynchronously
function loadGoogleSDK() {
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            onGoogleLoad();
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://apis.google.com/js/api.js?onload=onGoogleLoad";
        js.onload = "onGoogleLoad";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'google-jssdk'));
};

// Init the Google API client
function initClient() {
    window.gapi.client.init({
        apiKey: API_KEY,
        clientId: CLIENT_ID,
        discoveryDocs: DISCOVERY_DOCS,
        scope: SCOPES
    }).then(function () {
        calApiLoaded = true;
        loadEvents(firstDay, lastDay);
    });
}

// Load events from Google Calendar between 2 dates
function loadEvents(firstDay, lastDay) {
    // Only load events if the Google API finished loading
    if (calApiLoaded) {
        window.gapi.client.calendar.events.list({
            'calendarId': CALENDAR_ID,
            'timeMin': firstDay.toISOString(),
            'timeMax': lastDay.toISOString(),
            'showDeleted': false,
            'singleEvents': true,
            'maxResults': 100,
            'orderBy': 'startTime'
        }).then(function (response) {
            var event;
            var events = response.result.items;
            var eventList = [];
            // Process event list
            for (var i = 0; i < events.length; ++i) {
                event = events[i];
                eventList.push({
                    start: new Date(event.start.date || event.start.dateTime),
                    end: new Date(event.end.date || event.end.dateTime),
                    text: event.summary || 'No Title'
                });
            }
            // Pass the processed events to the calendar
            calInst.setEvents(eventList);
        });
    }
}

var API_KEY = 'AIzaSyBvB0_TgoFXNXy6qlmW4e7pAfOwE2zUEPk';
var CLIENT_ID = '396596046872-93biasegliebqh8oeaig5atsl82mvv9s.apps.googleusercontent.com';
var CALENDAR_ID = 'theacidmedia.net_8l6v679q5j2f7q8lpmcjr4mm3k@group.calendar.google.com';
var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"];
var SCOPES = "https://www.googleapis.com/auth/calendar.readonly";

var calApiLoaded;
var firstDay;
var lastDay;

var calInst = mobiscroll.eventcalendar('#demo-google-cal', {
    display: 'inline',
    view: {
        calendar: {
            labels: true
        }
    },
    data: [],
    onPageLoading: function (event) {
        var year = event.firstDay.getFullYear(),
            month = event.firstDay.getMonth();

        // Calculate dates 
        // (pre-load events for previous and next months as well)
        firstDay = new Date(year, month - 1, -7);
        lastDay = new Date(year, month + 2, 14);

        loadEvents(firstDay, lastDay);
    }
});

// Load the Google SDK
loadGoogleSDK();
</script> 

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