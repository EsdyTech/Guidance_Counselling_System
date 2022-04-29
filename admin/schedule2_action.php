<?php
include('includes/dbconnection.php');

if(isset($_GET["cid"]) && $_GET["cid"] != "" && isset($_GET["stageid"]) && $_GET["stageid"] != "")
{
    $cid = $_GET["cid"];
    $stageid = $_GET["stageid"];

    //candidadates details
    $quee=mysqli_query($con,"select users_tbl.id,users_tbl.firstName,users_tbl.lastName, scheduletype_tbl.typeName,
    scheduletype_tbl.id as scheduleTypeId
    from users_tbl 
    INNER JOIN scheduletype_tbl ON scheduletype_tbl.id = users_tbl.scheduleTypeId
    where users_tbl.id ='$cid'");
    $retd=mysqli_fetch_array($quee);
    if($retd > 0){
        $fullName = $retd['firstName'].' '.$retd['lastName'];
        $scheduleType = $retd['typeName'];
        $scheduleTypeId = $retd['scheduleTypeId'];
    }
    
    

    if(isset($_POST["action"]))
    {
        if($_POST["action"] == 'Save')
        {
            extract($_POST);
            $qu=mysqli_query($con,"select * from substagetracker_tbl where userId ='$cid' and stageId = '$stageid' and subStageId = '$subStageId'");
            $rrr=mysqli_fetch_array($qu);

            $qur=mysqli_query($con,"select * from substagetracker_tbl where userId ='$cid' and status = 'InProgress'");
            $rr=mysqli_fetch_array($qur);

            if($rrr > 0){
                $message = '<div style="color:red">The selected Sub-Stage/Phase has already been activated for the Candidate!</div>';
            }
            else if($rr > 0){
                $message = '<div style="color:red">The selected Sub-Stage/Phase cannot be activated for the Candidate because a Sub-stage/phase is In progress!</div>';
            }
            else{

                $qq=mysqli_query($con,"insert into substagetracker_tbl(userId,stageId,subStageId,venue,scheduleDate,fromTime,toTime,videoLink,
                status,dateStarted,dateCompleted,remark,dateCreated) 
                value('$cid','$stageid','$subStageId','$venue','$scheduleDate','$fromTime','$toTime','$videoLink','InProgress','$currentDate','','','$currentDate')");
                if ($qq) {
                    $message ='<div style="color:green">Sub-Phase/Stage Activated for Candidate Successfully!</div>';
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
        $que=mysqli_query($con,"select * from substagetracker_tbl where id ='$delid'");
        $rets=mysqli_fetch_array($que);
        if($rets > 0){
            if($rets['status'] == 'Completed'){
                $message = '<div style="color:red">You cant delete a Completed Sub-Stage/Phase!</div>';
            }else{
                $querys = mysqli_query($con,"DELETE FROM substagetracker_tbl WHERE id ='$delid'");
                if ($querys) {
                    $message ='<div style="color:green">Sub-Phase/Stage Deleted Successfully!</div>';
                }
            }
        }
        else
        {
            $message = '<div style="color:red">An Error Occured!</div>';
        }
    }   

    if(isset($_GET["updid"]))
    {
        $updid = $_GET['updid'];
        $que=mysqli_query($con,"select * from substagetracker_tbl where id ='$updid'");
        $rets=mysqli_fetch_array($que);
        if($rets > 0){

            $querys = mysqli_query($con,"UPDATE substagetracker_tbl set status = 'Completed',remark='Satisfactory', dateCompleted='$currentDate' WHERE id ='$updid'");
            if ($querys) {
                $message ='<div style="color:green">Sub-Phase/Stage Updated Successfully!</div>';
            }
        }
        else
        {
            $message = '<div style="color:red">An Error Occured!</div>';
        }
    }   
}
else{

    echo "<script type = \"text/javascript\">
    window.location = (\"allCandidates.php\");
    </script>";
}

?>