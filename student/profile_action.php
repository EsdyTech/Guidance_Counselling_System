<?php
include('includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Update Profile')
	{
        extract($_POST);
        $quer=mysqli_query($con,"select * from users_tbl where id='$user_id'");
        $rosw=mysqli_fetch_array($quer);
        if($rosw > 0){

            $reta=mysqli_query($con,"update users_tbl set firstName='$firstName',lastName='$lastName',phoneNo='$phoneNo',address='$address',dob='$dob',gender='$gender',
            hobbies='$hobbies',course='$course',qualification='$qualification',qualificationGrade='$qualificationGrade',skills='$skills',scheduleTypeId='$scheduleTypeId' where id='$user_id'");
            if($reta){
                $userMsg = '<div style="color:green">Profile Updated Successfully!</div>';
            }
            else{
                $userMsg = '<div style="color:red">An Error Occured!</div>';
            }
        }
        else{
            $userMsg = '<div style="color:red">An Error Occured!</div>';
        }
    }

    if($_POST["action"] == 'Update Password')
	{
        extract($_POST);
        $querdy=mysqli_query($con,"select * from users_tbl where id='$user_id' and password='$currentPassword'");
        $rodw=mysqli_fetch_array($querdy);
        if($rodw > 0){

            if($newpassword == $conPassword){
                
                $retta=mysqli_query($con,"update users_tbl set password='$newpassword' where id='$user_id'");
                if($retta){
                    $passMsg = '<div style="color:green">Password Changed Successfully!</div>';
                }
                else{
                    $passMsg = '<div style="color:red">An Error Occured!</div>';
                }
            }
            else{
                $passMsg = '<div style="color:red">Password MisMatch!</div>';
            }
        }
        else{
            $passMsg = '<div style="color:red">Incorrect Password!</div>';
        }
    }
}

$quets=mysqli_query($con,"select * from users_tbl where id ='$user_id'");
$rwwss=mysqli_fetch_array($quets);

//all branch

?>