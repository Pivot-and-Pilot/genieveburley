<?php
    /*
        Template Name: Homepage
    */
?>

<?php get_header(); ?>

<main id="main" class="homepage-template" tabindex="-1">

	<?php if( have_rows('intro_slider') ): ?>

		<div class="intro">
			<div id="homepage-mobile-intro-slider" class="intro__slider owl-carousel owl-theme">

				<?php while ( have_rows('intro_slider') ) : the_row(); ?>
					<?php $image = get_sub_field('intro_slider_image'); ?>

					<div class="single-slide">
						<div class="row no-gutters">
							<div class="col-md-6">
								<div class="single-slide__image background-cover itl" style="background-image: url('<?php echo $image['url']; ?>');"></div><!-- /.single-slide__image background-cover itl -->
							</div><!-- /.col-md-6 -->

							<?php if( have_rows('intro_slider_content') ): ?>
								<?php while ( have_rows('intro_slider_content') ) : the_row(); ?>

									<div class="col-md-6">
										<div class="single-slide__content-wrapper element-paddings rellax--no-mobile" data-rellax-speed="1.5">
											<span class="single-slide__content-wrapper__superscription" data-aos="fade-up"><?php the_sub_field('intro_slider_superscription'); ?></span>
											<h1 class="single-slide__content-wrapper__title" data-aos="fade-up"><?php the_sub_field('intro_slider_title'); ?></h1><!-- /.single-slide__content-wrapper__title -->
											<div class="single-slide__content-wrapper__content content element-small-margin-top" data-aos="fade-up">
												<?php the_sub_field('intro_slider_contents'); ?>
											</div><!-- /.single-slide__content-wrapper__content content element-small-margin-top -->

											<?php if( have_rows('intro_slider_button') ): ?>
												<?php while ( have_rows('intro_slider_button') ) : the_row(); ?>

												<div data-aos="fade-up">
													<a href="<?php the_sub_field('intro_slider_link'); ?>" class="genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color"><?php the_sub_field('intro_slider_label'); ?></a>
												</div>

												<?php endwhile; ?>
											<?php endif; ?>

											<?php if(get_sub_field('intro_slider_adnotation')): ?>

												<div class="single-slide__content-wrapper__adnotation content element-small-margin-top" data-aos="fade-up">
													<p><?php the_sub_field('intro_slider_adnotation'); ?></p>
												</div><!-- /.single-slide__content-wrapper__adnotation content element-small-margin-top -->

											<?php endif; ?>

										</div><!-- /.single-slide__content-wrapper element-paddings rellax -->
									</div><!-- /.col-md-6 -->

								<?php endwhile; ?>
							<?php endif; ?>

						</div><!-- /.row no-gutters -->
					</div><!-- /.single-slide -->

				<?php endwhile; ?>

			</div><!-- /#homepage-mobile-intro-slider.intro__slider owl-carousel owl-theme -->
		</div><!-- /.intro -->

	<?php endif; ?>


	<?php $parallax = get_field('anti_aging_background'); ?>

	<section class="anti-aging">
		<div class="anti-aging__background background-cover itl parallax-window" data-parallax="scroll" data-bleed="100" data-image-src="<?php echo $parallax['url']; ?>"></div><!-- /.anti-aging__background background-cover itl -->
		<div class="row no-gutters">
			<div class="col-md-5 col-xl-4 offset-md-6 offset-xl-7">
				<h2 class="anti-aging__title" data-aos="fade-up"><?php the_field('anti_aging_title'); ?></h2><!-- /.anti-aging__title -->
				<div class="anti-aging__content content" data-aos="fade-up">
					<?php the_field('anti_aging_content'); ?>

					<?php if( have_rows('anti_aging_button') ): ?>
						<?php while ( have_rows('anti_aging_button') ) : the_row(); ?>

							<a href="<?php the_sub_field('anti_aging_link'); ?>" class="genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color" data-aos="fade-up"><?php the_sub_field('anti_aging_label'); ?></a>

						<?php endwhile; ?>
					<?php endif; ?>

				</div><!-- /.anti-aging__content content -->
			</div><!-- /.col-md-5 col-xl-4 offset-md-6 offset-xl-7 -->
		</div><!-- /.row no-gutters -->
	</section><!-- /.anti-aging -->

	<?php $aboutImage = get_field('about_image'); ?>
	<section class="about element-padding-bottom">
		<div class="row no-gutters">
			<div class="col-md-5 offset-md-1">
				<div class="about__image background-cover itl rellax--no-mobile" data-rellax-speed="1.8"  data-rellax-percentage="0.2" style="background-image: url('<?php echo $aboutImage['url']; ?>');"></div><!-- /.about__image background-cover itl -->
			</div><!-- /.col-md-5 offset-md-1 -->

			<?php if( have_rows('about_content') ): ?>
				<?php while ( have_rows('about_content') ) : the_row(); ?>

					<div class="col-md-6">
						<div class="about__content-wrapper element-paddings">
							<span class="about__content-wrapper__superscription"><?php the_sub_field('about_superscription'); ?></span>
							<h2 class="about__content-wrapper__title"><?php the_sub_field('about_title'); ?></h2><!-- /.about__content-wrapper__title -->
							<div class="about__content-wrapper__content content element-small-margin-top">
								<?php the_sub_field('about_contents'); ?>

								<?php if( have_rows('about_button') ): ?>
									<?php while ( have_rows('about_button') ) : the_row(); ?>

										<a href="<?php the_sub_field('about_link'); ?>" class="genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color"><?php the_sub_field('about_label'); ?></a>

									<?php endwhile; ?>
								<?php endif; ?>

							</div><!-- /.about__content-wrapper__content content element-small-margin-top -->
						</div><!-- /.about__content-wrapper element-paddings -->
					</div><!-- /.col-md-6 -->

				<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- /.row no-gutters -->
		<div class="about__classes-schedules">

			<?php if( have_rows('classes_slider') ): ?>

				<div id="homepage-mobile-about-slider" class="about__classes-schedules__mobile-slider owl-carousel owl-theme">

					<?php while ( have_rows('classes_slider') ) : the_row(); ?>
						<?php $image1 = get_sub_field('image_left'); ?>
						<?php $image2 = get_sub_field('image_right'); ?>

						<div class="single-image background-cover itl" style="background-image: url('<?php echo $image1['url']; ?>');"></div><!-- /.single-image background-cover itl -->
						<div class="single-image background-cover itl" style="background-image: url('<?php echo $image2['url']; ?>');"></div><!-- /.single-image background-cover itl -->

					<?php endwhile; ?>

				</div><!-- /#homepage-mobile-about-slider.about__classes-schedules__mobile-slider owl-carousel owl-theme -->

			<?php endif; ?>

			<div class="row no-gutters">
				<div class="col-md-10 offset-md-1">

					<?php if( have_rows('classes_slider') ): ?>

						<div class="about__classes-schedules__desktop-slider element-margin-top">
							<div class="single-slide">
								<div class="row no-gutters">
									<div class="col-md-5">
										<div id="homepage-desktop-about-slider-one" class="single-slide__first-slider owl-theme owl-carousel rellax--no-mobile element-margin-bottom" data-rellax-speed="0.8" data-rellax-percentage="0.5">

											<?php while ( have_rows('classes_slider') ) : the_row(); ?>
												<?php $image1 = get_sub_field('image_left'); ?>

												<div class="single-slide__first-image background-cover itl" style="background-image: url('<?php echo $image1['url']; ?>');"></div><!-- /.single-slide__first-image background-cover itl -->

											<?php endwhile; ?>

										</div><!-- /#homepage-desktop-about-slider-one.single-slide__first-slider.owl-theme owl-carousel -->

									</div><!-- /.col-md-5 -->
									<div class="col-md-7">
										<div id="homepage-desktop-about-slider-two" class="single-slide__second-slider owl-theme owl-carousel rellax--no-mobile" data-rellax-speed="-1" data-rellax-percentage="-0.5">

											<?php while ( have_rows('classes_slider') ) : the_row(); ?>
												<?php $image2 = get_sub_field('image_right'); ?>

												<div class="single-slide__second-image background-cover itl" style="background-image: url('<?php echo $image2['url']; ?>');"></div><!-- /.single-slide__second-image background-cover itl -->

											<?php endwhile; ?>

										</div><!-- /#homepage-desktop-about-slider-two.single-slide__second-slider.owl-theme owl-carousel -->
									</div><!-- /.col-md-7 -->
								</div><!-- /.row no-gutters -->
							</div><!-- /.single-slide -->
						</div><!-- /#homepage-desktop-about-slider.about__classes-schedules__desktop-slider owl-carousel owl-theme element-margin-top -->

					<?php endif; ?>

					<div class="row">
						<div class="col-md-7">
							<div class="about__classes-schedules__content content element-padding-top">
								<?php the_field('classes_content'); ?>

								<?php if( have_rows('classes_button') ): ?>
									<?php while ( have_rows('classes_button') ) : the_row(); ?>

										<a href="<?php the_sub_field('classes_link'); ?>" class="genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color"><?php the_sub_field('classes_label'); ?></a>

									<?php endwhile; ?>
								<?php endif; ?>

							</div><!-- /.about__classes-schedules__content content element-padding-top -->
						</div><!-- /.col-md-7 -->
					</div><!-- /.row -->
				</div><!-- /.col-md-10 offset-md-1 -->
			</div><!-- /.row no-gutters -->
		</div><!-- /.about__classes-schedules -->
	</section><!-- /.about element-padding-bottom -->

	<?php get_template_part('partials/cta'); ?>

</main><!-- /#main.homepage-template -->

<?php get_footer(); ?>