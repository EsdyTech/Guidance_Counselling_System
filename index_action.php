<?php
include('student/includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Login')
	{
        extract($_POST);
        
        $que=mysqli_query($con,"select * from users_tbl where emailAddress ='$emailAddress' and password = '$password'");
        $ret=mysqli_fetch_array($que);
        if($ret > 0){
            session_start();
            $_SESSION['user_id'] = $ret['id'];
            $_SESSION['user_emailAddress'] = $ret['emailAddress'];
            $_SESSION['user_fullname'] = $ret['firstName'].' '. $ret['lastName'];

            echo "<script type = \"text/javascript\">
            window.location = (\"student/index.php\");
            </script>";
        }
        else{

            $message ='<div style="color:red;" class="text-center font-weight-light">Invalid Username/Password!</div>';
        }
    }
}

?>