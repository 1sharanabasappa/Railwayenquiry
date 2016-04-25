<!DOCTYPE html>
<html lang="en">

<head>
 <?php session_start();?>
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
function as1(a,js,as,img,fau,val2)
    {
        
 alert("FAULTS ARE!");
        <?php
         $t2=$_SESSION["uname"];
        $t31=strtolower($t2);
        $con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
        $sql="SELECT * FROM location WHERE place='$t31'";
        $res1=mysql_query($sql);
        $k1=0;
        while($row=mysql_fetch_array($res1))
 {

	 $long1[]=$row[2];

	 
	 $lat[]=$row[3];
	 
	$k1++;
 }
         
        
        ?>
        
        var longi='<?php echo $long1[0];?>';
        var lati='<?php echo $lat[0]; ?>';
       
        var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: new google.maps.LatLng(longi,lati),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
       
            var infowindow = new google.maps.InfoWindow({content:"hello",
maxWidth: 1000
  });;

    var marker, i;
//var cs=new Array();
        var cs=new Array();
        alert(js.length);
var image1= new Image();
        var cs=new Array();
        var va="bye";
    for (i =0;i<(js.length);i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(as[i],js[i]),
    
          map: map
          
      });
        
	 image1[i]= new Image();
 
image1[i].src ='data:image;base64,'+img[i];
       // document.write(image1[i].src);
image1[i].width=450;
image1[i].height=200;
va="hell0";
      
        cs[i]="<div class='row'>"+"<div class='col-md-3'></div>"+"<div class='col-md-6'>"+"<img src="+image1[i].src+" />"+"</div></div></div></div>";
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(cs[i]);
           
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
       

        
    }
    
        function divclose()
{

           <?php
         $t2=$_SESSION["uname"];
        $t31=strtolower($t2);
        $con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
        $sql="SELECT * FROM location WHERE place='$t31'";
        $res1=mysql_query($sql);
        $k1=0;
        while($row=mysql_fetch_array($res1))
 {

	 $long1[]=$row[2];

	 
	 $lat[]=$row[3];
	 
	$k1++;
 }
        
        ?>
        var longi='<?php echo $long1[0];?>';
        var lati='<?php echo $lat[0]; ?>';
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: new google.maps.LatLng(longi,lati),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
}

 
        
    </script>


    
    
    
    
    
</head>

<body>
      
<nav role="navigation"class="navbar navbar-inverse navbar-fixed-top" style="background-color:black;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand"><img src="logo12.png"/></a>
     <a href="#" class="navbar-brand"><?php echo $_SESSION["uname"];?></a>
    </div>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#" data-toggle="modal" data-target="#loginModal" >Faults Management</a></li>
            <li> <a href="aa.php">Faults Stastics</a>
            </li>
            <li> <a href="aboutus.php">About us</a></li>
                </ul>
            </li>
        </ul>
       
        <ul class="nav navbar-nav navbar-right">
            
            <li><a href="home.php" name="logout"target="_self" onclick="session1();" >Logout</a></li>
    </ul>
    </div>
</nav>

       
             
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
<div class="container">
<div class="modal fade" id="loginModal" tabindex="2" role="dialog" aria-labelledby="Login" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:black;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title"  style="font-family:cursive;"align="center">Fault's Filter  Section</h3>
            </div>

            <div class="modal-body"  >
                <!-- The form is placed inside the body of modal -->
                <form id="loginForm" method="post" class="form-horizontal" action="index.php">
                    <div class="form-group">
                    <p align="center">   From:<input type="date"  format="YYYY-MM-DD"style="width:200px;"class="form-control"  name="fdate1" class="input pass" required>
                    </p>

                    </div>
                    
                    <div class="form-group">
                        
                       <p align="center">  
                  To:<input type="date"  name="tdate1"style="width:200px;"class="form-control" class="input pass" required>
                        </p>      
                       
                    
                    </div>
  <div class="form-group">
                         <p align="center"> Type Of Faults
  <select class="form-control" style="width:200px;" name="fal" required>
    <option value="all">All Faults</option>
      <option value="landslide">Land Slide</option>
    <option value="failedjoint">Failed Joint</option>
    <option value="obstacle">Obstacle</option>
    
  
</select>
      </p>                    </div>
                    </div>
                </br>
                    
                    <div class="form-group">
                     <p align="center">
                            <button type="submit" class="btn btn-info" name="modalsubmit" style="width:150px">Search</button>
                        </p>
                        </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

</div>
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



<?php
 $t1=$_SESSION["uname"];
        $t3=strtolower($t1);

    if(isset($_POST["modalsubmit"]))
    {
         
         $t=$_POST["fdate1"];
         $f1=$_POST["tdate1"];
         $va=$_POST["fal"];
         if(!(strcmp($va,"all")))
         {
            $con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
         $sql="SELECT * FROM images WHERE fdate BETWEEN DATE('$t') AND DATE('$f1') AND (location='$t3')";   
            
            
            
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
         $res1=0;
         $res1=mysql_query($sql);
        if(!$res1)
        {
            echo "<SCRIPT TYPE='text/javascript'>divclose();</SCRIPT>";
        }

        
else
{
 $k=0;
 while($row=mysql_fetch_array($res1))
 {

	 $long13[]=$row[3];
	 $image124[]=base64_encode($row[2]);
	 
	 $lat2[]=$row[4];
	 
	 $fal1[]=$row[5];
	   $val12[]=$row[6];
	 	 $k++;
 }
   
  
   $longa1 = json_encode($long13);
//echo "var long = ". $longa . ";\n";
         $lata1 = json_encode($lat2);
//echo "var lat = ". $lata . ";\n";
         $image1231 = json_encode($image124);
//echo "var image1 = ". $image123 . ";\n";
         $fal11 = json_encode($fal1);
//echo "var faults = ". $fal1 . ";\n";
         $val121= json_encode($val12);
//echo "var location= ". $val12 . ";\n";
 echo "<SCRIPT TYPE='text/javascript'>as1($k,$longa1,$lata1,$image1231,$fal11,$val121);</SCRIPT>";        
} }
    
    else
    {
      
         
                 echo "<SCRIPT type='text/javascript'>divclose();</SCRIPT>"; 
              
               
}
      
         
         
               
    
    
?>

        
        
</div>
</div>
        
    
    
   <!-- footer desgin-->
<div id="footer" >
    <div class="container">
        <div class="row">
            <h3 class="footertext"></h3>
            <br>
              <div class="col-md-4">
                <center>
                  <img src="about_us.png" alt="the-brains">
                  <br>
                 <a href="aboutus.php"> <h4 class="footertext" style="font-family:cursive;">About Us</h4></a>
              <p class="footertext" style="font-family:cursive;">Devlopers<br>
                  Sharanabasappa Sugoor<br>
                  Vivek K S<br>
                  Ravikiran J J<br>
                  Chethan Devadiga<br>
                    </p>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="about_us1.png" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext" style="font-family:cursive;">Queries</h4>
                    <p class="footertext" style="font-family:cursive;">Submit Your Queries @<br>Sharanabasappasugoor@gmail.com.<br>
                    </p>
              
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="contact.png" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext" style="font-family:cursive;">Contact's</h4>
                  <p class="footertext" style="font-family:cursive;">sharanabasappasugoor@gmail.com<br>ksvivek14111994@gmail.com<br>
                      ravi1994kiran@gmail.com<br>
                      chetandevadiga97@gmail.com .<br>
                </center>
              </div>
            </div>
        <hr>
            <div class="row">
            <p class="footertext" style="font-family:cursive;font-size:50px;" ><center>Copyright © 2016 Railenquiry.eu5.org   <br>All right's Reserved
                </center></p>
        </div>
    </div>
</div>
</div>
    
</body>

</html>
