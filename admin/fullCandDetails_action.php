<?php
include('includes/dbconnection.php');

if(isset($_GET["cid"]) && $_GET["cid"] != "")
{
    $cid = $_GET["cid"];

    //subStage full details
    $que=mysqli_query($con,"SELECT users_tbl.id,users_tbl.firstName, users_tbl.lastName,users_tbl.emailAddress,
    users_tbl.phoneNo,users_tbl.gender,users_tbl.address,users_tbl.dob,users_tbl.hobbies,users_tbl.course,
    users_tbl.qualification,users_tbl.qualificationGrade,users_tbl.skills,users_tbl.dateCreated,
    scheduletype_tbl.typeName
    from users_tbl
    INNER JOIN scheduletype_tbl ON scheduletype_tbl.id = users_tbl.scheduleTypeId
    where users_tbl.id = '$cid'");
    $retd=mysqli_fetch_array($que);
    if($retd > 0){
        $userId = $retd['id'];
        $fullName = $retd['firstName'].' '.$retd['lastName'];
        $emailAddress = $retd['emailAddress'];
        $phoneNo = $retd['phoneNo'];
        $gender = $retd['gender'];
        $address = $retd['address'];
        $dob = $retd['dob'];
        $hobbies = $retd['hobbies'];
        $course = $retd['course'];
        $qualification = $retd['qualification'];
        $qualificationGrade = $retd['qualificationGrade'];
        $skills = $retd['skills'];
        $dateCreated = $retd['dateCreated'];
        $scheduleType = $retd['typeName'];
    }
}
else{

    echo "<script type = \"text/javascript\">
    window.location = (\"allRegCandidates.php\");
    </script>";
}

?>