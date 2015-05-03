<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CitiLights - Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/icon/favicon.jpg" type="image/x-icon">

	
  <!-- GOOGLE WEB FONTS INCLUDE -->
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic' rel='stylesheet' type='text/css'>

  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">

  <!-- THEME STYLESHEETS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/shortcode.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/citilights-shortcode.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/color/color1.css">

  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="home page-fullwidth">
  <!-- START SITE -->
  <div class="site">
    <?php include "header.php"; ?>

    <!-- START NOO WRAPPER -->
		<div class="noo-wrapper">
		  <!-- START NOO MAINBODY -->
		  <div class="container noo-mainbody">
		  	<div class="noo-mainbody-inner">
		  		<div class="row clearfix">
				  	<!-- START SIDEBAR -->
				  	<div class="noo-sidebar noo-sidebar-left col-xs-12 col-md-4">
							<div class="noo-sidebar-inner">
								<div class="user-sidebar-menu dashboard-sidebar">
								  <div class="user-avatar content-thumb">
									 <?php foreach($select as $profil): ?>
								    <?php if($profil['photo'] == null ) {?>
							         <img src="<?php echo base_url();?>assets/images/agent/agent1.jpg" alt="">
							         <?php } else { ?>
									 <img src="<?php echo base_url();?>assets/images/profil/<?php echo $profil['photo']; ?>"  width="370" height="500" alt="">
									 <?php } endforeach;?>
								  </div>
								  <div class="user-menu-links">
								    <a href="<?php echo base_url();?>c_profil" class="user-link active"><i class="fa fa-user"></i>My Profile</a>
								    <a href="<?php echo base_url();?>c_myproperti" class="user-link "><i class="fa fa-home"></i>My Properties</a>
								  </div>
								  <div class="user-menu-links user-menu-logout">
								    <a href="<?php echo base_url();?>c_login/logout" class="user-link" title="Logout"><i class="fa fa-sign-out"></i>Log Out</a>
								  </div>
								 
								</div>

								
													
							</div>
				  	</div>
				  	<!-- END SIDEBAR -->

				  	<!-- START MAIN CONTENT -->
				  	<div class="noo-content col-xs-12 col-md-8">
							<div class="properties list my-properties">
			  				<div class="properties-header">
									<h1 class="page-title">My Properties</h1>
								</div>
						  	<div class="properties-content">
								<?php foreach($properti as $pro):?>
						  		<article class="hentry">
								    <div class="property-featured">
								    <span class="featured"><i class="fa fa-star"></i></span>
								      <a class="content-thumb" href="property-details.html">
								        <img src="<?php echo base_url();?>assets/images/properti/<?php echo $pro['photo']; ?>" alt="">
								      </a>
								      <span class="property-label sold">Sold</span>
								      <span class="property-category"><a href="#"><?php echo $pro['nama_subkat']; ?></a>
								      </span>
								    </div>
								    <div class="property-wrap">
								      <h2 class="property-title">
								        <a href="property-details.html" title="The Helux"><?php echo $pro['nama']; ?></a>
								      </h2>
								      <div class="property-labels"></div>
								      <div class="property-excerpt">
								        <p><?php echo $pro['alamat']; ?></p>
								        <p class="property-fullwidth-excerpt"><?php echo $pro['deskripsi']; ?></p>
								      </div>
								      <div class="property-summary">
								      	<div class="property-detail">
									        <div class="size">
									          <span><?php echo $pro['jumlah_kamar']; ?></span>
									        </div>
									        <div class="bathrooms">
									          <span><?php echo $pro['luas_kamar']; ?></span>
									        </div>
									      </div>
									      <div class="property-info">
									        <div class="property-price">
									          <span><span class="amount">&#<?php echo $pro['bulanan']; ?></span> /bulan</span>
									        </div>
									        <div class="property-action">
									          <div class="agent-action four-buttons">
														  <a href="#" data-toggle="tooltip" data-placement="top" title="Edit this Property"><i class="fa fa-pencil"></i></a>
														  <a class="status-property active" href="#" data-toggle="tooltip" data-placement="top" title="Sold/Rent"><i class="fa fa-check"></i></a>
														  <a class="featured-property active" data-toggle="tooltip" data-placement="top" title="Featured Property" href="#"><i class="fa fa-star"></i></a>
														  <a class="delete-property" data-toggle="tooltip" data-placement="top" title="Delete this Property" href="#"><i class="fa fa-times"></i></a>
														</div>
									        </div>
									      </div>
									    </div>
								    </div>
								  </article>
								<?php endforeach; ?>
								  
						  	</div>
			  			</div>									  		
						</div>	  		
				  	<!-- END MAIN CONTENT -->
				  </div>
		  	</div>	  
		  </div>
		  <!-- END NOO MAINBODY -->
		</div>
		<!-- END NOO WRAPPER -->
    
    <?php include "footer.php"; ?>
  </div>
  <!-- END SITE -->


  
  

  <!-- JQUERY PLUGIN -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/SmoothScroll.js"></script>

  <!-- THEME SCRIPT -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
</body>

</html>
