<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
include('includes/session.php');
include('profile_action.php');
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
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-home"></i> My Profile</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                                        <h4 class="page-title"><i class="mdi mdi-account"></i> User</h4>
                                        <?php if(isset($userMsg)){echo $userMsg."<br>";}?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>First Name</label>
                                                    <input type="text" name="firstName" value="<?php echo $rwwss['firstName'];?>" required placeholder="" class="form-control form-control-line">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Last Name</label>
                                                    <input type="text" name="lastName" value="<?php echo $rwwss['lastName'];?>" required placeholder="" class="form-control form-control-line" >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email Address</label>
                                                    <input type="text" readonly name="emailAddress" value="<?php echo $rwwss['emailAddress'];?>" required placeholder="" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="submit" name="action" id="submit_button" class="btn btn-success text-white" value="Update Profile" />
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="post">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                        <h4 class="page-title"><i class="mdi mdi-lock"></i> Password</h4>
                                        <?php if(isset($passMsg)){echo $passMsg."<br>";}?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Current Password</label>
                                                    <input type="password" name="currentPassword" required placeholder="" class="form-control form-control-line">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>New Password</label>
                                                    <input type="password" name="newpassword" required placeholder="" class="form-control form-control-line" >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Confirm Password</label>
                                                    <input type="password" name="conPassword" required placeholder="" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="submit" name="action" id="submit_button" class="btn btn-success text-white" value="Update Password" />
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