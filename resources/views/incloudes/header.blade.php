       <style>
             .content_wraps {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 100px;
            
            
       
        }
             .logo img {
            height: 100px; /* Fixed height for consistency */
            width: auto; /* Maintain aspect ratio */
            max-width: 180px; /* Maximum width to prevent overflow */
            /* transition: all 0.3s ease; */
        }
                /* Different logo size for fixed header if needed */
     
        
        /* Navigation styles */
        .menu_main_nav_area {
            flex: 1 1 auto;
            text-align: right;
        }
        
     
        
      
 
        
        .menu_main_nav a:hover {
            color: #0073aa;
        }
        
        /* Mobile header */
        .header_mobile {
            display: none;
        }
       </style>
       
       <header class="top_panel_wrap top_panel_style_6 scheme_original">
                <div class="top_panel_wrap_inner top_panel_inner_style_6 top_panel_position_over">
                    <div class="top_panel_middle">
                        <div class="content_wraps">
                            <div class="contact_logo">
                                <div class="logo">
                                    <a href={{url('/')}}><img src="images/logo.png" class="logo_main" alt=""  ><img src="images/logo.png" class="logo_fixed" alt="" width="169" height="43"></a>
                                </div>
                            </div>
                            <div class="menu_main_wrap">
                                <nav class="menu_main_nav_area">
                                    <ul id="menu_main" class="menu_main_nav">
                                        <!-- <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children"><a href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item current-menu-item page-item-301"><a href="index.html">Home</a></li>
                                                <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                                <li class="menu-item"><a href="home-3.html">Home 3</a></li>
                                            </ul>
                                        </li> -->
                                        <li class="menu-item" ><a href={{url('/')}}>HOME</a></li>
                                        <li class="menu-item" ><a href={{url('about')}}>ABOUT US</a></li>
                                        <li class="menu-item" ><a href={{url('services')}}>Services</a></li>
                                        <li class="menu-item" ><a href={{url('gallery')}}>Gallery</a></li>
                                        <li class="menu-item" ><a href="#">Careers</a></li>
                                        <li class="menu-item" ><a href={{url('contact')}}>Contact</a></li>

                                        <!-- <li class="menu-item menu-item-has-children"><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="shop.html">Shop</a></li>
                                                <li class="menu-item menu-item-has-children"><a href="#">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="classic.html">Classic</a></li>
                                                        <li class="menu-item menu-item-has-children"><a href="#">Masonry</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="masonry-2-columns.html">Masonry 2 columns</a></li>
                                                                <li class="menu-item"><a href="masonry-3-columns.html">Masonry 3 columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children"><a href="#">Portfolio</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="portfolio-2-columns.html">Portfolio 2 columns</a></li>
                                                                <li class="menu-item"><a href="portfolio-3-columns.html">Portfolio 3 columns</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href="#">Gallery</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="grid.html">Grid</a></li>
                                                        <li class="menu-item"><a href="masonry.html">Masonry</a></li>
                                                        <li class="menu-item"><a href="cobbles.html">Cobbles</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item9"><a href="shorcodes.html">Shorcodes</a></li>
                                                <li class="menu-item"><a href="typography.html">Typography</a></li>
                                                <li class="menu-item"><a href="404.html">Page 404</a></li>
                                                <li class="menu-item menu-item-has-children"><a href="#">Tools</a>
                                                    <ul class="sub-menu">

                                                        <li class="menu-item"><a href="support.html">Support</a></li>
                                                        <li class="menu-item"><a href="video-tutorials.html">Video tutorials</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="menu-item menu-item-has-children"><a href="#">About</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="about.html">About style 1</a></li>
                                                <li class="menu-item"><a href="about-style-2/index.html">About style 2</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="menu-item menu-item-has-children"><a href="#">Classes</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="classes.html">Classes</a></li>
                                                <li class="menu-item"><a href="all-courses.html">Online courses</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="menu-item"><a href="contact.html">Contact</a></li> -->
                                        <!-- <li class="bordered menu-item"><a href="bookonline.html">Book online</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="header_mobile">
                <div class="wrap">
                    <div class="menu_button icon-menu"></div>
                    <div class="logo">
                        <a href={{url('/')}}><img src="images/logo.png" class="logo_main" alt="" width="169" height="43"></a>
                    </div>
                </div>
                <div class="side_wrap">
                    <div class="close">Close</div>
                    <div class="panel_top">
                        <nav class="menu_main_nav_area">
                            <ul id="menu_mobile" class="menu_main_nav">
                                <!-- <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children"><a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item current-menu-item page-item-301"><a href="index.html">Home</a></li>
                                        <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                        <li class="menu-item"><a href="home-3.html">Home 3</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="menu-item menu-item-has-children"><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="shop.html">Shop</a></li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="classic.html">Classic</a></li>
                                                <li class="menu-item menu-item-has-children"><a href="#">Masonry</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="masonry-2-columns.html">Masonry 2 columns</a></li>
                                                        <li class="menu-item"><a href="masonry-3-columns.html">Masonry 3 columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href="#">Portfolio</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="portfolio-2-columns.html">Portfolio 2 columns</a></li>
                                                        <li class="menu-item"><a href="portfolio-3-columns.html">Portfolio 3 columns</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="menu-item menu-item-has-children"><a href="#">Gallery</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="grid.html">Grid</a></li>
                                                <li class="menu-item"><a href="masonry.html">Masonry</a></li>
                                                <li class="menu-item"><a href="cobbles.html">Cobbles</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="menu-item9"><a href="shorcodes.html">Shorcodes</a></li>
                                        <li class="menu-item"><a href="typography.html">Typography</a></li>
                                        <li class="menu-item"><a href="404.html">Page 404</a></li> -->
                                        <!-- <li class="menu-item menu-item-has-children"><a href="#">Tools</a>
                                            <ul class="sub-menu">

                                                <li class="menu-item"><a href="support.html">Support</a></li>
                                                <li class="menu-item"><a href="video-tutorials.html">Video tutorials</a></li>
                                            </ul>
                                        </li> -->
                                             <li class="menu-item" ><a href={{url('/')}}>HOME</a></li>
                                        <li class="menu-item" ><a href={{url('about')}}>ABOUT US</a></li>
                                        <li class="menu-item" ><a href={{url('services')}}>Services</a></li>
                                        <li class="menu-item" ><a href={{url('gallery')}}>Gallery</a></li>
                                        <li class="menu-item" ><a href="#">Careers</a></li>
                                        <li class="menu-item" ><a href={{url('contact')}}>Contact</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="menu-item menu-item-has-children"><a href="#">About</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="about.html">About style 1</a></li>
                                        <li class="menu-item"><a href="about-style-2.html">About style 2</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="menu-item menu-item-has-children"><a href="#">Classes</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="classes.html">Classes</a></li>
                                        <li class="menu-item"><a href="all-courses.html">Online courses</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                                <li class="bordered menu-item"><a href="bookonline.html">Book online</a></li> -->
                            </ul>
                        </nav>
                    </div>
                    <div class="panel_bottom">
                    </div>
                </div>
                <div class="mask"></div>
            </div>