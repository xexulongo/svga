<body class="page page-index">
    <a href="#content" class="sr-only">Skip to content</a> 
    
    <!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
      <div class="navbar-static-top">
        
        <!--Hidden Header Region-->
        <div class="header-hidden">
          <div class="header-hidden-inner container">
            <div class="row">
              <div class="col-sm-4 col-md-4">
                <h3>
                  About Us
                </h3>
                <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal &amp; web templates!</p>
                <a href="about.htm" class="btn btn-sm btn-primary">Find out more</a> 
              </div>
              <div class="col-sm-4 col-md-4">
                <!--@todo: replace with company contact details-->
                <h3>
                  Contact Us
                </h3>
                <address>
                  <p>
                    <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                    019223 8092344
                  </p>
                  <p>
                    <abbr title="Email"><i class="fa fa-envelope"></i></abbr>
                    info@themelize.me
                  </p>
                  <p>
                    <abbr title="Address"><i class="fa fa-home"></i></abbr>
                    Sunshine House, Sunville. SUN12 8LU.
                  </p>
                </address>
              </div>
              <div class="col-sm-4 col-md-4">
                <!--Colour Switch for demo - @todo: remove in production-->
                <div class="colour-switcher">
                  <h3>
                    Theme Colours
                  </h3>
                  <a href="#green" class="green active" data-toggle="tooltip" data-placement="bottom" data-original-title="Green (Default)">Green</a> <a href="#red" class="red" data-toggle="tooltip" data-placement="bottom" data-original-title="Red">Red</a> <a href="#blue" class="blue" data-toggle="tooltip" data-placement="bottom" data-original-title="Blue">Blue</a> 
                  <p>Cookies are NOT enabled so colour selection is not persistent.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--Header upper region-->
        <div class="header-upper">
          <div class="header-upper-inner container">
            <div class="row">
              <div class="col-xs-8 col-xs-push-4">
                
                <!--Show/hide trigger for #hidden-header -->
                <div id="header-hidden-link">
                  <a href="#" title="Click me you'll get a surprise" class="show-hide" data-toggle="show-hide" data-target=".header-hidden" data-callback="searchFormFocus"><i></i>Open</a>
                </div>
                
                <!--social media icons-->
                <div class="social-media">
                  <!--@todo: replace with company social media details-->
                  <a href="#"> <i class="fa fa-twitter-square"></i> </a>
                  <a href="#"> <i class="fa fa-facebook-square"></i> </a>
                  <a href="#"> <i class="fa fa-linkedin-square"></i> </a>
                  <a href="#"> <i class="fa fa-google-plus-square"></i> </a>
                </div>
              </div>
              <div class="col-xs-4 col-xs-pull-8">
                
                <!--user menu-->
                <div class="btn-group user-menu">
                  <a href="login.htm" class="btn btn-link login-mobile"><i class="fa fa-user"></i></a>
                  <a href="#signup-modal" class="btn btn-link signup" data-toggle="modal">Sign Up</a>
                
                <a href="#login-modal" class="btn btn-link login" data-toggle="modal">Login</a> 
                <div class="btn-group language-menu">
                  <!--language menu-->
                  <a href="#en" class="btn btn-link dropdown-toggle" data-toggle="dropdown"><span class="flag-icon flag-icon-gb"></span></a>
                  <ul class="dropdown-menu dropdown-menu-mini dropdown-menu-primary">
                    <li>
                      <a href="#es" class="lang-es"><span class="flag-icon flag-icon-es"></span> Spanish</a>
                    </li>
                    <li>
                      <a href="#pt" class="lang-pt"><span class="flag-icon flag-icon-pt"></span> Portguese</a>
                    </li>
                    <li>
                      <a href="#cn" class="lang-cn"><span class="flag-icon flag-icon-cn"></span> Chinese</a>
                    </li>
                    <li>
                      <a href="#se" class="lang-se"><span class="flag-icon flag-icon-se"></span> Swedish</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!--Header search region - hidden by default -->
      <div class="header-search">
        <form class="search-form container">
          <input type="text" name="search" class="form-control search" value="" placeholder="Search">
          <button type="button" class="btn btn-link"><span class="sr-only">Search </span><i class="fa fa-search fa-flip-horizontal search-icon"></i></button>
          <button type="button" class="btn btn-link close-btn" data-toggle="search-form-close"><span class="sr-only">Close </span><i class="fa fa-times search-icon"></i></button>
        </form>
      </div>
      
      <!--Header & Branding region-->
      <div class="js-clingify-placeholder" style="height: 60px;"><div class="js-clingify-wrapper"><div class="header" data-toggle="clingify">
        <div class="header-inner container">
          <div class="navbar">
            <div class="pull-left">
              <!--branding/logo-->
              <a class="navbar-brand" href="index.htm" title="Home">
                <h1>
                  <span>App</span>Strap<span>.</span>
                </h1>
              </a>
              <div class="slogan">Responsive HTML Theme</div>
            </div>
            
            <!--Search trigger -->
            <a href="#search" class="search-form-tigger" data-toggle="search-form" data-target=".header-search">
            
            <i class="fa fa-search fa-flip-horizontal search-icon"></i>
          </a>
          
          <!-- mobile collapse menu button - data-toggle="toggle" = default BS menu - data-toggle="jpanel-menu" = jPanel Menu -->
          <a href="#top" class="navbar-btn" data-toggle="jpanel-menu" data-target=".navbar-collapse" data-direction="right"><i class="fa fa-bars"></i></a>
          
          <!--everything within this div is collapsed on mobile-->
          <div class="navbar-collapse collapse">
            <!--main navigation-->
            <ul class="nav navbar-nav">
              <li class="home-link">
                <a href="index.htm"><i class="fa fa-home"></i><span class="hidden">Home</span></a>
              </li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" id="pages-drop" data-toggle="dropdown" data-hover="dropdown">Pages +</a> 
                <!-- Menu -->
                <ul class="dropdown-menu" role="menu" aria-labelledby="pages-drop">
                  <li class="dropdown dropdown-submenu">
                    <a href="about.htm" class="dropdown-toggle" id="about-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">About</a> 
                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu" role="menu" aria-labelledby="about-drop">
                      <li role="presentation">
                        <a role="menuitem" href="about.htm" tabindex="-1" class="menu-item">About Us Basic <i class="new-tag">Updated!</i></a>
                      </li>
                      <li role="presentation">
                        <a role="menuitem" href="about-extended.htm" tabindex="-1" class="menu-item">About Us Extended <i class="new-tag">New!</i></a>
                      </li>
                      <li role="presentation">
                        <a role="menuitem" href="about-me.htm" tabindex="-1" class="menu-item">About Me <i class="new-tag">New!</i></a>
                      </li>
                      <li role="presentation">
                        <a role="menuitem" href="team.htm" tabindex="-1" class="menu-item">Team List <i class="new-tag">Updated!</i></a>
                      </li>
                      <li role="presentation">
                        <a role="menuitem" href="team-grid.htm" tabindex="-1" class="menu-item">Team Grid <i class="new-tag">New!</i></a>
                      </li>
                      <li role="presentation">
                        <a role="menuitem" href="team-member.htm" tabindex="-1" class="menu-item">Team Member <i class="new-tag">New!</i></a>
                      </li>
                      <li role="presentation"><a role="menuitem" href="contact.htm" tabindex="-1" class="menu-item">Contact</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="pricing.htm" class="dropdown-toggle" id="pricing-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Pricing</a> 
                    <!-- pricing pages -->
                    <ul class="dropdown-menu" role="menu" aria-labelledby="pricing-drop">
                      <li role="presentation"><a role="menuitem" href="pricing.htm" tabindex="-1" class="menu-item">Pricing Plans</a></li>
                      <li role="presentation"><a role="menuitem" href="pricing-tables.htm" tabindex="-1" class="menu-item">Comparison Tables</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="timeline.htm" class="dropdown-toggle" id="timeline-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Timeline</a> 
                    <!-- timelines -->
                    <ul class="dropdown-menu" role="menu" aria-labelledby="timeline-drop">
                      <li role="presentation"><a role="menuitem" href="timeline.htm" tabindex="-1" class="menu-item">Timeline Default</a></li>
                      <li role="presentation"><a role="menuitem" href="timeline-left.htm" tabindex="-1" class="menu-item">Timeline Left</a></li>
                      <li role="presentation"><a role="menuitem" href="timeline-right.htm" tabindex="-1" class="menu-item">Timeline Right</a></li>
                      <li role="presentation"><a role="menuitem" href="timeline-stacked.htm" tabindex="-1" class="menu-item">Timeline Stacked</a></li>
                    </ul>
                  </li>
                  <li><a href="customers.htm" class="menu-item">Customers</a></li>
                  <li><a href="features.htm" class="menu-item">Features/Services</a></li>
                  <li role="presentation"><a role="menuitem" href="login.htm" tabindex="-1" class="menu-item">Login</a></li>
                  <li role="presentation"><a role="menuitem" href="signup.htm" tabindex="-1" class="menu-item">Sign Up</a></li>
                  <li role="presentation"><a role="menuitem" href="starter.htm" tabindex="-1" class="menu-item">Starter Snippets</a></li>
                  <li role="presentation"><a role="menuitem" href="index-static.htm" tabindex="-1" class="menu-item">Homepage Static Banner</a></li>
                  <li role="presentation"><a role="menuitem" href="index-boxed.htm" tabindex="-1" class="menu-item">Homepage Boxed</a></li>
                  <li role="presentation"><a role="menuitem" href="404.htm" tabindex="-1" class="menu-item">404 Error</a></li>
                </ul>
              </li>
              
              <li class="dropdown">
                <a href="blog.htm" class="dropdown-toggle" id="blog-drop" data-toggle="dropdown" data-hover="dropdown">Blog +</a> 
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu" role="menu" aria-labelledby="blog-drop">
                  <li role="presentation">
                    <a role="menuitem" href="blog.htm" tabindex="-1" class="menu-item">Blog List Right Sidebar <i class="new-tag">Updated!</i></a>
                  </li>
                  <li role="presentation">
                    <a role="menuitem" href="blog-leftbar.htm" tabindex="-1" class="menu-item">Blog List Left Sidebar <i class="new-tag">Updated!</i></a>
                  </li>
                  <li role="presentation">
                    <a role="menuitem" href="blog-timeline.htm" tabindex="-1" class="menu-item">Blog List Timeline <i class="new-tag">New!</i></a>
                  </li>
                  <li role="presentation">
                    <a role="menuitem" href="blog-grid.htm" tabindex="-1" class="menu-item">Blog List Grid <i class="new-tag">New!</i></a>
                  </li>
                  <li role="presentation">
                    <a role="menuitem" href="blog-post.htm" tabindex="-1" class="menu-item">Blog Post <i class="new-tag">Updated!</i></a>
                  </li>
                  <li role="presentation">
                    <a role="menuitem" href="blog-post-video.htm" tabindex="-1" class="menu-item">Blog Post With Video <i class="new-tag">New!</i></a>
                  </li>
                  <li role="presentation">
                    <a role="menuitem" href="blog-post-slideshow.htm" tabindex="-1" class="menu-item">Blog Post With Slideshow <i class="new-tag">New!</i></a>
                  </li>
                  <li role="presentation">
                    <a role="menuitem" href="blog-post-audio.htm" tabindex="-1" class="menu-item">Blog Post With Audio Clip <i class="new-tag">New!</i></a>
                  </li>
                </ul>
              </li>
              
              <li class="dropdown dropdown-full">
                <a href="#" class="dropdown-toggle menu-item" id="megamenu-drop" data-toggle="dropdown" data-hover="dropdown">Mega Menu +</a> 
                <!-- Dropdown Menu - Mega Menu -->
                <ul class="dropdown-menu mega-menu" role="menu" aria-labelledby="megamenu-drop">
                  <li role="presentation" class="dropdown-header">Mega Menu with links &amp; text items</li>
                  <li role="presentation">
                    <ul class="row list-unstyled" role="menu">
                      <li class="col-md-3" role="presentation">
                        <a role="menuitem" href="features.htm" class="img-link">
                          <img src="img/features/feature-1.png" alt="Feature 1">
                        </a>
                        <a role="menuitem" href="features.htm" tabindex="-1" class="menu-item"><strong>Mobile Friendly</strong></a>
                        <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> 
                      </li>
                      <li class="col-md-3" role="presentation">
                        <a role="menuitem" href="features.htm" class="img-link">
                          <img src="img/features/feature-2.png" alt="Feature 2">
                        </a>
                        <a role="menuitem" href="features.htm" tabindex="-1" class="menu-item"><strong>24/7 Support</strong></a>
                        <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> 
                      </li>
                      <li class="col-md-3" role="presentation">
                        <a role="menuitem" href="features.htm" class="img-link">
                          <img src="img/features/feature-3.png" alt="Feature 3">
                        </a>
                        <a role="menuitem" href="features.htm" tabindex="-1" class="menu-item"><strong>99% Uptime</strong></a>
                        <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> 
                      </li>
                      <li class="col-md-3" role="presentation">
                        <a role="menuitem" href="features.htm" class="img-link">
                          <img src="img/features/feature-4.png" alt="Feature 4">
                        </a>
                        <a role="menuitem" href="features.htm" tabindex="-1" class="menu-item"><strong>Upgrade Assistance</strong></a>
                        <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> 
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" id="more-drop" data-toggle="dropdown" data-hover="dropdown">More +</a> 
                <!-- Mega Menu -->
                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="more-drop">
                  <li class="dropdown dropdown-submenu dropdown-menu-left">
                    <a href="headers.htm" class="dropdown-toggle" id="headers-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Header Variations</a> 
                    <!-- Header variations -->
                    <ul class="dropdown-menu" role="menu" aria-labelledby="headers-drop">
                      <li role="presentation"><a role="menuitem" href="header-old.htm" tabindex="-1" class="menu-item">Header Old</a></li>
                      <li role="presentation"><a role="menuitem" href="header-old-full.htm" tabindex="-1" class="menu-item">Header Old Full Width</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu dropdown-menu-left">
                    <a href="sliders.htm" class="dropdown-toggle" id="slider-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Sliders</a> 
                    <!-- Sliders -->
                    <ul class="dropdown-menu" role="menu" aria-labelledby="slider-drop">
                      <!--Slider Revolution -->
                      <li role="presentation" class="dropdown-header">Slider Revolution</li>
                      <li role="presentation"><a role="menuitem" href="slider-revolution-default.htm" tabindex="-1" class="menu-item">Default</a></li>
                      <li role="presentation"><a role="menuitem" href="slider-revolution-full.htm" tabindex="-1" class="menu-item">Full Width</a></li>
                      <li role="presentation"><a role="menuitem" href="slider-revolution-behind.htm" tabindex="-1" class="menu-item">Behind Navbar</a></li>
                      <li role="presentation"><a role="menuitem" href="slider-revolution-boxed.htm" tabindex="-1" class="menu-item">Boxed</a></li>
                      <!--Backstretch Slider-->
                      <li role="presentation" class="dropdown-header">Backstretch</li>
                      <li role="presentation"><a role="menuitem" href="backstretch.htm" tabindex="-1" class="menu-item">Background Slideshow</a></li>
                      <li role="presentation"><a role="menuitem" href="backstretch-boxed.htm" tabindex="-1" class="menu-item">Boxed Background Slideshow</a></li>
                      <!--Flexslider-->
                      <li role="presentation" class="dropdown-header">Flexslider</li>
                      <li role="presentation"><a role="menuitem" href="flexslider-default.htm" tabindex="-1" class="menu-item">Default</a></li>
                      <li role="presentation"><a role="menuitem" href="flexslider-full.htm" tabindex="-1" class="menu-item">Full Width</a></li>
                      <li role="presentation"><a role="menuitem" href="flexslider-behind.htm" tabindex="-1" class="menu-item">Behind Navbar</a></li>
                      <li role="presentation"><a role="menuitem" href="flexslider-boxed.htm" tabindex="-1" class="menu-item">Boxed</a></li>
                    </ul>
                  </li>
                  <li role="presentation">
                    <a role="menuitem" href="elements.htm" tabindex="-1" class="menu-item">Theme Elements <i class="new-tag">Updated!</i></a>
                  </li>
                  <li role="presentation"><a role="menuitem" href="colours.htm" tabindex="-1" class="menu-item">Theme Colours</a></li>
                  <li role="presentation"><a role="menuitem" href="bs-mobile-menu.htm" tabindex="-1" class="menu-item">Bootstrap Mobile Menu</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!--/.navbar-collapse -->
        </div>
      </div>
    </div></div></div>
  </div>
</div>

<!-- ======== @Region: #highlighted ======== -->
<div id="highlighted">
  <!-- Showshow - Slider Revolution see: plugins/slider-revolution/examples&sources for help invoke using data-toggle="slider-rev" options can be passed to the slider via HTML5 data- ie. data-startwidth="960" -->
  <div class="slider-wrapper tp-banner-container" data-page-class="slider-revolution-full-width-behind slider-appstrap-theme" style="overflow: visible;">
    <div class="tp-banner revslider-initialised tp-simpleresponsive hovered" data-toggle="slider-rev" data-delay="9000" data-startwidth="1100" data-startheight="590" data-fullwidth="off" id="revslider-827" style="height: 590px;">
      <ul style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">
        <!-- SLIDE 1 -->
        <li class="slide" data-transition="fade" data-slotamount="5" data-masterspeed="1800" style="width: 100%; height: 100%; overflow: hidden; visibility: visible; left: 0px; top: 0px; z-index: 20; opacity: 1;">
          <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="left top" data-kenburns="undefined" data-easeme="undefined" data-bgfit="normal" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="normal" data-bgposition="left top" data-bgrepeat="repeat" data-lazydone="undefined" src="img/patterns/white_wall_hash.png" data-src="img/patterns/white_wall_hash.png" style="width: 100%; height: 100%; opacity: 1; position: relative; background-image: url(http://demos.themelize.me/appStrap2.5/theme/img/patterns/white_wall_hash.png); background-color: rgba(0, 0, 0, 0); background-position: 0% 0%; background-repeat: repeat;"></div></div>
          <!-- SLIDE 1 Content-->
          <div class="slide-content">
            <!--elements within .slide-content are pushed below navbar on "behind"-->
            <div class="tp-caption sfb ltl start" data-x="10" data-y="50" data-speed="400" data-start="800" data-easing="Back.easeOut" data-endspeed="500" data-endeasing="Back.easeIn" data-captionhidden="on" style="left: 380px; top: 50px; visibility: visible; opacity: 1; -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">
              <img src="img/slides/slide1.png" alt="Slide 1" style="width: 600px; height: 340px;">
            </div>
            <h2 class="tp-caption customin randomrotateout start" data-x="700" data-y="120" data-speed="400" data-start="1200" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Back.easeOut" data-endspeed="400" data-endeasing="Back.easeIn" style="-webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 33px; border-width: 0px; margin: 160px 0px 0px; padding: 0px; letter-spacing: 0px; font-size: 30px; left: 1070px; top: 120px; visibility: visible; opacity: 1; -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); -webkit-transform-origin: 50% 50% 0px;">
              AppStrap Bootstrap Theme
            </h2>
            <h4 class="tp-caption customin randomrotateout start" data-x="700" data-y="160" data-speed="400" data-start="1400" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Back.easeOut" data-endspeed="400" data-endeasing="Back.easeIn" style="-webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 19px; border-width: 0px; margin: 160px 0px 0px; padding: 0px; letter-spacing: 0px; font-size: 18px; left: 1070px; top: 160px; visibility: visible; opacity: 1; -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); -webkit-transform-origin: 50% 50% 0px;">
              By <a href="http://themelize.me">Themelize.me</a>
            </h4>
            <p class="tp-caption customin randomrotateout start" data-x="700" data-y="190" data-speed="400" data-start="1600" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Back.easeOut" data-endspeed="400" data-endeasing="Back.easeIn" style="-webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 160px 0px 0px; padding: 0px; letter-spacing: 0px; font-size: 14px; left: 1070px; top: 190px; visibility: visible; opacity: 1; -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); -webkit-transform-origin: 50% 50% 0px;">Perfect for your App, Web service or hosting company!</p>
            <a href="#" class="tp-caption customin randomrotateout btn btn-lg btn-primary start" data-x="700" data-y="220" data-speed="400" data-start="1800" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Back.easeOut" data-endspeed="400" data-endeasing="Back.easeIn" style="-webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 23px; border-width: 1px; margin: 160px 0px 0px; padding: 10px 16px; letter-spacing: 0px; font-size: 18px; left: 1070px; top: 220px; visibility: visible; opacity: 1; -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); -webkit-transform-origin: 50% 50% 0px;">Buy Now</a> 
          </div>
        </li>
        <!-- SLIDE 2 -->
        <li data-transition="curtain-1" data-slotamount="4" data-masterspeed="500" style="width: 100%; height: 100%; overflow: hidden; visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 1;">
          <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="left top" data-kenburns="undefined" data-easeme="undefined" data-bgfit="normal" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="normal" data-bgposition="left top" data-bgrepeat="repeat" data-lazydone="undefined" src="img/patterns/lightpaperfibers.png" data-src="img/patterns/lightpaperfibers.png" style="width: 100%; height: 100%; opacity: 0; background-image: url(http://demos.themelize.me/appStrap2.5/theme/img/patterns/lightpaperfibers.png); background-color: rgba(0, 0, 0, 0); background-position: 0% 0%; background-repeat: repeat;"></div></div>
          <!-- SLIDE 2 Content -->
          <div class="slide-content">
            <!--elements within .slide-content are pushed below navbar on "behind"-->
            <div class="tp-caption sfb ltr start" data-x="left" data-y="bottom" data-speed="900" data-start="1200" data-easing="Elastic.easeOut" data-endspeed="200" data-endeasing="Power0.easeInOut" style="left: 370px; top: 120px; visibility: visible; opacity: 0; -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 1900, 0, 0, 1);">
              <img src="img/slides/slide2-layer1.png" alt="Slide 2 layer 1" style="width: 900px; height: 310px;">
            </div>
            <div class="tp-caption sfb ltr start" data-x="right" data-y="bottom" data-speed="700" data-start="1900" data-easing="Elastic.easeOut" data-endspeed="200" data-endeasing="Power0.easeInOut" style="left: 570px; top: 120px; visibility: visible; opacity: 0; -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 1900, 0, 0, 1);">
              <img src="img/slides/slide2-layer2.png" alt="Slide 2 layer 2" style="width: 900px; height: 310px;">
            </div>
            <div class="tp-caption sfb ltr start" data-x="center" data-y="bottom" data-speed="900" data-start="1500" data-easing="Elastic.easeOut" data-endspeed="200" data-endeasing="Power0.easeInOut" style="left: 470px; top: 120px; visibility: visible; opacity: 0; -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 1900, 0, 0, 1);">
              <img src="img/slides/slide2-layer3.png" alt="Slide 2 layer 3" style="width: 900px; height: 310px;">
            </div>
            <h2 class="tp-caption largeblackbg sfb randomrotateout start" data-x="center" data-y="30" data-speed="1500" data-start="2300" data-easing="Elastic.easeOut" data-endspeed="200" data-endeasing="Power0.easeInOut" style="-webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 70px; border-width: 0px; margin: 160px 0px 0px; padding: 0px 20px 5px; letter-spacing: 0px; font-size: 50px; left: 595px; top: 30px; visibility: visible; opacity: 0; -webkit-transform: matrix3d(-0.9607, 0.27756, 0, 0, -0.27756, -0.9607, 0, 0, 0, 0, 1, -0.0025, 1206.11915, 515.67239, 0, 1);">
              AppStrap Bootstrap Theme
            </h2>
          </div>
        </li>
      </ul>
      <div class="tp-bannertimer tp-bottom" style="width: 1.1111111111111114%;"></div>
    <div class="tp-loader spinner0" style="visibility: hidden; opacity: 0;"><div class="dot1"></div><div class="dot2"></div><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>
    <!--end of tp-banner-->
  <div class="tp-bullets simplebullets round" style="bottom: 20px; left: 50%; margin-left: -21px;"><div class="bullet first selected"></div><div class="bullet last"></div><div class="tpclear"></div></div><div style="position: absolute; top: 295px; margin-top: -50px; left: 20px;" class="tp-leftarrow tparrows default"></div><div style="position: absolute; top: 295px; margin-top: -50px; right: 20px;" class="tp-rightarrow tparrows default"></div></div>
</div>

<!-- ======== @Region: #content ======== -->
<div id="content">
  <div class="container">
    <!-- Services -->
    <div class="block features">
      <h2 class="title-divider">
        <span>Core <span class="de-em">Features</span></span>
        <small>Core features included in all plans.</small>
      </h2>
      <div class="row">
        <div class="feature col-sm-6 col-md-3">
          <a href="features.htm">
            <img src="img/features/feature-1.png" alt="Feature 1" class="img-responsive">
          </a>
          <h3 class="title">
            <a href="features.htm">Mobile <span class="de-em">Friendly</span></a>
          </h3>
          <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
        </div>
        <div class="feature col-sm-6 col-md-3">
          <a href="features.htm">
            <img src="img/features/feature-2.png" alt="Feature 2" class="img-responsive">
          </a>
          <h3 class="title">
            <a href="features.htm">24/7 <span class="de-em">Support</span></a>
          </h3>
          <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
        </div>
        <div class="feature col-sm-6 col-md-3">
          <a href="features.htm">
            <img src="img/features/feature-3.png" alt="Feature 3" class="img-responsive">
          </a>
          <h3 class="title">
            <a href="features.htm">Free Upgrade <span class="de-em">Assistance</span></a>
          </h3>
          <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
        </div>
        <div class="feature col-sm-6 col-md-3">
          <a href="features.htm">
            <img src="img/features/feature-4.png" alt="Feature 4" class="img-responsive">
          </a>
          <h3 class="title">
            <a href="features.htm">99.9% <span class="de-em">Uptime</span></a>
          </h3>
          <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
        </div>
      </div>
    </div>
    <!--Pricing Table-->
    <div class="block">
      <h2 class="title-divider">
        <span>Pricing <span class="de-em">Plans</span></span>
        <small>Competitive pricing plans to suit your needs</small>
      </h2>
      <div class="row pricing-stack">
        <div class="col-md-3">
          <div class="well">
            <h3 class="title">
              Starter
            </h3>
            <p class="price"><span class="fancy">Free!</span></p>
            <ul class="unstyled points">
              <li>3 User Accounts</li>
              <li>3 Private Projects</li>
              <li>Umlimited Public Projects</li>
              <li>5GB of space</li>
            </ul>
            <a class="btn btn-primary">Sign Up</a> 
          </div>
        </div>
        <div class="col-md-3">
          <div class="well active">
            <h3 class="title">
              <span class="em">Pro</span> <span class="fancy">Plus</span>
            </h3>
            <p class="price">
              <span class="currency">$</span> 
              <span class="digits">49<span>.95</span></span>
              <span class="term">/MO</span>
            </p>
            <ul class="unstyled points">
              <li>50 User Accounts</li>
              <li>50 Private Projects</li>
              <li>Umlimited Public Projects</li>
              <li>Unlimited space</li>
            </ul>
            <a class="btn btn-primary">Sign Up</a> 
          </div>
        </div>
        <div class="col-md-3">
          <div class="well active">
            <h3 class="title">
              <span class="em">Biz</span> <span class="fancy">Plus</span>
            </h3>
            <p class="price">
              <span class="currency">$</span> 
              <span class="digits">199<span>.95</span></span>
              <span class="term">/MO</span>
            </p>
            <ul class="unstyled points">
              <li>Umlimited User Accounts</li>
              <li>Umlimited Private Projects</li>
              <li>Umlimited Public Projects</li>
              <li>Unlimited space</li>
            </ul>
            <a class="btn btn-primary">Sign Up</a> 
          </div>
        </div>
        <div class="col-md-3">
          <div class="well">
            <h3 class="title">
              Starter <span class="fancy">Plus</span>
            </h3>
            <p class="price">
              <span class="currency">$</span> 
              <span class="digits">19<span>.95</span></span>
              <span class="term">/MO</span>
            </p>
            <ul class="unstyled points">
              <li>10 User Accounts</li>
              <li>10 Private Projects</li>
              <li>Umlimited Public Projects</li>
              <li>15GB of space</li>
            </ul>
            <a class="btn btn-primary">Sign Up</a> 
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Plan features -->
        <div class="well well-sm text-center">
          <h4 class="inline-el pad-right">
            <span>All Plans <span class="de-em">Include</span>:</span>
          </h4>
          <p class="inline-el pad-left muted">90 day money back guarantee <span class="spacer">//</span> 24/7 telephone support <span class="spacer">//</span> FREE Setup <span class="spacer">//</span> Migration Help <span class="spacer">//</span> Developer API</p>
        </div>
      </div>
    </div>
    <!--Customer testimonial-->
    <div class="block testimonials margin-top-large">
      <h2 class="title-divider">
        <span>Highly <span class="de-em">Recommended</span></span>
        <small>99% of our customers recommend us!</small>
      </h2>
      <div class="row">
        <div class="col-md-4">
          <blockquote>
            <p>"It's totally awesome, we're could imagine life without it!"</p>
            <small>
              <img src="img/team/jimi.jpg" alt="Jimi Bloggs" class="img-circle">
              Jimi Bloggs <span class="spacer">/</span> <a href="#">@mrjimi</a>
            </small>
          </blockquote>
        </div>
        <div class="col-md-4">
          <blockquote>
            <p>"10 out of 10, highly recommended!"</p>
            <small>
              <img src="img/team/steve.jpg" alt="Jimi Bloggs" class="img-circle">
              Steve Bloggs <span class="spacer">/</span> <a href="#">Founder of Apple</a>
            </small>
          </blockquote>
        </div>
        <div class="col-md-4">
          <blockquote>
            <p>"Our productivity &amp; sales are up! Couldn't be happier with this product!"</p>
            <small>
              <img src="img/team/adele.jpg" alt="Adele Bloggs" class="img-circle">
              Adele Bloggs <span class="spacer">/</span> <a href="#">@iamadele</a>
            </small>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ======== @Region: #content-below ======== -->
<div id="content-below" class="wrapper">
  <div class="container">
    <div class="row">
      <div class="upsell">
        <small class="muted">99.9% Uptime <span class="spacer">//</span> Free upgrade assistence <span class="spacer">//</span> 24/7 Support <span class="spacer">//</span> Plans from $19.99/month <span class="spacer">//</span> </small>
        <a href="pricing.htm" class="btn btn-primary">Start your Free Trial Today! <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</div>
<!-- FOOTER -->

<!-- ======== @Region: #footer ======== -->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col">
        <div class="block contact-block">
          <!--@todo: replace with company contact details-->
          <h3>
            Contact Us
          </h3>
          <address>
            <ul class="fa-ul">
              <li>
                <abbr title="Phone"><i class="fa fa-li fa-phone"></i></abbr>
                019223 8092344
              </li>
              <li>
                <abbr title="Email"><i class="fa fa-li fa-envelope"></i></abbr>
                info@appstraptheme.com
              </li>
              <li>
                <abbr title="Address"><i class="fa fa-li fa-home"></i></abbr>
                Sunshine House, Sunville. SUN12 8LU.
              </li>
            </ul>
          </address>
        </div>
      </div>
      
      <div class="col-md-5 col">
        <div class="block">
          <h3>
            About Us
          </h3>
          <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal &amp; web templates!</p>
        </div>
      </div>
      
      <div class="col-md-4 col">
        <div class="block newsletter">
          <h3>
            Newsletter
          </h3>
          <p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>
          <!--@todo: replace with mailchimp code-->
          <form role="form">
            <div class="input-group input-group-sm">
              <label class="sr-only" for="email-field">Email</label>
              <input type="text" class="form-control" id="email-field" placeholder="Email">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">Go!</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div id="toplink">
        <a href="#top" class="top-link" title="Back to top">Back To Top <i class="fa fa-chevron-up"></i></a>
      </div>
      <!--@todo: replace with company copyright details-->
      <div class="subfooter">
        <div class="col-md-6">
          <p>Site template by <a href="appstraptheme.com">AppStrap</a> | Copyright 2012 © AppStrap</p>
        </div>
        <div class="col-md-6">
          <ul class="list-inline footer-menu">
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--Hidden elements - excluded from jPanel Menu on mobile-->
<div class="hidden-elements jpanel-menu-exclude">
  <!--@modal - signup modal-->
  <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">
            Sign Up
          </h4>
        </div>
        <div class="modal-body">
          <form action="signup.htm" role="form">
            <h5>
              Price Plan
            </h5>
            <select class="form-control">
              <option>Basic</option>
              <option>Pro</option>
              <option>Pro +</option>
            </select>
            
            <h5>
              Account Information
            </h5>
            <div class="form-group">
              <label class="sr-only" for="signup-first-name">First Name</label>
              <input type="text" class="form-control" id="signup-first-name" placeholder="First name">
            </div>
            <div class="form-group">
              <label class="sr-only" for="signup-last-name">Last Name</label>
              <input type="text" class="form-control" id="signup-last-name" placeholder="Last name">
            </div>
            <div class="form-group">
              <label class="sr-only" for="signup-username">Userame</label>
              <input type="text" class="form-control" id="signup-username" placeholder="Username">
            </div>
            <div class="form-group">
              <label class="sr-only" for="signup-email">Email address</label>
              <input type="email" class="form-control" id="signup-email" placeholder="Email address">
            </div>
            <div class="form-group">
              <label class="sr-only" for="signup-password">Password</label>
              <input type="password" class="form-control" id="signup-password" placeholder="Password">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="term">
                I agree with the Terms and Conditions. 
              </label>
            </div>
            <button class="btn btn-primary" type="submit">Sign up</button>
          </form>
        </div>
        <div class="modal-footer">
          <small>Already signed up? <a href="login.htm">Login here</a>.</small>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  
  <!--@modal - login modal-->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">
            Login
          </h4>
        </div>
        <div class="modal-body">
          <form action="login.htm" role="form">
            <div class="form-group">
              <label class="sr-only" for="login-email">Email</label>
              <input type="email" id="login-email" class="form-control email" placeholder="Email">
            </div>
            <div class="form-group">
              <label class="sr-only" for="login-password">Password</label>
              <input type="password" id="login-password" class="form-control password" placeholder="Password">
            </div>
            <button type="button" class="btn btn-primary">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <small>Not a member? <a href="#" class="signup">Sign up now!</a></small>
          <br>
          <small><a href="#">Forgotten password?</a></small>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
</div>


<!--Scripts -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script><script src="./plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>


<!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->

<!--Custom scripts mainly used to trigger libraries/plugins -->
<script src="js/script.min.js"></script>

</body>