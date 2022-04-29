<?php
include('includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Save')
	{
        extract($_POST);
        $quee=mysqli_query($con,"select * from substage_tbl where stageId ='$stageId'and subStageName ='$subStageName'");
        $retd=mysqli_fetch_array($quee);

        $queew=mysqli_query($con,"select * from substage_tbl where stageId ='$stageId' and subStageNo ='$subStageNo'");
        $retw=mysqli_fetch_array($queew);

        if($retd > 0){
            $message = '<div style="color:red">This Sub-Stage/Phase Already Exists for the Selected Stage/Phase!</div>';
        }
        else if($retw > 0){
            $message = '<div style="color:red">This Sub-Stage No "'.$subStageNo.'" Already Exists for the Selected Sub-Stage/Phase!</div>';
        }
        else{

            $qq=mysqli_query($con,"insert into substage_tbl(stageId,subStageName,description,remark,objectives,dateCreated) 
            value('$stageId','$subStageName','$description','$remarks','$objectives','$currentDate')");
            if ($qq) {
                $message ='<div style="color:green"> Sub-Stage/Phase Created Successfully!</div>';
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
    $que=mysqli_query($con,"select * from substage_tbl where id ='$delid'");
    $rets=mysqli_fetch_array($que);
    if($rets > 0){

        $querys = mysqli_query($con,"DELETE FROM substage_tbl WHERE id ='$delid'");
        if ($querys) {
            $message ='<div style="color:green"> Sub-Stage/Phase Deleted Successfully!</div>';
        }
    }
}

//all branch

?>