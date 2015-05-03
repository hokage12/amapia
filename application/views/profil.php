<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CitiLights - Agent Profile</title>
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
				  	<div class="noo-content col-xs-12 col-md-8 left-sidebar">
				  		<div class="submit-header">
								<h1 class="page-title">Profil</h1>
							</div>
							<div class="submit-content">
							  <?php echo  form_open_multipart('c_profil/update')?>
							  <?php foreach($select as $profil): ?>
							    <div class="noo-control-group">
							      <div class="group-title">Selamat datang, <?php echo $profil['strFLName']; ?></div>
							      <div class="group-container row">
							        <div class="form-message">
							        </div>
							        <div class="col-md-12">
							          <div class="form-group s-profile-title">
							            <label for="title">Nama&nbsp;</label>
							            <br><br>
							            <input type="text" id="nama" class="form-control" value="<?php echo $profil['strFLName']; ?>" name="nama" required="">
							          </div>
							        </div>
							        <div class="col-md-12">
							          <div class="form-group s-profile-title">
							            <label for="title">Alamat&nbsp;</label>
							            <br><br>
							            <textarea id="alamat" class="form-control"  name="alamat"><?php echo $profil['strAddress']; ?></textarea>
							          </div>
							        </div>
							        <div class="col-md-6">
							          <div class="form-group s-profile-email">
							            <label for="email">Email&nbsp;</label>
							            <br><br>
							            <input type="text" id="email" class="form-control" value="<?php echo $profil['strEmail']; ?>" name="email" required="">
							          </div>
							          <div class="form-group s-profile-phone">
							            <label for="phone">No Telepon</label>
							            <br><br>
							            <input type="text" id="phone" class="form-control" value="<?php echo $profil['strTelNumber']; ?>" name="phone">
							          </div>
							          
							          <div class="form-group s-profile-skype">
							            <label for="skype">Skype</label>
							            <br><br>
							            <input type="text" id="skype" class="form-control" value="<?php echo $profil['skype']; ?>" name="skype">
							          </div>
							        </div>
							        <div class="col-md-6">
							          
							          <div id="upload-container">
							            <label>Avatar</label>
							            <br><br>
							            <div id="aaiu-upload-container" class="row">
							              <div class="col-md-6 col-xs-12">
							                <div id="aaiu-upload-imagelist">
							                  <ul id="aaiu-ul-list" class="aaiu-upload-list"></ul>
							                </div>
							                <div id="uploaded-images">
							                  <div class="uploaded-img">
												 <?php if($profil['photo'] == null ) {?>
							                    <img src="<?php echo base_url();?>assets/images/agent/agent1.jpg" alt="">
							                    <?php } else { ?>
												<img src="<?php echo base_url();?>assets/images/profil/<?php echo $profil['photo']; ?>"  width="370" height="500" alt="">
												<?php } ?>
							                  </div>
							                </div>
							              </div>
							              <div class="col-md-6 col-xs-12">
							                <br><br>
							                <input type="hidden" name="avatar" id="avatar" value="6609">
							              <div class="moxie-shim moxie-input moxie-shim-html5">
											<label for="input-upload" class="btn btn-secondary btn-lg">Pilih Gambar</label>
							                <input id="input-upload" name="userfile" type="file"  accept="image/jpeg,image/gif,image/png">
							              </div>
							              </div>
							            </div>
							          </div>
							        </div>
							      </div>
							    </div>
							    <div class="noo-control-group">
							      <div class="group-title">Media Sosial</div>
							      <div class="group-container row">
							        <div class="col-md-6">
							          <div class="form-group s-profile-facebook">
							            <label for="facebook">Facebook Url</label>
							            <br><br>
							            <input type="text" id="facebook" class="form-control" value="<?php echo $profil['fb']; ?>" name="facebook">
							          </div>
							          <div class="form-group s-profile-twitter">
							            <label for="twitter">Twitter Url</label>
							            <br><br>
							            <input type="text" id="twitter" class="form-control" value="<?php echo $profil['twitter']; ?>" name="twitter">
							          </div>
							          <div class="form-group s-profile-google_plus">
							            <label for="google_plus">Google Plus Url</label>
							            <br><br>
							            <input type="text" id="google_plus" class="form-control" value="<?php echo $profil['goplus']; ?>" name="google_plus">
							          </div>
							        </div>
							        <div class="col-md-12">
							          <div class="noo-submit">
							            <input type="submit" class="btn btn-primary btn-lg" id="profile_submit" value="Update">
							          </div>
							        </div>
							      </div>
							    </div>
							  <?php endforeach; ?>
							  <?php echo form_close();?>
							  <form id="password_form" name="password_form" class="noo-form profile-form" role="form">
							    <div class="noo-control-group">
							      <div class="group-title">
							        Ganti Password</div>
							      <div class="group-container row">
							        <div class="form-message">
							        </div>
							        <div class="col-md-6">
							          <div class="form-group s-profile-old_pass">
							            <label for="old_pass">Password Lama</label>
							            <br><br>
							            <input type="password" id="old_pass" class="form-control" value="" name="old_pass">
							          </div>
							          <div class="form-group s-profile-new_pass">
							            <label for="new_pass">Password Baru</label>
							            <br><br>
							            <input type="password" id="new_pass" class="form-control" value="" name="new_pass">
							          </div>
							          <div class="form-group s-profile-new_pass_confirm">
							            <label for="new_pass_confirm">Konfirmasi Password Baru</label>
							            <br><br>
							            <input type="password" id="new_pass_confirm" class="form-control" value="" name="new_pass_confirm">
							          </div>
							        </div>
							        <div class="col-md-12">
							          <div class="noo-submit">
							            <input type="submit" class="btn btn-primary btn-lg" id="password_submit" value="Change Password">
							          </div>
							        </div>
							      </div>
							    </div>
							  </form>
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
