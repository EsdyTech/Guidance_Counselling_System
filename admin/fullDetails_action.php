<?php
include('includes/dbconnection.php');

if(isset($_GET["viewid"]) && $_GET["viewid"] != "")
{
    $viewid = $_GET["viewid"];

    //subStage full details
    $que=mysqli_query($con,"SELECT substagetracker_tbl.id, substagetracker_tbl.userId,substagetracker_tbl.stageId,
    substagetracker_tbl.subStageId,substagetracker_tbl.venue,substagetracker_tbl.scheduleDate,substagetracker_tbl.fromTime,
    substagetracker_tbl.toTime,substagetracker_tbl.videoLink,substagetracker_tbl.status,
    substagetracker_tbl.dateStarted,substagetracker_tbl.dateCompleted,substagetracker_tbl.remark,
    users_tbl.firstName,users_tbl.lastName,stages_tbl.stageName,stages_tbl.stageNo,
    substage_tbl.subStageName,substage_tbl.subStageNo
    from substagetracker_tbl
    INNER JOIN stages_tbl ON stages_tbl.id = substagetracker_tbl.stageId
    INNER JOIN users_tbl ON users_tbl.id = substagetracker_tbl.userId
    INNER JOIN substage_tbl ON substage_tbl.id = substagetracker_tbl.subStageId
    where substagetracker_tbl.id = '$viewid'");
    $retd=mysqli_fetch_array($que);
    if($retd > 0){
        $userId = $retd['userId'];
        $stageId = $retd['stageId'];

        $fullName = $retd['firstName'].' '.$retd['lastName'];
        $stageName = $retd['stageName'];
        $subStageName = $retd['subStageName'];
        $venue = $retd['venue'];
        $scheduleDate = $retd['scheduleDate'];
        $fromTime = $retd['fromTime'];
        $toTime = $retd['toTime'];
        $videoLink = $retd['videoLink'];
        $status = $retd['status'];
        $dateStarted = $retd['dateStarted'];
        $dateCompleted = $retd['dateCompleted'];
        $remark = $retd['remark'];


        $queet=mysqli_query($con,"select users_tbl.id,users_tbl.firstName,users_tbl.lastName, scheduletype_tbl.typeName 
        from users_tbl 
        INNER JOIN scheduletype_tbl ON scheduletype_tbl.id = users_tbl.scheduleTypeId
        where users_tbl.id ='$userId'");
        $tt=mysqli_fetch_array($queet);
        if($tt > 0){
            $scheduleType = $tt['typeName'];
        }
    }
}
else{

    echo "<script type = \"text/javascript\">
    window.location = (\"allCandidates.php\");
    </script>";
}

?>