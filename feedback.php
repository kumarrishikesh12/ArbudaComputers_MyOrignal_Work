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
        <h1 class="page-title">Customer Feedback</h1>
      </div>
      <!-- page description --> 
      
    </div>
    <!-- page section --> 
  </div>
  <div class="page-breadcrumb">
    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li class="active">Customer Feedback</li>
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
            <h1>Give Us Your Feedback</h1>
            <p>The most important for us is your feedback.</p>
          </div>

          <?php
         if(isset($_POST['submit']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['date_visited']) && !empty($_POST['visited_location']) && !empty($_POST['recommed']) && !empty($_POST['message']) ){

          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $date_visited = $_POST['date_visited'];
          $visited_location = $_POST['visited_location'];
          $recommed = $_POST['recommed'];
          $message = $_POST['message'];          
          

           /*
           $date = DateTime::createFromFormat("d-m-Y", $string);
           echo $date->format("d"); //day
           echo $date->format("m"); //month
           echo $date->format("Y"); //year
           */
          
          $sql = "INSERT INTO arbuda_feedback(firstname, lastname, email, phone, date_visited, visited_location, recommed,message ) VALUES (:firstname,:lastname,:email,:phone,:date_visited,:visited_location,:recommed,:message)";
          
          $stmt= $conn->prepare($sql);
          $stmt->bindParam(':firstname',$firstname);
          $stmt->bindParam(':lastname',$lastname);
          $stmt->bindParam(':email',$email);
          $stmt->bindParam(':phone',$phone);
          $stmt->bindParam(':date_visited',$date_visited);
          $stmt->bindParam(':visited_location',$visited_location);
          $stmt->bindParam(':recommed',$recommed);
          $stmt->bindParam(':message',$message);
          
          if($stmt->execute()){
            $success = ' Thank You, We Contact You ASAP !! ';
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


          <div class="col-md-12">
            <form class="feedbackform" method="post" action="feedback.php">
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
                    <input id="phone" name="phone" type="text" placeholder="Phone No." class="form-control input-md" required>
                  </div>
                </div>
                <!-- Text input-->
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="date">Date of Visited<span class="required">*</span></label>
                    <input id="date" class="form-control" name="date_visited" placeholder="Select Date" required>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="location">Visited Location<span class="required">*</span></label>
                    <select id="location" name="visited_location" class="form-control" required>
                      <option  selected="true" disabled="disabled">Select City Name</option>
                      <option value="Pc &amp; Mac Repair">Dhanera</option>
                      <option value="Laptop Repair">Palanpur</option>
                      <option value="Tablet Repair">Deesa</option>
                      <option value="Smart Phone Repair">Tharad</option>
                      <option value="Console Repair">Dantiwada</option>
                      <option value="Data Recovery">Other City</option>
                    </select>
                  </div>
                </div>
                <!-- Multiple Radios (inline) -->
                
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="control-label col-md-12" >How Would You Like to Recommed Us?<span class="required">*</span></label>

                    <div class="col-md-3">
                     <label class="radio-inline" for="radios-0">
                     <input type="radio" name="recommed" id="radios-0" value="likely" checked="checked">
                        Likely </label>
                    </div>
                    
                    <div class="col-md-3">
                      <label class="radio-inline" for="radios-1">
                        <input type="radio" name="recommed" id="radios-1" value="very-likely">
                        Very Likely </label>
                    </div>
                    <div class="col-md-3">
                      <label class="radio-inline" for="radios-2">
                        <input type="radio" name="recommed" id="radios-2" value="fabulous">
                        Fabulous </label>
                    </div>
                    <div class="col-md-3">
                      <label class="radio-inline" for="radios-3">
                        <input type="radio" name="recommed" id="radios-3" value="unlikely">
                        Unlikely </label>
                    </div>
                  </div>
                </div>
                
                <!-- Textarea -->
                
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label" for="reason">Your Main Reason to Choose Us<span class="required">*</span></label>
                    <textarea class="form-control" name="message" id="reason" rows="7" placeholder="Write Your reason..."></textarea>
                  </div>
                </div>
                
                <!-- Button -->
                <div class="col-md-12">
                  <button type="submit" name="submit" class="btn btn-default">Submit Feedback</button>
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
                <h3>Head Office</h3>
                
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
<!-- date picaker --> 
<script src="js/jquery.plugin.js"></script> 
<script src="js/jquery.datepick.js"></script> 
<script src="js/date.js"></script>
<!-- Back to top script --> 
<script src="js/back-to-top.js" type="text/javascript"></script>
</body>

<!-- Mirrored from jituchauhan.com/fixit-repair/digital-repair/feedback.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 08:45:53 GMT -->
</html>