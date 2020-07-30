
    <div id="preloader">
        <div id="status"></div>
    </div>


    <header class="main_header_area headerstyle-2">
        <div class="header-content">
            <div class="container">
                <div class="links links-left">
                    <ul>
                        <li><a href="javascript:void(0);">info@kilitrekisafari.com</a>
                        </li>
                        <li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i>+(255) 787 096 001</a></li>
                    </ul>
                </div>
                <div class="links links-right pull-right">
                    <ul>
                        <!-- <li><a href="#" data-toggle="modal" data-target="#login"><i class="fa fa-user"
                                    aria-hidden="true"></i> Login</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#register"><i class="fa fa-pen"
                                    aria-hidden="true"></i> Register</a></li> -->
                        <li>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header_menu affix-top">
            <nav class="navbar navbar-default">
                <div class="container">

                    <div class="navbar-header">
                        <a class="navbar-brand" href="index-2.html">
                            <img alt="Image" src="<?=base_url('assets/images/logo-black.png');?>" class="logo-black">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <li class="active">
                                <a href="<?=base_url();?>" <?php if(!empty($active)){ if($active=='index'){?> style="color: red;" <?php } } ?>>Home</a>
                            </li>
                            <li class="">
                                <a href="<?=base_url('main/about');?>"  <?php if(!empty($active)){ if($active=='about'){?> style="color: red;" <?php } } ?>>About Us</a>
                            </li>
                            <li>
                                <a href="<?=base_url('main/destination');?>" <?php if(!empty($active)){ if($active=='destination'){?> style="color: red;" <?php } } ?>>Destination</a>
                                
                            </li>

                            <li class="">
                                <a href="<?=base_url('main/gallery');?>" <?php if(!empty($active)){ if($active=='gallery'){?> style="color: red;" <?php } } ?>>Gallery</a>
                            </li>

                            <li class="">
                                <a href="<?=base_url('main/contact');?>" <?php if(!empty($active)){ if($active=='contact'){?> style="color: red;" <?php } } ?>>Contact Us</a>
                            </li>

                        </ul>
                        
                    </div>
                </div>
                <div id="slicknav-mobile"></div>
            </nav>
        </div>

    </header>