<?php
include('includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Save')
	{
        extract($_POST);
        $quee=mysqli_query($con,"select * from branch_tbl where branchName ='$branchName'");
        $retd=mysqli_fetch_array($quee);
        if($retd > 0){
            $message = '<div style="color:red">This Branch "'.$branchName.'" Already Exists!</div>';
        }
        else{

            $qq=mysqli_query($con,"insert into branch_tbl(branchName,branchLocation,dateCreated) 
            value('$branchName','$branchLocation','$currentDate')");
            if ($qq) {
                $message ='<div style="color:green">Branch Created Successfully!</div>';
            }
            else
            {
                $message = '<div style="color:red">An Error Occured!</div>';
            }
        }
    }
}

if(isset($_GET["delid"]))
{
	$delid = $_GET['delid'];
    $que=mysqli_query($con,"select * from branch_tbl where id ='$delid'");
    $rets=mysqli_fetch_array($que);
    if($rets > 0){

        $querys = mysqli_query($con,"DELETE FROM branch_tbl WHERE id ='$delid'");
        if ($querys) {
            $message ='<div style="color:green">Branch Deleted Successfully!</div>';
        }
    }
}

//all branch

?>