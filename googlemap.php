<!DOCTYPE HTML>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Google Maps JavaScript API v3 Example: Complex Icons</title>
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
	  #map_canvas img{
		background:none;
	  }
    </style>	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
  jQuery(function($) {
    // Asynchronously Load the map API 
    var newmarker = [];
   
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("property_map"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
        ['London Eye, London', 51.503454,-0.119562],
        ['Palace of Westminster, London', 51.499633,-0.124755]
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>London Eye</h3>' +
        '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' +        '</div>'],
        ['<div class="info_content">' +
        '<h3>Palace of Westminster</h3>' +
        '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
        '</div>']
    ];
   
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0],
            icon:"https://cdn3.iconfinder.com/data/icons/musthave/24/Stock%20Index%20Up.png"
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
                //$('.click_marker[data-id="'+i+'"]').css('fonr-size','30px');
                document.getElementById("property"+i).style.color = "blue";
            }
        })(marker, i));
         // Allow each marker to have an info window    
       
        newmarker.push(marker);

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
        
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(15);
        google.maps.event.removeListener(boundsListener);
    });
    
    
    
    $('.click_marker').click(function(e){
        e.preventDefault();
        var data_id = $(this).attr('data-id');
        
        for (var j = 0; j < newmarker.length; j++) {
          newmarker[j].setIcon("https://cdn3.iconfinder.com/data/icons/musthave/24/Stock%20Index%20Up.png");
        }
        newmarker[data_id].setIcon("https://cdn3.iconfinder.com/data/icons/musthave/24/Stock%20Index%20Down.png");
        google.maps.event.trigger( newmarker[data_id] , 'click');
    });

});


</script>

  </head>
  <body>
      <a href="#" data-id="0" id="property0" class="click_marker" >click2</a><a href="#" id="property1" data-id="1"  class="click_marker" >click2</a>
      <div id="property_map" style="width:500px; height:500px;"></div>
  </body>
  
</html>
