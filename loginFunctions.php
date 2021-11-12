<?php

function check_login($con){
    if(isset($_SESSION['user_name']))
    {
        $username = $_SESSION['user_name'];
        $query = "select * from staffs where user_name = '$username' limit 1 ";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: loginStaff.php");
    die;
}

?>