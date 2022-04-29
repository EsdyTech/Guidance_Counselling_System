<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
include('includes/session.php');
include('subStage_action.php');
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
                        <h4 class="page-title"><i class="mdi mdi-home"></i> New Counselling Sub-Stage/Phase</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Counselling Sub-Stage/Phase</li>
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
                                                <div class="col-md-6">
                                                    <label>Stage/Phase No</label>
                                                        <?php 
                                                            echo '<select required name="subStageNo" class="form-control">';
                                                            echo'<option value="">--Select Sub-Stage No--</option>';
                                                                for($i=1;$i<=5; $i++){                                                               
                                                                    echo'<option value="'.$i.'" >'.$i.'</option>';                                                            
                                                                }
                                                            echo '</select>';
                                                        ?>    
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>SubStage/Phase Name</label>
                                                    <input type="text" name="subStageName" required placeholder="" class="form-control form-control-line">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Description</label>
                                                    <input type="text" name="description" required placeholder="" class="form-control form-control-line" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Remarks</label>
                                                    <input type="text" name="remarks" required placeholder="" class="form-control form-control-line">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Objectives</label>
                                                    <textarea name="objectives" placeholder="Enter Objectives separated by Commas" class="form-control form-control-line"></textarea>
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
                            <h4 class="page-title">All Counselling SubStages/SubPhases</h4>
                                <br><br>
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Phase Name</th>
                                            <th>Sub-Phase No</th>
                                            <th>Sub-PhaseName</th>
                                            <th>Description</th>
                                            <th>Objectives</th>
                                            <th>Remarks</th>
                                            <th>Date Created</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $cnt = 1;
                                        $que=mysqli_query($con,"SELECT stages_tbl.stageName, substage_tbl.stageId,substage_tbl.subStageNo,substage_tbl.id,substage_tbl.subStageName,substage_tbl.description,
                                        substage_tbl.remark,substage_tbl.objectives,substage_tbl.dateCreated
                                        from substage_tbl
                                        INNER JOIN stages_tbl ON stages_tbl.id = substage_tbl.stageId
                                        ORDER BY subStageNo ASC");
                                        while ($row=mysqli_fetch_array($que)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['stageName'];?></td>
                                            <td><?php echo $row['subStageNo'];?></td>
                                            <td><?php echo $row['subStageName'];?></td>
                                            <td><?php echo $row['description'];?></td>
                                            <td><?php echo $row['objectives'];?></td>
                                            <td><?php echo $row['remark'];?></td>
                                            <td><?php echo $row['dateCreated'];?></td>
                                            <td><a href="?delid=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php
                                            $cnt=$cnt+1;
                                        }
                                    ?>
                                    </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Phase Name</th>
                                                <th>Sub-Phase No</th>
                                                <th>Sub-PhaseName</th>
                                                <th>Description</th>
                                                <th>Objectives</th>
                                                <th>Remarks</th>
                                                <th>Date Created</th>
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