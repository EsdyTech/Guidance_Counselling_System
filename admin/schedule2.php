<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
include('includes/session.php');
include('schedule2_action.php');
include('includes/header.php');
?>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'includes/topbar.php'?>
        <?php include 'includes/sidebar.php'?>

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-10">
                        <h4 class="page-title"><i class="mdi mdi-home"></i>Candidates Name: <?php echo $fullName;?> - <?php echo $scheduleType;?> Counselling Phase</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Schedule Candidates Next Phase</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="post">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                        <?php if(isset($message)){echo $message."<br>";}?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Sub-Stage/Phase Name</label>
                                                    <?php 
                                                        $query=mysqli_query($con,"select * from substage_tbl where stageId ='$stageid' ORDER BY subStageNo ASC");                           
                                                        $count = mysqli_num_rows($query);
                                                        if($count > 0){                       
                                                            echo '<select required name="subStageId" class="form-control">';
                                                            echo'<option value="">--Select Sub-Stage/Phase--</option>';
                                                            while ($row = mysqli_fetch_array($query)) {
                                                                echo'<option value="'.$row['id'].'" >'.$row['subStageName'].'</option>';
                                                            }
                                                            echo '</select>';
                                                        }
                                                    ?>   
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Venue</label>
                                                    <?php if($scheduleTypeId == '2'){ //if virtual, enter the meeting link else select from branches
                                                            echo' <input type="text" name="venue" required placeholder="Enter the meeting link here (e.g Google meet, Zoom, Skype etc)" class="form-control form-control-line">';
                                                        }else{
                                                            $querys=mysqli_query($con,"select * from branch_tbl ORDER BY branchName ASC");                           
                                                            $cnt = mysqli_num_rows($querys);
                                                            if($cnt > 0){                       
                                                                echo '<select required name="venue" class="form-control">';
                                                                echo'<option value="">--Select Branch--</option>';
                                                                while ($roww = mysqli_fetch_array($querys)) {
                                                                    echo'<option value="'.$roww['branchName'].'" >'.$roww['branchName'].'</option>';
                                                                }
                                                                echo '</select>';
                                                             }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Schedule Date</label>
                                                    <input type="date" name="scheduleDate" required placeholder="" class="form-control form-control-line">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>From Time</label>
                                                    <input type="time" name="fromTime" required placeholder="" class="form-control form-control-line" >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>To Time</label>
                                                    <input type="time" name="toTime" required placeholder="" class="form-control form-control-line">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Video Link</label>
                                                    <input type="text" name="videoLink" required placeholder="Enter the Video link here (e.g Youtube Videos, personal video etc)" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="submit" name="action" id="submit_button" class="btn btn-success text-white" value="Save" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="page-title">All Candidates Counselling Sub Phases</h4>
                                <br><br>
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Phase</th>
                                            <th>Sub Phase</th>
                                            <th>Venue</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Remark</th>
                                            <th>Update Status</th>
                                            <th>View Full Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $cnt = 1;
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
                                        where substagetracker_tbl.userId = '$cid' and substagetracker_tbl.stageId = '$stageid'
                                        ORDER BY substage_tbl.subStageNo ASC");
                                        while ($row=mysqli_fetch_array($que)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['firstName'].' '.$row['lastName'];?></td>
                                            <td><?php echo $row['stageName'];?></td>
                                            <td><?php echo $row['subStageName'];?></td>
                                            <td><?php echo $row['venue'];?></td>
                                            <td><?php echo $row['scheduleDate'];?></td>
                                            <td>
                                            <?php if($row['status'] == 'InProgress'){echo '<label class="label label-info">'.$row['status'].'</label>';}
                                                    else{echo '<label class="label label-success">'.$row['status'].'</label>';}?>
                                            </td>
                                            <td><?php echo $row['remark'];?></td>
                                            <td><a href="?stageid=<?php echo $stageid;?>&cid=<?php echo $cid;?>&updid=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to update this item as Completed?');" class="btn btn-success"><i class="fa fa-check"></i></a></td>
                                            <td><a href="fullDetails.php?viewid=<?php echo $row['id'];?>" class="btn btn-warning"><i class="fa fa-eye"></i></a></td>
                                            <td><a href="?stageid=<?php echo $stageid;?>&cid=<?php echo $cid;?>&delid=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php
                                            $cnt=$cnt+1;
                                        }
                                    ?>
                                    </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Phase</th>
                                                <th>Sub Phase</th>
                                                <th>Venue</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Remark</th>
                                                <th>Update Status</th>
                                                <th>View Full Details</th>
                                                <th>Action</th>
                                            </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

    <?php include 'includes/footer.php'?>
</body>

</html>