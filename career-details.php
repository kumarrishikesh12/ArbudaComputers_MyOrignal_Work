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
        <h1 class="page-title">Career Details</h1>
      </div>
      <!-- page description --> 
      
    </div>
    <!-- page section --> 
  </div>
  <div class="page-breadcrumb">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
      <li class="active">Career Details</li>
    </ol>
  </div>
</div>
<!-- /.page-header -->
<div class="main-container"><!-- main container -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 space-bottom-80">
        <h1>Computer Software Installation and Hardware repair</h1>
        <div class="job-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Dhanera, Gujarat</div>
        <p>Many of the problems encountered by computer users are actually rooted in problems with hardware and/or software installation. Whether you are adding new equipment to your device – or just adding some new programs – there are more factors to take into consideration, as well as more things that can go wrong, than many computer users realize. That is why it is always best to use a professional.</p>
        <p>Job opportunities for computer repair technicians may be limited, but this entry-level position can lead to other fast-growing careers in the field of computers. Keep reading to explore your options in computer installation or repair and decide if this is the field for you.</p>
      </div>
    </div>
  </div>
  <div class="section-space section-primary-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-title">
          <h1 class="heading-white">Duties &amp; Responsibilities</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <ul class="listnone circle-white">
            <li>Diagnose, troubleshoot and repair devices.</li>
            <li>Provide repair and replacement estimates to customers.</li>
            <li>Customer service experience at retail store.</li>
            <li>Troubleshooting potential problems</li>
            <li>Handling inquiries related to a new client</li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-6">
          <ul class="listnone circle-white">
            <li>Experience repairing smartphones.</li>
            <li>Explain complex issues to customers in a simple method.</li>
            <li>simple to understand manner.</li>
            <li>Describing the characteristics, rewards, and risks of any particular security.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="section-space">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-title">
          <h1>Our Requirements</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <ul class="listnone circle">
            <li>0-5 years of experience in Sales and Service Department.</li>
            <li>Ability to work both independently.</li>
            <li>Customer service experience at retail store.</li>
            <li>Positive attitude and demonstrates passion for marketing.</li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-6">
          <ul class="listnone circle">
            <li>Experience repairing smartphones.</li>
            <li>Diagnose, troubleshoot and repair devices.</li>
            <li>Strong customer service and consultative skills.</li>
            <li>Motivation for Sales.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="section-space">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-title">
          <h1>Apply for the job</h1>
        </div>
      </div>
      <div class="row">


       <?php
         if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email']) &&
           !empty($_POST['phone']) && !empty($_POST['position']) &&  !empty($_POST['message']) ){

          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $position = $_POST['position'];
          $message = $_POST['message'];

          $sql = "INSERT INTO arbuda_career(name, email, phone, position, message)VALUES (:name,:email,:phone,:position,:message)";
          $stmt= $conn->prepare($sql);

          $stmt->bindParam(':name',$name);
          $stmt->bindParam(':email',$email);
          $stmt->bindParam(':phone',$phone);
          $stmt->bindParam(':position',$position);
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


        <form class="career-form" method="post" action="career-details.php">
          <div class="col-md-4">
            <label class="control-label sr-only" for="name">Name <span class="required">*</span></label>
            <input id="name" name="name" type="text" placeholder="Name" class="form-control" required>
          </div>
          <div class="col-md-4">
            <label class="control-label sr-only" for="email">E-Mail <span class="required">*</span> </label>
            <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
          </div>
          
          <!-- Text input-->
          <div class="col-md-4">
            <label class="control-label sr-only" for="phone">Phone <span class="required">*</span> </label>
            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
          </div>
          <!-- Select Basic -->
          <div class="col-md-12">

            <select id="position" name="position" class="form-control" placeholder="Position" required>
             <option  selected="true" disabled="disabled">Select Job Designation</option>
              <option value="The Technician">The Technician</option>
              <option value="Smartphone Technician">Smartphone Technician</option>
              <option value="Customer Service Specialist">Customer Service Specialist</option>
              <option value="Assistant Manager">Assistant Manager</option>
              <option value="Store Manager">Store Manager</option>

            </select>
          </div>
          <!-- Textarea -->
          <div class="col-md-12">
            <label class="control-label sr-only" for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="10" placeholder="Enter You Message" required></textarea>
          </div>
          
          <!-- Button -->
          <div class="col-md-12">
            <button id="submit" name="submit" class="btn btn-default">Submit Your Application</button>
          </div>
        </form>




      </div>
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

<!-- Mirrored from jituchauhan.com/fixit-repair/digital-repair/career-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 08:46:01 GMT -->
</html>