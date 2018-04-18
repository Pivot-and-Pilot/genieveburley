<?php
    /*
        Template Name: Classes
    */
?>

<?php get_header(); ?>

<main id="main" class="classes-template" tabindex="-1">

	<?php get_template_part('partials/hello-section'); ?>

	<?php if( have_rows('classes') ): ?>
		<?php while ( have_rows('classes') ) : the_row(); ?>

			<?php $image = get_sub_field('class_image'); ?>

			<div class="single-class" data-aos="fade-up">
				<div class="row no-gutters">
					<div class="col-md-5">
						<div class="single-class__image itl background-cover d-block lazy w-100" style="background-image: url('<?php echo $image['url']; ?>');"></div><!-- /.single-class__image itl background-cover d-block lazy w-100 -->
					</div><!-- /.col-md-5 -->

					<?php if( have_rows('class_content') ): ?>
						<?php while ( have_rows('class_content') ) : the_row(); ?>

							<div class="col-md-7">
								<div class="single-class__content-wrapper">
									<h2 class="single-class__content-wrapper__title"><?php the_sub_field('class_title'); ?></h2><!-- /.single-class__content-wrapper__title -->
									<span class="single-class__content-wrapper__subtitle"><?php the_sub_field('class_subtitle'); ?></span>
									<div class="single-class__content-wrapper__content content element-small-margin-top">
										<?php the_sub_field('class_contents'); ?>
									</div><!-- /.single-class__content-wrapper__content content element-small-margin-top -->
									<div class="row justify-content-sm-between align-items-sm-end">
										<div class="col col-auto">
											<span class="single-class__content-wrapper__subtitle d-block element-small-margin-top">Where</span>
											<address class="single-class__content-wrapper__address"><?php the_sub_field('class_where'); ?></address>

											<?php if( have_rows('class_button') ): ?>
												<?php while ( have_rows('class_button') ) : the_row(); ?>

													<a href="<?php the_sub_field('class_url'); ?>" target="_blank" class="genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color d-none d-sm-inline-block"><?php the_sub_field('class_label'); ?></a>

												<?php endwhile; ?>
											<?php endif; ?>

										</div><!-- /.col col-auto -->
										<div class="col-12 col-sm-auto">
											<?php $logo = get_sub_field('class_logo'); ?>

											<img data-src="<?php echo $logo['url']; ?>" src="<?php echo get_template_directory_uri(); ?>/images/img__empty.png" alt="<?php echo $logo['alt']; ?>" class="single-class__content-wrapper__logo d-block element-small-margin-top d-block itl lazy" />

											<?php if( have_rows('class_button') ): ?>
												<?php while ( have_rows('class_button') ) : the_row(); ?>

													<a href="<?php the_sub_field('class_url'); ?>" target="_blank" class="genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color d-block w-100 text-center d-sm-none"><?php the_sub_field('class_label'); ?></a>

												<?php endwhile; ?>
											<?php endif; ?>

										</div><!-- /.col-12 col-sm-auto -->
									</div><!-- /.row justify-content-sm-between align-items-sm-end -->
								</div><!-- /.single-class__content-wrapper -->
							</div><!-- /.col-md-7 -->

						<?php endwhile; ?>
					<?php endif; ?>

				</div><!-- /.row no-gutters -->
			</div><!-- /.single-class -->

		<?php endwhile; ?>
	<?php endif; ?>

</main><!-- /#main.classes-template -->

<?php get_footer(); ?>