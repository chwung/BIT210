<?php
    session_start();

    include("dbcon.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Vaccines</title>
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
                                <img src="Vaccine_Icon.png" alt="Vaccine Logo"  class="img-fluid d-none d-md-inline">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="PatientProfile.php"><i class="fa fa-user-circle fa-fw"></i> <span class="d-none d-md-inline">Profile</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link pl-0" href="vaccines.php"><i class="fa fa-medkit fa-fw"></i> <span class="d-none d-md-inline">Vaccines</span></a>
                            </li>
                            <li class="nav-item">
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
                    <p class="row h1 border-bottom border-dark ml-4 p-3 text-light ">Vaccines</p>
                </div>
                <div class="container">
                    <div class=" row align-items-center justify-content-center">
                        <div class=" ccol-12 col-sm-10 col-md-8 col-lg-12 col-xl-12 bg-dark rounded p-5 shadow">
                            <div class="parent-container">
                                <div class="container">
                                    <div class="row" id="vaccine">
                                        <div class="col-6 bg-secondary">
                                            <div class="row">
                                                <a class="btn btn-secondary btn-block" onclick="selectVaccine('Pfizer')" id="Vac1" role="button" data-toggle="collapse" href="#Pfizer" aria-expanded="false" aria-controls="Pfizer">
                                                    Pfizer
                                                  </a>
                                            </div>
                                            <div class="row">
                                                <a class="btn btn-secondary btn-block" onclick="selectVaccine('Sinovac')" role="button" data-toggle="collapse" href="#Sino" aria-expanded="false" aria-controls="sino">
                                                    Sinovac
                                                  </a>
                                            </div>
                                            <div class="row">
                                                <a class="btn btn-secondary btn-block" onclick="selectVaccine('Astra')" role="button" data-toggle="collapse" href="#Astra" aria-expanded="false" aria-controls="Astra">
                                                    Astra
                                                  </a>
                                            </div>
                                        </div>
                                        <div class="col-6 bg-light collapse" id="Pfizer" data-parent="#vaccine">
                                            <?php
                                                $query = "SELECT DISTINCT centre_name from pfizer_batch";
                                                $result = $connection -> query($query);

                                                if($result -> num_rows > 0){
                                                    while($batch = $result -> fetch_assoc()){
                                                        $center = $batch['centre_name'];
                                                        echo '<div class="row">';
                                                        echo "<a href='vaccineBatches.php";
                                                        echo "?center=$center";
                                                        echo "&vac=Pfizer'>";
                                                        echo "$center";
                                                        echo '</a>';
                                                        echo '</div>';
                                                    }
                                                    
                                                }
                                            ?>
                                        </div>
                                        <div class="col-6 bg-light collapse" id="Sino" data-parent="#vaccine">
                                            <?php
                                                $query = "SELECT DISTINCT centre_name from sino_batch";
                                                $result = $connection -> query($query);

                                                if($result -> num_rows > 0){
                                                    while($batch = $result -> fetch_assoc()){
                                                        $center = $batch['centre_name'];
                                                        echo '<div class="row">';
                                                        echo "<a href='vaccineBatches.php";
                                                        echo "?center=$center";
                                                        echo "&vac=Sino'>";
                                                        echo "$center";
                                                        echo '</a>';
                                                        echo '</div>';
                                                    }
                                                }
                                            ?>
                                        </div>
                                        <div class="col-6 bg-light collapse" id="Astra" data-parent="#vaccine">
                                            <?php
                                                $query = "SELECT DISTINCT centre_name from astra_batch";
                                                $result = $connection -> query($query);

                                                if($result -> num_rows > 0){
                                                    while($batch = $result -> fetch_assoc()){
                                                        $center = $batch['centre_name'];
                                                        echo '<div class="row">';
                                                        echo "<a href='vaccineBatches.php";
                                                        echo "?center=$center";
                                                        echo "&vac=Astra'>";
                                                        echo "$center";
                                                        echo '</a>';
                                                        echo '</div>';
                                                }
                                            }
                                            ?>
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
</body>
</html>