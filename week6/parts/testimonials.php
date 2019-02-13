<!-- ====== START TESTIMONIALS ======  -->
		<section class="testimonials text-center">
			<div class="testimonials-overlay sections">
				<div class="container">
					<div class="row">


						<div class="title">
							<h3><?php the_field('testimonial_title');?></h3>
							<div class="devider"></div>
						</div>


						<div class="owl-carousel owl-theme">
							<?php
							if( have_rows('testimonial_repeat') ):
					 	    while ( have_rows('testimonial_repeat') ) : the_row();
    						?>
							<!-- TESTIMONIALS ITEM -->
							<div class="t-item">
								<div class="testimonial-box col-md-8 col-xs-12">
									<p><?php the_sub_field('text');?></p>
									<!-- TESTIMONIAL NAME -->
									<h3><?php the_sub_field('author');?><span><?php the_sub_field('position');?></span></h3>
								</div>
							</div>
								<?php
								endwhile;
								endif;
								?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ====== END TESTIMONIALS ======  -->
