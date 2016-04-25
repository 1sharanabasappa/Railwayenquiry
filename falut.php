<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
 <div id="map" style="height:620px; width: 1350px;">
</div>
    <script type="text/javascript">
<?php
 $con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
 $sql="select * from images where faults='failed joint'";
 $res1=mysql_query($sql);
 $k=0;
 while($row=mysql_fetch_array($res1))
 {

	 $long1[]=$row[3];
	 $image12[]=$row[2];
	 
	 $lat[]=$row[4];
	 
	 $fal[]=$row[5];
	 
	 	 $k++;
 }
 
 
 


?>
var a='<?php echo $k;?>';
var all = new Array();
var al = new Array();

var y=0;
var js = [<?php echo '"'.implode('","', $long1).'"' ?>];
var as=[<?php echo '"'.implode('","', $lat).'"' ?>];
var img=[<?php echo '"'.implode('","', $image12).'"' ?>];




    
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: new google.maps.LatLng(12.316266,76.645067),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
var image1=new Array();
    for (i = 0; i < (js.length); i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(js[i],as[i]),
        map: map
      });
	  

 image1[i]= new Image();
image1[i].src = 'data:image;base64,'+img[i];
image1[i].width=450;
image1[i].height=200;

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(document.body.appendChild(image1[i]));
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
    </body>
</html>