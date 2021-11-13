<?php
    session_start();

     $connection = new mysqli ("localhost", "root", "", "vaccess");

    $username = $_POST["username"];
    $password = $_POST["password"];
    $patientFlag = 0;
    $staffFlag = 0;

$sqlPatient = "SELECT * FROM PATIENTS WHERE username = '$username' AND password = '$password'";
$patient = $connection->query($sqlPatient);

$sqlStaff = "SELECT * FROM STAFF WHERE username = '$username' AND password = '$password'";
$staff = $connection->query($sqlStaff);

if($patient -> num_rows > 0){
    $patientFlag = 1;
} //else if($staff -> num_rows > 0) {
    //$staffFlag = 1;
//}

if($staffFlag == 0 && $patientFlag == 0){
    echo '<script type="text/javascript">
    alert("Username or Password wrong.");
    </script>';
    header("location: login.html");
} else if($patientFlag == 1) {
    $_SESSION['patientUsername'] = $username;
    $_SESSION['patientPassword  '] = $password;
    header("location: PatientProfile.html");
} else if($staffFlag == 1){
    $_SESSION['staffUsername'] = $username;
    $_SESSION['staffPassword'] = $password;
    header("location: StaffProfile.html");
}
?>