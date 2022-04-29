<?php
include('includes/dbconnection.php');

if(isset($_GET["cid"]) && $_GET["cid"] != "")
{
    $cid = $_GET["cid"];
    $quee=mysqli_query($con,"select users_tbl.id,users_tbl.firstName,users_tbl.lastName, scheduletype_tbl.typeName 
    from users_tbl 
    INNER JOIN scheduletype_tbl ON scheduletype_tbl.id = users_tbl.scheduleTypeId
    where users_tbl.id ='$cid'");
    $retd=mysqli_fetch_array($quee);
    if($retd > 0){
        $fullName = $retd['firstName'].' '.$retd['lastName'];
        $scheduleType = $retd['typeName'];
    }

    if(isset($_POST["action"]))
    {
        if($_POST["action"] == 'Save')
        {
            extract($_POST);
            $qu=mysqli_query($con,"select * from stagetracker_tbl where userId ='$cid' and stageId = '$stageId'");
            $rrr=mysqli_fetch_array($qu);

            $qur=mysqli_query($con,"select * from stagetracker_tbl where userId ='$cid' and status = 'InProgress'");
            $rr=mysqli_fetch_array($qur);

            if($rrr > 0){
                $message = '<div style="color:red">The selected Stage/Phase has already been activated for the Candidate!</div>';
            }
            else if($rr > 0){
                $message = '<div style="color:red">The selected Stage/Phase cannot be activated for the Candidate because a stage/phase is In progress!</div>';
            }
            else{

                $qq=mysqli_query($con,"insert into stagetracker_tbl(userId,stageId,status,dateStarted,dateCompleted,remark,dateCreated) 
                value('$cid','$stageId','InProgress','$currentDate','','','$currentDate')");
                if ($qq) {
                    $message ='<div style="color:green">Phase/Stage Activated for Candidate Successfully!</div>';
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
        $que=mysqli_query($con,"select * from stagetracker_tbl where id ='$delid'");
        $rets=mysqli_fetch_array($que);
        if($rets > 0){
            if($rets['status'] == 'Completed'){
                $message = '<div style="color:red">You cant delete a Completed Stage/Phase!</div>';
            }else{
                $querys = mysqli_query($con,"DELETE FROM stagetracker_tbl WHERE id ='$delid'");
                if ($querys) {
                    $message ='<div style="color:green">Phase/Stage Deleted Successfully!</div>';
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
        $que=mysqli_query($con,"select * from stagetracker_tbl where id ='$updid'");
        $rets=mysqli_fetch_array($que);
        if($rets > 0){

            $querys = mysqli_query($con,"UPDATE stagetracker_tbl set status = 'Completed',remark='Satisfactory', dateCompleted='$currentDate' WHERE id ='$updid'");
            if ($querys) {
                $message ='<div style="color:green">Phase/Stage Updated Successfully!</div>';
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