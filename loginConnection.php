<?php
 //connection
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "vaccess";

 if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
     die("failed to connect!");
 }
?>