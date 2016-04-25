<!DOCTYPE html>
<html >
<head>
 <title>Railway Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(12.jpg);" >
<div class="container">
<h2 align="center" style="color:orange;"> Welcome To Railway Enquiry System </h2>


</div>
<table align="center" style="width:350px;">
<tr>
</th>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="panel panel-sucess">
<div class="panel-body">
<div class="page-header"style="margin-top:10px;" >
<h4 align="center">
<img src="in.png"class="image-circle" width="240px" height="240px"/>
</h4>
</div>
<form class="form-horizontal" action="login.php" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Admin Name</label>
    <div class="col-sm-10">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
      <input type="text" class="form-control" name="uname" placeholder="Enter the Admin Name!!" required>
    </div>
  </div>
  </br>
  </br>
  </br>
  <div class="form-group">
  
    <label for="inputPassword3" class="col-sm-2 control-label"> Password </label>
    <div class="col-sm-10">
	 <div class="input-group">
	 </br>
  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span> </span>
      <input type="password" class="form-control" id="inputPassword3" name="pwd" placeholder="Enter Admin The Password" required>
    </div>
	</div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-danger">Log in</button>
    </div>
  </div>
</form> 
</div>
</div>
</div>
</th>
</tr>
</table>
</body>

</html>  