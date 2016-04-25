<!DOCTYPE html>
<html>
<head>
<script type="text/javascript"
    src="http://maps.google.com/maps/api/js?sensor=false">
</script>
<script type="text/javascript">
  function initialize() {
    var position = new google.maps.LatLng(12.978288,77.568846);
    var myOptions = {
      zoom: 18,
      center: position,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(
        document.getElementById("map_canvas"),
        myOptions);
 
    var marker = new google.maps.Marker({
        position: position,
        map: map,
        title:"This is the place."
    });  
 
    var contentString = 'Hello <strong>World</strong>!';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
 
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });
 
  }
 
</script>
</head>
<body onload="initialize()">
  <div id="map_canvas" style="width:100%; height:100%"></div>
</body>
</html>