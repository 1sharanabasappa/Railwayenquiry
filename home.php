<html>
<head>
<title>HOME:Railway</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<style>
#mys {
	
	
	width:350px;
	height:500px;
}
div.relative {
    position: relative;
    left: -100px;
	top:65px;
    
}
div.h2.relative {
    position: relative;
    left: 500px;
	top:65px;
    
}
c1.relative {
	 position: relative;
    left: 300px;
	top:65px;
	
}
h4.relative {
	
	position:relative;
	left:500px;
	top:65px;
}
div.fixed {
    position: fixed;
    bottom: 0;
    right: 0;
    width: 300px;
    border: 3px solid #73AD21;
}
.navbar-custom {
    
    background-color:#b3b3ff;
}
.modal-dialog {width:600px;}
.thumbnail {margin-bottom:6px;}
.gallery
{
    display: inline-block;
    margin-top: 20px;
}
</style>
 <style type="text/css">
.carousel{
    background: #2f4357;
    margin-top: 20px;
	width:1350px;
	height:450px;
	top:50px;
	left:-135px;
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
	width:1350px;
	height:450px;
}
.bs-example{
	margin: 20px;
}
</style>
 
</style>
 <style>
  .marginBottom-0 {margin-bottom:0;}

.dropdown-submenu{position:relative;}
.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover>a:after{border-left-color:#555;}
.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}

  body{
	  
	  font-family:"Lucida Console",Monospace;
	  font-size:14px;
  }
  </style>
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
  </head>
<body style="background-color#695b45">
<?php 
session_start();

?>

<div class="container">
 <div class="navbar navbar-inverse navbar-fixed-top"  style="height:60px;">
      <div class="container" style="color:white;">
        <div class="navbar-header">
          <a href="home.php" class="navbar-brand"> Home</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"  style="font-size:15px;">Services<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="Services">
                
                <li><a href="https://www.irctc.co.in/eticketing/loginHome.jsf"  target="_blank"style="font-size:15px;">Ticket Management</a></li>
                <li><a href="https://www.ecatering.irctc.co.in/eCatering/" target="_blank" style="font-size:15px;">E-Catering Services</a></li>
               
                <li><a href="http://cleanmycoach.com/" target="_blank">Cleaning Management</a></li>
                
              </ul>
            </li>
         
            
              	

          </ul>
	


          <ul class="nav navbar-nav navbar-right">
		 
            <li><a href="index1.php" target="_self" style="font-size:15px;" >Login

		</a>
              </li>
        </div>
      </div>
	  </div>


     <div class="container">
	 <!-- image slider -->
    
	<div class="bs-example">
    <div id="myCarousel" class="carousel slide fixed-bottom" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" ></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
			<li data-target="#myCarousel" data-slide-to="7"></li>
			<li data-target="#myCarousel" data-slide-to="8"></li>
			<li data-target="#myCarousel" data-slide-to="9"></li>
			<li data-target="#myCarousel" data-slide-to="10"></li>
			<li data-target="#myCarousel" data-slide-to="11"></li>
			
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner "width="400px" height="400px">
            <div class="item">
                <img src="a1.jpg" alt="First Slide" width="400px" height="400px">
            </div>
            <div class="item">
                <img src="a2.jpg" alt="Second Slide" width="400px" height="400px">
            </div>
            <div class="item">
                <img src="a3.jpg" alt="Third Slide" width="400px" height="400px">
            </div>
			 <div class="item">
                <img src="a4.png" alt="Second Slide" width="400px" height="400px">
            </div>
			 <div class="item">
                <img src="a5.jpg" alt="Second Slide" width="400px" height="400px">
            </div>
			 <div class="item">
                <img src="a6.jpg" alt="Second Slide" width="400px" height="400px">
            </div>
			 <div class="item">
                <img src="a7.jpg" alt="Second Slide" width="400px" height="400px">
            </div>
			 <div class="item">
                <img src="a8.jpg" alt="Second Slide" width="400px" height="400px">
                                                                            
            </div> <div class="item">
                <img src="a9.jpeg" alt="Second Slide" width="400px" height="400px">
            </div> <div class="item">
                <img src="a10.jpg" alt="Second Slide" width="400px" height="400px">
            </div>
			 <div class="item active">
                <img src="bud1.jpg" alt="Second Slide" width="400px" height="400px">
            </div>
			 <div class="item">
                <img src="a12.jpg" alt="Second Slide" width="400px" height="400px">
            </div>
			
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
	 </div>	
<!-- gallery -->

</hr>
</br>

</div>


</br>

<div class="container">
<h2 style="font-family:cursive;">Railway Track Fault's  Detector</h2>
<p style="font-family:cursive;font-size:20px;">Presently in the real time world, commuters are using different types of transport facilities

such as flights, trains, buses, cars etc. But majority of the public in our country prefer

traveling in trains. The reason may be the comforts available for long journeys and relatively

lesser travelling charges. Though the railways has implemented many safety standards for the

safe journey, still one can witness some rail accidents and leading to the loss of many

precious lives and loss of property.

Some of the major reasons for rail accidents are due to the faults on the rail. At present our

railways are using manual methods of fault detection through human inspectors. This work is

an attempt to develop an advanced automatic track fault detection robot in railway network to

overcome the above problems. The proposed automatic robot system makes2 use of

ultrasonic sensors to detect the faults occur in the railway track and camera for sending the

faults.</p>


</div>
<!-- Survey carried out-->
<div class="container">
	<div class="row">
      <h3 align="center"> The Survey  We Carried Out </h3>
		<div class='list-group gallery'>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3' class="active">
                <a class="thumbnail fancybox" rel="ligthbox" href="http://railenquiry.eu5.org/h1.jpg">
                    <img class="img-responsive" alt="" src="h1.jpg" />
                    <div class='text-right'>
                        <small class='text-muted'>Track measurements</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://railenquiry.eu5.org/h2.jpg">
                    <img class="img-responsive" alt="" src="h2.jpg" />
                    <div class='text-right'>
                        <small class='text-muted'>Track measurements</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://railenquiry.eu5.org/h3.jpg">
                    <img class="img-responsive" alt="" src="h3.jpg" />
                    <div class='text-right'>
                        <small class='text-muted'>Track measurements</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://railenquiry.eu5.org/h4.jpg">
                    <img class="img-responsive" src="h4.jpg" alt=""  />
                    <div class='text-right'>
                        <small class='text-muted'>Track measurements</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://railenquiry.eu5.org/h5.jpg">
                    <img class="img-responsive" alt="" src="h5.jpg" />
                    <div class='text-right'>
                        <small class='text-muted'>Track measurements</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://railenquiry.eu5.org/h6.jpg">
                    <img class="img-responsive" alt="" src="h6.jpg" />
                    <div class='text-right'>
                        <small class='text-muted'>Track measurements</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> 
             <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="h15.jpg">
                    <img class="img-responsive" alt="" src="h15.jpg" />
                    <div class='text-right'>
                        <small class='text-muted'>Robots desgin<small>
                    </div> <!-- text-right / end -->
                </a>
            </div>
             <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="h16.jpg">
                    <img class="img-responsive" alt="" src="h16.jpg" />
                    <div class='text-right'>
                        <small class='text-muted'>Track measurements</small>
                    </div> <!-- text-right / end -->
                </a>
            </div><!-- col-6 / end -->
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
</div> <!-- container / end -->


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


<script>
		
		(function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
		</script>
		<script>
	
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
   
  
		</script>

       
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


<!-- footer -->

</body>
</html>