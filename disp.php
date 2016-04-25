<html>
<head><?php session_start();?>
   <script language="javascript">
/*function as1(a,js,as,img,fau,val2)
    {
        
        document.write(fau[0]);
        <?php
       // t2=$_SESSION["uname"];
        $t31=strtolower($t2);
        $con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
        $sql="SELECT * FROM location WHERE place='mysore'";       $res1=mysql_query($sql);
        $k1=0;
        while($row=mysql_fetch_array($res1))
 {

	 $long1[]=$row[2];

	 
	 $lat[]=$row[3];
	 
	$k1++;
 }
        
        ?>

         image1[i]= new Image();
image1[i].src ='data:image;base64,'+img[i];
     document.write(image1[i].src);
image1[i].width=450;
image1[i].height=200;
      /*  var longi='<?php //echo $long1[0];?>';
        var lati='<?php //echo $lat[0]; ?>';
        
        var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: new google.maps.LatLng(longi,lati),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
            var infowindow = new google.maps.InfoWindow({content:"hello",
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
     document.write(image1[i].src);
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
       

        
    }*/
    
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
        $sql="SELECT * FROM location WHERE place='mysore'";
        $res1=mysql_query($sql);
        $k1=0;
        while($row=mysql_fetch_array($res1))
 {

	 $long1[]=$row[2];

	 
	 $lat[]=$row[3];
	 
	$k1++;
 }
        
        ?>
       /* var longi='<?php// echo $long1[0];?>';
        var lati='<?php //echo $lat[0]; ?>';
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: new google.maps.LatLng(longi,lati),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    */
}

 
        
    </script> 
    
    
    </head>
<body>
    
    <li><a href="#" data-toggle="modal" data-target="#loginModal" >Faults Management</a></li>
    <div class="container">
<div class="modal fade" id="loginModal" tabindex="2" role="dialog" aria-labelledby="Login" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:black;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" align="center">Fault's Filter  Section</h3>
            </div>

            <div class="modal-body"  >
                <!-- The form is placed inside the body of modal -->
                <form id="loginForm" method="post" class="form-horizontal" action="disp.php">                    <div class="form-group">
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
<script language="javascript">

</script>
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
            echo "<SCRIPT LANGUAGE='javascript'>divclose();</SCRIPT>";
        }

        
else
{
 $k=0;
 while($row=mysql_fetch_array($res1))
 {

	 $long1[]=$row[3];
	 $image12[]=base64_encode($row[2]);
	//echo image12[$k];
     echo "</br>";
	 $lat[]=$row[4];
	 
	 $fal[]=$row[5];
	   $val1[]=$row[6];
	 	 $k++;
 }
  
   $longa = json_encode($long1);
//echo "var long = ". $longa . ";\n";
         $lata = json_encode($lat);
//echo "var lat = ". $lata . ";\n";
         $image123 = json_encode($image12);
  
//echo "var image1 = ". $image123 . ";\n";
         $fal1 = json_encode($fal);
    echo $fal1;
//echo "var faults = ". $fal1 . ";\n";
         $val12= json_encode($val1);
//echo "var location= ". $val12 . ";\n";
 echo "<SCRIPT LANGUAGE='javascript'>as1($k,$longa,$lata,$t,$fal1,$val12);</SCRIPT>";        
} }
    
    else
    {
      $con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
      
 $sql="select * from images where location='$t3'";
 $res1=mysql_query($sql);  
        $num=mysql_num_rows($res1);
    
        if(!$num)
        {
          $k=0;
 while($row=mysql_fetch_array($res1))
 {

	 $long1[]=$row[3];
	 $image12[]=base64_encode( $row[2] );
	 
	 $lat[]=$row[4];
	 
	 $fal[]=$row[5];
     $val1[]=$row[6];
	 
	 	 $k++;
 }
      
           
            $longa = json_encode($long1);
            
//echo "var long = ". $longa . ";\n";
         $lata = json_encode($lat);
//echo "var lat = ". $lata . ";\n";
         $image123 = json_encode($image12);
//echo "var image1 = ". $image123 . ";\n";
         $fal1 = json_encode($fal);
//echo "var faults = ". $fal1 . ";\n";
         $val12= json_encode($val1);
//echo "var location= ". $val12 . ";\n";
 echo "<SCRIPT LANGUAGE='javascript'>as1($k,$longa,$lata,$t,$fal1,$val12);</SCRIPT>";
         
        }         else
               {
                 echo "<SCRIPT LANGUAGE='javascript'>divclose();</SCRIPT>"; 
              
               }
        }
      
         
         
               
    
    
?>
    
    
    </body></html>