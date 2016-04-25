<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  <title>Google Maps Multiple Markers</title> 
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
</head> 
<body>
<!--  <div id="map" style="width:1360px; height: 760px;"></div>
-->
  
  <script>
    // Define your locations: HTML content for the info window, latitude, longitude
       <?php
               
             $t2="mysore";
               $t31=strtolower($t2);//station name convertion to lowercase
        $con=mysql_connect("localhost","sharanu","sugoor123");//connection with database
        if(!$con)
          {
	          echo "<a href='front.html'>"."try Again"."</a>";
	
      	 }
	      mysql_select_db("rail") or die("not fnd");
        $sql="SELECT * FROM location WHERE place='$t31'";//query for intialization location of station
        $res1=mysql_query($sql);
        $k1=0;
                while($row=mysql_fetch_array($res1))
              {

	             $long12[]=$row[2];

	 
             	 $lat1[]=$row[3];
	 
	           $k1++;
            }
      ?>
       var longi='<?php echo $long12[0];?>';
        var lati='<?php  echo $lat1[0]; ?>';
    var locations = [
      ['<h4>Bondi Beach</h4>', -33.890542, 151.274856],
      ['<h4>Coogee Beach</h4>', -33.923036, 151.259052],
      ['<h4>Cronulla Beach</h4>', -34.028249, 151.157507],
      ['<h4>Manly Beach</h4>', -33.80010128657071, 151.28747820854187],
      ['<h4>Maroubra Beach</h4>', -33.950198, 151.259302]
    ];
    
    // Setup the different icons and shadows
    var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
    
    var icons = [
      iconURLPrefix + 'red-dot.png',
      iconURLPrefix + 'green-dot.png',
      iconURLPrefix + 'blue-dot.png',
      iconURLPrefix + 'orange-dot.png',
      iconURLPrefix + 'purple-dot.png',
      iconURLPrefix + 'pink-dot.png',      
      iconURLPrefix + 'yellow-dot.png'
    ]
    var iconsLength = icons.length;

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(-37.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
    
      panControl: false,
      zoomControlOptions: {
         position: google.maps.ControlPosition.LEFT_BOTTOM
      }
    });

    var infowindow = new google.maps.InfoWindow({
      maxWidth: 1600
    });
      
      <?php
      
      $con=mysql_connect("localhost","sharanu","sugoor123");//connection with database
        if(!$con)
          {
	          echo "<a href='front.html'>"."try Again"."</a>";
	
      	 }
	      mysql_select_db("rail") or die("not fnd");
        $sql="SELECT * FROM images";//query for intialization location of station
        $res1=mysql_query($sql);
        $k1=0;
                while($row=mysql_fetch_array($res1))
              {
                    
                    
                 $long1[]=$row[3];
	 $image12[]=base64_encode($row[2]);
	 
	 $lat[]=$row[4];
	 
	 $fal[]=$row[5];
	   $val1[]=$row[6];
	 	 $k1++;
 }
   
  
   $longa = json_encode($long1);
//echo "var js = ". $longa . ";\n";
         $lata = json_encode($lat);
//echo "var as = ". $lata . ";\n";
         $image123 = json_encode($image12);
//echo "var img = ". $image123 . ";\n";
         $fal1 = json_encode($fal);
//echo "var fau = ". $fal1 . ";\n";
         $val12= json_encode($val1);

      
      ?>

        var js='<?php echo $longa ?>';
        var as='<?php echo $lata ?>';
        var img='<?php echo $image123 ?>';
      document.write(js[0]);
        var fau='<?php echo $fal ?>';
     var val2='<?php echo $val12 ?>';
        
    var markers = new Array();
    
    var iconCounter = 0;
    
  

    // Add the markers and infowindows to the map
    for (var i = 0; i < js.length; i++) {  
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(js[i],as[i]),
        map: map
        });

      markers.push(marker);

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
      
      iconCounter++;
      // We only have a limited number of possible icon colors, so we may have to restart the counter
      if(iconCounter >= iconsLength) {
      	iconCounter = 0;
      }
    }

  /*  function autoCenter() {
      //  Create a new viewpoint bound
      var bounds = new google.maps.LatLngBounds();
      //  Go through each...
      for (var i = 0; i < markers.length; i++) {  
				bounds.extend(markers[i].position);
      }
      //  Fit these bounds to the map
      map.fitBounds(bounds);
    }
    autoCenter();
    */
  </script> 
</body>
</html>