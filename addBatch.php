<?php
session_start();
include("dbcon.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    //something was posted
    $batch_id = $_POST['batch_id'];
    $expiry_date = $_POST['expiry_date'];
    $quantity = $_POST ['quantity'];

    $username = $_SESSION['staffUsername'];
    $password = $_SESSION['staffPassword'];
    $query = "SELECT * FROM staffs WHERE username = '$username' AND password = '$password'";

    $result = $connection->query($query);
    if($result -> num_rows > 0)
    {
        $user_data = $result -> fetch_assoc();
    }

    $centre_name = $user_data['centre_name'];

    
    if (isset($_POST['submit'])){
        if($_POST['vaccine'] == 'pfizer'){
            $sqlQuery = "INSERT INTO pfizer_batch VALUES ('$centre_name','$batch_id', '$expiry_date', '$quantity')";
		    $result = $connection -> query($sqlQuery);  //execute query (php)

        }else if($_POST['vaccine'] == 'sinovac'){
            $sqlQuery = "INSERT INTO sino_batch VALUES ('$centre_name','$batch_id', '$expiry_date', '$quantity')";
            $result = $connection -> query($sqlQuery);  //execute query (php)

        }else if($_POST['vaccine'] == 'astrazeneca'){
            $sqlQuery = "INSERT INTO astra_batch VALUES ('$centre_name','$batch_id', '$expiry_date', '$quantity')";
            $result = $connection -> query($sqlQuery);  //execute query (php)

        }                            
    }
    
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>StaffAddBatch</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Staff.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
            <!--Nav bar-->
    <div class="container-fluid bg-secondary">
        <div class="row min-vh-100 flex-column flex-md-row">
            <aside class="col-12 col-lg-2 p-0 bg-dark flex-shrink-1">
                <nav class="navbar navbar-expand navbar-dark bg-dark flex-lg-column flex-row align-items-start py-2">
                    <div class="collapse navbar-collapse ">
                        <ul class="flex-lg-column flex-row navbar-nav w-100 justify-content-between">
                            <img src="Vaccine_Icon.png" alt="Vaccine Logo" class="img-fluid col-1 col-sm-1 col-md-1 col-lg-8 d-none d-md-inline">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="staffprofile.php"><i class="fa fa-book fa-fw text-light "></i> <span class="d-none d-md-inline text-light font-weight-bolder">Profile</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href=""><i class="fa fa-plus fa-fw text-light"></i> <span class="d-none d-md-inline text-light font-weight-bolder">Add Batch</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link pl-0" href="StaffViewVaccine.html"><i class="fa fa-eye fa-fw text-light"></i> <span class="d-none d-md-inline text-light font-weight-bolder">View Batch</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link pl-0 ml-3 fixed-bottom" href="login.php"><i class="fa fa-unlock-alt fa-fw text-light"></i> <span class="d-none d-md-inline text-light font-weight-bolder">Log Out</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </aside>

            <main class="col bg-info py-3 flex-grow-1">
                <div class="container">
                    <div class="row vh-100 align-items-center justify-content-center">
                        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-dark rounded p-5 shadow">
                            <h4 class=" text-light">Add Batch</h4>
                            <div class="parent-container d-flex">
                                <div class="container">
                                    <div class="row h-100 form-control">
                                        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-light">
                                            <!--Trigger modal-->
                                            <p class="h3 font-weight-bolder" data-toggle = "modal" data-target="#addBatchModal" onclick="setExpiryDate()"> <i class="fa fa-plus fa-fw text-dark form-control"></i> <span class="d-none d-lg-inline text-dark font-weight-bolder">Add Batch</span></p>

                                            <!--Modal-->
                                            <div class="modal fade" id="addBatchModal" tabindex="-1" role="dialog" aria-labelledby="addBatchLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="addBatchLabel">Add Batch</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <form method="POST">
                                                        <div class="modal-body">
                                                            <div class="mb-4">
                                                                <label for="batchNumber" class="form-label font-weight-bold">VaccineID</label>
                                                                <br>
                                                                <select id="Select" class="form-control" name="vaccine" >
                                                                    <option name="pfizer" value="pfizer">P0000001 - Pfizer</option>
                                                                    <option name="sinovac" value="sinovac">S0000001 - Sinovac</option>
                                                                    <option name="astrazeneca" value="astrazeneca">A0000001 - AstraZeneca</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-4">
                                                                <label id="manufacturer" class="form-label font-weight-bold">Manufacturer: </label>
                                                                <label id="manufacturerName" class="form-label font-weight-bold">Pfizer Inc.</label>
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="batchNumber" class="form-label font-weight-bold">Batch Number</label>
                                                                <br>
                                                                <input type="text" class="form-batchNumber" name="batch_id" size="50" maxlength="30" placeholder="Batch Number" id="batchNumber" inputmode="numeric" required>
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="expiryDate" class="form-label font-weight-bold">Expiry Date</label>
                                                                <br>
                                                                <input type="date" class="form-expiryDate" name="expiry_date" id="expiryDate" required>
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="quantity" class="form-label font-weight-bold">Quantity</label>
                                                                <br>
                                                                <input type="text" class="form-quantity" name="quantity" id="quantity" size="50" maxlength="30" placeholder="0" inputmode="numeric" required>
                                                            </div>
                                                        </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" name="submit" class="btn btn-primary" onclick="addBatch()" data-dismiss="moda">Save changes</button>
                                                            </div>
                                                    </form>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="container">
                                    <div class="row h-100 form-control">
                                        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-light">
                                            <ul class="list-group" id="listbatch">
                                                <li class="list-group-item d-flex justify-content-between align-items-center form-control" id="batch1">
                                                VaccineID
                                                
                                                </li>

                                                <li class="list-group-item d-flex justify-content-between align-items-center form-control">
                                                VaccineID
                                                
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center form-control">
                                                VaccineID
                                                
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                    
                        </div>
                
                    </div>
                </div>
            </main>  
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="Javascript.js"></script>
    <script src="SelectVaccine.js"></script>
    </body>
</html>