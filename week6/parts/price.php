
		<section class="sections prices" id="price" data-scroll-index="4">
			<div class="container">
				<div class="row">


					<!-- START PRICE TITLE -->
					<div class="price-title col-md-4">
						<h3><?php the_field('price_title');?></h3>

						<!-- START PRICING TABLES TABS -->
						<div class="pricing-tabs">
							
							<ul class="price-tabs" role="tablist">
								<?php
								if( have_rows('price_rpt') ):
					 	    	while ( have_rows('price_rpt') ) : the_row();
    							?>
							    <li role="presentation">
							    	<a href="#<?php the_sub_field('tab_name');?>" aria-controls="<?php the_sub_field('tab_name');?>" role="tab" data-toggle="tab">
							    		<?php the_sub_field('tab_name');?>
							    	</a>
								</li>
								<?php
								endwhile;
								endif;
								?>
							</ul>
						</div>
						<!-- END PRICING TABLES TABS -->

					</div>
					<!-- END PRICE TITLE -->


					<!-- START PRICING TABLES -->
					<div class="pric-tables col-md-8">

						<!-- START PRICING TABLES CONTENT -->
						<div class="tab-content">
							<?php
							if( have_rows('price_rpt') ):
					 	    while ( have_rows('price_rpt') ) : the_row();
    						?>

							<!-- START PERSONAL PRICING TABLES -->
							<div role="tabpanel" class="tab-pane fade" id="<?php the_sub_field('tab_name');?>">
								<?php 
									
								
								$i=0;
								if( have_rows('tab_content') ):
					 	    	while ( have_rows('tab_content') ) : the_row();
					 	    	$not_allowed = get_sub_field('not_allowed_spec');
					 	    	
    							?>

								<!-- PRICE TABLE START -->
								<div class="price-table col-md-6">

									<div class="item text-center">
										<div class="type">
											<h5><?php the_sub_field('rate_name');?></h5>
										</div>
										<div class="mount">
											<h3><?php the_sub_field('duration');?></h3>
										</div>
										<div class="pfeat">

											<?php
											if( have_rows('specif_rpt') ):
					 	   					while ( have_rows('specif_rpt') ) : the_row();
    										?>
											<p><i class="fa green fa-check-circle"></i><?php the_sub_field('specification');?></p>
											<?php 
											endwhile;
											endif
											?>

											<?php if (!empty($not_allowed)):?>
											<p><i class="fa red fa-times-circle"></i><?php the_sub_field('not_allowed_spec');?></p>
											<?php endif ?>

										</div>
										<div class="order">
											<a href="#">
												<?php the_sub_field('purchase_button');?>
											</a>
										</div>
									</div>
								</div>
								
								<?php
								$i++;
								if($i>1){break;}
								endwhile;
								endif;
								?>
								
							</div>
							<!-- END PERSONAL PRICING TABLES -->

							<?php
							endwhile;
							endif;
							?>
							


						</div>
						<!-- END PRICING TABLES CONTENT -->

					</div>
					<!-- END PRICING TABLES -->


				</div>
			</div>
		</section>
		<!-- ====== END PRICES ======  -->