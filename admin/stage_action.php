<?php
include('includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Save')
	{
        extract($_POST);
        $quee=mysqli_query($con,"select * from stages_tbl where stageName ='$stageName'");
        $retd=mysqli_fetch_array($quee);

        $queew=mysqli_query($con,"select * from stages_tbl where stageNo ='$stageNo'");
        $retw=mysqli_fetch_array($queew);

        if($retd > 0){
            $message = '<div style="color:red">This Stage/Phase "'.$stageName.'" Already Exists!</div>';
        }
        else if($retw > 0){
            $message = '<div style="color:red">This Stage No "'.$stageNo.'" Already Exists!</div>';
        }
        else{

            $qq=mysqli_query($con,"insert into stages_tbl(stageNo,stageName,description,remarks,objectives,dateCreated) 
            value('$stageNo','$stageName','$description','$remarks','$objectives','$currentDate')");
            if ($qq) {
                $message ='<div style="color:green"> Stage/Phase Created Successfully!</div>';
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
    $que=mysqli_query($con,"select * from stages_tbl where id ='$delid'");
    $rets=mysqli_fetch_array($que);
    if($rets > 0){

        $querys = mysqli_query($con,"DELETE FROM stages_tbl WHERE id ='$delid'");
        if ($querys) {
            $message ='<div style="color:green"> Stage/Phase Deleted Successfully!</div>';
        }
    }
}

//all branch

?>