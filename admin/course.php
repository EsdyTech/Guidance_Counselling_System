<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include 'includes/header.php'?>

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
                        <h4 class="page-title"><i class="mdi mdi-book-open-page-variant"></i> Course</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Course</li>
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


            <div class="row">
                <div class="col-lg-12">
                    <h3>Update Branch Details : </h3>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" required data-parsley-trigger="keyup" name="branch_name" id="branch_name" placeholder="Enter Branch Name" />
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" required data-parsley-trigger="keyup" name="branch_name" id="branch_name" placeholder="Enter Branch Name" />
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" required data-parsley-trigger="keyup" name="branch_name" id="branch_name" placeholder="Enter Branch Name" />
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" required data-parsley-trigger="keyup" name="branch_name" id="branch_name" placeholder="Enter Branch Name" />
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" required data-parsley-trigger="keyup" name="branch_name" id="branch_name" placeholder="Enter Branch Name" />
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" required data-parsley-trigger="keyup" name="branch_name" id="branch_name" placeholder="Enter Branch Name" />
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="submit" class="btn btn-success"  style="background-color: rgba(131,219,214);" value="Add New" />
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
            <br>






                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                                <!-- <a class="btn btn-sm elevation-2" href="#" data-toggle="modal"
                            data-target="#add" style="margin-top: 20px;margin-left: 10px;background-color: rgba(131,219,214);"><i
                            class="fa fa-plus"></i> Add New</a> -->
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td><a href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                  
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
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