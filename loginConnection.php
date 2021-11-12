<?php
 //connection
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "login_staff_db";

 if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
     die("failed to connect!");
 }
?>