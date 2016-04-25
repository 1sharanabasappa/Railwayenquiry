<html>
    <head>
         <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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


    
    
    
        <script language="javascript">
 
function as()
{

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: new google.maps.LatLng(12.316266,76.645067),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
}


        function as1(a,js,as,img,fau,val2)
        
        {
                    /*      var a='<?php// echo $k;?>';


var y=0;
var js = [<?php //echo '"'.implode('","', $long1).'"' ?>];
var as=[<?php //echo '"'.implode('","', $lat).'"' ?>];
var img=[<?php //echo '"'.implode('","', $image12).'"' ?>];
var fau=[<?php //echo '"'.implode('","', $fal).'"' ?>];
var val2=[<?php //echo '"'.implode('","', $val1).'"' ?>];



    */
            
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: new google.maps.LatLng(12.316266,76.645067),
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
image1[i].width=450;
image1[i].height=200;
char1=image1[i];
         cs[i] = "<pre>"+"<img width='400px' hight='200px' style='postion:absolute;top:35px;left:159px;'src=" +image1[i].src+ ">"+"</pre>"+"<hr>"+"<h4>Location:-"+fau[i]+"</h4>"+"<h4> Fault:-<input type='submit'class='btn btn-warning' value="+val2[i]+">"+"</h4>"+"<hr>"+" <h3 align='center'>Not Faulty Image </h3> "+"<input type='submit' class='btn btn-danger' value='Delete it '>";
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(cs[i]);
           
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
       

}
        
    

</script>
    </head><body>
    <div id="map"  style="height:610px;border:2; width:1360px;position: absolute; top:54px;">
</div>

    <li><a href="#" data-toggle="modal" data-target="#loginModal" >Faults Management</a></li>
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
                <form id="loginForm" method="post" class="form-horizontal" action="ab1.php">
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
<?php

if(isset($_POST["modalsubmit"]))
{
      $con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
      
 $sql="select * from images where location='mysore'";
 $res1=mysql_query($sql); 
$t33=mysql_num_rows($res1);
echo $t33;

     if(!$t33)
     {    
 while($row=mysql_fetch_array($res1))
 {

	 $long1[]=$row[3];
	 $image12[]=$row[2];
	 
	 $lat[]=$row[4];
	 
	 $fal[]=$row[5];
	   $val1[]=$row[6];
	 	 $k++;
 }
       echo   " var a=". $k.";\n";
    
$longa = json_encode($long1);
echo "var long = ". $longa . ";\n";
         $lata = json_encode($lat);
echo "var lat = ". $lata . ";\n";
         $image123 = json_encode($image12);
echo "var image1 = ". $image123 . ";\n";
         $fal1 = json_encode($fal);
echo "var faults = ". $fal1 . ";\n";
         $val12= json_encode($val1);
echo "var location= ". $val12 . ";\n";
         
         
         
         
            
echo "<SCRIPT LANGUAGE='javascript'>as1(a,long,lat,image1,faults,location);</SCRIPT>";

     }



    
    else
    {
       echo "<SCRIPT LANGUAGE='javascript'>as();</SCRIPT>";  
        
    }
}
    else
    {
       echo "<SCRIPT LANGUAGE='javascript'>as();</SCRIPT>";  
        
    }
    
?>
</body>
</html>