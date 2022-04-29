<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include 'includes/header.php'?>
<?php include 'index_action.php'?>


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
    
            <div class="container-fluid" style="margin-top:100px">
                
                <!-- Row -->
                <div class="row">

                <div class="col-lg-4 offset-lg-4">
                <h2>RACK FOUNDATION - Admin</h2>
            <center><img src="../assets/images/logo.png" alt="users" width="200" /></center>
            
                </div>
                    <!-- Column -->
                    <div class="col-lg-4 offset-lg-4">
                        
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="post">
                                <?php if(isset($message)){echo $message."<br>";}?>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email Address</label>
                                        <div class="col-md-12">
                                        <input type="email" name="emailAddress" required placeholder="Email Address" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" required placeholder="Password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <center>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <input type="hidden" name="action" id="action" value="Add" />
                                        <input type="submit" name="action" id="submit_button" class="btn btn-success text-white" value="Login" />
                                        </div>
                                        <!-- <div class="col-sm-6">
                                        <input type="submit" name="submit" id="submit_button" class="btn btn-warning text-white" value="Login as Student" />
                                        </div> -->
                                    </div>
                                    </center>
                                    <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php include 'includes/footer.php'?>

</body>

</html>