<div class="footer-wrapper">
	<section class="follow-my-journey">
		<div class="row no-gutters">
			<div class="col-12">
				<img data-src="<?php echo get_template_directory_uri(); ?>/images/icon__instagram.svg" src="<?php echo get_template_directory_uri(); ?>/images/img__empty.png" alt="Instagram" class="follow-my-journey__icon lazy mx-md-auto" />
				<h3 class="follow-my-journey__title">Follow my journey</h3><!-- /.follow-my-journey__title -->
				<a href="<?php the_field( 'instagram_link', 'options' ); ?>" target="_blank" rel="nofollow" class="follow-my-journey__link">@genieveburley</a>
			</div><!-- /.col-12 -->
			<div class="col-12">
				<div class="follow-my-journey__gallery element-small-margin-top">
					<?php echo wdi_feed(array('id'=>'1')); ?>
				</div><!-- /.follow-my-journey__gallery element-small-margin-top -->
			</div><!-- /.col-12 -->
		</div><!-- /.row no-gutters -->
	</section><!-- /.follow-my-journey -->
	<footer class="main-footer">
		<div class="row align-items-md-end justify-content-md-between no-gutters">
			<div class="col-12 col-md-auto order-md-2">
				<img data-src="<?php echo get_template_directory_uri(); ?>/images/logo__genieve-burley--short--primary-color.svg" src="<?php echo get_template_directory_uri(); ?>/images/img__empty.png" alt="Instagram" class="main-footer__logo lazy" />
			</div><!-- /.col-12 col-md-auto order-md-2 -->

			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="https://genieveburley.us17.list-manage.com/subscribe/post?u=60498540bddeb0094109beb0c&amp;id=efd47d121e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<div class="mc-field-group">
							<label for="mce-EMAIL">Subscribe for retreat offers, wellness tips and much more:</label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_60498540bddeb0094109beb0c_efd47d121e" tabindex="-1" value=""></div>
						<div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</div>
				</form>
			</div>
			<!--End mc_embed_signup-->

			<div class="col-12 col-md-auto order-md-1">
				<ul class="main-footer__quick-contact">
					<li>
						<a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
					</li>
					<li>
						<a href="tel:<?php echo filter_var(get_field('phone', 'option'), FILTER_SANITIZE_NUMBER_INT); ?>"><?php the_field('phone', 'option'); ?></a>
					</li>
				</ul><!-- /.main-footer__quick-contact -->
				<address class="main-footer__address element-small-margin-top">
					<?php the_field('address', 'option'); ?>
				</address><!-- /.main-footer__address element-small-margin-top -->
			</div><!-- /.col-12 col-md-auto order-md-1 -->
		</div><!-- /.row align-items-md-end justify-content-md-between no-gutters -->
		<div class="row">
			<div class="col-12 col-md-auto">
				<div class="main-footer__second-stage element-small-margin-top">
					<span class="copyrights d-inline-block"><?php echo date('Y').' © '.get_bloginfo('name'); ?></span><span class="indicator d-inline-block">|</span><span class="design d-inline-block"> Website by <a href="https://pivotandpilot.com/" target="_blank" rel="nofollow">Pivot & Pilot</a></span>
				</div><!-- /.main-footer__second-stage element-small-margin-top -->
			</div><!-- /.col-12 col-md-auto -->
		</div><!-- /.row -->
	</footer><!-- /.main-footer -->
</div><!-- /.footer-wrapper -->

<!-- © <?php //echo date('Y').' '.get_bloginfo('name'); ?> -->