<head>

<?php session_start();
    ?>
</head>
<body>
<?php

    if(isset($_POST["ssign"]))
    { $_SESSION["t"]=$_POST["fdate"];
            $_SESSION["f1"]=$_POST["tdate"];
            $_SESSION["va"]=$_POST["sfield"];
       $_SESSION["load1"]=1;
     unset($_SESSION["load"]);
  header("location:cnt.php");

    
    }
    ?></body>