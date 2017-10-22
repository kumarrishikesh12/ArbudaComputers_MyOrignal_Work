<?php include ('include/head.php'); ?>
<!-- head end -->

<body class="animsition">
    <!-- header start -->
    <?php include ('include/header.php'); ?>
    <!-- header end -->

    <!-- navigation start -->
    <?php include ('include/navigation.php'); ?>
    <!-- navigation End -->

     <!-- Connection File -->
    <?php require 'database_conn.php'; ?>
    <!-- Connection File -->
   
    

<div class="page-header"><!-- page-header -->
  <div class="container">
    <div class="row page-section"><!-- page section -->
      <div class="col-md-12 page-description"><!-- page description -->
        <h1 class="page-title">Contact us</h1>
      </div>
      <!-- page description --> 
      
    </div>
    <!-- page section --> 
  </div>
  <div class="page-breadcrumb">
    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li class="active">Contact us</li>
    </ol>
  </div>
</div>
<!-- /.page-header -->
<div class="main-container"><!-- main container -->
  <div class="container">
    <div class="row">
      <div class="col-md-7 content col-sm-12"><!-- content -->
        <div class="row">
          <div class="col-md-12">
            <h1>Arbuda Computer Sales & Service store</h1>
            <p>Simply complete the enquiry form &amp; We will respond as soon as we can.</p>
          </div>

          <?php
              if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email']) &&
                !empty($_POST['subject']) && !empty($_POST['message']) ){

                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $subject = $_POST['subject'];
                  $message = $_POST['message'];

                  $sql = "INSERT INTO arbuda_contact(name, email, subject, message)VALUES (:name,:email,:subject,:message)";
                   $stmt= $conn->prepare($sql);

                   $stmt->bindParam(':name',$name);
                   $stmt->bindParam(':email',$email);
                   $stmt->bindParam(':subject',$subject);
                   $stmt->bindParam(':message',$message);

                   if($stmt->execute()){

                    /*$to = $email;
                    $subject = $subject;
                    $message = $message;
                    $headers = "From: kumarrishikesh12@gmail.com";

                    mail($to,$subject,$message,$headers);*/

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
            <form class="contact-form" id="contactus" method="post" action="contactus.php">
              <div class="row"> 
                <!-- Text input-->
                <div class="col-md-9">
                  <div class="form-group">
                    <label class="control-label" for="name">Name<span class="required">*</span></label>
                    <input id="name" name="name" type="text" placeholder="Enter Your Name" class="form-control input-md" required>
                  </div>
                </div>
                <!-- Text input-->
                
                <div class="col-md-9">
                  <div class="form-group">
                    <label class="control-label" for="email">Email<span class="required">*</span></label>
                    <input id="email" name="email" type="email" placeholder="Enter Your Email" class="form-control input-md" required>
                  </div>
                </div>
                <!-- Text input-->
                <div class="col-md-9">
                  <div class="form-group">
                    <label class="control-label" for="subject">Subject<span class="required">*</span></label>
                    <input id="subject" name="subject" type="text" placeholder="Enter Subject Issue " class="form-control input-md" required>
                  </div>
                </div>
                
                <!-- Textarea -->
                
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label" for="message">Message<span class="required">*</span></label>
                    <textarea class="form-control" id="message" rows="7" name="message" placeholder="Enter Your Messages... " required></textarea>
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
      
      <div class="col-md-offset-1 col-md-4 sidebar col-sm-12"><!-- sidebar -->
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
<!--<div class="map" id="googleMap"></div>-->
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:400px;width:1000px;'><div id='gmap_canvas' style='height:400px;width:1000px;'></div><div><small><a href="http://embedgooglemaps.com">Click here to generate your map!</a></small></div><div><small><a href="https://premiumlinkgenerator.com/datafile-com">Would you like to download your files at high speed? Click here for more info!</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(24.5081549,72.02519510000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(24.5081549,72.02519510000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Arbuda Computer </strong><br>Madhusudan Market, Near Bus Station, Dhanera-385310<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
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
<script src="http://maps.googleapis.com/maps/api/js"></script> 
<!-- Back to top script --> 
<script src="js/back-to-top.js" type="text/javascript"></script>
<script>
var myCenter=new google.maps.LatLng(23.0203458,72.5797426);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:9,
  scrollwheel: false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,

  icon:'images/marker.png'
  });

marker.setMap(map);
var infowindow = new google.maps.InfoWindow({
  content:"Hello Address"
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

 
 </body>

<!-- Mirrored from jituchauhan.com/fixit-repair/digital-repair/contactus.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 08:41:58 GMT -->
</html>