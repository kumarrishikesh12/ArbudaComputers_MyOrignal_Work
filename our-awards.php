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
        <h1 class="page-title">Our Awards</h1>
      </div>
      <!-- page description --> 
      
    </div>
    <!-- page section --> 
  </div>
  <div class="page-breadcrumb">
    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li class="active">Our Awards</li>
    </ol>
  </div>
</div>
<!-- /.page-header -->
<div class="main-container"><!-- main container -->
  <div class="container">
    <div class="row">

<?Php 
  
  $stmt = $conn->prepare("SELECT award_name,year,avatar FROM arbuda_ouraward order by Rand()"); 
        $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
      foreach($stmt as $value) { 
?>

      <div class="col-md-3 team-block col-sm-6"><!-- team block -->
        <div class="well-bg">
          <div class="well-inner"> <img src="<?= $value['avatar']?>" alt="" class="img-responsive"> </div>
          <div class="team-content"><!-- team content -->
            <h3><?= $value['award_name']?></h3>
            <span class="Year"><label>Year :&nbsp;</label><?= $value['year']?></span> </div>
          <!-- /.team content --> 
        </div>
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

<!-- Mirrored from jituchauhan.com/fixit-repair/digital-repair/repair-team.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 08:46:01 GMT -->
</html>