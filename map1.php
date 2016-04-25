<!DOCTYPE html>
<html>
<head>
    <?php session_start();?>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize()
{
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
    /*
    $t=$_SESSION["t"];
              $f1=$_SESSION["f1"];
            $va=$_SESSION["va"];
        //comparing given choice faults
              if(!(strcmp($va,"all")))
             {
            $con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
         $sql="SELECT * FROM images WHERE fdate BETWEEN DATE('$t') AND DATE('$f1') AND (location='$t3')";   
            
    $res12=mysql_query($sql);
        $k1=0;
        if(!$res12)
        {
            echo "di";
        }

        
     else
    {
    $k=0;
     while($row=mysql_fetch_array($res12))
    {

	 $long1[]=$row[3];
	 $image12[]=base64_encode($row[2]);
	 
	 $lat[]=$row[4];
	 
	 $fal[]=$row[5];
	   $val1[]=$row[6];
	 	 $k++;
    }
   
  
   $longa = json_encode($long1);
echo "var js = ". $longa . ";\n";
         $lata = json_encode($lat);
echo "var as = ". $lata . ";\n";
         $image123 = json_encode($image12);
echo "var img = ". $image123 . ";\n";
         $fal1 = json_encode($fal);
echo "var fau = ". $fal1 . ";\n";
         $val12= json_encode($val1);
echo "var val2= ". $val12 . ";\n";
        
} 
                
            
           }
    */   
             ?>
    
                var a='<?php echo $k1; ?>';
    
         var longi='<?php echo $long12[0];?>';
        var lati='<?php  echo $lat1[0]; ?>';
  var mapProp = {
    center: new google.maps.LatLng(longi,lati),
    zoom:18,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    
    var  marker = new google.maps.Marker({
        position: new google.maps.LatLng(longi,lati),
    
          map: map
          
      });
    var a="hello";
    google.maps.event.addListener(marker, 'click', (function(marker) {
        return function() {
          infowindow.setContent(a);
           
          infowindow.open(map, marker);
        }
      })(marker, i));
    
 /*var infowindow = new google.maps.InfoWindow({content:"hello",
maxWidth: 1000
  });;
var char1,char2;
    var cs=new Array();
    var marker, i;
var image1=new Array();
    for (i = 0; i < (js.length); i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(js[i],as[i]),
    
          map: mapProp
          
      });
	  
         google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent("hello");
           
          infowindow.open(mapProp, marker);
        }
      })(marker, i));
    }
    */
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:400px;height:300px;"></div>
<br>

</body>
</html>
