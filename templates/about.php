<?php
    /*
        Template Name: About
    */
?>

<?php get_header(); ?>

<main id="main" class="about-template" tabindex="-1">

	<?php get_template_part('partials/hello-section'); ?>

	<?php $aboutImage = get_field('about_image'); ?>
	<div class="about">
		<div class="row no-gutters">
			<div class="col-md-5 offset-md-1">
				<div class="about__image background-cover itl element-margin-top rellax--no-mobile" data-rellax-speed="1.8"  data-rellax-percentage="0.5" style="background-image: url('<?php echo $aboutImage['url']; ?>');"></div><!-- /.about__image background-cover itl element-margin-top -->
			</div><!-- /.col-md-5 offset-md-1 -->
			<div class="col-md-6">
				<div class="about__content-wrapper element-paddings rellax--no-mobile" data-rellax-speed="0.8"  data-rellax-percentage="-0.5">
					<div class="about__content-wrapper__content content element-small-margin-top">
						<?php the_field('about_content'); ?>
					</div><!-- /.about__content-wrapper__content content element-small-margin-top -->
				</div><!-- /.about__content-wrapper element-paddings rellax--no-mobile -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row no-gutters -->
	</div><!-- /.about -->

	<section class="approach element-paddings text-center">
		<div class="row">
			<div class="col-sm-10 col-md-8 mx-auto">
				<span class="approach__superscription" data-aos="fade-up"><?php the_field('approach_superscription'); ?></span>
				<h2 class="approach__title" data-aos="fade-up"><?php the_field('approach_title'); ?></h2><!-- /.approach__title -->
				<div class="approach__content content element-small-margin-top" data-aos="fade-up">
					<?php the_field('approach_content'); ?>
				</div><!-- /.approach__content content element-small-margin-top -->
			</div><!-- /.col-sm-10 col-md-8 mx-auto -->
		</div><!-- /.row -->

		<div class="approach__icons element-margin-top">
			<div class="d-flex align-items-center justify-content-center">
				<div class="approach__icons__left-wrapper">
					<object id="approach__icons_1" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/images/icon__skin.svg" class="approach__icons__left-wrapper__icon"></object>
					<span class="approach__icons__left-wrapper__text d-block">Skin</span>
				</div><!-- /.approach__icons__left-wrapper -->

				<div class="approach__icons__center-wrapper">
					<span class="approach__icons__center-wrapper__text d-block">Nerves</span>
					<object id="approach__icons_2" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/images/icon__nerves.svg" class="approach__icons__center-wrapper__icon"></object>
				</div><!-- /.approach__icons__center-wrapper -->

				<div class="approach__icons__right-wrapper">
					<object id="approach__icons_3" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/images/icon__heart.svg" class="approach__icons__right-wrapper__icon"></object>
					<span class="approach__icons__right-wrapper__text d-block">Organs</span>
				</div><!-- /.approach__icons__right-wrapper -->
			</div><!-- /.d-flex align-items-center justify-content-center -->

			<div class="approach__icons__circle d-flex flex-wrap justify-content-center align-items-center">
				<div class="approach__icons__circle__content-wrapper">
					<object id="approach__icons_4" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/images/icon__joints-and-muscles.svg" class="approach__icons__circle__content-wrapper__icon"></object>
					<span class="approach__icons__circle__content-wrapper__text d-block">Joints & Muscles</span>
				</div>
				<span class="approach__icons__circle__line"></span>
			</div><!-- /.approach__icons__circle d-flex flex-wrap justify-content-center align-items-center -->
		</div><!-- /.approach__icons element-margin-top -->

		<?php if( have_rows('approach_table') ): ?>

			<div class="approach__table approach__table--mobile d-md-none text-left">
				<div class="approach__table__header">
					<span class="approach__table__header__title"><?php the_field('approach_table_header_left'); ?></span>
				</div><!-- /.approach__table__header -->
				<div class="approach__table__body approach-table-carousel-top owl-carousel owl-theme">

					<?php $loopCounter = 1; ?>
					<?php while ( have_rows('approach_table') ) : the_row(); ?>

						<div class="item" style="background: rgba(100, 170, 167, .<?php echo $loopCounter; ?>);">
							<div class="approach__table__body__content">
								<p><?php the_sub_field('content_left'); ?></p>
							</div><!-- /.approach__table__body__content -->
							<span class="approach__table__body__counter"><?php echo $loopCounter; ?></span>
						</div><!-- /.item -->

						<?php $loopCounter++; ?>
					<?php endwhile; ?>

				</div><!-- /.approach__table__body -->

				<div class="approach__table__header">
					<span class="approach__table__header__title"><?php the_field('approach_table_header_right'); ?></span>
				</div><!-- /.approach__table__header -->
				<div class="approach__table__body approach-table-carousel-bottom owl-carousel owl-theme">

					<?php $loopCounter = 1; ?>
					<?php while ( have_rows('approach_table') ) : the_row(); ?>

						<div class="item" style="background: rgba(100, 170, 167, .<?php if($loopCounter < 6 ) { echo $loopCounter;} ?>);" >
							<div class="approach__table__body__content">
								<p><?php the_sub_field('content_right'); ?></p>
							</div><!-- /.approach__table__body__content -->
							<span class="approach__table__body__counter"><?php echo $loopCounter; ?></span>
						</div><!-- /.item -->

						<?php $loopCounter++; ?>
					<?php endwhile; ?>

				</div><!-- /.approach__table__body -->
			</div><!-- /.approach__table approach__table-mobile d-md-none text-left -->

			<div class="approach__table approach__table--desktop d-none d-md-block text-left">
				<div class="approach__table__header">
					<div class="row">
						<div class="col-md-5">
							<span class="approach__table__header__title"><?php the_field('approach_table_header_left'); ?></span>
						</div><!-- /.col-md-5 -->
						<div class="col-md-5 offset-md-2">
							<span class="approach__table__header__title"><?php the_field('approach_table_header_right'); ?></span>
						</div><!-- /.col-md-5 offset-md-2 -->
					</div><!-- /.row -->
				</div><!-- /.approach__table__header -->
				<div class="approach__table__body">

					<?php $loopCounter = 1; ?>
					<?php while ( have_rows('approach_table') ) : the_row(); ?>

						<div class="row">
							<div class="col-md-5">
								<div class="approach__table__body__content">
									<p><?php the_sub_field('content_left'); ?></p>
								</div><!-- /.approach__table__body__content -->
							</div><!-- /.col-md-5 -->
							<div class="col-md-2">
								<span class="approach__table__body__counter rellax--no-mobile" data-rellax-speed="0.4"  data-rellax-percentage="0"><?php echo $loopCounter; ?></span>
							</div><!-- /.col-md-2 -->
							<div class="col-md-5">
								<div class="approach__table__body__content">
									<p><?php the_sub_field('content_right'); ?></p>
								</div><!-- /.approach__table__body__content -->
							</div><!-- /.col-md-5 -->
						</div><!-- /.row -->

						<?php $loopCounter++; ?>
					<?php endwhile; ?>

				</div><!-- /.approach__table__body -->
			</div><!-- /.approach__table approach__table-desktop d-none d-md-block text-left -->

		<?php endif; ?>

	</section><!-- /.approach element-paddings text-center -->

	<section class="partnerships element-padding-bottom">
		<div class="row">
			<div class="col-md-7 col-xl-6">
				<div class="partnerships__content-wrapper">
					<h2 class="partnerships__content-wrapper__title"><?php the_field('partnerships_title'); ?></h2><!-- /.partnerships__content-wrapper__title -->
					<div class="partnerships__content-wrapper__content content element-small-margin-top">
						<?php the_field('partnerships_content'); ?>
					</div><!-- /.partnerships__content-wrapper__content content element-small-margin-top -->

					<?php if( have_rows('partnerships_button') ): ?>
						<?php while ( have_rows('partnerships_button') ) : the_row(); ?>

							<a href="<?php the_sub_field('partnerships_link'); ?>" class="genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color"><?php the_sub_field('partnerships_label'); ?></a>

						<?php endwhile; ?>
					<?php endif; ?>

				</div><!-- /.partnerships__content-wrapper -->
			</div><!-- /.col-md-7 col-xl-6 -->

			<?php if( have_rows('partnerships_logos') ): ?>

				<div class="col-12">
					<div id="partnerships-logos-mobile-carousel" class="partnerships__logos partnerships__logos--mobile owl-carousel owl-theme d-md-none element-paddings">

						<?php while ( have_rows('partnerships_logos') ) : the_row(); ?>
							<?php $logo = get_sub_field('logo'); ?>

							<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="partnerships__logos__logo d-block"/>

						<?php endwhile; ?>

					</div><!-- /.partnerships__logos partnerships__logos-mobile d-md-none element-paddings -->
					<div class="partnerships__logos partnerships__logos--desktop d-none d-md-block">
						<div class="row no-gutters">

							<?php while ( have_rows('partnerships_logos') ) : the_row(); ?>
								<?php $logo = get_sub_field('logo'); ?>

								<div class="col-md-3 text-center">
									<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="partnerships__logos__logo d-block" data-aos="fade-up"/>
								</div><!-- /.col-md-3 text-center -->

							<?php endwhile; ?>

						</div><!-- /.row no-gutters -->
					</div><!-- /.partnerships__logos partnerships__logos-desktop d-none d-md-block -->
				</div><!-- /.col-12 -->

			<?php endif; ?>

		</div><!-- /.row -->
	</section><!-- /.partnerships element-padding-bottom -->

	<section class="events element-paddings text-center">
		<div class="events__background itl rellax--no-mobile d-none d-md-block" data-rellax-speed="1"  data-rellax-percentage="0.5"></div><!-- /.events__background itl -->
		<div class="row">
			<div class="col-sm-10 col-md-7 col-lg-6 mx-auto">
				<h2 class="events__title"><?php the_field('events_title'); ?></h2><!-- /.events__title -->
				<div class="events__content content element-small-margin-top">
					<?php the_field('events_content'); ?>
				</div><!-- /.events__content content element-small-margin-top -->

				<?php if( have_rows('events_button') ): ?>
					<?php while ( have_rows('events_button') ) : the_row(); ?>

						<a href="<?php the_sub_field('events_link'); ?>" class="genieve-burley-button genieve-burley-button__full-background genieve-burley-button__full-background--primary-color"><?php the_sub_field('events_label'); ?></a>

					<?php endwhile; ?>
				<?php endif; ?>

			</div><!-- /.col-sm-10 col-md-7 col-lg-6 mx-auto -->
		</div><!-- /.row -->
	</section><!-- /.events element-paddings text-center -->

	<?php $image = get_field('certifications_image'); ?>

	<section class="certifications element-paddings">
		<div class="row no-gutters">
			<div class="col-md-6">
				<div class="certifications__image background-cover w-100 itl rellax--no-mobile" data-rellax-speed="1.1"  data-rellax-percentage="0.5" style="background-image: url('<?php echo $image['url']; ?>');"></div><!-- /.certifications__image w-100 -->
			</div><!-- /.col-md-6 -->

			<?php if( have_rows('certifications_content') ): ?>
				<?php while ( have_rows('certifications_content') ) : the_row(); ?>

					<div class="col-md-6">
						<div class="certifications__content-wrapper element-paddings">
							<h2 class="certifications__content-wrapper__title"><?php the_sub_field('certifications_content_title'); ?></h2><!-- /.certifications__content-wrapper__title -->
							<div class="certifications__content-wrapper__content content element-small-margin-top">
								<?php the_sub_field('certifications_content_content'); ?>
							</div><!-- /.certifications__content-wrapper__content content element-small-margin-top -->
						</div><!-- /.certifications__content-wrapper element-paddings -->
					</div><!-- /.col-md-6 -->

				<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- /.row no-gutters -->
	</section><!-- /.certifications element-paddings -->

	<?php get_template_part('partials/cta'); ?>

</main><!-- /#main.about-template -->

<?php get_footer(); ?>