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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-wysihtml5.css">

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

<body class="page-left-sidebar">
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
				  		<div class="submit-header">
								<h1 class="page-title">Submit Property</h1>
							</div>
							<div class="submit-content">
							 
							  <?php echo  form_open_multipart('c_submit/add')?>
							    <div class="noo-control-group">
							      <div class="group-title">Seputar Hunian</div>
							      <div class="group-container row">
							        <div class="col-md-8">
							          <div class="form-group s-prop-title">
							            <label for="title">Nama Properti&nbsp;&#42;</label>
							            <br><br>
							            <input type="text" id="nama" class="form-control" value="" name="nama" required="">
							          </div>
							        </div>
							        <div class="col-md-4">
									  <label for="title">Tipe&nbsp;</label>
									  <br><br>
							          <div class="dropdown label-select">
														<select class="form-control" id="tipe2" name="tipe2">
														  <?php foreach($kat as $k): ?>
														  <option value="<?php echo $k['nID']; ?>"><?php echo $k['nama_subkat']; ?></option>
														  <?php endforeach; ?>
														</select>
							            </div>
							        </div>
											<div class="col-md-12">
											  <div class="form-group ">
											  	<label for="textarea">Alamat&nbsp;&#42;</label>
											  	<br><br>
											    <textarea id="textarea" name="alamat" id="alamat" rows="10" required=""></textarea>
											  </div>
											</div>
											<div class="col-md-12">
											  <div class="form-group s-prop-desc">
											  	<label for="textarea">Deskripsi&nbsp;&#42;</label>
											  	<br><br>
											    <textarea  name="deskripsi"  id="deskripsi" rows="10" required=""></textarea>
											  </div>
											</div>
							        <div class="col-md-8">
							          <div class="form-group s-prop-price row">
							            <div class="price col-md-6">
							              <label for="price">Luas Kamar&nbsp;&#42;</label>
							              <br><br>
							              <input type="text" id="luas_kamar" class="form-control" value="" name="luas_kamar" required="">
							            </div>
							            <div class="price_label col-md-6">
							              <label for="price_label">Jumlah Kamar&nbsp;&#42;</label>
							              <br><br>
							              <input type="text" id="jumlah_kamar" class="form-control" value="" name="jumlah_kamar">
							            </div>
							          </div>
							        </div>
							        <div class="col-md-4">
							          <div class="form-group s-prop-status">
							            <label>Status</label>
							            <br><br>
							            <div class="dropdown label-select">
														<select class="form-control" id="status" name="status">
														  <option>Sale</option>
														  <option>Open house</option>
														  <option>Rent</option>
														  <option>Sold</option>
														</select>
							            </div>
							          </div>
							        </div>
							        
							      </div>
							    </div>

							    <div class="noo-control-group">
							    	<div class="group-title">Gambar Properti</div>
							      <div class="group-container row">
							        <div class="col-md-12">
							          <div id="upload-container">
							            <div id="aaiu-upload-container">
							              <div class="moxie-shim moxie-shim-html5">
											<label for="input-upload" class="btn btn-secondary btn-lg">Select Image</label>
							                <input id="input-upload" name="userfile" type="file" multiple="" accept="image/jpeg,image/gif,image/png">
							              </div>
							              <p>Setidaknya 1 gambar diperlukan untuk pengajuan. Gambar ini akan digunakan untuk dispaly pada halaman properti.</p>
							            </div>
							          </div>
							        </div>
							      </div>
							    </div>

							    <div class="noo-control-group">
							      <div class="group-title">Seputar Penghuni</div>
							      <div class="group-container row">
							        <div class="col-md-7">
							          <div class="group-title">Peruntukan Penghuni</div>
							          <div class="group-container row">
							            <div class="col-md-6">
							              <div class="form-group s-prop-_noo_property_feature_attic">
							                <input type="hidden" name="noo_property_feature[attic]" class="" value="0">
							                <label for="_noo_property_feature_attic" class="checkbox-label">
							                  <input type="checkbox" id="penghuni_pria" name="penghuni_pria" class="" value="1">&nbsp;Pria	<i></i>
							                </label>
							              </div>
							            </div>
							            <div class="col-md-6">
							              <div class="form-group s-prop-_noo_property_feature_gas-heat">
							                <input type="hidden" name="noo_property_feature[gas-heat]" class="" value="0">
							                <label for="_noo_property_feature_gas-heat" class="checkbox-label">
							                  <input type="checkbox" id="penghuni_wanita" name="penghuni_wanita" class="" value="1">&nbsp;Wanita	<i></i>
							                </label>
							              </div>
							            </div>
							            <div class="col-md-6">
							              <div class="form-group s-prop-_noo_property_feature_balcony">
							                <input type="hidden" name="noo_property_feature[balcony]" class="" value="0">
							                <label for="_noo_property_feature_balcony" class="checkbox-label">
							                  <input type="checkbox" id="penghuni_keluarga" name="penghuni_keluarga" class="" value="1">&nbsp;Keluarga	<i></i>
							                </label>
							              </div>
							            </div>
							            <div class="col-md-6">
							              <div class="form-group s-prop-_noo_property_feature_wine-cellar">
							                <input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
							                <label for="_noo_property_feature_wine-cellar" class="checkbox-label">
							                  <input type="checkbox" id="penghuni_suami_istri" name="penghuni_suami_istri" class="" value="1">&nbsp;Suami Istri	<i></i>
							                </label>
							              </div>
							            </div>
							            <div class="col-md-8">
							              <div class="form-group s-prop-_noo_property_feature_basketball-court">
							                <input type="hidden" name="noo_property_feature[basketball-court]" class="" value="0">
							                <label for="_noo_property_feature_basketball-court" class="checkbox-label">
							                  <input type="checkbox" id="penghuni_pria_wanita" name="penghuni_pria_wanita" class="" value="1">&nbsp;Pria Wanita	<i></i>
							                </label>
							              </div>
							            </div>
							            
							          </div>
							          
							      </div>
							        <div class="group-title">Peruntukan Penghuni</div>
							          <div class="group-container row">
							            <div class="col-md-3">
							              <div class="form-group s-prop-_noo_property_feature_attic">
							                <input type="hidden" name="noo_property_feature[attic]" class="" value="0">
							                <label for="_noo_property_feature_attic" class="checkbox-label">
							                  <input type="checkbox" id="untuk_pria" name="untuk_pria" class="" value="1">&nbsp;Pria	<i></i>
							                </label>
							              </div>
							            </div>
							            <div class="col-md-3">
							              <div class="form-group s-prop-_noo_property_feature_gas-heat">
							                <input type="hidden" name="noo_property_feature[gas-heat]" class="" value="0">
							                <label for="_noo_property_feature_gas-heat" class="checkbox-label">
							                  <input type="checkbox" id="untuk_wanita" name="untuk_wanita" class="" value="1">&nbsp;Wanita	<i></i>
							                </label>
							              </div>
							            </div>
							            <div class="col-md-3">
							              <div class="form-group s-prop-_noo_property_feature_balcony">
							                <input type="hidden" name="noo_property_feature[balcony]" class="" value="0">
							                <label for="_noo_property_feature_balcony" class="checkbox-label">
							                  <input type="checkbox" id="untuk_keluarga" name="untuk_keluarga" class="" value="1">&nbsp;Keluarga	<i></i>
							                </label>
							              </div>
							            </div>
							            <div class="col-md-3">
							              <div class="form-group s-prop-_noo_property_feature_wine-cellar">
							                <input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
							                <label for="_noo_property_feature_wine-cellar" class="checkbox-label">
							                  <input type="checkbox" id="untuk_sumai_istri" name="untuk_sumai_istri" class="" value="1">&nbsp;Suami Istri	<i></i>
							                </label>
							              </div>
							            </div>
							            
							         </div>
							      
							    </div>
							    
							    <div class="noo-control-group">
							      <div class="group-title">Seputar Fasilitas</div>
									<div class="row">
									  <div class="col-md-5">
										<div class="noo-control-group small-group">
										  <div class="group-title">Umum</div>
										  <div class="group-container row">
											<div class="col-md-6">
											  <div class="form-group s-prop-_noo_property_feature_attic">
												<input type="hidden"  name="noo_property_feature[attic]" class="" value="0">
												<label for="_noo_property_feature_attic" class="checkbox-label">
												  <input type="checkbox" id="umum_dapur" name="umum_dapur" class="" value="1">&nbsp;Dapur	<i></i>
												</label>
											  </div>
											</div>
											<div class="col-md-6">
											  <div class="form-group s-prop-_noo_property_feature_gas-heat">
												<input type="hidden" name="noo_property_feature[gas-heat]" class="" value="0">
												<label for="_noo_property_feature_gas-heat" class="checkbox-label">
												  <input type="checkbox" id="umum_balkon" name="umum_balkon" class="" value="1">&nbsp;Balkon	<i></i>
												</label>
											  </div>
											</div>
											<div class="col-md-6">
											  <div class="form-group s-prop-_noo_property_feature_balcony">
												<input type="hidden" name="noo_property_feature[balcony]" class="" value="0">
												<label for="_noo_property_feature_balcony" class="checkbox-label">
												  <input type="checkbox" id="umum_kulkas" name="umum_kulkas" class="" value="1">&nbsp;Kulkas	<i></i>
												</label>
											  </div>
											</div>
											<div class="col-md-6">
											  <div class="form-group s-prop-_noo_property_feature_wine-cellar">
												<input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
												<label for="_noo_property_feature_wine-cellar" class="checkbox-label">
												  <input type="checkbox" id="umum_tv" name="umum_tv" class="" value="1">&nbsp;Ruang TV	<i></i>
												</label>
											  </div>
											</div>
											<div class="col-md-8">
											  <div class="form-group s-prop-_noo_property_feature_basketball-court">
												<input type="hidden" name="noo_property_feature[basketball-court]" class="" value="0">
												<label for="_noo_property_feature_basketball-court" class="checkbox-label">
												  <input type="checkbox" id="umum_tamu" name="umum_tamu" class="" value="1">&nbsp;Ruang Tamu	<i></i>
												</label>
											  </div>
											</div>
											<div class="col-md-8">
											  <div class="form-group s-prop-_noo_property_feature_basketball-court">
												<input type="hidden" name="noo_property_feature[basketball-court]" class="" value="0">
												<label for="_noo_property_feature_basketball-court" class="checkbox-label">
												  <input type="checkbox" id="umum_km" name="umum_km" class="" value="1">&nbsp;Kamar Mandi	<i></i>
												</label>
											  </div>
											</div>
											<div class="col-md-8">
											  <div class="form-group s-prop-_noo_property_feature_basketball-court">
												<input type="hidden" name="noo_property_feature[basketball-court]" class="" value="0">
												<label for="_noo_property_feature_basketball-court" class="checkbox-label">
												  <input type="checkbox" id="umum_lain" name="umum_lain" class="" value="1">&nbsp;Lainnya	<i></i>
												</label>
											  </div>
											</div>
										  </div>
										</div>
										
									  </div>
									  <div class="col-md-7">
										<div class="noo-control-group small-group">
										  <div class="group-title">Privat &amp; </div>
										  <div class="group-container row">
											<div class="col-md-3">
											  <div class="form-group s-prop-_noo_property_feature_attic">
												<input type="hidden" name="noo_property_feature[attic]" class="" value="0">
												<label for="_noo_property_feature_attic" class="checkbox-label">
												  <input type="checkbox" id="privat_kasur" name="privat_kasur" class="" value="1">&nbsp;Kasur	<i></i>
												</label>
											  </div>
											</div>
											<div class="col-md-3">
											  <div class="form-group s-prop-_noo_property_feature_gas-heat">
												<input type="hidden" name="noo_property_feature[gas-heat]" class="" value="0">
												<label for="_noo_property_feature_gas-heat" class="checkbox-label">
												  <input type="checkbox" id="privat_almari" name="privat_almari" class="" value="1">&nbsp;Almari	<i></i>
												</label>
											  </div>
											</div>
											<div class="col-md-3">
											  <div class="form-group s-prop-_noo_property_feature_balcony">
												<input type="hidden" name="noo_property_feature[balcony]" class="" value="0">
												<label for="_noo_property_feature_balcony" class="checkbox-label">
												  <input type="checkbox" id="privat_meja" name="privat_meja" class="" value="1">&nbsp;Meja	<i></i>
												</label>
											  </div>
											</div>
											<div class="col-md-3">
											  <div class="form-group s-prop-_noo_property_feature_wine-cellar">
												<input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
												<label for="_noo_property_feature_wine-cellar" class="checkbox-label">
												  <input type="checkbox" id="privat_kursi" name="privat_kursi" class="" value="1">&nbsp;Kursi	<i></i>
												</label>
											  </div>
											</div>
											<div class="col-md-3">
											  <div class="form-group s-prop-_noo_property_feature_wine-cellar">
												<input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
												<label for="_noo_property_feature_wine-cellar" class="checkbox-label">
												  <input type="checkbox" id="privat_ac" name="privat_ac" class="" value="1">&nbsp;AC	<i></i>
												</label>
											  </div>
											</div>
											<div class="col-md-6">
											  <div class="form-group s-prop-_noo_property_feature_wine-cellar">
												<input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
												<label for="_noo_property_feature_wine-cellar" class="checkbox-label">
												  <input type="checkbox" id="privat_kmd" name="privat_kmd" class="" value="1">&nbsp;Kamar Mandi Dalam	<i></i>
												</label>
											  </div>
											</div>
											<div class="col-md-3">
											  <div class="form-group s-prop-_noo_property_feature_wine-cellar">
												<input type="hidden" name="noo_property_feature[wine-cellar]" class="" value="0">
												<label for="_noo_property_feature_wine-cellar" class="checkbox-label">
												  <input type="checkbox" id="privat_tv" name="privat_tv" class="" value="1">&nbsp;TV<i></i>
												</label>
											  </div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
							    <div class="noo-control-group">
							      <div class="group-title">Lokasi Hunian</div>
							      <div class="group-container row">
							        <div class="col-md-4">
							          <div class="form-group s-prop-lat">
							            <label for="_noo_property_gmap_latitude">Latitude </label>
							            <br><br>
							            <input type="text" id="lat" class="form-control"  name="lat">
							          </div>
							        </div>
							        <div class="col-md-4">
							          <div class="form-group s-prop-long">
							            <label for="_noo_property_gmap_longitude">Longitude </label>
							            <br><br>
							            <input type="text" id="lon" class="form-control"  name="lon">
							          </div>
							        </div>
							        
							        <div class="col-md-12">
							        
												<div class="noo_property_google_map">
												  <div id="noo_property_google_map" class="form-group noo_property_google_map" style="height: 300px; margin-top: 25px; overflow: hidden;position: relative;width: 100%;">
												  </div>
												  <div class="noo_property_google_map_search">
												    <input placeholder="Search your map" type="text" autocomplete="off" id="noo_property_google_map_search_input">
												  </div>
												</div>
							        </div>
							      </div>
							    </div>
							    <div class="noo-control-group">
							      <div class="group-title">Seputar Harga</div>
							      <div class="group-container row">
							        <div class="col-md-6">
							          <div class="form-group s-prop-lat">
							            <label for="_noo_property_gmap_latitude">Harian</label>
							            <br><br>
							            <input type="text" id="harian" class="form-control" name="harian">
							          </div>
							        </div>
							        <div class="col-md-6">
							          <div class="form-group s-prop-long">
							            <label for="_noo_property_gmap_longitude">Mingguan</label>
							            <br><br>
							            <input type="text" id="mingguan" class="form-control"  name="mingguan">
							          </div>
							        </div>
							        <div class="col-md-6">
							          <div class="form-group s-prop-long">
							            <label for="_noo_property_gmap_longitude">Bulanan</label>
							            <br><br>
							            <input type="text" id="bulanan" class="form-control"  name="bulanan">
							          </div>
							        </div>
							        <div class="col-md-6">
							          <div class="form-group s-prop-long">
							            <label for="_noo_property_gmap_longitude">Tahunan</label>
							            <br><br>
							            <input type="text" id="tahunan" class="form-control"  name="tahunan">
							          </div>
							        </div>
							      </div>
							    </div>
							    
							    <div class="noo-control-group">
							      <div class="group-title">Seputar Pengelola</div>
							      <div class="group-container row">
							        <div class="col-md-6">
							          <div class="form-group s-prop-lat">
							            <label for="_noo_property_gmap_latitude">Nama</label>
							            <br><br>
							            <input type="text" id="nama_pengelola" class="form-control" name="nama_pengelola">
							          </div>
							        </div>
							        <div class="col-md-6">
							          <div class="form-group s-prop-long">
							            <label for="_noo_property_gmap_longitude">No HP</label>
							            <br><br>
							            <input type="text" id="no_hp" class="form-control"  name="no_hp">
							          </div>
							        </div>
							      </div>
							    </div>
							    
							   
							    <div class="noo-control-group">
							      <div class="group-title">Seputar Kebijakan Hunian</div>
							      <div class="group-container row">
							        <div class="col-md-12">
							          
							            <textarea id="kebijakan" class="form-control" name="kebijakan"></textarea>
							          
							        </div>
							        
							        
							      </div>
							    </div>
							    <div class="noo-submit row">
							      <div class="col-md-12">
							        <input type="submit" class="btn btn-lg rounded metro btn-primary" id="property_submit" value="Add Property">
							        <label>Your submission will be reviewed by Administrator before it can be published</label>
							      </div>
							    </div>
							  <?php echo form_close();?>
							</div>						
						</div>	  		
				  	<!-- END MAIN CONTENT -->
				  </div>
		  	</div>
		  </div>
		  <!-- END NOO MAINBODY -->
		</div>
		<!-- END NOO WRAPPER -->

    
  </div>
  <!-- END SITE -->
<?php include "footer.php"; ?>

   <!-- JQUERY PLUGIN -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/SmoothScroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap3-wysihtml5.custom.min.js"></script>
  <script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true&amp;libraries=places'></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/infobox.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/markerclusterer.js"></script>

  <!-- THEME SCRIPT -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/noo-property-google-map.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/property.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/data-nooGmapL10n.js"></script>
  
  
  
  
</body>

</html>
