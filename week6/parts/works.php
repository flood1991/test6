<!-- ====== START WORK ======  -->
		<section class="sections text-center work" id="work" data-scroll-index="3">
			<div class="container">
				<div class="row">


					<!-- START WORK TITLE -->
					<div class="col-md-9 wo-title">
						<h2><?php the_field('work_title');?></h2>
						<p><?php the_field('work_text');?></p>
					</div>
					<!-- END WORK TITLE -->


					<!-- WORK FILTER BUTTONS -->
					<div class="button-group filter-work">  
						<?php 
           				 $works = get_posts(
                			array('numberposts' => 6,
                			'orderby' => 'id',
                			'category' => 'portfolio_category',
                			'order' => 'ASC',
                			'post_type' => 'portfolio',  ));   
            			$terms = get_terms( 'portfolio_category' );
            			if($terms) { foreach( $terms as $term ){
        				?>			
					  <a class="button " data-filter=".item-<?php echo "$term->slug"?>"><?php echo "$term->name";}} ?></a>
					</div>
					<!-- END WORK FILTER BUTTONS -->

				</div>
			</div>


			<!-- WORK CONTENT START -->
			<div class="work-content">
					 <?php
                            foreach( $works as $post ){
                            setup_postdata($post);
                            $posttags = get_the_terms($post->ID,'portfolio_category');
                            ?>    
				<!-- WORK ITEM -->
				<div class="work-item item-<?php   if (is_array($posttags)) {
                                        foreach($posttags as $category) {
                                        echo $category->slug; 
                                } } ?>">
					<div class="work-caption">

						<!-- WORK IMAGE -->
				  		<?php the_post_thumbnail('portfolio'); ?>

				  		<!-- WORK TITLE -->
					  	<div class="overlay">
					  		<div class="info-content">
						  		<h4><?php the_title();?></h4>
						  		<?php the_content();?>
							</div>
							<div class="know-more">
								<a class="modal-image" href="<?php the_post_thumbnail_url(); ?>">
									<span class="icon icon-focus"></span>
								</a>
							</div>
					  	</div>

					</div>
				</div>
				<?php
                    }
                    wp_reset_postdata();
                ?>
			</div>
			<!-- WORK CONTENT END -->


		</section>
		<!-- ====== END WORK ======  -->