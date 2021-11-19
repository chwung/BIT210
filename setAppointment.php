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
    $vac = $_SESSION['vac'];
    

    echo $batch;

    $check = "SELECT * FROM appointments WHERE email = '$email'";
    $amount = $connection->query($check);
        if($amount -> num_rows > 0)
        {
            echo '<script type="text/javascript">';
            echo 'alert("You already made an appointment.");';
            echo 'window.location.href="status.php";';
            echo '</script>';
        }
        else{
            $query = "INSERT INTO appointments VALUES ('$batch','$email', NULL, '$status', '$appointmentDate', '$center', '$remarks' )";
            $connection -> query($query);

            switch ($vac){
                case "Pfizer":
                  $update = "UPDATE pfizer_batch SET quantity = quantity - 1 WHERE batch_id = '$batch'";
                  $connection -> query($update);
                  break;
                
                case "Sino":
                  $update = "UPDATE sino_batch SET quantity = quantity - 1 WHERE batch_id = '$batch'";
                  $connection -> query($update);
                  break;
        
                case "Astra":
                  $update = "UPDATE astra_batch SET quantity = quantity - 1 WHERE batch_id = '$batch'";
                  $connection -> query($update);
                  break;
              } 

            header('location: status.php');
        }

    //header('location: status.php');
?>