<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Amapia - Login</title>
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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.nouislider.min.css">

  <!-- THEME STYLESHEETS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/shortcode.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/home.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/citilights-shortcode.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/color/color1.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="page-fullwidth">
  <!-- START SITE -->
  <div class="site">
    <?php include "header.php"; ?>

    <!-- START NOO WRAPPER -->
		<div class="noo-wrapper">
		  <!-- START NOO MAINBODY -->
		  <div class="container-fluid noo-mainbody">
		  	<div class="noo-mainbody-inner">
		  		<div class="row clearfix">
				  	<!--START MAIN CONTENT -->
				  	<div class="noo-content col-xs-12">
							<div class="page-content row">
								<div class="col-md-12">
									<div class="noo-logreg both">
								  <div class="logreg-container">
								    <div class="row clearfix logreg-content">
								      <div class="col-md-6 login-form">
								        <form name="loginform" id="loginform" method="post" role="form">
								          <div class="logreg-title">Login Form</div>
								          <p class="logreg-desc">Jika sudah memiliki akun silahkan isi formulir di bawah ini untuk masuk ke situs.</p>
								          <div class="form-message"></div>
								          <div class="logreg-content">
								            <div class="form-group">
								              <input type="text" class="form-control" id="log" name="log" placeholder="Nama Pengguna *" required="">
								            </div>
								            <div class="form-group">
								              <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password *" required="">
								            </div>
								          </div>
                                          <div id="valError"></div>
								          <div class="logreg-action">
								          	<button type="submit" class="btn navbar-btn">Masuk</button>
								          </div>
								          <p class="logreg-desc"><a href="#">Lupa Password ?</a>
								          </p>
								        </form>
								      </div>
								      
								      <div class="col-md-6 register-form">
								        <form name="registerform" id="registerform" method="post" role="form">
								          <div class="logreg-title">Register Form</div>
								          <p class="logreg-desc">Belum memiliki akun? Silahkan isi formulir di bawah ini untuk membuat akun.</p>
								          <div class="form-message"></div>
								          <div class="logreg-content">
                                            <div class="form-group">
								              <label for="user_login" class="sr-only">Nama Lengkap</label>
								              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap *" required="">
								            </div>
                                            <div class="form-group">
								              <label for="user_login" class="sr-only">Nama Pengguna</label>
								              <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Nama Pengguna *" required="">
								            </div>
                                            <div class="form-group">
								              <label for="user_login" class="sr-only">Telepon</label>
								              <input type="number" class="form-control" id="telp" name="telp" placeholder="Telepon *" required="">
								            </div>
                                            <div class="form-group">
								              <label for="user_login" class="sr-only">Alamat</label>
                                              <textarea class="form-control" style="width: 350px; height: 100px;"  id="alamat" name="alamat" placeholder="Alamat *" required=""></textarea>
								            </div>
								            <div class="form-group">
								              <label for="user_login" class="sr-only">Email</label>
								              <input type="email" class="form-control" id="email" name="email" placeholder="Email *" required="">
								            </div>
								            <div class="form-group">
								              <label for="user_email" class="sr-only">Password</label>
								              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password *" required="">
								            </div>
                                            <div class="form-group">
								              <label for="user_email" class="sr-only">Re-Password</label>
								              <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Re-Password *" required="">
								            </div>
								          </div>
								          <div class="logreg-action">
								          	<button type="submit" class="btn navbar-btn">Daftar Sekarang</button>
								          </div>
								        </form>
								      </div>
								    </div>
								  </div>
								</div>
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
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.touchSwipe.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/imagesloaded.pkgd.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.nouislider.all.min.js"></script>

  <!-- THEME SCRIPT -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
  
  <!-- VALIDATE JS -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
  
</body>

</html>


  <!-- CODE ME REGISTER -->
  
  <script>
		$(document).ready(function(){	
			$('#registerform').validate({
			    errorElement: 'div',
			    errorClass: 'help-block inline',
			    focusInvalid: false,
			    rules: {
			       nama : {
			    		required : true	
			    	},
                    nama_pengguna : {
			    		required : true	
			    	},
			    	alamat : {
			    		required : true
			    	},
			    	telp : {
			        	required: true
			       	},
			       email:{
					  required: true
			       },
			       pass: {
			          required: true
			       },
			       pass2: {
			          required: true,
			          equalTo : "#pass"
			          			          
			       }
			    },
			
			    messages: {
                    nama : {
			    		required : "tolong masukan nama lengkap anda dengan benar"	
			    	},
                    nama_pengguna : {
			    		required : "tolong masukann nama pengguna anda dengan benar"	
			    	},
			    	alamat : {
			    		required : "alamat tidak boleh kosong"
			    	},
			    	telp : {
			        	required: "tolong masukan no telepon anda dengan benar"
			       	},
			    	email : {
			    		required : "tolong masukan email anda dengan benar"
			    	},
			    	pass : {
			        	required: "tolong masukan password anda"
			        },
			    	pass2 : { 
			    		required : "tolong masukan kembali password anda",
			    		equalTo : "password tidak sesuai"
			    	}
			    },
			
			    highlight: function (e) {
			        $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
			    },
			
			    success: function (e) {
			        $(e).closest('.form-group').removeClass('has-error').addClass('has-info');
			        $(e).remove();
			    },
			
			    errorPlacement: function (error, element) {
			        error.insertAfter(element.parent());
			    },
			    submitHandler: function (form) {
				    var eventsholded 	= [];
				    var cc = $("#registerform :input").serializeArray();
                    console.log(cc);
				   $.ajax({
						type 		: "POST",
						url		    : "<?php echo base_url();?>c_login/submit",
						async		: false,
						data 		: cc,
						success: function(data){
							
							window.location.href = '<?php echo base_url();?>c_login/berhasil';
						},
						error: function(xhr, status, errorThrown){ 
							alert('Email Anda sudah terdaftar');
							return false;
						}
					});
			
					return false;
				
				
				 
				$("#registerform").submit( function() {
				  return false;
				});
				}
			
			});
		});
		</script>
        
    <!-- CODE ME LOGING IN -->
    <script>
		$(document).ready(function(){
			
			$('#loginform').validate({
			    errorElement: 'div',
			    errorClass: 'help-block',
			    focusInvalid: false,
			    rules: {
			       log: {
			          required: true
			       },
			       pwd: {
			          required: true
			       }
			    },
			
			    messages: {
			    	log : {
			    		required : "tolong masukan nama pengguna"
			    	},
			    	pwd : {
			    		required : "password anda salah"
			    	}
			    },
			
			    highlight: function (e) {
			        $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
			    },
			
			    success: function (e) {
			        $(e).closest('.form-group').removeClass('has-error').addClass('has-info');
			        $(e).remove();
			    },
			
			    errorPlacement: function (error, element) {
			        error.insertAfter(element.parent());
			        $("#valError").empty();
			    },
			    submitHandler: function (form) {
			    	
					var error = true;
					var event = new Object();
					var eventsholded = [];
					event.user = $("#log").val();            
					event.pass = $("#pwd").val();
					
					eventsholded.push(event);
					$.ajax({
						type	: "POST",
						dataType: "json",
						url 	: "<?php echo base_url();?>c_login/log",
						data 	: { data: JSON.stringify(eventsholded) },
						success: function(data){
							if(data == true){
								document.location="<?php echo base_url();?>c_home";
							}else{
								$("#valError").html("Login Failed, Check your email or Password").css('color','#d16e6c','fontSize','14px');
							}
						},
						error: function(xhr, status, errorThrown) { 
							return false;
						}
						});
					
					return false;
				}
			});
		});
		
		</script>	
