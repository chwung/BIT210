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
        $email = $user_data['email'];

        $id = "";
        $status = "";
        $center = "";
        $date = "";

        $appQuery = "SELECT * FROM appointments WHERE email = '$email'";
        $data = $connection->query($appQuery);
        if($data -> num_rows > 0)
        {
            $user_app = $data -> fetch_assoc();

            $id = $user_app['vaccination_id'];
            $status = $user_app['status'];
            $center = $user_app['appointment_center'];
            $date = $user_app['appointment_date'];

        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Status</title>
  </head>
  <body>
    <!--Nav bar-->
    <div class="container-fluid">
      <div class="row min-vh-100 flex-column flex-md-row">
          <aside class="col-12 col-md-2 p-0 bg-dark flex-shrink-1">
              <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">
                  <div class="collapse navbar-collapse">
                      <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                          <li class="nav-item">
                              <img src="Vaccine_Icon.png" alt="Vaccine Logo"  class="img-fluid d-none d-md-inline" >
                          </li>
                          <li class="nav-item">
                              <a class="nav-link pl-0" href="PatientProfile.php"><i class="fa fa-user-circle fa-fw"></i> <span class="d-none d-md-inline">Profile</span></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link pl-0" href="vaccines.php"><i class="fa fa-medkit fa-fw"></i> <span class="d-none d-md-inline">Vaccines</span></a>
                          </li>
                          <li class="nav-item active">
                              <a class="nav-link pl-0" href="status.php"><i class="fa fa-heart codeply fa-fw"></i> <span class="d-none d-md-inline">Status</span></a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link pl-0 ml-3 fixed-bottom" href="login.php"><i class="fa fa-unlock-alt fa-fw"></i> <span class="d-none d-md-inline font-weight-bolder">LogOut</span></a>
                        </li>
                      </ul>
                  </div>
              </nav>
          </aside>
          <main class="col bg-info flex-grow-1">
            <div>
                <p class="row h1 border-bottom border-dark ml-4 p-3 text-light ">Status</p>
            </div>
            <div class="container">
                <div class=" row align-items-center justify-content-center">
                    <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-dark rounded p-5 shadow">
                        <div class="parent-container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 bg-light">
                                        <dl class="dl-horizontal">
                                            <dt class="col-sm-3">Vaccination ID</dt>
                                            <?php
                                            echo '<dd class="col-sm-9"> ';
                                            echo $id;
                                            echo '</dd>';
                                            ?>
                                            <dt class="col-sm-3">Status</dt>
                                            <?php
                                            echo '<dd class="col-sm-9"> ';
                                            echo $status;
                                            echo '</dd>';
                                            ?>

                                            <dt class="col-sm-6">Appointment Date</dt>
                                            <?php
                                            echo '<dd class="col-sm-9"> ';
                                            echo $date;
                                            echo '</dd>';
                                            ?>

                                            <dt class="col-sm-6">Appointment Center</dt>
                                            <?php
                                            echo '<dd class="col-sm-9"> ';
                                            echo $center;
                                            echo '</dd>';
                                            ?>
                                        </dl>
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
    <!--Until Here-->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="status.js"></script>
  </body>
</html>