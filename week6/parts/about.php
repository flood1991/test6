<section class="sections about" id="about" data-scroll-index="2">
			<div class="container">
				<div class="row">


					<!-- START ABOUT PICTURE -->
					<div class="col-lg-4 col-md-5 ab-pic">

						<img src="<?php the_field('about_img');?>" style="width: 100%;" alt="About picture" />

					</div>
					<!-- END ABOUT PICTURE -->


					<!-- START ABOUT CONTENT -->
					<div class="col-lg-8 col-md-7 ab-cont">

						<h3><?php the_field('about_title');?></h3>
						<p><?php the_field('about_text');?></p>
						<div class="features">
							<p>
								<span class="icon icon-map"></span>
								<?php the_field('title_map');?>
							</p>
							<p>
								<span class="icon icon-linegraph"></span>
								<?php the_field('title_line');?>
							</p>
							<p>
								<span class="icon icon-heart"></span>
								<?php the_field('title_heart');?>
							</p>

						</div>

					</div>
					<!-- END ABOUT CONTENT -->


				</div>
			</div>
		</section>