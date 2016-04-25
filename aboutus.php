<html><head>
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
    .card {
    padding-top: 20px;
    margin: 10px 0 20px 0;
    background-color: rgba(214, 224, 226, 0.2);
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card .card-heading {
    padding: 0 20px;
    margin: 0;
}

.card .card-heading.simple {
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}

.card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 15px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

.card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

.card .card-body {
    padding: 0 20px;
    margin-top: 20px;
}

.card .card-media {
    padding: 0 20px;
    margin: 0 -14px;
}

.card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

.card .card-actions {
    min-height: 30px;
    padding: 0 20px 20px 20px;
    margin: 20px 0 0 0;
}

.card .card-comments {
    padding: 20px;
    margin: 0;
    background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 20px 12px 20px;
}

.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

.card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: 20px;
    overflow: hidden;
    vertical-align: top;
}

.card.people:first-child {
    margin-left: 0;
}

.card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 150px;
    height: 150px;
    background-color: #ffffff;
}

.card.people .card-top.green {
    background-color: #53a93f;
}

.card.people .card-top.blue {
    background-color: #427fed;
}

.card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

.card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    line-height: 16px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px 20px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: rgba(214, 224, 226, 0.2);
}

.card.hovercard .cardheader {
    background: url("si.jpg");
    background-size: cover;
    height: 135px;
}

.card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}

.card.hovercard .avatar img {
    width: 200px;
    height: 300px;
    max-width: 200px;
    max-height: 150px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 3px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
    padding: 4px 8px 10px;
}

.card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

.card.hovercard .info .desc {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 12px;
}

.btn{ border-radius: 50%; width:32px; height:32px; line-height:18px;  }

body {
    background-image: url("taa.jpg");
    font-family: cursive;
}
    
    </style>

<style>
    html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 80px;
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
<body>
    <nav role="navigation" class="navbar navbar-default navbar-fixed-top" style="background-color:black;">
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
            <li ><a href="index.php">Home</a></li>
            
            <li > <a href="aa.php">Faults Stastics</a>
            </li>
            <li class="active"> <a href="aboutus.php">About Us</a></li>
                </ul>
            </li>
        </ul>
       
        <ul class="nav navbar-nav navbar-right">
            
            <li><a href="home.php" target="_self" >Logout</a></li>
        </ul>
    </div>
</nav>

    
    
    
    </div>
    </br></br></br></br></br>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <h1>    About Us </h1>
<div class="row">
    
    <div class="col-md-3 col-sm-6">
          <h2 align="center" style="font-family: cursive;"> Under Guidence  </h2>
            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="hod1.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="http://www.sjcecampus.org/index.php/home/profile/0000000034">Dr. M.N. Shanmukha swamy</a>
                    </div>
                    <div class="desc" style="color:blue;"><h4>Professor & HOD</h4></div>
                    <div class="desc"style="color:blue;">Electronics and Communication</div>
                    <div class="desc" style="color:blue;">Email :mnsjce@gmail.com</div>
                   
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                  
                    </a>
                </div>
            </div>

        </div>

    </div>

</div>


<h1 align="center" style="font-family: cursive;"> Our Team</h1>
<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="me.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="#" style="font-family: cursive;">Sharanabasappa</a>
                    </div>
                    <div class="desc" style="color:blue;">  
                   <h4 style="font-family: cursive;"> USN:4JC12EC102</h4> 
                    </div> 
                    <div class="desc"style="font-family: cursive;color:blue;">Web Devloper</div>
                    
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                  
                    </a>
                </div>
            </div>

        </div>

        <div class="col-md-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="vivek.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="http://scripteden.com/">Vivek K S</a>
                    </div>
                    <div class="desc"style="color:blue;" ><h4>USN:4JC12EC102</h4></div>
                    <div class="desc" style="color:blue;">Electronics and Communication</div>
                    
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    
                </div>
            </div>

        </div>
        <div class="col-md-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="balu.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="http://scripteden.com/">Chethan </a>
                    </div>
                    <div class="desc" style="color:blue;">
                    <h4>USN:4JC12EC102</h4></div>
                    <div class="desc" style="color:blue;"> developer</div>
                    
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    
                </div>
            </div>
    </div>
      <div class="col-md-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="ravi.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="#">Ravikiran J J</a>
                    </div>
                    <div class="desc" style="color:blue;"><h4>USN:4JC12EC102</h4></div>
                    <div class="desc" style="color:blue;">Web developer</div>
                   
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                   
                </div>
            </div>
    </div>
    </div>

</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>





      
   <!-- footer desgin-->
 

               
</body>
</html>
