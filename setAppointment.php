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
    $email = $user_data['email'];
    $center = $_SESSION['center'];
    $username = $_SESSION['patientUsername'];
    $password = $_SESSION['patientPassword'];
    $_SESSION['appointmentDate'] = $_POST['appointmentDate'];
    $appointmentDate = $_SESSION['appointmentDate'];
    $_SESSION['batch'] = $_POST['batch'];
    $batch = $_SESSION['batch'];
    $status = "Pending";
    $remarks = "";

    echo $center;
    echo $username;
    echo $password;
    echo $appointmentDate;
    echo $batch;

    $query = "INSERT INTO appointments VALUES ('$batch','$email', NULL, '$status', '$appointmentDate', '$center', '$remarks' )";

    $connection -> query($query);

    header('location: status.php');
?>