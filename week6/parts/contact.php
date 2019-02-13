<section class="sections contact" id="contact" data-scroll-index="5">
			<div class="container">
				<div class="row">


					<!-- START CONTACT SECTION TITLE -->
					<div class="cont-title col-md-5">
						<h3><?php the_field('contact_title');?></h3>
						<p><?php the_field('contact_text');?></p>
						<ul class="info">
							<?php
							if( have_rows('contact_repeat') ):
					 	    while ( have_rows('contact_repeat') ) : the_row();
    						?>
							<li>
								<span class="icon icon-<?php the_sub_field('icon_rpt');?>"></span>
								<p><?php the_sub_field('text_rpt');?></p>
							</li>
							<?php
							endwhile;
							endif;
							?>
						</ul>
					</div>
					<!-- END CONTACT SECTION TITLE -->


					<!-- START CONTACT FORM -->
					<div class="contact-form col-md-7">
						<form action="http://joker-themes.com/multix-dd/demos/Waves-Version/php/contact.php" method="POST" class="cont-fo">
							<?php
							if( have_rows('form_rpt') ):
					 	    while ( have_rows('form_rpt') ) : the_row();
    						?>

							<div class="contact-item col-md-12">
								<input type="<?php the_sub_field('field_name');?>" name="<?php the_sub_field('field_name');?>" placeholder="<?php the_sub_field('field_name');?>"  required="<?php the_sub_field('required');?>">
							</div>
							<?php
							endwhile;
							endif;
							?>
							<div class="contact-item col-md-12">
								<textarea id="form_message" name="message" placeholder="<?php the_field('message_field');?>" rows="4" required="required" data-error="Message."></textarea>
							</div>
							
							<div class="contact-item col-md-12">
								<input type="submit" class="button disabled" value="<?php the_field('button_text');?>">
							</div>


						</form>
					</div>
					<!-- END CONTACT FORM -->


				</div>
			</div>
		</section>