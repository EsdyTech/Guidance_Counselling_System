<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
include('includes/session.php');
include('index_action.php');
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

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-view-dashboard"></i> Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Feeds</h4>
                                <div class="feed-widget">
                                    <ul class="list-style-none feed-body m-0 p-b-20">
                                        <li class="feed-item">
                                            <div class="feed-icon bg-info"><i class="mdi mdi-home"></i></div>Number of Branches<span class="ms-auto font-12 text-muted"><?php echo $branches;?></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-success"><i class="mdi mdi-alarm-check"></i></div> Number of Schedule Types<span class="ms-auto font-12 text-muted"><?php echo $scheduleTypes;?></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-warning"><i class="mdi mdi-book-open-page-variant"></i></div> Number of Stages<span class="ms-auto font-12 text-muted"><?php echo $stages;?></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-primary"><i class="mdi mdi-book-open-page-variant"></i></div> Number of Sub-Stages<span class="ms-auto font-12 text-muted"><?php echo $subStages;?></span>
                                        </li>
                                        <!-- <li class="feed-item">
                                            <div class="feed-icon bg-danger"><i class="mdi mdi-account-multiple"></i></div> Number of Candidates<span class="ms-auto font-12 text-muted"><?php echo $candidates;?></span>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="page-title">All Counselling Stages/Phases</h4>
                                <br><br>
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Stage No</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Objectives</th>
                                            <th>Remarks</th>
                                            <th>Material</th>
                                            <th>Video Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $cnt = 1;
                                        $que=mysqli_query($con,"SELECT * from stages_tbl ORDER BY stageNo ASC");
                                        while ($row=mysqli_fetch_array($que)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['stageNo'];?></td>
                                            <td><?php echo $row['stageName'];?></td>
                                            <td><?php echo $row['description'];?></td>
                                            <td><?php echo $row['objectives'];?></td>
                                            <td><?php echo $row['remarks'];?></td>
                                            <td><?php echo $row['material'];?></td>
                                            <td><?php echo $row['videoLink'];?></td>
                                        </tr>
                                        <?php
                                            $cnt=$cnt+1;
                                        }
                                    ?>
                                    </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Stage No</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Objectives</th>
                                                <th>Remarks</th>
                                                <th>Material</th>
                                                <th>Video Link</th>
                                            </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
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