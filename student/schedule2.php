<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
include('includes/session.php');
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
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="page-title">Candidates Counselling Sub Phases</h4>
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
                                            <th>View Full Details</th>
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
                                        where substagetracker_tbl.userId = '$user_id'
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
                                            <td><a href="fullDetails.php?viewid=<?php echo $row['id'];?>" class="btn btn-warning"><i class="fa fa-eye"></i></a></td>
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
                                                <th>View Full Details</th>
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