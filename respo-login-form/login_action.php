<?php
header('Content-type: text/html; charset=utf-8');
session_start();
include('login_dbinfo.php');
if(isset($_POST['action'])==true)
{          
    if($_POST['action']=="login")
    {
        $username = mysqli_real_escape_string($connection,$_POST['username']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $strSQL = mysqli_query($connection,"select uname from users where uname='".$username."' and password='".md5($password)."'");
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1 && $_POST['username']!="admin")
        {
            			
		      $_SESSION['user_name'] = $_POST['username'];
              $_SESSION['user_pwd'] = $_POST['password'];
  
            header('Location: http://localhost/respo-login-form/landingPage/index.php');
        }
        else if($_POST['username']=="admin"){
            $_SESSION['user_name'] = $_POST['username'];
            $_SESSION['user_pwd'] = $_POST['password'];
            header('Location: http://localhost/respo-login-form/index.php');
        }
        else
        {
            $message = "Invalid email or password!!";
		      $_SESSION['user_email'] = "";
              $_SESSION['user_pwd'] = "";
		

            echo "$message";  

        }   

    }
    elseif($_POST['action']=="register")
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
            $query2="insert into users(fullname,uname,email,password) values('".$fullname."','".$username."','".$email."','".md5($password)."')";
            if(mysqli_query($connection,$query2)){
                    //$message = "Signup Sucessfully!!";        
		              //echo "$message";
                    header('Location: http://localhost/respo-login-form/');
              }
            else{
                echo "query failed!!";
              }
            //header('Location: http://localhost/respo-login-form/');
            /*mysqli_query($connection,"insert into users(fullname,email,uname,password) values('".$fullname."','".$email."','".$username."','".md5($password)."')");
            $message = "Signup Sucessfully!!";
        echo "$message";
           //header('Location: http://localhost/respo-login-form/');*/

        }
    }
}
?>