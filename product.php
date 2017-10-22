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
                    <h1 class="page-title">Our Products </h1>
                </div>
                <!-- page description --> 

            </div>
            <!-- page section --> 
        </div>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Our Products</li>
            </ol>
        </div>
    </div>
    <!-- /.page-header -->
    <!-- /.page-header -->
    <div class="main-container"><!-- main container -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h1>We work with every brand</h1>
                    <p>We work on almost all of the more popular brands. We are a team of dedicated professionals, ready to do what ever it takes to make your device problem solutions.<strong></strong></p>
                </div>
            </div>
            <div class="row">

<?Php 
  
  $stmt = $conn->prepare("SELECT product_name,company_name,product_image FROM arbuda_product"); 
        $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
      foreach($stmt as $value) { 
?>

                <div class="col-md-3 col-sm-6">  
                    <div class="gallery-block image-product"><!-- gallery block start -->
                        <div class="gallery-img">
                            <a href="<?= $value['product_image']?>" class="image-link" title="Gallery Image Zoom"> 
                                <img src="<?= $value['product_image']?>" alt="" class="img-responsive"></a></div>
                                <hr/>
                                <h5><?= $value['product_name']?></h5>
                                <p><?= $value['company_name']?></p>
                    </div><!-- /.gallery block start -->
                </div>
<?php 
  }
?>             
               
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
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/popup-gallery.js" type="text/javascript"></script>

</body>
</html>