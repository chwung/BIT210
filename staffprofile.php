<?php
session_start();

    include("loginConnection.php");
    include("loginFunctions.php");

    $user_data = check_login($con)

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
                                <a class="nav-link pl-0" href="StaffAddBatch.html"><i class="fa fa-plus fa-fw text-light"></i> <span class="d-none d-md-inline text-light font-weight-bolder">Add Batch</span></a>
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
                                                <?php echo $user_data['user_name'] ?>
                                                <p class=" h3 mb-4 mt-2" id="name"></p>
                                                <i class="fa fa-pencil fa-fw text-dark mt-2" data-toggle = "modal" data-target="#editModal"></i>

                                                <!--Modal-->
                                                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="editLabel">Username</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-4">
                                                                <input type="text" id="newUsername" class=" form-control">
                                                
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" onclick="changeUsername()" data-dismiss="modal">Confirm</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p class=" h3 mb-4 mr-2 ml-2">Password:</p>
                                                <?php echo $user_data['password'] ?>
                                                <p class=" h3 mb-4" id="password"></p>
                                                <i class="fa fa-pencil fa-fw text-dark"></i>
                                            </div>
                                            <div class="row">
                                                <p class=" h3 mb-4 mr-2 ml-2">Email:</p>
                                                <?php echo $user_data['email'] ?>
                                                <p class=" h3 mb-4" id="email"></p>
                                                <i class="fa fa-pencil fa-fw text-dark"></i>
                                            </div>
                                            <div class="row">
                                                <p class=" h3 mb-4 mr-2 ml-2">Centre Name:</p>
                                                <?php echo $user_data['centre_name'] ?>
                                                <p class=" h3 mb-4" id="centreName"></p>
                                                <i class="fa fa-pencil fa-fw text-dark"></i>
                                            </div>
                                            <div class="row">
                                                <p class=" h3 mb-4 mr-2 ml-2">Centre Address:</p>
                                                <?php echo $user_data['centre_address'] ?>
                                                <p class=" h3 mb-4"></p>
                                                <i class="fa fa-pencil fa-fw text-dark"></i>
                                            </div>
                                            <div class="row">
                                                <p class=" h3 mb-4 mr-2 ml-2">StaffID:</p>
                                                <?php echo $user_data['staff_id'] ?>
                                                <p class=" h3 mb-4"></p>
                                                <i class="fa fa-pencil fa-fw text-dark"></i>
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