<?php
session_start();
  include("loginConnection.php");
  include("loginFunctions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
  //something was posted
  $user_name = $_POST ['username'];
  $password = $_POST['password'];

  if(!empty($user_name) && !empty($password)){
      //read from database
      $query =  "select * from staffs where username = '$user_name' limit 1";
     
      $result = mysqli_query($con, $query);
      
      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {
          
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] === $password)
            {
              $_SESSION['username'] = $user_data['username'];
              header("Location: staffprofile.php");
              die;
              
            }

        }
      }
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

    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="bg-info">
      <div class="container-fluid center">
        <div class="box bg-white">
          <figure><img src="Vaccine_Icon.png" alt="Vaccine Logo"></figure>
          <h1 class="text-center">Login</h1>
          <form method="post" id="form">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control sizing" id="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control sizing" id="password" name="password" required>
            </div>
            <div>
            <button type="submit" class="btn btn-primary w-100" onclick="//login()">Login</button>
            </div>
          </form>
          <p class="text-center">
          <a href="registerStaff.php" class="mb-0 text-center">Don't have an account?</a>
          </p>  
        </div>
      </div>
    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="Javascript.js"></script>
  </body>
</html>
