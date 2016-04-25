<!doctype html>
<html>
<head>
<title> Error page </title>
</head>
<body>

<?php
session_start();
?>
<?php
$con=mysql_connect("localhost","933676","sugoor123");
        if(!$con)
        {
	echo"<a href='front.html'>"."try Again"."</a>";
	
	    }
	    mysql_select_db("933676") or die(mysql_error());
		$sql="CREATE TABLE IF NOT EXISTS user(
                          		id INT NOT NULL DEFAULT 0,
								uname VARCHAR(30),
								pwd VARCHAR(40),
								PRIMARY KEY(pwd)
								)";
								mysql_query($sql) or die("NOT CREATED");
								
$sql="SELECT uname,pwd FROM user";
$st=mysql_query($sql);
while($row=mysql_fetch_array($st))
{
$k=0;
if((!strcmp($_POST["uname"],$row["uname"]))&&((!strcmp($_POST["pwd"],$row["pwd"]))))
{$k=1;
break;
//	header("location:home.php");
}
}
if($k==0)
{
 header('location:http://railenquiry.eu5.org');	
}
else
{
	$_SESSION["uname"]=$_POST["uname"];
		header("location:home.php");
}
?>
</body>
</html>