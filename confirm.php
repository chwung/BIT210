<?php
session_start();
include("dbcon.php");

$remarks = $_POST['remarks'];
$vacc = $_POST['vaccID'];
$email = $_POST['email'];
$batch_id = $_SESSION['batchID'];
$vaccine = $_SESSION['appVaccine'];
$expiry_date = $_SESSION['appExp'];

if(isset($_POST['Confirm'])){
    $query_data = "UPDATE appointments SET status='Confirmed' , vaccination_id='$vacc' WHERE email = '$email'";
    $connection->query($query_data);
}else if(isset($_POST['reject'])){
    $query_data = "UPDATE appointments SET status='Rejected' WHERE email = '$email'";
    $connection->query($query_data);
} else if(isset($_POST['Administered'])){
    $query_data = "UPDATE appointments SET status='Administered', remarks ='$remarks' WHERE email = '$email'";
    $connection->query($query_data);
}


header("location: viewVacBat.php?batch=$batch_id&vaccine=$vaccine&expiry=$expiry_date");

?>