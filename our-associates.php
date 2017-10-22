<!-- Connection File -->
<?php require 'database_conn.php'; ?>
<!-- Connection File -->

<?php include ('include/head.php'); ?>
<!-- head end -->

<body class="animsition">
    <!-- header start -->
    <?php include ('include/header.php'); ?>
    <!-- header end -->

    <!-- navigation start -->
    <?php include ('include/navigation.php'); ?>
    <!-- navigation start -->

    <div class="page-header"><!-- page-header -->
        <div class="container">
            <div class="row page-section"><!-- page section -->
                <div class="col-md-12 page-description"><!-- page description -->
                    <h1 class="page-title">Our Associates</h1>
                </div>
                <!-- page description --> 

            </div>
            <!-- page section --> 
        </div>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Our Associates</li>
            </ol>
        </div>
    </div>
    <!-- /.page-header -->
    <div class="main-container"><!-- main container -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h1>We associated with almost all popular brands</h1>
                </div>
            </div>

            <div class="row">

<?Php 
  
  $stmt = $conn->prepare("SELECT company_name,company_description,company_image FROM arbuda_associate"); 
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
  foreach($stmt as $value) { 
?>

                <div class="col-md-3 service-image-block col-sm-6"> <!-- service-block -->
                    <div class="service-image-inner">
                        <div class="service-img"><a href="#"><img src="<?= $value['company_image']?>" alt="" class="img-responsive"></a></div>
                        <h3><a href="#" class="heading-title"><?= $value['company_name']?></a></h3>

                        <p id="comment"> <?= $value['company_description']?> ></p>
                    </div>
                </div>

<?php 
  }
?>

            </div>
        </div>
    </div>
    <!-- /.main container -->

<style type="text/css">

#comment {
  width: 100%;
  height: 210px;
  overflow:hidden;
  text-overflow: ellipsis;
  word-wrap: break-word;
  
}

#comment p {
  padding: 10px;
  margin: 0;
} 

</style>


<script type="text/javascript">
    
var p = $('#comment p');
var ks = $('#comment').height();
while ($(p).outerHeight() > ks) {
  $(p).text(function(index, text) {
    return text.replace(/\W*\s(\S)*$/, '...');
  });
}




</script>



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
    

    <script type="text/javascript" src="js/jquery.shorten.1.0.js"></script>
    <!-- animsition --> 
    <script type="text/javascript" src="js/animsition.js"></script> 
    <script type="text/javascript" src="js/animsition-script.js"></script> 
    <!-- Sticky header --> 
    <script type="text/javascript" src="js/jquery.sticky.js"></script> 
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <!-- Back to top script --> 
    <script src="js/back-to-top.js" type="text/javascript"></script>
</body>

<!-- Mirrored from jituchauhan.com/fixit-repair/digital-repair/service-listing-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 08:44:24 GMT -->
</html>