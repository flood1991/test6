<section class="sections footer">
			<div class="container">
				<div class="row">


					<!-- START FOOTER LOGO -->
					<div class="ft-logo col-md-3 col-sm-4 col-xs-7">
						<img src="<?php the_field('footer_logo', 'option');?>" width="80" alt="Footer Logo" />
					</div>
					<!-- END FOOTER LOGO -->


					<!-- START SOCIAL ICONS -->
					<div class="sc-icon">
							<?php
							if( have_rows('social_icons', 'option') ):
					 	    while ( have_rows('social_icons', 'option') ) : the_row();
    						?>
						<a href="<?php the_sub_field('link', 'option');?>">
							<span>
								<i class="fa fa-<?php the_sub_field('social_name', 'option');?>" aria-hidden="true"></i>
							</span>
						</a>
							<?php
							endwhile;
							endif;
							?>
					</div>
					<!-- END SOCIAL ICONS -->


					<!-- START RIGHTS -->
					<div class="sub-footer">
						<h5><?php the_field('copyright', 'option');?></h5>
					</div>


				</div>
			</div>
		</section>
		<!-- ====== END FOOTER ======  -->


		<!-- ====== JS ======  -->
		<!-- JQUERY -->
		
<?php wp_footer(); ?>
	</body>
</html>