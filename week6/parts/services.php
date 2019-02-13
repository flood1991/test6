<!-- ====== START SERVICES ======  -->
		<section class="services sections" id="services" data-scroll-index="1">
			<div class="container">
				<div class="row">


					<!-- SERVICES TITLE START -->
					<div class="col-md-5">
						<div class="serv-title">
							<h4><?php the_field('service_title');?></h4>
						</div>
					</div>
					<!-- SERVICES TITLE END -->


					<!-- SERVICES CONTENT START -->
					<div class="serv-cont col-md-7">
							<?php
							if( have_rows('service_repeat') ):
					 	    while ( have_rows('service_repeat') ) : the_row();
    						?>
						<!-- SERVICE ITEM -->
						<div class="serv-c col-md-6">
							<div class="serv-item">
								<!-- SERVICE ICON -->
								<div class="serv-icon">
									<span class="icon icon-overlay icon-<?php the_sub_field('service_icon');?>"></span>
									<span class="icon icon-<?php the_sub_field('service_icon');?>"></span>
								</div>
								<!-- SERVICE CONTENT -->
								<div class="serv-cont">
									<h3><?php the_sub_field('service_title');?></h3>
									<p><?php the_sub_field('service_text');?></p>
								</div>
							</div>
						</div>
						
						<?php
						endwhile;
						endif;
						?>

					</div>
					<!-- SERVICES CONTENT END -->


				</div>
			</div>
		</section>
		<!-- ====== END SERVICES ======  -->