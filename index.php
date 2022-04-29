<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include 'index_action.php'?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Virtual-and-Remote-Guidance-Counselling-System</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

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
                <h2>RACK FOUNDATION - User Login</h2>
            <center><img src="assets/images/logo.png" alt="users" width="200" /></center>
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
                                        <div class="col-sm-12">
                                        <input type="submit" name="action" id="submit_button" class="btn btn-warning" value="Login" />
                                        </div>
                                    </div>
                                    </center>
                                    <br>
                                    <p><a href="register.php">Sign up Now!</a> for a Counselling account, It's free and always will be..</p>
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
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.js"></script>
</body>

</html>