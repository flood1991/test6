<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- TITLE -->
		<title>Multix - Multipurpose One page</title>

			<?php wp_head(); ?>
	</head>
	<body>


		<!-- ====== Preloader ======  -->
	   
		<!-- ======End Preloader ======  -->

		<!-- ====== HEADER START ======  -->
		<section class="s-header" id="home" data-scroll-index="0">
			<div class="header-overlay">
				<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

				<!-- ====== NAVGITION ======  -->
				<nav class="navbar land-nav">
					<div class="container">
						<div class="row">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
								<!-- logo -->
								<a class="logo navbar-brand" href="index.html#home" data-scroll-nav="0">
									<?php
                            			$white = get_field('white_logo', 'option');
                            			$dark = get_field('dark_logo','option');
                            			if( !empty($white)&!empty($dark) ):
                        			?>
									<!-- WHITE LOGO -->
									<img class="white-logo" width="200" src="<?php echo $white['url']; ?>" alt="<?php echo $white['alt']; ?>" />

									<!-- DARK LOGO -->
									<img class="dark-logo" width="200" src="<?php echo $dark['url']; ?>" alt="<?php echo $dark['alt']; ?>" />
									<?php endif; ?>
								</a>
							</div>
							<div class="collapse navbar-collapse" id="collapse">
								<?php 
                                wp_nav_menu(array(
                                    'theme_location' => 'head',
                                    'menu_class' => 'nav navbar-nav navbar-right',
                                    'menu_id' => 'navbar'
                                )); 
                            ?>
							</div><!-- /.navbar-collapse -->
						</div>
					</div><!-- /.container -->
				</nav>
				
				<!-- ====== END NAVGITION ======  -->


				<!-- ====== START HEADER CONTENT ======  -->
				<div class="middle-c text-center">
					<div class="container">
						<div class="row">
							<div class="capt col-md-8 col-sm-11">

								<h1>We help the <span>companies</span> to build <span>products</span></h1>

								<a href="index.html#about" data-scroll-nav="2" class="cta-btn">
									Explore Theme
								</a>

							</div>
						</div>
					</div>
				</div>
				<!-- ====== END HEADER CONTENT ======  -->


				<div class="header-shap">
	                <img src="<?php the_field('head_img','option');?>" alt="Shape">
	            </div>


			</div>

		</section>