<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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
    <div class="parent-container d-flex">
        <div class="container-fluid">
            <div class="row min-vh-100 flex-column flex-md-row">
                <aside class="col-12 col-md-2 p-0 bg-dark flex-shrink-1">
                    <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">
                        <div class="collapse navbar-collapse ">
                            <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                                <img src="Vaccine_Icon.png" alt="Vaccine Logo" class="img-fluid col-1 col-sm-1 col-md-1 col-lg-8 d-none d-md-inline">

                                <li class="nav-item">
                                    <a class="nav-link pl-0" href="staffprofile.php"><i class="fa fa-book fa-fw text-light "></i> <span class="d-none d-md-inline text-light font-weight-bolder">Profile</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-0" href="addBatch.php"><i class="fa fa-plus fa-fw text-light"></i> <span class="d-none d-md-inline text-light font-weight-bolder">Add Batch</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link pl-0" href="viewVaccine.php"><i class="fa fa-eye fa-fw text-light"></i> <span class="d-none d-md-inline text-light font-weight-bolder">View Batch</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link pl-0 ml-3 fixed-bottom " href="login.php"><i class="fa fa-unlock-alt fa-fw text-light"></i> <span class="d-none d-md-inline text-light font-weight-bolder">Log Out</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </aside>
                <main class="col bg-info">
                    <div>
                        <p class="row h1 border-bottom border-dark ml-4 p-3 text-dark " id="vaccineName">Vaccine Name</p>
                    </div>
                    
                
                    <div class="container">
                        <div class=" row align-items-center justify-content-center">
                            <div class="  col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-dark rounded p-5 shadow">
                                <h4 class=" text-light">View Batch</h4>
                                <div class="parent-container">
                                    <div class="container">
                                        <div class="row">
                                            <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-light">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">No.</th>
                                                        <th scope="col">BatchID</th>
                                                        <th scope="col">No of Available</th>
                                                        <th scope="col">Expiry Date</th>
                                                        <th scope="col">Pending</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><a href="viewVacBat.php" class="mb-0 text-center text-decoration-none text-dark" id="batchNumber" onclick="vaccineNameAndBatchNumber()">B0000001</a></td>
                                                        <td><a href="viewVacBat.php" class="mb-0 text-center text-decoration-none text-dark" id="available">10</a></td>
                                                        <td><a href="viewVacBat.php" class="mb-0 text-center text-decoration-none text-dark" id="expiryDate">00/00/00</a></td>
                                                        <td><a href="viewVacBat.php" class="mb-0 text-center text-decoration-none text-dark">2</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><a href="viewVacBat.php" class="mb-0 text-center text-decoration-none text-dark" onclick="vaccineNameAndBatchNumber()">B0000002</a></td>
                                                        <td><a href="viewVacBat.php" class="mb-0 text-center text-decoration-none text-dark" >30</a></td>
                                                        <td><a href="viewVacBat.php" class="mb-0 text-center text-decoration-none text-dark">00/00/00</a></td>
                                                        <td><a href="viewVacBat.php" class="mb-0 text-center text-decoration-none text-dark">10</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><a href="viewVacBat.php" class="mb-0 text-center text-decoration-none text-dark" onclick="vaccineNameAndBatchNumber()">B0000003</a></td>
                                                        <td><a href="viewVacBat.php" class="mb-0 text-center text-decoration-none text-dark">20</a></td>
                                                        <td><a href="viewVacBat.php" class="mb-0 text-center text-decoration-none text-dark">00/00/00</a></td>
                                                        <td><a href="viewVacBat.php" class="mb-0 text-center text-decoration-none text-dark">15</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
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
         
    </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="Javascript.js"></script>
        <script src="VaccineName.js"></script>
        <script src="viewBatch.js"></script>
    </body>
</html>