<?php
    session_start();

    include("dbcon.php");

    if(isset($_SESSION['patientUsername']))
    {
        $username = $_SESSION['patientUsername'];
        $password = $_SESSION['patientPassword'];
        $query = "SELECT * FROM patients WHERE username = '$username' AND password = '$password'";

        $result = $connection->query($query);
        if($result -> num_rows > 0)
        {
            $user_data = $result -> fetch_assoc();
        }
    }

    $vacid = $_SESSION['vacId'];
    $center = $_SESSION['center'];
    $username = $_SESSION['patientUsername'];
    $password = $_SESSION['patientPassword'];
    $_SESSION['appointmentDate'] = $_POST['appointmentDate'];
    $appointmentDate = $_SESSION['appointmentDate'];
    $status = "pending";
    $remarks = null;

    echo $center;
    echo $username;
    echo $password;
    echo $appointmentDate;

    $query = "INSERT INTO appointments VALUES ('$vacid', '$status', '$appointmentDate', '$center', '$remarks' )"
?>