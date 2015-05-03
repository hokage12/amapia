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
      <!-- START MAP HORIZONTAL -->
      <section id="search_map_horizontal" class="wrap noo_advanced_search_property horizontal">
        <div class="noo-map">
          <div id="gmap"></div>

          <div class="gmap-search">
            <input placeholder="Search your map" type="text" autocomplete="off" id="gmap_search_input">
          </div>
          <div class="gmap-control">
            <a class="gmap-mylocation" href="#"><i class="fa fa-map-marker"></i>My Location</a>
            <a class="gmap-full" href="#"><i class="fa fa-expand"></i></a>
            <a class="gmap-prev" href="#"><i class="fa fa-angle-left"></i></a>
            <a class="gmap-next" href="#"><i class="fa fa-angle-right"></i></a>
          </div>
          <div class="gmap-zoom">
            <a href="#" class="zoom-in"><i class="fa fa-plus"></i></a>
            <a href="#" class="zoom-out"><i class="fa fa-minus"></i></a>
          </div>
          <div class="gmap-loading">Loading Maps
            <div class="gmap-loader">
              <div class="rect1"></div>
              <div class="rect2"></div>
              <div class="rect3"></div>
              <div class="rect4"></div>
              <div class="rect5"></div>
            </div>
          </div>

          <div class="gsearch">
            <div class="container">
              <div class="gsearch-wrap">
                <h3 class="gsearch-title"><i class="fa fa-search"></i><span>SEARCH FOR PROPERTY</span></h3>
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
            </div>
          </div>
        </div>
      </section>
      <!-- END MAP HORIZONTAL -->

      <!-- START NOO MAINBODY -->
      <div class="container noo-mainbody">
        <div class="noo-mainbody-inner">
          <div class="row clearfix">
            <!-- START MAIN CONTENT -->
            <div class="noo-content col-xs-12">
              <div class="recent-properties">
                <div class="properties list">
                  <!-- START PROPERTIES HEADER -->
                  <div class="properties-header">
                    <h1 class="page-title">Properties</h1>
                    <div class="properties-toolbar">
                      <a href="grid-no-sidebar.html" data-toggle="tooltip" data-placement="bottom" title="Grid"><i class="fa fa-th-large"></i></a>
                      <a class="selected" href="list-no-sidebar.html" data-toggle="tooltip" data-placement="bottom" title="List"><i class="fa fa-list"></i></a>
                      <form class="properties-ordering" method="get">
                        <div class="properties-ordering-label">Sorted by</div>
                        <div class="form-group properties-ordering-select">
                          <div class="label-select">
                            <select class="form-control">
                              <option>Date</option>
                              <option>Bath</option>
                              <option>Bed</option>
                              <option>Area</option>
                              <option>Name</option>
                            </select>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- END PROPERTIES HEADER -->

                  <!-- START PROPERTIES CONTENT -->
                  <div class="properties-content">
                    <article class="hentry">
                      <div class="property-featured">
                        <span class="featured"><i class="fa fa-star"></i></span>
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/property1.jpg" alt="">
                        </a>
                        <span class="property-label">Hot</span>
                        <span class="property-category"><a href="#">Single Family Home</a></span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title">
                          <a href="property-details.html" title="Visalia, NJ 93277">SESA, NJ 93277</a>
                        </h2>
                        <div class="property-excerpt">
                          <p>This 4 bedroom home sits on an oversized lot at the end of a cul-de-sac...</p>
                          <p class="property-fullwidth-excerpt">This 4 bedroom home sits on an oversized lot at the end of a cul-de-sac in an established neighborhood. It is in need of work...</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size">
                              <span>1913 sqft</span>
                            </div>
                            <div class="bathrooms">
                              <span>2</span>
                            </div>
                            <div class="bedrooms">
                              <span>4</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span>
                                <span class="amount">&#36;154,500</span>
                              </span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                          <div class="property-info property-fullwidth-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;154,500</span> </span>
                            </div>
                            <div class="size"><span>1913 sqft</span></div>
                            <div class="bathrooms"><span>2</span></div>
                            <div class="bedrooms"><span>4</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="property-action property-fullwidth-action">
                        <a href="property-details.html">More Details</a>
                      </div>
                    </article>

                    <article class="hentry">
                      <div class="property-featured">
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/property1.jpg" alt="">
                        </a>
                        <span class="property-label">Hot</span>
                        <span class="property-category"><a href="#">Apartment</a>
                        </span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title">
                          <a href="property-details.html" title="The Helux">The Helux</a>
                        </h2>
                        <div class="property-excerpt">
                          <p>Located on 43rd Street between 10th and 11th Avenue in the hot Midtown West neighborhood...</p>
                          <p class="property-fullwidth-excerpt">Located on 43rd Street between 10th and 11th Avenue in the hot Midtown West neighborhood of Hell?s Kitchen is The Helux. These no-fee apartments feature...</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size">
                              <span>762 sqft</span>
                            </div>
                            <div class="bathrooms">
                              <span>3</span>
                            </div>
                            <div class="bedrooms">
                              <span>3</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span>
                                <span class="amount">&#36;3,515</span>
                              </span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                          <div class="property-info property-fullwidth-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;3,515</span> /month</span>
                            </div>
                            <div class="size"><span>762 sqft</span></div>
                            <div class="bathrooms"><span>3</span></div>
                            <div class="bedrooms"><span>4</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="property-action property-fullwidth-action">
                        <a href="property-details.html">More Details</a>
                      </div>
                    </article>

                    <article class="hentry">
                      <div class="property-featured">
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/property1.jpg" alt="">
                        </a>
                        <span class="property-category"><a href="#">Single Family Home</a>
                        </span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title">
                          <a href="property-details.html" title="Single Family Residential, NJ">Single Family Residential, NJ</a>
                        </h2>
                        <div class="property-excerpt">
                          <p>Classic 60's ranch living. House has hardwood floors and hard coat plaster walls and ceilings...</p>
                          <p class="property-fullwidth-excerpt">Classic 60's ranch living. House has hardwood floors and hard coat plaster walls and ceilings in good condition. Intimate backyard for private gatherings. Full basement...</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size">
                              <span>1118 sqft</span>
                            </div>
                            <div class="bathrooms">
                              <span>2</span>
                            </div>
                            <div class="bedrooms">
                              <span>3</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span>
                                <span class="amount">&#36;299,000</span>
                              </span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                          <div class="property-info property-fullwidth-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;299,000</span> </span>
                            </div>
                            <div class="size"><span>1118 sqft</span></div>
                            <div class="bathrooms"><span>2</span></div>
                            <div class="bedrooms"><span>3</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="property-action property-fullwidth-action">
                        <a href="property-details.html">More Details</a>
                      </div>
                    </article>

                    <article class="hentry">
                      <div class="property-featured">
                        <span class="featured"><i class="fa fa-star"></i></span>
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/property1.jpg" alt="">
                        </a>
                        <span class="property-label sold">Sold</span>
                        <span class="property-category"><a href="#">Apartment</a>
                        </span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title">
                          <a href="property-details.html" title="Peter Cooper Village">Peter Cooper Village</a>
                        </h2>
                        <div class="property-excerpt">
                          <p>Peter Cooper Village/ Stuyvesant Town provides an unbeatable combination of city energy and community tranquility,...</p>
                          <p class="property-fullwidth-excerpt">Peter Cooper Village/ Stuyvesant Town provides an unbeatable combination of city energy and community tranquility, providing insulation from the city that surrounds it, yet situated...</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size">
                              <span>1304 sqft</span>
                            </div>
                            <div class="bathrooms">
                              <span>2</span>
                            </div>
                            <div class="bedrooms">
                              <span>3</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span>
                                <span class="amount">&#36;5,109</span>
                              </span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                          <div class="property-info property-fullwidth-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;5,109</span> /month</span>
                            </div>
                            <div class="size"><span>1304 sqft</span></div>
                            <div class="bathrooms"><span>2</span></div>
                            <div class="bedrooms"><span>3</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="property-action property-fullwidth-action">
                        <a href="property-details.html">More Details</a>
                      </div>
                    </article>

                    <article class="hentry">
                      <div class="property-featured">
                        <span class="featured"><i class="fa fa-star"></i></span>
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/property1.jpg" alt="">
                        </a>
                        <span class="property-category"><a href="#">Condo</a>
                        </span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title">
                          <a href="property-details.html" title="Ocala, FL34481">Ocala, FL34481</a>
                        </h2>
                        <div class="property-excerpt">
                          <p>Wonderful expanded end-unit Augusta featuring 2 bedrooms in split-bedroom plan, study/den/library off of cathedral-ceilinged HUGE...</p>
                          <p class="property-fullwidth-excerpt">Wonderful expanded end-unit Augusta featuring 2 bedrooms in split-bedroom plan, study/den/library off of cathedral-ceilinged HUGE living room, large dining area off of U-shaped updated kitchen,...</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size">
                              <span>1,856 sqft</span>
                            </div>
                            <div class="bathrooms">
                              <span>2</span>
                            </div>
                            <div class="bedrooms">
                              <span>2</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span>
                                <span class="amount">&#36;95,000</span>
                              </span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                          <div class="property-info property-fullwidth-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;95,000</span> </span>
                            </div>
                            <div class="size"><span>1,856 sqft</span></div>
                            <div class="bathrooms"><span>2</span></div>
                            <div class="bedrooms"><span>2</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="property-action property-fullwidth-action">
                        <a href="property-details.html">More Details</a>
                      </div>
                    </article>

                    <article class="hentry">
                      <div class="property-featured">
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/property1.jpg" alt="">
                        </a>
                        <span class="property-label">Hot</span>
                        <span class="property-category"><a href="#">Single Family Home</a>
                        </span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title">
                          <a href="property-details.html" title="Oakland, NJ94605">Oakland, NJ94605</a>
                        </h2>
                        <div class="property-excerpt">
                          <p>When the sellers bought this home in 2001 they delighted in the big things: the...</p>
                          <p class="property-fullwidth-excerpt">When the sellers bought this home in 2001 they delighted in the big things: the first level “great room”, lower level “family room”, wide Bay ...</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size">
                              <span>2,568 sqft</span>
                            </div>
                            <div class="bathrooms">
                              <span>2</span>
                            </div>
                            <div class="bedrooms">
                              <span>4</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span>
                                <span class="amount">&#36;335,000</span>
                              </span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                          <div class="property-info property-fullwidth-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;335,000</span> /month</span>
                            </div>
                            <div class="size"><span>2,568 sqft</span></div>
                            <div class="bathrooms"><span>2</span></div>
                            <div class="bedrooms"><span>4</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="property-action property-fullwidth-action">
                        <a href="property-details.html">More Details</a>
                      </div>
                    </article>

                    <article class="hentry">
                      <div class="property-featured">
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/property1.jpg" alt="">
                        </a>
                        <span class="property-category"><a href="#">Apartment</a>
                        </span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title">
                          <a href="property-details.html" title="AVA High Line">AVA High Line</a>
                        </h2>
                        <div class="property-excerpt">
                          <p>Special pricing for immediate move-ins! Call for details! AVA is a first. Our apartments are...</p>
                          <p class="property-fullwidth-excerpt">Special pricing for immediate move-ins! Call for details! AVA is a first. Our apartments are energized by New York City, personalized by you. Yep. Take...</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size">
                              <span>1752 sqft</span>
                            </div>
                            <div class="bathrooms">
                              <span>2</span>
                            </div>
                            <div class="bedrooms">
                              <span>2</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;3,410</span> /month</span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                          <div class="property-info property-fullwidth-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;3,410</span> /month</span>
                            </div>
                            <div class="size"><span> 1752 sqft</span></div>
                            <div class="bathrooms"><span>2</span></div>
                            <div class="bedrooms"><span>2</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="property-action property-fullwidth-action">
                        <a href="property-details.html">More Details</a>
                      </div>
                    </article>

                    <article class="hentry">
                      <div class="property-featured">
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/property1.jpg" alt="">
                        </a>
                        <span class="property-category"><a href="#">Apartment</a>
                        </span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title">
                          <a href="property-details.html" title="Aire">Aire</a>
                        </h2>
                        <div class="property-excerpt">
                          <p>Situated in the highly sought-after neighborhood surrounding Lincoln Center, AIRE offers breathtaking vistas of the...</p>
                          <p class="property-fullwidth-excerpt">Situated in the highly sought-after neighborhood surrounding Lincoln Center, AIRE offers breathtaking vistas of the city skyline, Central Park and the Hudson River. Apartment features...</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size">
                              <span>531 sqft</span>
                            </div>
                            <div class="bathrooms">
                              <span>3</span>
                            </div>
                            <div class="bedrooms">
                              <span>5</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;4,200</span> /month</span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                          <div class="property-info property-fullwidth-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;4,200</span> /month</span>
                            </div>
                            <div class="size"><span>531 sqft</span></div>
                            <div class="bathrooms"><span>3</span></div>
                            <div class="bedrooms"><span>5</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="property-action property-fullwidth-action">
                        <a href="property-details.html">More Details</a>
                      </div>
                    </article>

                    <article class="hentry">
                      <div class="property-featured">
                        <span class="featured"><i class="fa fa-star"></i></span>
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/property1.jpg" alt="">
                        </a>
                        <span class="property-category"><a href="#">Condo</a>
                        </span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title">
                          <a href="property-details.html" title="635 Staley Ave, Hayward, NJ">635 Staley Ave, Hayward, NJ</a>
                        </h2>
                        <div class="property-excerpt">
                          <p>Corner unit! Gorgeous 3 BD / 3 BA townhome in a beautiful community. Pride of...</p>
                          <p class="property-fullwidth-excerpt">Corner unit! Gorgeous 3 BD / 3 BA townhome in a beautiful community. Pride of ownership abounds with this 3 story home with tons of...</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size">
                              <span>1516 sqft</span>
                            </div>
                            <div class="bathrooms">
                              <span>3</span>
                            </div>
                            <div class="bedrooms">
                              <span>3</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;449,999</span> /month</span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                          <div class="property-info property-fullwidth-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;449,999</span> </span>
                            </div>
                            <div class="size"><span>1516 sqft</span></div>
                            <div class="bathrooms"><span>3</span></div>
                            <div class="bedrooms"><span>3</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="property-action property-fullwidth-action">
                        <a href="property-details.html">More Details</a>
                      </div>
                    </article>

                    <article class="hentry">
                      <div class="property-featured">
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/property1.jpg" alt="">
                        </a>
                        <span class="property-category"><a href="#">Condo</a>
                        </span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title">
                          <a href="property-details.html" title="225 E 36th St #20D">225 E 36th St #20D</a>
                        </h2>
                        <div class="property-excerpt">
                          <p>Turn Key sleep alcove studio in triple mint condition. Located on high floor with great...</p>
                          <p class="property-fullwidth-excerpt">Turn Key sleep alcove studio in triple mint condition. Located on high floor with great unobstructed Southern Expo. This is the perfect home for the...</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size">
                              <span>1516 sqft</span>
                            </div>
                            <div class="bathrooms">
                              <span>3</span>
                            </div>
                            <div class="bedrooms">
                              <span>3</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;449,999</span> /month</span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                          <div class="property-info property-fullwidth-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;389,000</span> </span>
                            </div>
                            <div class="size"><span>550 sqft</span></div>
                            <div class="bathrooms"><span>1</span></div>
                            <div class="bedrooms"><span>2</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="property-action property-fullwidth-action">
                        <a href="property-details.html">More Details</a>
                      </div>
                    </article>

                    <article class="hentry">
                      <div class="property-featured">
                        <span class="featured"><i class="fa fa-star"></i></span>
                        <a class="content-thumb" href="property-details.html">
                          <img src="<?php echo base_url();?>assets/images/property/property1.jpg" alt="">
                        </a>
                        <span class="property-label">Hot</span>
                        <span class="property-category"><a href="#">Co-op</a>
                        </span>
                      </div>
                      <div class="property-wrap">
                        <h2 class="property-title">
                          <a href="property-details.html" title="101 W 115th St #2B">101 W 115th St #2B</a>
                        </h2>
                        <div class="property-excerpt">
                          <p>This beautiful pre-war Co-op building situated in the heart of Harlem is 4 blocks from...</p>
                          <p class="property-fullwidth-excerpt">This beautiful pre-war Co-op building situated in the heart of Harlem is 4 blocks from Central Park and around the corner from the express 2/3...</p>
                        </div>
                        <div class="property-summary">
                          <div class="property-detail">
                            <div class="size">
                              <span>1516 sqft</span>
                            </div>
                            <div class="bathrooms">
                              <span>3</span>
                            </div>
                            <div class="bedrooms">
                              <span>3</span>
                            </div>
                          </div>
                          <div class="property-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;449,999</span> /month</span>
                            </div>
                            <div class="property-action">
                              <a href="property-details.html">More Details</a>
                            </div>
                          </div>
                          <div class="property-info property-fullwidth-info">
                            <div class="property-price">
                              <span><span class="amount">&#36;439,000</span> </span>
                            </div>
                            <div class="size"><span>536 sqft</span></div>
                            <div class="bathrooms"><span>2</span></div>
                            <div class="bedrooms"><span>4</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="property-action property-fullwidth-action">
                        <a href="property-details.html">More Details</a>
                      </div>
                    </article>

                    <div class="clearfix"></div>

                    <!-- START PAGINATION NAVIGATION -->
                    <nav class="pagination-nav">
                      <ul class="pagination list-center">
                        <li><a class="prev page-numbers" href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><span class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><span class="page-dots"><i class="fa fa-ellipsis-h"></i></span></li>
                        <li><a class="page-numbers" href="#">7</a></li>
                        <li><a class="page-numbers" href="#">8</a></li>
                        <li><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </nav>
                    <!-- END PAGINATION NAVIGATION -->
                  </div>
                  <!-- END PROPERTIES CONTENT -->
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
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.nouislider.all.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr-2.7.1.min.js"></script>
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
