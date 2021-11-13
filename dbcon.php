<?php
session_start();

$connection = new mysqli ("localhost", "root", "", "vaccess");

if ($connection -> connect_error){
    die($connection -> connect_error);
}else{
    echo '<script type="text/javascript">';
    echo 'alert("Connection success.")';
    echo '</script>';
}
?>