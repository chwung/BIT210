<?php
    session_start();

    include("dbcon.php");

    $vac = $_SESSION['vac'];
    $center = $_SESSION['center'];
    $username = $_SESSION['patientUsername'];
    $password = $_SESSION['patientPassword'];
    $_SESSION['appointmentDate'] = $_POST['appointmentDate'];
    $appointmentDate = $_SESSION['appointmentDate'];

    echo $vac;
    echo $center;
    echo $username;
    echo $password;
    echo $appointmentDate;

    
?>