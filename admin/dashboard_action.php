<?php
include('includes/dbconnection.php');

//assets
$que1=mysqli_query($con,"select * from branch_tbl");
$branches = mysqli_num_rows($que1);

//assets
$que2=mysqli_query($con,"select * from scheduletype_tbl");
$scheduleTypes = mysqli_num_rows($que2);

//assets
$que3=mysqli_query($con,"select * from stages_tbl");
$stages = mysqli_num_rows($que3);

//assets
$que4=mysqli_query($con,"select * from substage_tbl");
$subStages = mysqli_num_rows($que4);

//assets
$que5=mysqli_query($con,"select * from users_tbl");
$candidates = mysqli_num_rows($que5);

?>