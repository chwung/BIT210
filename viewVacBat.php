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
                                    <a class="nav-link pl-0 ml-3 fixed-bottom" href="login.php"><i class="fa fa-unlock-alt fa-fw text-light"></i> <span class="d-none d-md-inline text-light font-weight-bolder">Log Out</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </aside>
                <main class="col bg-info">
                    <div>
                        <p class="row h1 border-bottom border-dark ml-4 p-3 text-dark " id="vaccineAndBatchNo">Vaccine Name - Batch No</p>
                    </div>
                    
                    <!--Table-->
                    <div class="container">
                        <div class=" row align-items-center justify-content-center">
                            <div class="  col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-dark rounded p-5 shadow">
                                <h4 class=" text-light">View Batch</h4>
                                <div class="parent-container">
                                    <div class="container">
                                        <div class="row">
                                            <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-light">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">No.</th>
                                                        <th scope="col">VaccineID</th>
                                                        <th scope="col">Appointment Date</th>
                                                        <th scope="col">Remarks</th>
                                                        <th scope="col">Pending/Administered</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td data-toggle = "modal" data-target="#approvalModal">P0000001</td>

                                                        <!--Modal-->
                                                        <div class="modal fade" id="approvalModal" tabindex="-1" role="dialog" aria-labelledby="approvalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="approvalLabel">VaccineID</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class=" container-fluid">
                                                                        <div class="row">
                                                                            <p class=" col-md-4" id="batch" >BatchNo</p>
                                                                            <p class=" col-md-4" id="date">ExpiryDate</p>
                                                                            <p class=" col-md-4">Pfizer Inc.</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <p class=" col-md-4" id="vaccine">Vaccine Name</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <p class=" col-md-4">Kaw Yu Zhe</p>
                                                                            <p class=" col-md-4">011225-07-0119</p>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reject()">Reject</button>
                                                                <button type="button" class="btn btn-primary" onclick="approve()" data-dismiss="modal">Confirm</button>
                                    
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        

                                                        <td>00/00/00</td>
                                                        <td></td>
                                                        <td id="pending">Pending</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>P0000002</td>
                                                        <td>00/00/00</td>
                                                        <td></td>
                                                        <td>Administered</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td data-toggle = "modal" data-target="#administeredModal">P0000003</td>

                                                        <div class="modal fade" id="administeredModal" tabindex="-1" role="dialog" aria-labelledby="approvalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="administeredLabel">VaccineID</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class=" container-fluid">
                                                                        <div class="row">
                                                                            <p class=" col-md-4" id="administeredbatch">BatchNo</p>
                                                                            <p class=" col-md-4" id="administereddate">ExpiryDate</p>
                                                                            <p class=" col-md-4">Pfizer Inc.</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <p class=" col-md-4" id="administeredvaccine">Vaccine Name</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <p class=" col-md-4">Wong Wei Chong</p>
                                                                            <p class=" col-md-4">010830-10-1505</p>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary" data-toggle = "modal" data-target="#remarksModal" onclick="administered()">Administered</button>

                                                                <!--Modal-->
                                                                <div class="modal fade" id="remarksModal" tabindex="-1" role="dialog" aria-labelledby="remarksLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="mb-4">
                                                                                <label for="Remarks" class="form-label font-weight-bold">Remarks</label>
                                                                                <br>
                                                                                <textarea class=" w-100" name="Remarks" id="remarks" rows="5" required></textarea>
                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary" onclick="setRemarks()" data-dismiss="modal">Save changes</button>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                    
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <td>00/00/00</td>
                                                        <td id="comment"></td>
                                                        <td id="administered">Comfirmed</td>
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
  </body>
  <script src="Javascript.js"></script>
  <script src="VaccineAndBatchNo.js"></script>
  
</html>