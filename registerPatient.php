<?php
    session_start();

    include ("dbcon.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="RegisterPatient.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <body class = "bg-info">
      <div class="row vh-100 align-items-center justify-content-center">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-4 bg-white rounded p-5 shadow">
          <img src="Vaccine_Icon.png" alt="Vaccine Logo">
          <h1 class="mb-0 text-center font-weight-bold">Create an Account</h1>
          
          <form id="form" name="patientForm" method="post" action="registerPatient.php">

            <div class="mb-4">
              <label for="select" class="form-label font-weight-bold">Choose</label>
              <br>
                <select id="Select" class="form-control" onchange="location = this.value;">
                    <option value="registerPatient.php">Patient</option>
                    <option value="registerStaff.php">Healthcare Administator</option>
                </select>
            </div>

            <div class="mb-4 form-group">
              <label for="username" class="form-label font-weight-bold">Username</label>
              <br>
              <input type="text" id="name" name="patientUsername" class="form-control" size="50" maxlength="30" placeholder="Username" required>
            </div>
            
            <div class="mb-4 form-group">
              <label for="password" class="form-label font-weight-bold">Password</label>
              <br>
              <input type="password" id="password" name="patientPassword" class="form-control" maxlength="30" placeholder="Password" required>
            </div>
      
            <div class="mb-4 form-group">
              <label for="email" class="form-label font-weight-bold">Email</label>
              <br>
              <input type="email" id="email" name="patientEmail" class="form-control" maxlength="30" placeholder="Email@gmail.com" required>
            </div>
      
            <div class="mb-4 form-group">
              <label for="id" class="form-label font-weight-bold">IC/Passport</label>
              <br>
              <input type="text" id="id" name="patientIC" class="form-control" maxlength="12"  placeholder="000000-00-0000/A00000000" required>
            </div>
      
            <div class="mb-4 text-center">
              <button type="submit" class="btn btn-primary w-25" id="btnSubmit" onclick="//validatePatient()">submit</button>
              <button type="button" class="btn btn-reset w-25" id="btnReset" onclick="reset()">reset</button>
            </div>
          </form>
          <p class="mb-0 text-center">Already have an account?<a href="login.php" class="mb-0 text-center text-decoration-none">Log In here!</a></p>
        </div>
      </div>
        
      <?php
        if($_SERVER['REQUEST_METHOD'] == "POST")
      {
        $username = $_POST["patientUsername"];
        $password = $_POST["patientPassword"];
        $email = $_POST["patientEmail"];
        $ic = $_POST["patientIC"];
        $flag = 0;
    
        #create table PATIENTS (username varchar(20), password varchar(20), email varchar(20), ic varchar(12)); (create table for database)
    
        $sqlQuery = "SELECT * FROM PATIENTS";
    
        $status = $connection->query($sqlQuery);
        
        if($status -> num_rows > 0){                        //checks if there's any patients
            while ($row = $status -> fetch_assoc()) {
                if ($email == $row["email"] || $username ==$row['username']){
                    $flag = 1;
                    }
            }
        }
    
        if ($flag == 1){                                    //user already exists
            echo '<script type="text/javascript">';
            echo 'alert("Account already in use.")';
            echo '</script>';
            } else {                                        //user doer not exists
                $sqlQuery = "INSERT INTO patients VALUES ('$username' , '$password', '$email', '$ic')";
                $result = $connection -> query($sqlQuery);  //execute query (php)
                    if ($result == TRUE){                   //check status of query
                        echo "User Registered successfully";
                        header("location: login.php");
                    } else {
                        echo "Registration failed";
                    }
            }

      }
            
        $connection->close();
      ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="Javascript.js">

    </script>

  </body>
</html>