<head>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
</head>
<body><script type="text/javascript">
    function  fun(js,as,img,fal,val)
        {
            
            alert("hi");
            <?php
            
          /*  $t2="mysore";
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
            
            
         
            
            */?>
            
               
    /*        var longi='<?php //echo $long12[0];?>';
        var lati='<?php // echo $lat1[0]; ?>';
            */
        var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: new google.maps.LatLng(12.666,76.322),
      mapTypeId: google.maps.MapTypeId.ROADMP
    });
        var image1= new Image();
            
            for(i=0;i<img.length;i++)
                {
           image1[i]= new Image();
image1[i].src ='data:image;base64,'+img[i];
       // document.write(image1[i].src);
image1[i].width=450;
image1[i].height=200;
            
            cs="<img src="+image1[i].src+" />";
            document.writeln(cs);
                }
        }
    </script>
</head>
<body>
<div id="map" width="400px" height="400px"></div>
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
                    echo $long1[0];
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

echo "<script type='text/javascript'>fun($longa,$lata,$image123,$fal1,$val12);</script>";
      
      ?>

       
     </body>
