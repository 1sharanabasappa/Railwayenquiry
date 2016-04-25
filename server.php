<?php

if($_SERVER[REQUEST_METHOD]=="POST")
{


$con=mysql_connect("localhost","sharanu","sugoor123");
        if(!$con)
          {
	          echo"<a href='front.html'>"."try Again"."</a>";
	
      	    }
	      mysql_select_db("rail") or die("not fnd");
$imageName = mysql_real_escape_string($_FILES["uploaded_file"]["name"]);
$imageData = mysql_real_escape_string(file_get_contents($_FILES["uploaded_file"]["tmp_name"]));
//$imagetype = mysql_real_escape_string($_FILES["$image"]["type"]);

		//	echo "success";
            $sql1="SELECT * FROM temp1";
        $res=mysql_query($sql1);
           while ($row=mysql_fetch_array($res))
           {  $t5=$row[1];
             echo $t5;
            $t6=$row[2];
            echo $t6;
            $t7=$row[3];
            echo $t7;
            $t8=$row[4];
            echo $t8;
            $t9=$row[5];
            echo $t9;
            break;
           }
            
             
            
            $sql3="INSERT INTO images (name,image,lon,lat,location,faults,fdate) VALUES('$imageName','$imageData','$t5','$t6','$t7','$t9','$t8')";
            $res=mysql_query($sql3) or die("not executed");
            $sql4="DELETE FROM temp1";
           //  $sql5="DELETE FROM temp2";
         mysql_query($sql4);
          // mysql_query($sql5);
                      
            
        }
	



else
	
echo "only images are allowed";



?>