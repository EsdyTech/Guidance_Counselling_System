<?php
include('student/includes/dbconnection.php');
date_default_timezone_set('Africa/Lagos');
$currentDate = date("Y-m-d H:i:s",  STRTOTIME(date('h:i:sa')));

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Submit')
	{
        extract($_POST);
        $quee=mysqli_query($con,"select * from users_tbl where emailAddress ='$emailAddress'");
        $retd=mysqli_fetch_array($quee);

        if($retd > 0){
            $message = '<div style="color:red">The Email Address Already Exists!</div>';
        }
        else if($password != $conPassword){
            $message = '<div style="color:red">Password MisMatch!</div>';
        }
        else{

            $qq=mysqli_query($con,"insert into users_tbl(firstName,lastName,emailAddress,password,phoneNo,address,dob,gender,hobbies,course,qualification,qualificationGrade,skills,scheduleTypeId,dateCreated) 
            value('$firstName','$lastName','$emailAddress','$password','$phoneNo','$address','$dob','$gender','$hobbies','$course','$qualification','$qualificationGrade','$skills','$scheduleTypeId','$currentDate')");
            if ($qq) {
                $message ='<div style="color:green"> Candidate Registration Successful!</div>';
            }
            else
            {
                $message = '<div style="color:red">An Error Occured!</div>';
            }
        }
    }
}

?>