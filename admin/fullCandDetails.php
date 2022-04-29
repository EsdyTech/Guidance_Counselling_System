<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
include('includes/session.php');
include('fullCandDetails_action.php');
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
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $fullName;?> Candidate Information/Details</li>
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
                                                    <label><b>Email Address</b></label><br>
                                                    <?php echo $emailAddress;?>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><b>Phone No</b></label><br>
                                                    <?php echo $phoneNo;?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><b>Address</b></label><br>
                                                    <?php echo $address;?>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><b>Date Of Birth</b></label><br>
                                                    <?php echo $dob;?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><b>Gender</b></label><br>
                                                    <?php echo $gender;?>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><b>Hobbies</b></label><br>
                                                    <?php echo $hobbies;?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label ><b>Course</b></label><br>
                                                    <?php echo $course;?>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><b>Qualification</b></label><br>
                                                    <?php echo $qualification;?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><b>Qualification Grade</b></label><br>
                                                    <?php echo $qualificationGrade;?>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><b>Skills</b></label><br>
                                                    <?php echo $skills;?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="allRegCandidates.php?cid=<?php echo $userId;?>">Go Back</a>
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