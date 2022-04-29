<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
include('includes/session.php');
include('schedule_action.php');
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
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $scheduleType;?> Counselling Phase</li>
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
                                                    <label>Stage/Phase Name</label>
                                                    <?php 
                                                        $query=mysqli_query($con,"select * from stages_tbl ORDER BY stageNo ASC");                        
                                                        $count = mysqli_num_rows($query);
                                                        if($count > 0){                       
                                                            echo '<select required name="stageId" class="form-control">';
                                                            echo'<option value="">--Select Stage/Phase--</option>';
                                                            while ($row = mysqli_fetch_array($query)) {
                                                                echo'<option value="'.$row['id'].'" >'.$row['stageName'].'</option>';
                                                            }
                                                            echo '</select>';
                                                        }
                                                    ?>   
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
                            <h4 class="page-title">All Candidates Counselling Phases</h4>
                                <br><br>
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Phase Name</th>
                                            <th>Status</th>
                                            <th>Date Started</th>
                                            <th>Date Completed</th>
                                            <th>Remark</th>
                                            <th>Update Status</th>
                                            <th>Schedule SubStage/Phase</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $cnt = 1;
                                        $que=mysqli_query($con,"SELECT stagetracker_tbl.id, stagetracker_tbl.userId,stagetracker_tbl.stageId,stagetracker_tbl.status,
                                        stagetracker_tbl.dateStarted,stagetracker_tbl.dateCompleted,stagetracker_tbl.remark,
                                        users_tbl.firstName,users_tbl.lastName,stages_tbl.stageName,stages_tbl.stageNo
                                        from stagetracker_tbl
                                        INNER JOIN stages_tbl ON stages_tbl.id = stagetracker_tbl.stageId
                                        INNER JOIN users_tbl ON users_tbl.id = stagetracker_tbl.userId
                                        where stagetracker_tbl.userId = '$cid'
                                        ORDER BY stages_tbl.stageNo ASC");
                                        while ($row=mysqli_fetch_array($que)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['firstName'].' '.$row['lastName'];?></td>
                                            <td><?php echo $row['stageName'];?></td>
                                            <td>
                                            <?php if($row['status'] == 'InProgress'){echo '<label class="label label-info">'.$row['status'].'</label>';}
                                                    else{echo '<label class="label label-success">'.$row['status'].'</label>';}?>
                                            </td>
                                            <td><?php echo $row['dateStarted'];?></td>
                                            <td><?php echo $row['dateCompleted'];?></td>
                                            <td><?php echo $row['remark'];?></td>
                                            <td><a href="?cid=<?php echo $cid;?>&updid=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to update this item as Completed?');" class="btn btn-success"><i class="fa fa-check"></i></a></td>
                                            <td><a href="schedule2.php?stageid=<?php echo $row['stageId'];?>&cid=<?php echo $row['userId'];?>" class="btn btn-warning"><i class="fa fa-calendar"></i></a></td>
                                            <td><a href="?cid=<?php echo $cid;?>&delid=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php
                                            $cnt=$cnt+1;
                                        }
                                    ?>
                                    </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Phase Name</th>
                                                <th>Status</th>
                                                <th>Date Started</th>
                                                <th>Date Completed</th>
                                                <th>Remark</th>
                                                <th>Update Status</th>
                                                <th>Schedule SubStage/Phase</th>
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