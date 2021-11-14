<?php
session_start();

    include("dbcon.php");

    if(isset($_SESSION['staffUsername']))
    {
        $username = $_SESSION['staffUsername'];
        $password = $_SESSION['staffPassword'];
        $query = "SELECT * FROM staffs WHERE username = '$username' AND password = '$password'";

        $result = $connection->query($query);
        if($result -> num_rows > 0)
        {
            $user_data = $result -> fetch_assoc();
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>StaffProfile</title>
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
    <div class="container-fluid">
        <div class="row min-vh-100 flex-column flex-md-row">
            <aside class="col-12 col-md-2 p-0 bg-dark flex-shrink-1">
                <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">
                    <div class="collapse navbar-collapse ">
                        <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                            <img src="Vaccine_Icon.png" alt="Vaccine Logo" class="img-fluid col-1 col-sm-1 col-md-1 col-lg-8 d-none d-md-inline">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="#"><i class="fa fa-book fa-fw text-light "></i> <span class="d-none d-md-inline text-light font-weight-bolder">Profile</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="addBatch.php"><i class="fa fa-plus fa-fw text-light"></i> <span class="d-none d-md-inline text-light font-weight-bolder">Add Batch</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link pl-0" href="StaffViewVaccine.html"><i class="fa fa-eye fa-fw text-light"></i> <span class="d-none d-md-inline text-light font-weight-bolder">View Batch</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link pl-0 ml-3 fixed-bottom" href="login.html"><i class="fa fa-unlock-alt fa-fw text-light"></i> <span class="d-none d-md-inline text-light font-weight-bolder">Log Out</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </aside>
            <main class="col bg-info py-3 flex-grow-1">
                <div class="container">
                    <div class="row vh-100 align-items-center justify-content-center">
                        <div class=" col-12 col-sm-8 col-md-6 col-lg-4 col-xl-7 bg-dark rounded p-5 shadow">
                            <h2 class=" text-dark font-weight-bolder text-md-center">Name</h2>
                            <div class="parent-container">
                                <div class="container">
                                    <div class="row h-100">
                                        <div class="col-lg-12 bg-light shadow rounded">
                                            <div class="row">
                                                <p class=" h3 mb-4 mr-2 mt-2 ml-2">Username:</p>
                                                <?php 
                                                echo '<p style= "font-size: 35px">';
                                                echo $user_data['username'];
                                                echo '</p>';  
                                                ?>
                                            </div>
                                            <div class="row">
                                                <p class=" h3 mb-4 mr-2 mt-2 ml-2">Full Name:</p>
                                                <?php 
                                                echo '<p style= "font-size: 35px">';
                                                echo $user_data['fullname'];
                                                echo '</p>';  
                                                ?>
                                            </div>
                                            <div class="row">
                                                <p class=" h3 mb-4 mr-2 ml-2">Password:</p>
                                                <?php 
                                                echo '<p style= "font-size: 30px">';
                                                echo $user_data['password'];
                                                echo '</p>';  
                                                ?>
                                            </div>
                                            <div class="row">
                                                <p class=" h3 mb-4 mr-2 ml-2">Email:</p>
                                                <?php 
                                                echo '<p style= "font-size: 30px">';
                                                echo $user_data['email'];
                                                echo '</p>';  
                                                ?>
                                            </div>
                                            <div class="row">
                                                <p class=" h3 mb-4 mr-2 ml-2">Centre Name:</p>
                                                <?php 
                                                echo '<p style= "font-size: 30px">';
                                                echo $user_data['centre_name'];
                                                echo '</p>';  
                                                ?>
                                            </div>
                                            <div class="row">
                                                <p class=" h3 mb-4 mr-2 ml-2">Centre Address:</p>
                                                <?php 
                                                echo '<p style= "font-size: 25px">';
                                                echo $user_data['centre_address'];
                                                echo '</p>';  
                                                ?>
                                            </div>
                                            <div class="row">
                                                <p class=" h3 mb-4 mr-2 ml-2">StaffID:</p>
                                                <?php 
                                                echo '<p style= "font-size: 30px">';
                                                echo $user_data['staff_id'];
                                                echo '</p>';  
                                                ?>
                                            </div>
    
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
    <script src="profile.js"></script>
    <script src="Javascript.js"></script>
</body>
</html>