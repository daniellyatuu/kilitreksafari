
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<div class="main-container">
		<!-- Loader -->
		<div id="site-loader" class="load-complete">
			<div class="loader">
				<div class="loader-inner ball-clip-rotate">
					<div></div>
				</div>
			</div>
		</div><!-- Loader /- -->

		<!-- Header Section -->
		<header class="container-fluid no-padding header-section">
		
			<!-- SidePanel -->
			<div id="slidepanel">
			
				<!-- Top Header -->
				<div class="container-fluid no-padding top-header">
					<!-- Container -->
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12 welcome-text">
								<span><i class="icon icon-Pointer"></i> company location in here</span>
								<span><a href="javascript:void(0);" title=""><i class="icon icon-Phone2"></i>+(255) 787 096 001</a></span>
							</div>
							<div class="col-md-6 col-sm-6 social-block">
								
								<ul>
									<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li style="visibility:hidden;"><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
								</ul>
							</div>							
						</div>
						<!-- Search Box -->
						<div class="search-box">
							<span><i class="icon_close"></i></span>
							<form><input type="text" class="form-control" placeholder="Enter a keyword and press enter..." /></form>
						</div><!-- Search Box /- -->
					</div><!-- Container /- -->
				</div><!-- Top Header /- -->				
			</div><!-- SidePanel /- -->
			
			<div class="container-fluid no-padding menu-block">
				<!-- Container -->
				<div class="container">	
					<!-- nav -->
					<nav class="navbar navbar-default ow-navigation">
						<div class="navbar-header">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="<?=base_url();?>" class="navbar-brand"><img src="<?=base_url('assets/images/logo3.png'); ?>" alt="logo" /></a>
						</div>
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav">

								<li style="visibility:hidden;" class="hidden-xs"><a href="services.html" title="Services">Services</a></li>
								<li style="visibility:hidden;" class="hidden-xs"><a href="gallery.html" title="Gallery">Gallery</a></li>
								
								<li class="<?php if(!empty($active)){ if($active=='index'){ echo 'active'; } } ?>">
									<a href="<?=base_url();?>" title="Home">Home</a>
								</li>
								<li class="<?php if(!empty($active)){ if($active=='about'){ echo 'active'; } } ?>"><a href="<?=base_url('main/about');?>" title="About me">About</a></li>
								
								<li class="<?php if(!empty($active)){ if($active=='contact'){ echo 'active'; } } ?>"><a href="<?=base_url('main/contact');?>" title="Contact Us">Contact Us</a></li>
								<li class="<?php if(!empty($active)){ if($active=='gallery'){ echo 'active'; } } ?>"><a href="<?=base_url('main/gallery');?>" title="Destination">Gallery <span style="visibility:hidden;" class="hidden-xs">****</span></a></li>
								<li style="visibility:hidden;" class="hidden-xs">
									<a href="javascript:void(0);" title="Pages">Pages</a>
								</li>
								<li style="visibility:hidden;" class="hidden-xs">
									<a href="javascript:void(0);" title="Blog">Blog</a>
								</li>
								
							</ul>
						</div><!--/.nav-collapse -->
						<div id="loginpanel" class="desktop-hide">
							<div class="right" id="toggle">
								<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
								<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
							</div>
						</div>
					</nav><!-- nav /- -->
				</div><!-- Container /- -->
			</div>
		</header><!-- Header Section /- -->
	