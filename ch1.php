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

</head>
<script language="javascript">
function divclose()
{

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: new google.maps.LatLng(12.316266,76.645067),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });  

}
    function hel()
    {
        
        
         var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: new google.maps.LatLng(17.516266,76.645067),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });  

        
        
        
        
    }
</script>
 <div id="map"  style="height:610px;border:2; width:1360px;position: absolute; top:54px;">
</div>
<?php

echo "<SCRIPT LANGUAGE='javascript'>divclose();</SCRIPT>";
 $con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
$sql="select * from images";
$res1=mysql_query($sql) or header("location:index.php");
if($res1)
{
    echo "<SCRIPT LANGUAGE='javascript'>divclose();</SCRIPT>";
}
else
{

    echo "<SCRIPT LANGUAGE='javascript'>hel();</SCRIPT>";
}
      

?>