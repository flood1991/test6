<section class="sections experiences">
			<div class="container">
				<div class="row">


					<!-- START EXPERIENCES LEFT SIDE -->
					<div class="col-md-5 exp-lf">
						<h3><?php the_field('exp_title');?></h3>
						<p><?php the_field('exp_text');?></p>
					</div>
					<!-- END EXPERIENCES LEFT SIDE -->


					<!-- START SKILLS -->
                	<div class="skills col-md-7">	
						<ul>
							<?php
							if( have_rows('exp_repeat') ):
					 	    while ( have_rows('exp_repeat') ) : the_row();
    						?>
							<li>
								<span><?php the_sub_field('skill');?></span>
								<div class="progress">
									<div class="progress-bar" data-percent="<?php the_sub_field('percent');?>" style="width: <?php the_sub_field('percent');?>;">
					                    <span><?php the_sub_field('percent');?></span>
					                 </div>
				                 </div>
							</li>
							<?php
							endwhile;
							endif;
							?>
						</ul>
	                </div>
	                <!-- END SKILLS -->
				</div>
			</div>
		</section>
		<!-- ====== END EXPERIENCES ======  -->