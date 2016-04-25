<html>
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
    <style type="text/css">
        body{
            
            font-family: cursive;
            
        }
    .morris-hover{position:absolute;z-index:1000}.morris-hover.morris-default-style{border-radius:80px;padding:10px;color:#666;background:rgba(255,255,255,0.8);border:solid 2px rgba(5,230,230,4.8);font-family:sans-serif;font-size:12px;text-align:center}.morris-hover.morris-default-style .morris-hover-row-label{font-weight:bold;margin:0.25em 0}
.morris-hover.morris-default-style .morris-hover-point{white-space:nowrap;margin:0.1em 0}

    
    
    </style>
    </head>
    
    <body style="background-image:url(1s.jpg);">
          <nav role="navigation" class="navbar navbar-default  navbar-fixed-top" style="background-color:black;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand"><img src="logo12.png"/></a>
        
    </div>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
          
            <li class="active"> <a href="aa.php">Faults Stastics</a>
            </li>
            <li> <a href="aboutus.php">About Us</a></li>
                </ul>
            </li>
        </ul>
       
        <ul class="nav navbar-nav navbar-right">
            
            <li><a href="home.php" target="_self" >Logout</a></li>
        </ul>
    </div>
</nav>
        <div class="container fluid">
            <h2 align="center" style="color:#2d8dda;"> Faults Analyzer </h2>
         <div class="col-md-6">
             <h3 align="center" style="color:#2d8dda;text-decoration: underline red;"> Failed Joint from 2010-2025</h3>
        <div id="line-example" style="height: 300px;"></div>
    </div>
        <div class="col-md-6">
             <h3 align="center" style="color:#2d8dda;"> Landslide Faults from 2010-2025</h3>
        <div id="line-example1" style="height: 300px;"></div>
    </div>
         <div class="col-md-6">
             <h3 align="center" style="color:#2d8dda;">Obstacle Faults From 2010-2025</h3>
        <div id="line-example2" style="height: 300px;"></div>
    </div>
    <div class="col-md-6">
        <h3 align="center" style="color:#2d8dda;"> Total faults from 2010-2015</h3>
        <div id="donut-example" style="width:550px;height:300px;"></div>
    </div>
            </div>
        </script>
    <?php
        
         $t8=$_SESSION["uname"];
        $t9=strtolower($t8);
        $con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
            
        $t=mysql_query("SELECT EXTRACT(YEAR FROM MAX(fdate)) FROM images");
     //   $no_result = mysql_num_rows($result);  

        $max=mysql_result($t,0);   
 
        //echo $max;
       $t1=mysql_query("SELECT EXTRACT(YEAR FROM MIN(fdate)) FROM images");
        $min=mysql_result($t1,0); 
        //echo $min;
    $i=0; 
        for($tq=2010;$tq<=2025;$tq++)
        {
        $t3=$tq."-01-01";
        //echo $t3;
        $t4=$tq."-12-31";
        
           $sql="SELECT * FROM images WHERE faults='failedjoint' AND ( fdate BETWEEN DATE('$t3') AND DATE('$t4') AND (location='$t9'))";
        $res1=mysql_query($sql);
        $num[$tq]=mysql_num_rows($res1);
                     $sql="SELECT * FROM images WHERE faults='landslide' AND ( fdate BETWEEN DATE('$t3') AND DATE('$t4') AND (location='$t9'))";
              $res1=mysql_query($sql);
        $num1[$tq]=mysql_num_rows($res1);
$sql="SELECT * FROM images WHERE faults='obstacle' AND ( fdate BETWEEN DATE('$t3') AND DATE('$t4') AND (location='$t9'))";
              $res1=mysql_query($sql);
        $num2[$tq]=mysql_num_rows($res1);
            
            // echo $sql;
        echo "</br>";
            $i++;
        
        }
    $sql="SELECT faults FROM images where faults='failedjoint' AND (location='$t9')";   
    $res=mysql_query($sql); 
    $num_rows1 = mysql_num_rows($res);
    $sql1="SELECT faults FROM images where faults='obstacle' AND (location='$t9')"; 
     $res1=mysql_query($sql1);
    
    $num_rows2 = mysql_num_rows($res1);
      $sql12="SELECT faults FROM images where faults='landslide' AND (location='$t9')"; 
     $res12=mysql_query($sql12);
    $num_rows3 = mysql_num_rows($res12);
    ?>
   
   

       
    
              <script type="text/javascript">
         var a='<?php echo  $num_rows1;?>';
    var b='<?php echo  $num_rows2;?>';
    var c='<?php echo  $num_rows3;?>';
    
        $.getScript('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',function(){
$.getScript('http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js',function(){
       Morris.Line({
        element: 'line-example',
        data: [
          {year: '2010', value: <?php echo $num[2010];?> },
          {year: '2011', value: <?php echo $num[2011];?>},
          {year: '2012', value:<?php echo $num[2012];?>},
          {year: '2013', value: <?php echo $num[2013];?>},
          {year: '2014', value: <?php echo $num[2014];?>},
            {year: '2015', value: <?php echo $num[2015];?>},
             {year: '2016', value: <?php echo $num[2016];?>},
             {year: '2017', value: <?php echo $num[2017];?>},
             {year: '2018', value: <?php echo $num[2018];?>},
             {year: '2019', value: <?php echo $num[2019];?>},
             {year: '2020', value: <?php echo $num[2020];?>},
             {year: '2021', value: <?php echo $num[2021];?>},
             {year: '2022', value: <?php echo $num[2022];?>},
             {year: '2023', value: <?php echo $num[2023];?>},
             {year: '2024', value: <?php echo $num[2024];?>},
             {year: '2025', value: <?php echo $num[2025];?>}
        
        ],
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Failed joints faults','ss']
      });
       
        Morris.Line({
        element: 'line-example1',
        data: [
          {year: '2010', value: <?php echo $num1[2010];?> },
          {year: '2011', value: <?php echo $num1[2011];?>},
          {year: '2012', value:<?php echo $num1[2012];?>},
          {year: '2013', value: <?php echo $num1[2013];?>},
          {year: '2014', value: <?php echo $num1[2014];?>},
            {year: '2015', value: <?php echo $num1[2015];?>},
             {year: '2016', value: <?php echo $num1[2016];?>},
             {year: '2017', value: <?php echo $num1[2017];?>},
             {year: '2018', value: <?php echo $num1[2018];?>},
             {year: '2019', value: <?php echo $num1[2019];?>},
             {year: '2020', value: <?php echo $num1[2020];?>},
             {year: '2021', value: <?php echo $num1[2021];?>},
             {year: '2022', value: <?php echo $num1[2022];?>},
             {year: '2023', value: <?php echo $num1[2023];?>},
             {year: '2024', value: <?php echo $num1[2024];?>},
             {year: '2025', value: <?php echo $num1[2025];?>}
        
        ],
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Landslide faults','ss']
      });
     Morris.Line({
        element: 'line-example2',
        data: [
          {year: '2010', value: <?php echo $num2[2010];?> },
          {year: '2011', value: <?php echo $num2[2011];?>},
          {year: '2012', value:<?php echo $num2[2012];?>},
          {year: '2013', value: <?php echo $num2[2013];?>},
          {year: '2014', value: <?php echo $num2[2014];?>},
            {year: '2015', value: <?php echo $num2[2015];?>},
             {year: '2016', value: <?php echo $num2[2016];?>},
             {year: '2017', value: <?php echo $num2[2017];?>},
             {year: '2018', value: <?php echo $num2[2018];?>},
             {year: '2019', value: <?php echo $num2[2019];?>},
             {year: '2020', value: <?php echo $num2[2020];?>},
             {year: '2021', value: <?php echo $num2[2021];?>},
             {year: '2022', value: <?php echo $num2[2022];?>},
             {year: '2023', value: <?php echo $num2[2023];?>},
             {year: '2024', value: <?php echo $num2[2024];?>},
             {year: '2025', value: <?php echo $num2[2025];?>}
        
        ],
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Obstacles faults','ss']
      });
    
      Morris.Donut({
        element: 'donut-example',
        data: [
         {label: "Failed Joint", value: a},
         {label: "Obstacle", value: b},
         {label: "Land slide", value: c}
        ]
      });
    
    });
});
    </script>     
    </div>
  
    </body>
</html>
