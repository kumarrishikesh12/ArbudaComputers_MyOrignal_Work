<?php include ('include/head.php'); ?>
<!-- head end -->

<body class="animsition">
    <!-- header start -->
    <?php include ('include/header.php'); ?>
    <!-- header end -->

    <!-- navigation start -->
    <?php include ('include/navigation.php'); ?>
    <!-- navigation start -->

    <!-- Connection File -->
    <?php require 'database_conn.php'; ?>
    <!-- Connection File -->
  

    <div class="page-header"><!-- page-header -->
        <div class="container">
            <div class="row page-section"><!-- page section -->
                <div class="col-md-12 page-description"><!-- page description -->
                    <h1 class="page-title">Appointment Booking</h1>
                </div>
                <!-- page description --> 

            </div>
            <!-- page section --> 
        </div>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Appointment Booking</li>
            </ol>
        </div>
    </div>
    <!-- /.page-header -->
    <div class="main-container"><!-- main container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 content col-sm-12"><!-- content -->
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Get Appointment Now</h1>
                            <p>You have any kind of device problem, we are always here to help you.</p>
                        </div>


                         <?php
         if(isset($_POST['submit']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['device_categories']) && !empty($_POST['service']) && !empty($_POST['message']) ){

          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $device_categories = $_POST['device_categories'];
          $service = $_POST['service'];
          $message = $_POST['message'];          
          
          
          $sql = "INSERT INTO arbuda_appointment (firstname, lastname, email, phone, device_categories, service, message ) VALUES (:firstname,:lastname,:email,:phone,:device_categories,:service,:message)";
          
          $stmt= $conn->prepare($sql);
          $stmt->bindParam(':firstname',$firstname);
          $stmt->bindParam(':lastname',$lastname);
          $stmt->bindParam(':email',$email);
          $stmt->bindParam(':phone',$phone);
          $stmt->bindParam(':device_categories',$device_categories);
          $stmt->bindParam(':service',$service);
          $stmt->bindParam(':message',$message);
          
          if($stmt->execute()){
            $success = ' Thank You For Fixed Your Appointment Scheduled, We Contact You ASAP !! ';
          }
          else{
            $error = 'Something is Wrong Please Contact To Admin !! ';
          }
              
        }
     
       ?> 

       <div class="col-md-12">
         <?php
              if(isset($success)){
                  echo "<div class='alert alert-success alert-dismissable'>";
                  echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>";
                  echo "<strong> $success </strong>";
                  echo "</div>";
               } 
             elseif(isset($error)){
                  echo "<div class='alert alert-danger alert-dismissable'>";
                  echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>";
                  echo "<strong> $error </strong>";
                  echo "</div>";
             }
        ?>
       </div>


                        <div class="col-md-12 ">
                            <form class="appointment-form" method="post" action="appointment.php">
                                <div class="row"> 
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fname">First Name<span class="required">*</span></label>
                                            <input id="fname" name="firstname" type="text" placeholder="First Name" class="form-control input-md" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="lname">Last Name<span class="required">*</span></label>
                                            <input id="lname" name="lastname" type="text" placeholder="Last Name" class="form-control input-md" required>
                                        </div>
                                    </div>

                                    <!-- Text input-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="email">Email<span class="required">*</span></label>
                                            <input id="email" name="email" type="email" placeholder="Valid Email" class="form-control input-md" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="phone">Phone<span class="required">*</span></label>
                                            <input id="phone" name="phone" type="text" placeholder="10 Digit Phone No." class="form-control input-md" required>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="device">Device Categories <span class="required">*</span></label>
                                             <select id="device" name="device_categories" class="form-control" required>
                                                <option selected="true" disabled="disabled">Select Categories</option>
                                                <option value="Pc &amp; Mac">Desktop &amp; Mac</option>
                                                <option value="Laptop">Laptop</option>
                                                <option value="Tablet">Tablet</option>
                                                <option value="Printer">Printer</option>
                                                <option value="Camera">Camera</option>
                                                <option value="Data Recovery">Data Recovery</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="service">Select Your Service<span class="required">*</span></label>
                                            <select id="service" name="service" class="form-control" required>
                                                <option selected="true" disabled="disabled">Select Your Service</option>
                                                <option value="Pc &amp; Mac Repair">Desktop &amp; Mac Repair</option>
                                                <option value="Laptop Repair">Laptop Repair</option>
                                                <option value="Tablet Repair">Tablet Repair</option>
                                                <option value="Printer Repair">Printer  Repair</option>
                                                <option value="CPU Repair">CPU Repair</option>
                                                <option value="Window Installation">Window Installation</option>
                                                <option value="Data Recovery">Data Recovery</option>
                                                <option value="Other Issue">Other Issue</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Textarea -->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="issue">Your Device Issue <span class="required">*</span> </label>
                                            <textarea class="form-control" id="issue" rows="7" name="message" required></textarea>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                        <span class="required pull-right">*Required Field</span> </div>
                                </div>
                            </form>







                        </div>
                    </div>
                </div>
                <!-- /.content -->

                <div class="col-md-4 sidebar col-sm-12"><!-- sidebar -->
                    <div class="row">
                        <div class="col-md-12 widget col-sm-4">
                            <div class="well-bg widget-address">
                                <div class="well-inner"> <i class="fa fa-home"></i>
                                    <h3>Address</h3>
                                    <address>
                                              1st Floor, Madhusudan Market,<br>Near Bus Station,<br>
                                              Dhanera-385310
                                    </address>
                  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 widget col-sm-4">
                            <div class="well-bg widget-schedule">
                                <div class="well-inner"> <i class="fa fa-clock-o"></i>
                                    <h3>Schedule</h3>
                                    <ul class="listnone">
                  <li>Monday - Saturday:<strong> 9am - 8pm</strong></li>
                  <li>Sunday: <strong> 10am - 6pm</strong></li>
                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 widget col-sm-4">
                            <div class="well-bg widget-phone">
                                <div class="well-inner"> <i class="fa fa-phone"></i>
                                    <h3>Contect US</h3>
                <ul class="listnone">
                   <li><strong>Office: </strong> 02748-222777/78</li>
                   <li><strong>Mobile: </strong> +91 9825565067</li>
                  <li><strong>Mobile: </strong> +91 9924523913</li>
                  <br>
                  <li><strong>E-Mail: </strong> arbudacomputer@yahoo.co.in</li>
                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.sidebar --> 
            </div>
        </div>
    </div>
    <!-- /.main container -->

    <!-- calling start -->
    <?php include ('./include/calling.php'); ?>
    <!-- calling end -->

    <!-- footer start -->
    <?php include ('./include/footer.php'); ?>
    <!-- footer end -->

    <!-- back to top icon --> 
    <a href="#0" class="cd-top" title="Go to top">Top</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/bootstrap.min.js"></script> 
    <!-- Navigation --> 
    <script src="js/menumaker.js"></script> 
    <script type="text/javascript">
        $("#navigation").menumaker({
            title: "Menu",
            format: "multitoggle"
        });
    </script> 
    <!-- animsition --> 
    <script type="text/javascript" src="js/animsition.js"></script> 
    <script type="text/javascript" src="js/animsition-script.js"></script> 
    <!-- Sticky header --> 
    <script type="text/javascript" src="js/jquery.sticky.js"></script> 
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <!-- Back to top script --> 
    <script src="js/back-to-top.js" type="text/javascript"></script>
</body>

<!-- Mirrored from jituchauhan.com/fixit-repair/digital-repair/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 08:41:59 GMT -->
</html>