<?php
session_start();
include('login_dbinfo.php');
if(isset($_POST['action']))
{    
    if($_POST['action']=="register")
    {
        $fullname       = mysqli_real_escape_string($connection,$_POST['fullname']);
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
        $username = mysqli_real_escape_string($connection,$_POST['username']);
        $password   = mysqli_real_escape_string($connection,$_POST['password']);
        $query = "SELECT email FROM users where email='".$email."'";
        $result = mysqli_query($connection,$query);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exist!!";
            echo($message);
        }
        else
        {
            if(mysqli_query($connection,"insert into users(fullname,uname,email,password) values('".$fullname."','".$username."','".$email."','".md5($password)."')")==true){
                    $message = "Signup Sucessfully!!";        
		              echo "$message";
              }
              else{
                echo "not executed!";
              }
            //header('Location: http://localhost/respo-login-form/');
        }
    }
}
?>