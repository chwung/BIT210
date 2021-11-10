<?php
    session_start();

    $connection = new mysqli ("localhost", "root", "", "vaccess");

    if ($connection -> connect_error){
        die($connection -> connect_error);
    }else{
        echo '<script type="text/javascript">
        alert("Connection success.");
        </script>';
    }

    $username = $_POST["patientUsername"];
    $password = $_POST["patientPassword"];
    $email = $_POST["patientEmail"];
    $id = $_POST["patientID"];
    $flag = 0;

    $sqlQuery = "SELECT * FROM PATIENTS";

    $status = $connection->query($sqlQuery);
    
    if($status -> num_rows > 0){                        //checks if there's any patients
        echo "All users info <br>";
        while ($row = $status -> fetch_assoc()) {
            echo "Name : " . $row["username"] . "<br>";
            if ($username == $row["username"]){
                $flag = 1;
                }
        }
    }

    if ($flag == 1){                                    //user already exists
        echo "User $fullname already exist <br>";
        } else {                                        //user doer not exists
            $sqlQuery = "INSERT INTO USERS VALUES ('$username' , '$password', '$email', '$id')";
			$result = $connection -> query($sqlQuery);  //execute query (php)
				if ($result == TRUE){                   //check status of query
					echo "User Registered successfully";
                    //header("location: login.html");
				} else {
					echo "Registration failed";
                    //header("location: RegisterPatient.html");
				}
        }
        
    $connection->close();
?>