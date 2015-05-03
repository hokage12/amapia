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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.nouislider.min.css">

  <!-- THEME STYLESHEETS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/shortcode.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/home.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/citilights-shortcode.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/color/color3.css">
  
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
      <!-- START SLIDESHOW HOME -->
      <section id="slideshow-home" class="wrap noo-slideshow slideshow-home">
        <div class="property-slider">
          <div id="noo-slider-1" class="noo-slider noo-property-slide-wrap">
            <ul class="sliders">
              <li class="slide-item noo-property-slide">
                <img src="<?php echo base_url();?>assets/images/slideshow/bg-slide1.jpg" class="attachment-property-slider" alt="" />
                <div class="slide-caption">
                  <div class="slide-caption-info">
                    <h3><a href="property-details.html">Fresno, CA93722</a>
                      <small>6001 W Alluvial Ave</small>
                    </h3>
                    <div class="info-summary">
                      <div class="size">
                        <span>2400 sqft</span>
                      </div>
                      <div class="bathrooms">
                        <span>3</span>
                      </div>
                      <div class="bedrooms">
                        <span>4</span>
                      </div>
                      <div class="property-price">
                        <span>
                          <span class="amount">&#36;309,000</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="slide-caption-action"><a href="property-details.html">More Details</a>
                  </div>
                </div>
              </li>
              <li class="slide-item noo-property-slide">
                <img src="<?php echo base_url();?>assets/images/slideshow/bg-slide1.jpg" class="attachment-property-slider" alt="" />
                <div class="slide-caption">
                  <div class="slide-caption-info">
                    <h3><a href="property-details.html">Oakland, NJ94605</a>
                      <small>8727 Thermal St</small>
                    </h3>
                    <div class="info-summary">
                      <div class="size">
                        <span>2,568 sqft</span>
                      </div>
                      <div class="bathrooms">
                        <span>2</span>
                      </div>
                      <div class="bedrooms">
                        <span>4</span>
                      </div>
                      <div class="property-price">
                        <span>
                          <span class="amount">&#36;335,000</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="slide-caption-action"><a href="property-details.html">More Details</a>
                  </div>
                </div>
              </li>
              <li class="slide-item noo-property-slide">
                <img src="<?php echo base_url();?>assets/images/slideshow/bg-slide1.jpg" class="attachment-property-slider" alt="" />
                <div class="slide-caption">
                  <div class="slide-caption-info">
                    <h3><a href="property-details.html">Visalia, NJ 93277</a>
                      <small>3211 S Parkwood Ct</small>
                    </h3>
                    <div class="info-summary">
                      <div class="size">
                        <span>1913 sqft</span>
                      </div>
                      <div class="bathrooms">
                        <span>2</span>
                      </div>
                      <div class="bedrooms">
                        <span>4</span>
                      </div>
                      <div class="property-price">
                        <span>
                          <span class="amount">&#36;154,500</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="slide-caption-action"><a href="property-details.html">More Details</a>
                  </div>
                </div>
              </li>
            </ul>
            <div class="clearfix"></div>
            <div id="noo-slider-1-pagination" class="slider-indicators indicators-center-bottom"></div>
            <a id="noo-slider-1-prev" class="slider-control prev-btn" role="button" href="#">
              <span class="slider-icon-prev"></span>
            </a>
            <a id="noo-slider-1-next" class="slider-control next-btn" role="button" href="#">
              <span class="slider-icon-next"></span>
            </a>
          </div>
        </div>
      </section>
      <!-- END SLIDESHOW HOME -->

      <!-- START SEARCH BOX -->
      <section id="search-box" class="wrap search-box">
        <div class="gsearch">
          <div class="container">
            <!-- START GSEARCH INFO -->
            <div class="gsearch-info">
              <h4 class="gsearch-info-title">Find Your Place</h4>
              <div class="gsearch-info-content">Instantly find your desired place from your own idea of location, at any price <br> and other elements just by starting your search now</div>
            </div>
            <!-- END GSEARCH INFO -->

            <!-- START GSEARCH WRAP -->
            <div class="gsearch-wrap">
              <form class="gsearchform" method="get" role="search">
                <div class="gsearch-content">
                  <div class="gsearch-field">
                    <div class="form-group glocation">
                      <div class="label-select">
                        <select class="form-control">
                          <option>All Locations</option>
                          <option>New Jersey</option>
                          <option>New York</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group gsub-location">
                      <div class="label-select">
                        <select class="form-control">
                          <option>All Sub-locations</option>
                          <option>Central New York</option>
                          <option>GreenVille</option>
                          <option>Long Island</option>
                          <option>New York City</option>
                          <option>West Side</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group gstatus">
                      <div class="label-select">
                        <select class="form-control">
                        <option>All Status</option>
                        <option>Open house</option>
                        <option>Rent</option>
                        <option>Sale</option>
                        <option>Sold</option>
                      </select>
                      </div>
                    </div>

                    <div class="form-group gtype">
                      <div class="label-select">
                        <select class="form-control">
                          <option>All Type </option>
                          <option>Apartment</option>
                          <option>Co-op</option>
                          <option>Condo</option>
                          <option>Single Family Home</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group gbed">
                      <div class="label-select">
                        <select class="form-control">
                          <option>No. of Bedrooms</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group gbath">
                      <div class="label-select">
                        <select class="form-control">
                          <option>No. of Bathrooms</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group gprice">
                      <span class="gprice-label">Price</span>
                      <div class="gslider-range gprice-slider-range"></div>
                      <span class="gslider-range-value gprice-slider-range-value-min"></span>
                      <span class="gslider-range-value gprice-slider-range-value-max"></span>
                    </div>

                    <div class="form-group garea">
                      <span class="garea-label">Area</span>
                      <div class="gslider-range garea-slider-range"></div>
                      <span class="gslider-range-value garea-slider-range-value-min"></span>
                      <span class="gslider-range-value garea-slider-range-value-max"></span>
                    </div>
                  </div>

                  <div class="gsearch-action">
                    <div class="gsubmit">
                      <a class="btn btn-deault" href="#">Search Property</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- END GSEARCH WRAP -->
          </div>
        </div>
      </section>
      <!-- END SEARCH BOX -->

      <!-- START RECENT PROPERTIES -->
      <section id="recent-properties-slider" class="wrap recent-properties recent-properties-slider">
        <div class="container">
          <div class="recent-properties-inner">
            <div class="section-title">
              <h3>Recent Properties</h3>
            </div>
            <div class="recent-properties-content">
              <div class="caroufredsel-wrap">
                <ul>
                  <li>
                    <div class="property-row">
                      <article class="hentry has-featured">
                        <div class="property-featured">
                          <a class="content-thumb" href="property-details.html">
                            <img src="<?php echo base_url();?>assets/images/property/property1.jpg" class="attachment-property-thumb" alt="" />
                          </a>
                          <span class="property-category">
                            <a href="type-single-family-home.html">Single Family Home</a>
                          </span>
                          <div class="property-detail">
                            <div class="size"><span>1913 sqft</span>
                            </div>
                            <div class="bathrooms"><span>2</span>
                            </div>
                            <div class="bedrooms"><span>4</span>
                            </div>
                          </div>
                        </div>
                        <div class="property-wrap">
                          <h2 class="property-title"><a href="property-details.html" title="Visalia, NJ 93277">Visalia, NJ 93277</a></h2>
                          <div class="property-excerpt">
                            <p>This 4 bedroom home sits on an oversized lot at the end of a cul-de-sac<?php echo base_url();?>.</p>
                          </div>
                        </div>
                        <div class="property-summary">
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;154,500</span></span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                        </div>
                      </article>

                      <article class="hentry has-featured">
                        <div class="property-featured">
                          <a class="content-thumb" href="property-details.html">
                            <img src="<?php echo base_url();?>assets/images/property/property1.jpg" class="attachment-property-thumb" alt="" />
                          </a>
                          <span class="property-category"><a href="type-single-family-home.html">Single Family Home</a></span>
                          <div class="property-detail">
                            <div class="size"><span>1118 sqft</span>
                            </div>
                            <div class="bathrooms"><span>2</span>
                            </div>
                            <div class="bedrooms"><span>3</span>
                            </div>
                          </div>
                        </div>
                        <div class="property-wrap">
                          <h2 class="property-title"><a href="property-details.html" title="Single Family Residential, NJ">Single Family Residential, NJ</a></h2>
                          <div class="property-excerpt">
                            <p>Classic 60's ranch living. House has hardwood floors and hard coat plaster walls and ceilings<?php echo base_url();?>.</p>
                          </div>
                        </div>
                        <div class="property-summary">
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;299,000</span></span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="property-row">
                      <article class="hentry has-featured">
                        <div class="property-featured">
                          <a class="content-thumb" href="property-details.html">
                            <img src="<?php echo base_url();?>assets/images/property/property1.jpg" class="attachment-property-thumb" alt="" /> </a>
                          <span class="property-category"><a href="type-apartment.html">Apartment</a></span>
                          <div class="property-detail">
                            <div class="size"><span>1304 sqft</span>
                            </div>
                            <div class="bathrooms"><span>2</span>
                            </div>
                            <div class="bedrooms"><span>3</span>
                            </div>
                          </div>
                        </div>
                        <div class="property-wrap">
                          <h2 class="property-title"><a href="property-details.html" title="Peter Cooper Village">Peter Cooper Village</a></h2>
                          <div class="property-excerpt">
                            <p>Peter Cooper Village/ Stuyvesant Town provides an unbeatable combination of city energy and community tranquility,<?php echo base_url();?>.</p>
                          </div>
                        </div>
                        <div class="property-summary">
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;5,109</span></span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                        </div>
                      </article>

                      <article class="hentry has-featured">
                        <div class="property-featured">
                          <a class="content-thumb" href="property-details.html">
                            <img src="<?php echo base_url();?>assets/images/property/property1.jpg" class="attachment-property-thumb" alt="" /> </a>
                          <span class="property-category"><a href="type-condo.html">Condo</a></span>
                          <div class="property-detail">
                            <div class="size"><span>1,856 sqft</span>
                            </div>
                            <div class="bathrooms"><span>2</span>
                            </div>
                            <div class="bedrooms"><span>2</span>
                            </div>
                          </div>
                        </div>
                        <div class="property-wrap">
                          <h2 class="property-title"><a href="property-details.html" title="Ocala, FL34481">Ocala, FL34481</a></h2>
                          <div class="property-excerpt">
                            <p>Wonderful expanded end-unit Augusta featuring 2 bedrooms in split-bedroom plan, study/den/library off of cathedral-ceilinged HUGE<?php echo base_url();?>.</p>
                          </div>
                        </div>
                        <div class="property-summary">
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;95,000</span></span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                        </div>
                      </article>
                    </div>
                  </li>
                  <li>
                    <div class="property-row">
                      <article class="hentry has-featured">
                        <div class="property-featured">
                          <a class="content-thumb" href="property-details.html">
                            <img src="<?php echo base_url();?>assets/images/property/property1.jpg" class="attachment-property-thumb" alt="" /> </a>
                          <span class="property-category"><a href="type-single-family-home.html">Single Family Home</a></span>
                          <div class="property-detail">
                            <div class="size"><span>123 sqft</span>
                            </div>
                            <div class="bathrooms"><span>1</span>
                            </div>
                            <div class="bedrooms"><span>1</span>
                            </div>
                          </div>
                        </div>
                        <div class="property-wrap">
                          <h2 class="property-title"><a href="property-details.html" title="New York Upper West Side">New York Upper West Side</a></h2>
                          <div class="property-excerpt">
                            <p>Fantastic One Bedroom Facing East In This Amazing Trump Place Doorman Building. There Is A<?php echo base_url();?>.</p>
                          </div>
                        </div>
                        <div class="property-summary">
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;3,350</span></span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                        </div>
                      </article>

                      <article class="hentry has-featured">
                        <div class="property-featured">
                          <a class="content-thumb" href="property-details.html">
                            <img src="<?php echo base_url();?>assets/images/property/property1.jpg" class="attachment-property-thumb" alt="" /> </a>
                          <span class="property-category"><a href="type-apartment.html">Apartment</a></span>
                          <div class="property-detail">
                            <div class="size"><span> 1752 sqft</span>
                            </div>
                            <div class="bathrooms"><span>2</span>
                            </div>
                            <div class="bedrooms"><span>2</span>
                            </div>
                          </div>
                        </div>
                        <div class="property-wrap">
                          <h2 class="property-title"><a href="property-details.html" title="AVA High Line">AVA High Line</a></h2>
                          <div class="property-excerpt">
                            <p>Special pricing for immediate move-ins! Call for details! AVA is a first. Our apartments are<?php echo base_url();?>.</p>
                          </div>
                        </div>
                        <div class="property-summary">
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;3,410</span></span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                        </div>
                      </article>
                    </div>
                  </li>
                </ul>
              </div>
              <a class="caroufredsel-prev" href="#"></a>
              <a class="caroufredsel-next" href="#"></a>
            </div>
          </div>
        </div>
      </section>
      <!-- END RECENT PROPERTIES -->

      <!-- START FEATURED PROPERTIES -->
      <section id="recent-properties-featured" class="wrap recent-properties recent-properties-featured">
        <div class="container">
          <div class="recent-properties-inner">
            <div class="recent-properties-title">
              <h3>Featured Properties</h3>
            </div>
            <div class="recent-properties-content">
              <div class="caroufredsel-wrap">
                <ul>
                  <li>
                    <article class="hentry has-featured">
                      <div class="property-featured">
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/featured-properties1.jpg" class="attachment-property-image" alt="" /> </a>
                        <span class="property-category"><a href="type-single-family-home.html">Single Family Home</a></span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title"><a href="property-details.html" title="Visalia, NJ 93277">Visalia, NJ 93277</a></h2>
                        <div class="property-excerpt">
                          <p>This 4 bedroom home sits on an oversized lot at the end of a cul-de-sac in an established neighborhood. It is in need of work however would make a great<?php echo base_url();?>.</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size"><span>1913 sqft</span>
                            </div>
                            <div class="bathrooms"><span>2</span>
                            </div>
                            <div class="bedrooms"><span>4</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;154,500</span> </span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </li>
                  <li>
                    <article class="hentry has-featured">
                      <div class="property-featured">
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/featured-properties1.jpg" class="attachment-property-image" alt="" /> </a>
                        <span class="property-category"><a href="type-single-family-home.html">Single Family Home</a></span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title"><a href="property-details.html" title="Single Family Residential, NJ">Single Family Residential, NJ</a></h2>
                        <div class="property-excerpt">
                          <p>Classic 60's ranch living. House has hardwood floors and hard coat plaster walls and ceilings in good condition. Intimate backyard for private gatherings. Full basement leaves plenty of room for<?php echo base_url();?>.</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size"><span>1118 sqft</span>
                            </div>
                            <div class="bathrooms"><span>2</span>
                            </div>
                            <div class="bedrooms"><span>3</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;299,000</span> </span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </li>
                  <li>
                    <article class="hentry has-featured">
                      <div class="property-featured">
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/featured-properties1.jpg" class="attachment-property-image" alt="" /> </a>
                        <span class="property-category"><a href="type-apartment.html">Apartment</a></span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title"><a href="property-details.html" title="Peter Cooper Village">Peter Cooper Village</a></h2>
                        <div class="property-excerpt">
                          <p>Peter Cooper Village/ Stuyvesant Town provides an unbeatable combination of city energy and community tranquility, providing insulation from the city that surrounds it, yet situated next to Manhattan's most dynamic<?php echo base_url();?>.</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size"><span>1304 sqft</span>
                            </div>
                            <div class="bathrooms"><span>2</span>
                            </div>
                            <div class="bedrooms"><span>3</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;5,109</span> /month</span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </li>
                </ul>
              </div>
              <a class="caroufredsel-prev" href="#"></a>
              <a class="caroufredsel-next" href="#"></a>
            </div>
          </div>
        </div>
      </section>
      <!-- END FEATURED PROPERTIES -->

      <!-- START OUR SERVICES -->
      <section id="our-sevices" class="wrap our-sevices">
        <div class="container">
          <div class="parallax">
            <div class="bg parallax-bg"></div>
            <div class="overlay"></div>
            <div class="our-sevices-content">
              <div class="row clearfix">
              
                <div class="col-xs-12 col-sm-4 our-sevices-col">
                  <span class="service-icon">
                    <i class="fa fa-home"></i>
                  </span>
                  <hr class="noo-gap">
                  <div class="text-block">
                    <h5>Hottest Property List</h5>
                    <p>Wherever you are and you want to go, we provide you extremely hot and continuously<br>updated property list.</p>
                    <p><a class="icon-right" href="#">See latest list<i class="fa fa-arrow-circle-o-right"></i></a></p>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-4 our-sevices-col">
                  <span  class="service-icon">
                    <i class="fa fa-thumbs-o-up"></i>
                  </span>
                  <hr class="noo-gap">
                  <div class="text-block">
                    <h5>Best Price In Market</h5>
                    <p>Wherever you are and you want to go, we provide you extremely hot and continuously
                    <br>updated property list.</p>
                    <p><a class="icon-right" href="#">See latest list<i class="fa fa-arrow-circle-o-right"></i></a>
                    </p>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-4 our-sevices-col">
                  <span class="service-icon">
                    <i class="fa fa-star"></i>
                  </span>
                  <hr class="noo-gap">
                  <div class="text-block">
                    <h5>Guaranteed Service</h5>
                    <p>Wherever you are and you want to go, we provide you extremely hot and continuously
                      <br>updated property list.</p>
                    <p>
                      <a class="icon-right" href="#">See latest list<i class="fa fa-arrow-circle-o-right"></i></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END OUR SERVICES -->

      <!-- START RECENT AGENTS -->
      <section id="recent-agents-slider" class="wrap recent-agents recent-agents-slider">
        <div class="container">
          <div class="recent-agents-inner">
            <div class="recent-agents-title">
              <h3>MEET OUR AGENTS</h3>
            </div>
            <div class="recent-agents-content">
              <div class="caroufredsel-wrap row">
                <ul>
                  <li class="col-md-4 col-sm-6">
                    <!-- START AGENT 1 -->
                    <article class="hentry has-featured">
                      <div class="agent-featured">
                        <a class="content-thumb" href="agents-detail.html">
                          <img src="<?php echo base_url();?>assets/images/agent/agent1.jpg" alt="" />
                        </a>
                      </div>
                      <div class="agent-wrap">
                        <h2 class="agent-title"><a href="agents-detail.html" title="Adam Scooter">Adam Scooter</a></h2>
                        <div class="agent-excerpt">
                          <p>When people are looking for a real estate professional to consult, studies show they care most about loyalty and accountability<?php echo base_url();?><?php echo base_url();?></p>
                        </div>
                        <div class="agent-social-wrap">
                          <div class="social-list agent-social">
                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!-- END AGENT 1 -->
                  </li>

                  <li class="col-md-4 col-sm-6">
                    <!-- START AGENT 2 -->
                    <article class="hentry has-featured">
                      <div class="agent-featured">
                        <a class="content-thumb" href="agents-detail.html">
                          <img src="<?php echo base_url();?>assets/images/agent/agent1.jpg" alt="" />
                        </a>
                      </div>
                      <div class="agent-wrap">
                        <h2 class="agent-title"><a href="agents-detail.html" title="Thomas Adam Clayton">Thomas Adam Clayton</a></h2>
                        <div class="agent-excerpt">
                          <p>Recognized as the top selling broker in Lower Manhattan and among the best in New York City, Thomas Adam Clayton<?php echo base_url();?>.</p>
                        </div>
                        <div class="agent-social-wrap">
                          <div class="social-list agent-social">
                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!-- END AGENT 2 -->
                  </li>

                  <li class="col-md-4 col-sm-6">
                    <!-- START AGENT 3 -->
                    <article class="hentry has-featured">
                      <div class="agent-featured">
                        <a class="content-thumb" href="agents-detail.html">
                          <img src="<?php echo base_url();?>assets/images/agent/agent1.jpg" alt="" />
                        </a>
                      </div>
                      <div class="agent-wrap">
                        <h2 class="agent-title"><a href="agents-detail.html" title="Stacy Barron">Stacy Barron</a></h2>
                        <div class="agent-excerpt">
                          <p>Stacy is a long time resident and successful broker in the Lincoln Center area. Never far from home, sheis intimately acquainted<?php echo base_url();?>.</p>
                        </div>
                        <div class="agent-social-wrap">
                          <div class="social-list agent-social">
                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!-- END AGENT 3 -->
                  </li>

                  <li class="col-md-4 col-sm-6">
                    <!-- START AGENT 4 -->
                    <article class="hentry has-featured">
                      <div class="agent-featured">
                        <a class="content-thumb" href="agents-detail.html">
                          <img src="<?php echo base_url();?>assets/images/agent/agent1.jpg" alt="" />
                        </a>
                      </div>
                      <div class="agent-wrap">
                        <h2 class="agent-title"><a href="agents-detail.html" title="Michael Feng">Michael Feng</a></h2>
                        <div class="agent-excerpt">
                          <p>Michael Feng is a real estate agent, but his true goal is to be a resource for his clients. Since 2006,<?php echo base_url();?>.</p>
                        </div>
                        <div class="agent-social-wrap">
                          <div class="social-list agent-social">
                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!-- END AGENT 4 -->
                  </li>

                  <li class="col-md-4 col-sm-6">
                    <!-- START AGENT 5 -->
                    <article class="hentry has-featured">
                      <div class="agent-featured">
                        <a class="content-thumb" href="agents-detail.html">
                          <img src="<?php echo base_url();?>assets/images/agent/agent1.jpg" alt="" />
                        </a>
                      </div>
                      <div class="agent-wrap">
                        <h2 class="agent-title"><a href="agents-detail.html" title="John Doe">John Doe</a></h2>
                        <div class="agent-excerpt">
                          <p>John Doe, the founding partner of Elegran, started the company in 2007 in a unique way. He did this without<?php echo base_url();?>.</p>
                        </div>
                        <div class="agent-social-wrap">
                          <div class="social-list agent-social">
                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!-- END AGENT 5 -->
                  </li>
                </ul>
              </div>
              <a class="caroufredsel-prev" href="javascript:void(0)"></a>
              <a class="caroufredsel-next" href="javascript:void(0)"></a>
            </div>
          </div>
        </div>
      </section>
      <!-- END RECENT AGENTS -->

      <!-- START CALL TO ACTION -->
      <section id="call-to-action" class="wrap call-to-action">
        <div class="container">
          <div class="parallax">
            <div class="bg parallax-bg"></div>
            <div class="overlay"></div>
            <div class="call-to-action-content">
              <div class="row clearfix">
                <div class="col-xs-12 col-sm-6 item-col">
                  <div class="text-block">
                    <h3>ONLY IN JULY</h3>
                    <p>Be the first to get our hottest unlisted property list!</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 item-col">
                  <div class="call-to-action-btn">
                    <a href="#" class="btn" role="button">GET IT NOW</a>
                  </div>
                </div>
              </div>            
            </div>
          </div>
        </div>
      </section>
      <!-- END CALL TO ACTION -->

      <!-- START TESTIMONIAL -->
      <section id="testimonial" class="wrap testimonial">
        <div class="container">
          <div class="testimonial-inner">
            <div class="section-title">
              <h3>Testimonial</h3>
            </div>
            <div class="testimonial-content">
              <div class="carousel slide" id="carousel-testimonial">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-testimonial" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-testimonial" data-slide-to="1"></li>
                  <li data-target="#carousel-testimonial" data-slide-to="2"></li>
                  <li data-target="#carousel-testimonial" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <!-- START ITEM 1 -->
                  <div class="item active">
                    <div class="slide-content">
                      <div class="testimonial-desc">“I found my current apartment on Citilights with extraordinary help from them and totally satisfied with the choice I made. All I had to do was to tell what I was looking for and I got back property suggestions nearly exact to my imagination. Among those, I finally chose mine now then completed procedure at ease. Highly recommend Citilights for your home search.”</div>
                      <div class="our-customer-info">
                        <div class="avatar">
                          <a href="#"><img src="<?php echo base_url();?>assets/images/other/customer1.png" alt=""></a>
                        </div>
                        <div class="custom-desc">
                          <h4>Dave Softel</h4>
                          <p>Happy Buyer of June</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- END ITEM 1 -->

                  <!-- START ITEM 2 -->
                  <div class="item">
                    <div class="slide-content">
                      <div class="testimonial-desc">“I found my current apartment on Citilights with extraordinary help from them and totally satisfied with the choice I made. All I had to do was to tell what I was looking for and I got back property suggestions nearly exact to my imagination. Among those, I finally chose mine now then completed procedure at ease. Highly recommend Citilights for your home search.”</div>
                      <div class="our-customer-info">
                        <div class="avatar">
                          <a href="#"><img src="<?php echo base_url();?>assets/images/other/customer1.png" alt=""></a>
                        </div>
                        <div class="custom-desc">
                          <h4>Dave Softel</h4>
                          <p>Happy Buyer of June</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- END ITEM 2 -->

                  <!-- START ITEM 3 -->
                  <div class="item">
                    <div class="slide-content">
                      <div class="testimonial-desc">“I found my current apartment on Citilights with extraordinary help from them and totally satisfied with the choice I made. All I had to do was to tell what I was looking for and I got back property suggestions nearly exact to my imagination. Among those, I finally chose mine now then completed procedure at ease. Highly recommend Citilights for your home search.”</div>
                      <div class="our-customer-info">
                        <div class="avatar">
                          <a href="#"><img src="<?php echo base_url();?>assets/images/other/customer1.png" alt=""></a>
                        </div>
                        <div class="custom-desc">
                          <h4>Dave Softel</h4>
                          <p>Happy Buyer of June</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- END ITEM 3 -->

                  <!-- START ITEM 4 -->
                  <div class="item">
                    <div class="slide-content">
                      <div class="testimonial-desc">“I found my current apartment on Citilights with extraordinary help from them and totally satisfied with the choice I made. All I had to do was to tell what I was looking for and I got back property suggestions nearly exact to my imagination. Among those, I finally chose mine now then completed procedure at ease. Highly recommend Citilights for your home search.”</div>
                      <div class="our-customer-info">
                        <div class="avatar">
                          <a href="#"><img src="<?php echo base_url();?>assets/images/other/customer1.png" alt=""></a>
                        </div>
                        <div class="custom-desc">
                          <h4>Dave Softel</h4>
                          <p>Happy Buyer of June</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- END ITEM 4 -->
                </div>
              </div>            
            </div>
          </div>
            
        </div>
      </section>
      <!-- END TESTIMONIAL -->

      <!-- START OUR PARTNERS -->
      <section id="our-partners" class="wrap our-partners">
        <div class="container">
          <div class="our-partners-inner">
            <div class="row">
              <div class="col-sm-6 col-md-2 item-col">
                <a href="http://themeforest.net/" target="_blank">
                  <img class="item-image" src="<?php echo base_url();?>assets/images/partner/partner1.png" alt="">
                </a>
              </div>
              <div class="col-sm-6 col-md-2 item-col">
                <a href="http://codecanyon.net/" target="_blank">
                  <img class="item-image" src="<?php echo base_url();?>assets/images/partner/partner2.png" alt="">
                </a>
              </div>
              <div class="col-sm-6 col-md-2 item-col">
                <a href="http://videohive.net/" target="_blank">
                  <img class="item-image" src="<?php echo base_url();?>assets/images/partner/partner3.png" alt="">
                </a>
              </div>
              <div class="col-sm-6 col-md-2 item-col">
                <a href="http://audiojungle.net/" target="_blank">
                  <img class="item-image" src="<?php echo base_url();?>assets/images/partner/partner4.png" alt="">
                </a>
              </div>
              <div class="col-sm-6 col-md-2 item-col">
                <a href="http://photodune.net/" target="_blank">
                  <img class="item-image" src="<?php echo base_url();?>assets/images/partner/partner5.png" alt="">
                </a>
              </div>
              <div class="col-sm-6 col-md-2 item-col">
                <a href="http://activeden.net/" target="_blank">
                  <img class="item-image" src="<?php echo base_url();?>assets/images/partner/partner6.png" alt="">
                </a>
              </div>
            </div>
          </div>      
        </div>
      </section>
      <!-- END OUR PARTNERS -->
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
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/property-slider.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
  
</body>

</html>
