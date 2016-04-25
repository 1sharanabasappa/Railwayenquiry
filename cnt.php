<html>
    <head>
       <title></title>
         <?php  session_start(); ?>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
<style>
    html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
#footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 370px;
  background: 
  /* color overlay */ 
    linear-gradient(
      rgba(0, 0, 25, 0.45), 
      rgba(205,235, 235, 0.40)
   ),
    /* imae to overlay */
    url(fot1.jpg);
}


/* Custom footer CSS
-------------------------------------------------- */


.container .text-muted {
  margin: 20px 0;
}
.footertext {
  color: #ffffff;
}

    </style>
    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
       <script type="text/javascript">
          function run()
           {
                alert(1);
               <?php
               $t2=$_SESSION["uname"];
$t2="mysore";
               $t31=strtolower($t2);//station name convertion to lowercase
        $con=mysql_connect("localhost","sharanu","sugoor123");//connection with database
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
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
                var a='<?php echo $k; ?>';
    
         var longi='<?php echo $long12[0];?>';
        var lati='<?php  echo $lat1[0]; ?>';
               alert(longi);
        
        var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: new google.maps.LatLng(longi,lati),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });/*
       //for map image retrive from database
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
         $sql="SELECT * FROM images WHERE fdate BETWEEN DATE('$t') AND DATE('$f1') AND (location='$t31')";   
            
            
            
           }
         
       else
        {
             $con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
            
        
            
              $sql="SELECT * FROM images WHERE ((faults='$va')AND fdate BETWEEN DATE('$t') AND DATE('$f1') AND (location='$t3'))";
            $k12=1;
        }
         $res12=mysql_query($sql);
        $k1=0;
        if(!$res12)
        {
            echo "hi";
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
        
        
        
    */
               
          
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
    
          map: map
          
      });
	  

 image1[i]= new Image();
image1[i].src ='data:image;base64,'+img[i];
       // document.write(image1[i].src);
image1[i].width=450;
image1[i].height=200;
char1=image1[i];
         cs[i] = "<div class='container'>"+'<img src='+image1[i].src+' />'+"</pre>"+"<hr>"+"<h4>Location:-"+fau[i]+"</h4>"+"</div>"+"<h4> Fault:-<input type='submit'class='btn btn-warning' value="+val2[i]+">"+"</h4>"+"<hr>"+" <h3 align='center'>Not Faulty Image </h3> "+"<input type='submit' class='btn btn-danger' value='Delete it '>";
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(cs[i]);
           
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
       
*/

    }
               
          
       </script>

    </head>
    <body>
       
        <li><a href="#" data-toggle="modal" data-target="#loginModal" >Faults Management</a></li>
       
          <form action="cnt.php" method="post" >
              
        <input type="submit" name="modalsubmit"/>
        </form>  
  <div id="map"    style="height:580px;border:2; width:1360px;position: absolute; top:54px;">
</div>
      

    
                    <div class="col-lg-6">
                         

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

    <!-- Menu Toggle Script -->
  <!-- modal-->
        <!-- Modal -->
 

</br>

         <?php

           if(isset($_POST["modalsubmit"]))
            {  
    
               echo "<script type=\"text/javascript\">run(); </script>";
            }
else
{
   
}

           ?>
<div id="map"    style="height:580px;border:2; width:1360px;position: absolute; top:54px;">
</div>
    </body>
</html>