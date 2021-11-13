<?php
session_start();

$connection = new mysqli ("localhost", "root", "", "vaccess");

if ($connection -> connect_error){
    die($connection -> connect_error);
}else{
    echo"<script type="text/javascript">
    alert('Connection success.');
    </script>";
}
?>