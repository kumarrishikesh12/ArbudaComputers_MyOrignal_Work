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
        <h1 class="page-title">Repair Team</h1>
      </div>
      <!-- page description --> 
      
    </div>
    <!-- page section --> 
  </div>
  <div class="page-breadcrumb">
    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li class="active">Team Repair</li>
    </ol>
  </div>
</div>
<!-- /.page-header -->
<div class="main-container"><!-- main container -->
  <div class="container">
    <div class="row">


<?Php 
  
  $stmt = $conn->prepare("SELECT name,designation,avatar FROM arbuda_ourteam order by Rand()"); 
        $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
      foreach($stmt as $value) { 
?>

      <div class="col-md-3 team-block col-sm-6"><!-- team block -->
        <div class="well-bg">
          <div class="well-inner"> <img src="<?= $value['avatar']?>" alt="" class="img-responsive"> </div>
          <div class="team-content"><!-- team content -->
            <h3><?= $value['name']?></h3>
            <span class="designation"><?= $value['designation']?></span> </div>
          <!-- /.team content --> 
        </div>
      </div>

<?php 
  }
?>



      
    </div>
  </div>
</div>
<!--
	<?php
       include "include/conn.php";
	   
	     
     $q_product_detail_select="select p.product_id,p.product_name,p.product_img,p.product_price,s.available_stock from product_detail p,stock_detail s where s.product_id=p.product_id ORDER BY p.product_id DESC";
	 $r_product_detail_select=mysqli_query($con,"$q_product_detail_select");
	
 	?> 
	  		<div class="center_content">
				  <div class="center_title_bar">LATEST PRODUCTS</div>
			   <?php   while($row=mysqli_fetch_assoc($r_product_detail_select)){ ?>
				  <div class="prod_box">
				  <div class="top_prod_box"></div>
					<div class="center_prod_box">
					  <div class="product_title"><a href="details.php?id=<?php echo $row['product_id']?>"><?php echo $row['product_name'];?></a></div>
					  <div class="product_img"><a href="details.php?id=<?php echo $row['product_id']?>"><img src="product_image/<?php echo $row['product_img'];?>" alt="" border="0"/></a></div>
					  <div class="prod_price"><span class="reduce"></span> <span class="price"><?php echo $row['product_price']." INR";?><br />
					  <?php $stock=$row['available_stock'];
					  	if($stock==0){
							echo "Out of Stock";
							}
					  ?>
                      
                      </span></div>
					</div>
					<div class="bottom_prod_box"></div>
					<div class="prod_details_tab">
                    <?php if($stock==0){?>
                    <img src="images/cart.gif" alt="" border="0" class="left_bt" />
					<?php }else{?>
                    <a href="add_to_cart_act.php?id=<?php echo $row['product_id'];?>" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a>
                    <?php }?>
                    <a href="details.php?id=<?php echo $row['product_id']?>" class="prod_details">details</a></div>
				  </div>
				<?php }?>
				</div>
-->

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