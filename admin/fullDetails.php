<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
include('includes/session.php');
include('fullDetails_action.php');
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
                                                    <label><b>Stage/Phase Name</b></label><br>
                                                    <?php echo $stageName;?>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><b>Sub-Stage/Phase Name</b></label><br>
                                                    <?php echo $subStageName;?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><b>Venue</b></label><br>
                                                    <?php echo $venue;?>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><b>Scheduled Date</b></label><br>
                                                    <?php echo $scheduleDate;?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><b>From - To (Time)</b></label><br>
                                                    <?php echo $fromTime;?> To <?php echo $toTime;?>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><b>Video Link</b></label><br>
                                                    <?php echo $videoLink;?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label ><b>Status</b></label><br>
                                                    <?php if($status == 'InProgress'){echo '<label class="label label-info">'.$status.'</label>';}
                                                    else{echo '<label class="label label-success">'.$status.'</label>';}?>
                                                   
                                                </div>
                                                <div class="col-md-6">
                                                    <label><b>Date and Time Started</b></label><br>
                                                    <?php echo $dateStarted;?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><b>Date and Time Completed</b></label><br>
                                                    <?php echo $dateCompleted;?>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><b>Remark</b></label><br>
                                                    <?php echo $remark;?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="schedule2.php?stageid=<?php echo $stageId;?>&cid=<?php echo $userId;?>">Go Back</a>
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