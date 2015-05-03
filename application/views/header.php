<link rel="stylesheet" href="<?php echo base_url(); ?>assets/menu/css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/menu/css/style.css"> <!-- Resource style -->	  
<script src="<?php echo base_url(); ?>assets/menu/js/modernizr.js"></script> <!-- Modernizr -->
<script src="<?php echo base_url(); ?>assets/menu/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url(); ?>assets/menu/js/jquery.mobile.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/menu/js/main.js"></script> <!-- Resource jQuery -->
<!-- START HEADER -->
    <header class="noo-header cd-main-header">
      <!-- START TOP HEADER -->
      <div class="top-header">
        <div class="container">
          <div class="top-header-inner">
            <ul class="social-top">
              <li><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
              <li><a href="#" title="RSS" target="_blank"><i class="fa fa-rss"></i></a></li>
            </ul>

            <div class="top-header-content">
			<?php if(!isset($_SESSION['username'])){ ?>
              <div class="emailto content-item">
                <a href="mailto:info@citilights.com"><i class="fa fa-envelope-o"></i>&nbsp;Email:info@citilights.com</a>
              </div>
              <div class="register content-item">
                <a href="<?php echo base_url();?>c_login"><i class="fa fa-key"></i>&nbsp;Register</a>
              </div>
              <div class="login content-item">
                <a href="<?php echo base_url();?>c_login"><i class="fa fa-sign-in"></i>&nbsp;Login</a>
              </div>
            <?php } else { ?>
			  <div class="register content-item">
                <a href="<?php echo base_url();?>c_profil"><i class="fa fa-user"></i>&nbsp;Profil</a>
              </div>
              <div class="login content-item">
                <a href="<?php echo base_url();?>c_myproperti"><i class="fa fa-home"></i>&nbsp;Properti</a>
              </div>
              <div class="logout content-item">
                <a href="<?php echo base_url();?>c_login/logout"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
              </div>
              <?php } ?>
              <div class="header-search">
                <label for="input-header-search"><i class="fa fa-search"></i></label>
                <input type="text" id="input-header-search" placeholder="Search">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END TOP HEADER -->

      <!-- START MAIN NAVIGATION WRAP -->
      <div class="main-nav-wrap container">
        <!-- START NAVBAR TOGGLE & LOGO -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="logo">
            <div class="logo-image">
              <a href="index.html" title="NooTheme CitiLights"></a>
            </div>
          </div>
        </div>
        <!-- END NAVBAR TOGGLE & LOGO -->
        <!-- START CALLING INFO -->
        <div class="calling-info">
          <div class="calling-content">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url();?>c_submit" class="btn btn-secondary">Submit Property</a></div>
        </div>
        <!-- END CALLING INFO -->

        <!-- START MAIN NAVIGATION -->
        <div class="main-navigation">
          <nav class="collapse navbar-collapse" id="main-collapse" role="navigation">
            <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
			<li class="has-children">
				<a href="#">Kost</a>

				<ul class="cd-nav-gallery is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="http://codyhouse.co/?p=409">Browse Gallery</a></li>
					
					<li>
						<a class="cd-nav-item" href="http://codyhouse.co/?p=409">
							<img src="<?php echo base_url();?>assets/menu/img/img.jpg" alt="Product Image">
							<h3>Product #1</h3>
						</a>
					</li>

					<li>
						<a class="cd-nav-item" href="http://codyhouse.co/?p=409">
							<img src="<?php echo base_url();?>assets/menu/img/img.jpg" alt="Product Image">
							<h3>Product #2</h3>
						</a>
					</li>

					<li>
						<a class="cd-nav-item" href="http://codyhouse.co/?p=409">
							<img src="<?php echo base_url();?>assets/menu/img/img.jpg" alt="Product Image">
							<h3>Product #3</h3>
						</a>
					</li>

					<li>
						<a class="cd-nav-item" href="http://codyhouse.co/?p=409">
							<img src="<?php echo base_url();?>assets/menu/img/img.jpg" alt="Product Image">
							<h3>Product #4</h3>
						</a>
					</li>
				</ul>
			</li>
			
			<li class="has-children">
				<a href="http://codyhouse.co/?p=409">Rumah</a>
				<ul class="cd-nav-icons is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="http://codyhouse.co/?p=409">Browse Services</a></li>
					<li>
						<a class="cd-nav-item item-1" href="http://codyhouse.co/?p=409">
							<h3>Service #1</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-2" href="http://codyhouse.co/?p=409">
							<h3>Service #2</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-3" href="http://codyhouse.co/?p=409">
							<h3>Service #3</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-4" href="http://codyhouse.co/?p=409">
							<h3>Service #4</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-5" href="http://codyhouse.co/?p=409">
							<h3>Service #5</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-6" href="http://codyhouse.co/?p=409">
							<h3>Service #6</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-7" href="http://codyhouse.co/?p=409">
							<h3>Service #7</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-8" href="http://codyhouse.co/?p=409">
							<h3>Service #8</h3>
							<p>This is the item description</p>
						</a>
					</li>
				</ul>
			</li>

			<li class="has-children">
				<a href="http://codyhouse.co/?p=409">Apartement</a>
				<ul class="cd-nav-icons is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="http://codyhouse.co/?p=409">Browse Services</a></li>
					<li>
						<a class="cd-nav-item item-1" href="http://codyhouse.co/?p=409">
							<h3>Service #1</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-2" href="http://codyhouse.co/?p=409">
							<h3>Service #2</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-3" href="http://codyhouse.co/?p=409">
							<h3>Service #3</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-4" href="http://codyhouse.co/?p=409">
							<h3>Service #4</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-5" href="http://codyhouse.co/?p=409">
							<h3>Service #5</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-6" href="http://codyhouse.co/?p=409">
							<h3>Service #6</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-7" href="http://codyhouse.co/?p=409">
							<h3>Service #7</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-8" href="http://codyhouse.co/?p=409">
							<h3>Service #8</h3>
							<p>This is the item description</p>
						</a>
					</li>
				</ul>
			</li>
			
			<li class="has-children">
				<a href="http://codyhouse.co/?p=409">Hotel</a>
				<ul class="cd-nav-icons is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="http://codyhouse.co/?p=409">Browse Services</a></li>
					<li>
						<a class="cd-nav-item item-1" href="http://codyhouse.co/?p=409">
							<h3>Service #1</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-2" href="http://codyhouse.co/?p=409">
							<h3>Service #2</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-3" href="http://codyhouse.co/?p=409">
							<h3>Service #3</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-4" href="http://codyhouse.co/?p=409">
							<h3>Service #4</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-5" href="http://codyhouse.co/?p=409">
							<h3>Service #5</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-6" href="http://codyhouse.co/?p=409">
							<h3>Service #6</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-7" href="http://codyhouse.co/?p=409">
							<h3>Service #7</h3>
							<p>This is the item description</p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item item-8" href="http://codyhouse.co/?p=409">
							<h3>Service #8</h3>
							<p>This is the item description</p>
						</a>
					</li>
				</ul>
			</li>
			
			<li class="has-children">
				<a href="http://codyhouse.co/?p=409">Hunian Lainya</a>
					<ul class="cd-secondary-nav is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all"><a href="http://codyhouse.co/?p=409">All Clothing</a></li>
					<li class="has-children">
						<a href="http://codyhouse.co/?p=409">Accessories</a>

						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="http://codyhouse.co/?p=409">All Accessories</a></li>
							<li class="has-children">
								<a href="#0">Beanies</a>

								<ul class="is-hidden">
									<li class="go-back"><a href="#0">Accessories</a></li>
									<li class="see-all"><a href="http://codyhouse.co/?p=409">All Benies</a></li>
									<li><a href="http://codyhouse.co/?p=409">Caps &amp; Hats</a></li>
									<li><a href="http://codyhouse.co/?p=409">Gifts</a></li>
									<li><a href="http://codyhouse.co/?p=409">Scarves &amp; Snoods</a></li>
								</ul>
							</li>
							<li class="has-children">
								<a href="#0">Caps &amp; Hats</a>

								<ul class="is-hidden">
									<li class="go-back"><a href="#0">Accessories</a></li>
									<li class="see-all"><a href="http://codyhouse.co/?p=409">All Caps &amp; Hats</a></li>
									<li><a href="http://codyhouse.co/?p=409">Beanies</a></li>
									<li><a href="http://codyhouse.co/?p=409">Caps</a></li>
									<li><a href="http://codyhouse.co/?p=409">Hats</a></li>
								</ul>
							</li>
							<li><a href="http://codyhouse.co/?p=409">Glasses</a></li>
							<li><a href="http://codyhouse.co/?p=409">Gloves</a></li>
							<li><a href="http://codyhouse.co/?p=409">Jewellery</a></li>
							<li><a href="http://codyhouse.co/?p=409">Scarves</a></li>
							<li><a href="http://codyhouse.co/?p=409">Wallets</a></li>
							<li><a href="http://codyhouse.co/?p=409">Watches</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="#0">Menu</a>
						<ul class="cd-nav-gallery">		
							<li>
								<a class="cd-nav-item" href="http://codyhouse.co/?p=409">
									<img src="<?php echo base_url();?>assets/menu/img/img.jpg" alt="Product Image">
									<h3>Product #1</h3>
								</a>
							</li>

							<li>
								<a class="cd-nav-item" href="http://codyhouse.co/?p=409">
									<img src="<?php echo base_url();?>assets/menu/img/img.jpg" alt="Product Image">
									<h3>Product #2</h3>
								</a>
							</li>

							<li>
								<a class="cd-nav-item" href="http://codyhouse.co/?p=409">
									<img src="<?php echo base_url();?>assets/menu/img/img.jpg" alt="Product Image">
									<h3>Product #3</h3>
								</a>
							</li>

							<li>
								<a class="cd-nav-item" href="http://codyhouse.co/?p=409">
									<img src="<?php echo base_url();?>assets/menu/img/img.jpg" alt="Product Image">
									<h3>Product #4</h3>
								</a>
							</li>
						</ul>
					</li>
					
				</ul>
			</li>

		</ul> <!-- primary-nav -->
          </nav>
        </div>
        <!-- END MAIN NAVIGATION -->
      </div>
      <!-- END MAIN NAVIGATION WRAP -->
    </header>
    <!-- END HEADER -->
