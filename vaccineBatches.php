<!doctype html>
<html lang="en">
  <head>
    <title>Vaccines Batches</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>
      <!--Nav bar-->
      <div class="container-fluid">
        <div class="row min-vh-100 flex-column flex-md-row">
            <aside class="col-12 col-md-2 p-0 bg-dark flex-shrink-1">
                <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">
                    <div class="collapse navbar-collapse ">
                        <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                          <li class="nav-item">
                            <img src="Vaccine_Icon.png" alt="Vaccine Logo"  class="img-fluid d-none d-md-inline" >
                        </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="PatientProfile.html"><i class="fa fa-book fa-fw"></i> <span class="d-none d-md-inline">Profile</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link pl-0" href="vaccines.html"><i class="fa fa-cog fa-fw"></i> <span class="d-none d-md-inline">Vaccines</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="status.html"><i class="fa fa-heart codeply fa-fw"></i> <span class="d-none d-md-inline">Status</span></a>
                            </li>
                            <li class="nav-item active">
                              <a class="nav-link pl-0 ml-3 fixed-bottom" href="login.html"><i class="fa fa-unlock-alt fa-fw"></i> <span class="d-none d-md-inline font-weight-bolder">LogOut</span></a>
                          </li>
                        </ul>
                    </div>
                </nav>
            </aside>
            <main class="col bg-info flex-grow-1">
                <div>
                  <p class="row h1 border-bottom border-dark ml-4 p-3 text-light" id="vaccineCenterName">Vaccine - Center Name</p> 
                </div>
                <div class="container">
                  <div class=" row align-items-center justify-content-center">
                      <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-dark rounded p-5 shadow">
                          <div class="parent-container">
                              <div class="container">
                                  <table class="table table-bordered table-light table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Batch ID</th>
                        <th scope="col">Number of Quantity</th>
                        <th scope="col">Expiry Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td data-toggle="modal" data-target="#firstbatch" id="batchNo" onclick="setminmaxDate()">123456</td>
                        <td id="amount">50</td>
                        <td id="expiryDate">2021-12-25</td>
                      </tr>
                      <!-- Modal -->
                      <div class="modal fade" id="firstbatch" tabindex="-1" aria-labelledby="firstbatch" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Select a Date</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <input type="date" id="appointmentDate" required>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="selectDate()">Confirm</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <tr>
                        <th scope="row">2</th>
                        <td>BatchNo</td>
                        <td>No</td>
                        <td>Date</td>
                      </tr>

                      <tr>
                        <th scope="row">3</th>
                        <td>BatchNo</td>
                        <td>No</td>
                        <td>Date</td>
                      </tr>
                    </tbody>
                    </table>
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
    <script src="PatientCenterName.js"></script>
    <script src="Javascript.js"></script>
  </body>
</html>