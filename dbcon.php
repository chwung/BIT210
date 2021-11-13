<?php
session_start();

$connection = new mysqli ("localhost", "root", "", "vaccess");

if ($connection -> connect_error){
    die($connection -> connect_error);
}else{
<<<<<<< HEAD
    echo '<script type="text/javascript">';
    echo 'alert("Connection success.")';
    echo '</script>';
=======
    echo"<script type="text/javascript">
    alert('Connection success.');
    </script>";
>>>>>>> 55ed211830450f76c8e76a6db1382f429425c328
}
?>