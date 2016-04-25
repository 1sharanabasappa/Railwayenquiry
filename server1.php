<?php
if($_SERVER[REQUEST_METHOD]=="POST")
{



$con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
          $t1=$_POST["lon"];
          $t2=$_POST["lat"];
    $t3=$_POST["date1"];
    $t4=$_POST["fault"];
          $sql="INSERT INTO temp1 (lon,lat,location,date1,faults) VALUES('$t1','$t2','mysore','$t3','$t4')";
          if(mysql_query($sql))
          {
          echo "sucess";
              
             
              
              
              
              
              
          }
          else
          {
          echo "not sucess";
          }
          }
          ?>