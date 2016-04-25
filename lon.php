<?php
if($_SERVER[REQUEST_METHOD]=="POST")
{

$con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
    $t=$_POST["long"];
    $t1=$_POST["lat"];
            
    $sql="INSERT INTO lona (lon,lat) VALUES('$t','$t1')"



}
?>