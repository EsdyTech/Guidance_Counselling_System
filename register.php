<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php 
include('student/includes/dbconnection.php');
include('register_action.php');
?>
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
    
    <div class="container">
        <div class="row login-container column-seperation">  
            <div class="col-md-5 col-md-offset-1">
                <h2>RACK FOUNDATION - Registration</h2>
                <p>Already have an Account? Please <a href="index.php">Click here to Sign in Now!</a></p>
                <br>
                <img src="assets/images/users/C4.jpg" alt="users" width="500" height="610"/>
            </div>
            <div class="col-md-5 "> <br>
                <p style="color:#F00"></p>
                <?php if(isset($message)){echo $message."<br>";}?>
		        <form id="validate"  class="login-form" action="" method="post">
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label class="form-label">FirstName</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="text" required name="firstName" id="fname" class="form-control">                                 
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <label class="form-label">LastName</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="text" required name="lastName" id="fname" class="form-control">                                 
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label class="form-label">Email Address</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="email" required name="emailAddress" id="fname" class="form-control">                                 
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <label class="form-label">Password</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="password" required name="password" id="fname" class="form-control">                                 
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label class="form-label">Confirm Password</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="password" required name="conPassword" id="fname" class="form-control">                                 
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <label class="form-label">Phone No</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="text" required name="phoneNo" id="fname" class="form-control">                                 
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label class="form-label">Address</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="text" name="address" id="fname" class="form-control">                                 
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <label class="form-label">Date Of Birth</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="date" name="dob" id="fname" class="form-control">                                 
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label class="form-label">Gender</label>
                            <span class="help"></span>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="radio" value="Male" name="gender" checked > Male &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" value="Female" name="gender" > Female
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <label class="form-label">Hobbies</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="text" name="hobbies" id="fname" placeholder="(Cooking, travelling etc)" class="form-control">                                 
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label class="form-label">Course of Study</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="text" name="course" id="fname" class="form-control">                                 
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <label class="form-label">Qualification</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <select id="inputState" name="qualification" required class="form-control">
                                        <option selected="selected">--Select--</option>
                                        <option value="ND">ND</option>
                                        <option value="HND">HND</option>
                                        <option value="BSC">BSc</option>
                                        <option value="MSC">MSc</option>
                                        <option value="PHD">PhD</option>
                                        <option value="Others">Others</option>
                                    </select>                                
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label class="form-label">Qualification Grade</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="text" name="qualificationGrade" id="fname" class="form-control">                                 
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <label class="form-label">Skills</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input type="text" name="skills" id="fname" placeholder="(Cooking, Drawing etc)" class="form-control">                               
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label class="form-label">Schedule Type</label>
                            <div class="controls">
                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <?php 
                                        $query=mysqli_query($con,"select * from scheduletype_tbl ORDER BY typeName ASC");                        
                                        $count = mysqli_num_rows($query);
                                        if($count > 0){                       
                                            echo '<select required name="scheduleTypeId" class="form-control">';
                                            echo'<option value="">--Select Schedule--</option>';
                                            while ($row = mysqli_fetch_array($query)) {
                                                echo'<option value="'.$row['id'].'" >'.$row['typeName'].'</option>';
                                            }
                                            echo '</select>';
                                        }
                                    ?>                                     
                                </div>
                                <span class="help-block"><div style="color:#F00;" id="errfname"></div></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <input class="btn btn-success"  style="background-color: rgba(131,219,214);" name="action" value="Submit" type="submit" />
                        </div>
                    </div>
		        </form>
             </div>    
        </div>
    </div>
    <br><br>
            
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