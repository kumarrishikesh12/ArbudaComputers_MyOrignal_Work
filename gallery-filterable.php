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
                    <h1 class="page-title">Gallery Filterable</h1>
                </div>
                <!-- page description --> 

            </div>
            <!-- page section --> 
        </div>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Gallery Filterable</li>
            </ol>
        </div>
    </div>
    <!-- /.page-header -->
    <div class="main-container">
        <!-- main container -->
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="portfolioFilter"> 

                    <a href="#" data-filter="*" class="btn-link current">All</a> 
                    <a href="#" data-filter=".category-1" class="btn-link">Desktop &AMP; Mac</a>
                    <a href="#" data-filter=".category-2" class="btn-link">Laptop</a> 
                    <a href="#" data-filter=".category-3" class="btn-link">Tablet</a> 
                    <a href="#" data-filter=".category-4" class="btn-link">Printer</a> 
                    <a href="#" data-filter=".category-5" class="btn-link">Camera</a> 
                    <a href="#" data-filter=".category-6" class="btn-link">Data Recovery</a> </div>
                </div>
            </div>



            <div class="row">
                <div class="portfolioContainer">

<?Php 
  
  $stmt = $conn->prepare("SELECT photo FROM arbuda_gallery where categories_name ='Pc & Mac' "); 
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
  foreach($stmt as $value) { 
?>

                    <div class="col-md-3 category-1  col-sm-3">
                        <div class="">
                            <div class="gallery-block"><!-- gallery block start -->
                                <div class="gallery-img"><a href="<?= $value['photo']?>" class="image-link" title="Gallery Image Zoom"> <img src="<?= $value['photo']?>" alt="" class="img-responsive"></a></div>
                            </div>
                            <!-- /.gallery block start --> 
                        </div>
                    </div>

<?php } ?>


<?Php 
  $stmt = $conn->prepare("SELECT photo FROM arbuda_gallery where categories_name ='Laptop' "); 
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
  foreach($stmt as $value) { 
?>


                    <div class="col-md-3 category-2 col-sm-3">
                        <div class="gallery-block"><!-- gallery block start -->
                            <div class="gallery-img"><a href="<?= $value['photo']?>" class="image-link" title="Gallery Image Zoom"> <img src="<?= $value['photo']?>" alt="" class="img-responsive"></a></div>
                        </div>
                        <!-- /.gallery block start --> 
                    </div>
<?php } ?>                   



<?Php 
  
  $stmt = $conn->prepare("SELECT photo FROM arbuda_gallery where categories_name ='Tablet' "); 
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
  foreach($stmt as $value) { 
?>
                    <div class="col-md-3 category-3 col-sm-3">
                        <div class="gallery-block"><!-- gallery block start -->
                            <div class="gallery-img"><a href="<?= $value['photo']?>" class="image-link" title="Gallery Image Zoom"> <img src="<?= $value['photo']?>" alt="" class="img-responsive"></a></div>
                        </div>
                        <!-- /.gallery block start --> 
                    </div>
<?php } ?>                    

<?Php 
  
  $stmt = $conn->prepare("SELECT photo FROM arbuda_gallery where categories_name ='Printer' "); 
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
  foreach($stmt as $value) { 
?>

                    <div class="col-md-3 category-4 col-sm-3">
                        <div class="gallery-block"><!-- gallery block start -->
                            <div class="gallery-img"><a href="<?= $value['photo']?>" class="image-link" title="Gallery Image Zoom"> <img src="<?= $value['photo']?>" alt="" class="img-responsive"></a></div>
                        </div>
                        <!-- /.gallery block start --> 
                    </div>
                   
<?php } ?> 

<?Php 
  
  $stmt = $conn->prepare("SELECT photo FROM arbuda_gallery where categories_name ='Camera' "); 
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
  foreach($stmt as $value) { 
?>


                    <div class="col-md-3 category-5 col-sm-3">
                        <div class="gallery-block"><!-- gallery block start -->
                            <div class="gallery-img"><a href="<?= $value['photo']?>" class="image-link" title="Gallery Image Zoom"> <img src="<?= $value['photo']?>" alt="" class="img-responsive"></a></div>
                        </div>
                        <!-- /.gallery block start --> 
                    </div>
  
<?php } ?>                     

<?Php 
  
  $stmt = $conn->prepare("SELECT photo FROM arbuda_gallery where categories_name ='Data Recovery' "); 
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
  foreach($stmt as $value) { 
?>

                    <div class="col-md-3 category-6 col-sm-3">
                        <div class="gallery-block"><!-- gallery block start -->
                            <div class="gallery-img"><a href="<?= $value['photo']?>" class="image-link" title="Gallery Image Zoom"> <img src="<?= $value['photo']?>" alt="" class="img-responsive"></a></div>
                        </div>
                        <!-- /.gallery block start --> 
                    </div>
                    
<?php } ?>




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
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script> 
    <script src="js/popup-gallery.js" type="text/javascript"></script> 
    <script type="text/javascript"  src="js/jquery.isotope.min.js"></script> 
    <script type="text/javascript" src="js/filter-script.js"></script>
</body>

<!-- Mirrored from jituchauhan.com/fixit-repair/digital-repair/gallery-filterable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 08:47:54 GMT -->
</html>