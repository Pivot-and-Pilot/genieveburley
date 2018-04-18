<?php
    /*
        Template Name: Chiro
    */
?>

<?php get_header(); ?>

<main id="main" class="chiro-template" tabindex="-1">

	<a href="#cta-carousel" class="section-scroll-button genieve-burley-button genieve-burley-button__full-background genieve-burley-button__full-background--primary-color scroll">book appointment</a>

	<?php get_template_part('partials/hello-section'); ?>

	<section class="adjustments text-center element-paddings">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="adjustments__content-wrapper">
					<h2 class="adjustments__title"><?php the_field('adjustments_title'); ?></h2><!-- /.adjustments__title -->
					<div class="adjustments__content content element-small-margin-top">
						<?php the_field('adjustments_content'); ?>
					</div><!-- /.adjustments__content content element-small-margin-top -->
				</div><!-- /.adjustments__content-wrapper -->
			</div><!-- /.col-md-8 mx-auto -->
		</div><!-- /.row -->

		<?php if( have_rows('adjustments') ): ?>

			<div id="adjustments-carousel" class="adjustments__carousel mx-auto owl-theme owl-carousel">

				<?php $loopCounter = 1; ?>
				<?php while ( have_rows('adjustments') ) : the_row(); ?>

					<?php $icon = get_sub_field('adjust_icon'); ?>

					<div class="single-adjust element-paddings">
						<style>
							path {
								stroke: #64aaa7;
							}
						</style>
						<object id="adjust-svg-<?php echo $loopCounter; ?>" type="image/svg+xml" data="<?php echo $icon['url']; ?>" class="single-adjust__icon mx-auto"></object>
						<!-- <img src="<?php //echo $icon['url']; ?>" alt="<?php //echo $icon['alt']; ?>" class="single-adjust__icon d-block mx-auto svg" /> -->
						<h3 class="single-adjust__title"><?php the_sub_field('adjust_label'); ?></h3><!-- /.single-adjust__title -->
					</div><!-- /.single-adjust element-paddings -->

					<?php $loopCounter++; ?>
				<?php endwhile; ?>

			</div><!-- /.adjustments__carousel mx-lg-auto owl-theme owl-carousel -->

		<?php endif; ?>

	</section><!-- /.adjustments text-center element-paddings -->

	<section class="for-who element-paddings element-margins">
		<span class="decor decor--b rellax" data-rellax-speed="1" data-rellax-percentage="0.5">B</span>
		<span class="decor decor--g rellax" data-rellax-speed="1" data-rellax-percentage="0.5">G</span>
		<img src="<?php echo get_template_directory_uri(); ?>/images/pattern.png" alt="pattern" class="for-who__pattern itl rellax" data-rellax-speed="1"  data-rellax-percentage="0.5" />
		<div class="row">
			<div class="col-md-10 col-xl-6 mx-auto">
				<div class="for-who__content-wrapper text-center">
					<h2 class="for-who__content-wrapper__title" data-aos="fade-up"><?php the_field('for_who_title'); ?></h2><!-- /.for-who__content-wrapper__title -->
					<div class="for-who__content-wrapper__content content element-small-margin-top" data-aos="fade-up">
						<?php the_field('for_who_content'); ?>
					</div><!-- /.for-who__content-wrapper__content content element-small-margin-top -->
				</div><!-- /.for-who__content-wrapper text-center -->
			</div><!-- /.col-md-10 col-xl-6 mx-auto -->
		</div><!-- /.row -->

		<?php if( have_rows('groups') ): ?>

			<div class="row">

				<?php while ( have_rows('groups') ) : the_row(); ?>

					<div class="col-sm-6">
						<div class="single-group element-margin-top">
							<h3 class="single-group__title" data-aos="fade-up"><?php the_sub_field('group_title'); ?></h3><!-- /.single-group__title -->
							<div class="single-group__content content" data-aos="fade-up">
								<?php the_sub_field('group_content'); ?>
							</div><!-- /.single-group__content content -->
						</div><!-- /.single-group element-margin-top -->
					</div><!-- /.col-sm-6 -->

				<?php endwhile; ?>

			</div><!-- /.row -->

		<?php endif; ?>

	</section><!-- /.for-who element-paddings element-margins -->

	<?php $image = get_field('certifications_image'); ?>

	<section class="certifications element-padding-bottom">
		<div class="row">
			<div class="col-md-6">
				<div class="certifications__image background-cover w-100 itl rellax--no-mobile" data-rellax-speed="0.6" style="background-image: url('<?php echo $image['url']; ?>');"></div><!-- /.certifications__image w-100 -->
			</div><!-- /.col-md-6 -->

			<?php if( have_rows('certifications_content') ): ?>
				<?php while ( have_rows('certifications_content') ) : the_row(); ?>

					<div class="col-md-6">
						<div class="certifications__content-wrapper">
							<h2 class="certifications__content-wrapper__title"><?php the_sub_field('certifications_content_title'); ?></h2><!-- /.certifications__content-wrapper__title -->
							<div class="certifications__content-wrapper__content content element-small-margin-top">
								<?php the_sub_field('certifications_content_content'); ?>
							</div><!-- /.certifications__content-wrapper__content content element-small-margin-top -->
						</div><!-- /.certifications__content-wrapper -->
					</div><!-- /.col-md-6 -->

				<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- /.row -->
		<div class="awards element-padding-top">

			<?php $logo = get_field('award_logo'); ?>

			<div class="row align-items-center justify-content-center">
				<div class="col col-auto">
					<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="certifications__logo d-block itl lazy" />
				</div><!-- /.col col-auto -->

				<?php if( have_rows('award_content') ): ?>
					<?php while ( have_rows('award_content') ) : the_row(); ?>

						<div class="col-12 col-sm-8 col-lg-6">
							<div class="awards__description text-center text-sm-left">
								<p><?php the_sub_field('award_description'); ?></p>
							</div><!-- /.awards__description text-center text-sm-left -->
							<span class="awards__note text-center text-sm-left d-block"><?php the_sub_field('award_note'); ?></span>
						</div><!-- /.col-12 col-sm-8 col-lg-6 -->

					<?php endwhile; ?>
				<?php endif; ?>
			</div><!-- /.row align-items-center justify-content-center -->
		</div><!-- /.awards element-padding-top -->
	</section><!-- /.certifications element-padding-bottom -->

	<?php get_template_part('partials/cta'); ?>

</main><!-- /#main.chiro-template -->

<?php get_footer(); ?>