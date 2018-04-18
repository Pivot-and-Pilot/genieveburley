<?php
    /*
        Template Name: Retreats 2nd stage
    */
?>

<?php get_header(); ?>

<main id="main" class="retreats-second-stage-template" tabindex="-1">

	<a href="#booking" class="section-scroll-button genieve-burley-button genieve-burley-button__full-background genieve-burley-button__full-background--primary-color scroll">Book Retreat</a>

	<section class="hello-section d-flex align-items-end align-items-md-center">


		<?php $images = get_field('hello_section_backgrounds'); ?>
		<?php if( $images ): ?>

			<div class="hello-section__background-carousel owl-carousel owl-theme">

				<?php foreach( $images as $image ): ?>

					<div class="hello-section__background-carousel__image background-cover itl" style="background-image: url('<?php echo $image['url']; ?>');"></div><!-- /.hello-section__background background-cover itl -->

				<?php endforeach; ?>

			</div><!-- /.hello-section__background-carousel owl-carousel owl-theme -->

		<?php endif; ?>

		<div class="row w-100 no-gutters">
			<div class="col-md-6">
				<div class="hello-section__content-wrapper">

					<?php $icon = get_field('hello_section_icon'); ?>

					<?php if($icon) : ?>

						<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" class="hello-section__content-wrapper__icon d-block svg" />

					<?php endif; ?>

					<span class="hello-section__content-wrapper__superscription d-block"><?php the_field('hello_section_superscription'); ?></span>
					<h1 class="hello-section__content-wrapper__title"><?php the_title(); ?></h1><!-- /.hello-section__content-wrapper__title -->
					<div class="hello-section__content-wrapper__content content">
						<?php the_field('hello_section_content'); ?>
					</div><!-- /.hello-section__content-wrapper__content content -->
				</div><!-- /.hello-section__content-wrapper -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row w-100 no-gutters -->
	</section><!-- /.hello-section d-flex align-items-end align-items-md-center -->

	<section class="location element-padding-top">
		<div class="row">
			<div class="col-md-6">
				<div class="location__content-wrapper">
					<h2 class="location__content-wrapper__title"><?php the_field('location_title'); ?></h2><!-- /.location__content-wrapper__title -->
					<div class="location__content-wrapper__content content element-small-margin-top">
						<?php the_field('location_content'); ?>
					</div><!-- /.location__content-wrapper__content content element-small-margin-top -->
				</div><!-- /.location__content-wrapper -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->

		<?php $image1 = get_field('location_left_image'); ?>
		<?php $image2 = get_field('location_right_image'); ?>

		<?php if( $image1 && $image2 ): ?>

			<div class="location__photos element-margin-top">
				<div class="row no-gutters">
					<div class="col-md-6">
						<div class="location__photos__image w-100 background-cover itl lazy d-block rellax--no-mobile" data-rellax-speed="0.5" data-rellax-percentage="0.5" style="background-image: url('<?php echo $image1['url']; ?>'); "></div><!-- /.location__photos__image w-100 background-cover itl lazy d-block -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="location__photos__image location__photos__image--second w-100 background-cover itl lazy d-block rellax--no-mobile" data-rellax-speed=".8" data-rellax-percentage="0.5" style="background-image: url('<?php echo $image2['url']; ?>'); "></div><!-- /.location__photos__image location__photos__image--second w-100 background-cover itl lazy d-block -->
					</div><!-- /.col-md-6 -->
				</div><!-- /.row no-gutters -->
			</div><!-- /.location__photos element-margin-top -->

		<?php endif; ?>

		<?php $images = get_field('location_gallery'); ?>
		<?php if( $images ): ?>

			<div id="location-slider" class="location__gallery owl-carousel owl-theme element-margin-top">

				<?php foreach( $images as $image ): ?>

					<a class="location__gallery__image background-cover" style="background-image: url('<?php echo $image['url']; ?>');"></a><!-- /.location__gallery__image background-cover -->

				<?php endforeach; ?>

			</div><!-- /.location__gallery owl-carousel owl-theme element-margin-top -->

		<?php endif; ?>

	</section><!-- /.location element-padding-top -->

	<section id="food" class="food text-center element-paddings">
		<div class="row">
			<div class="col-sm-10 col-md-8 clo-lg-6 mx-auto">
				<div class="food__content-wrapper">
					<h2 class="food__content-wrapper__title"><?php the_field('food_title'); ?></h2><!-- /.food__content-wrapper__title -->
					<div class="food__content-wrapper__content content element-small-margin-top">
						<?php the_field('food_content'); ?>
					</div><!-- /.food__content-wrapper__content content element-small-margin-top -->
				</div><!-- /.food__content-wrapper -->
			</div><!-- /.col-sm-10 col-md-8 clo-lg-6 mx-auto -->
		</div><!-- /.row -->

		<?php if( have_rows('menus') ): ?>

			<div class="row">
				<div class="col-12 col-md-auto mx-md-auto">
					<ul class="food__tabs nav nav-tabs owl-carousel owl-theme element-margin-top" id="FoodTabs" role="tablist">

						<?php $tabCounter = 1; ?>
						<?php while ( have_rows('menus') ) : the_row(); ?>

							<li class="nav-item">
								<a class="nav-link<?php if($tabCounter == 1) {echo ' nav-link--first active';} ?>" id="tab-<?php echo $tabCounter; ?>" data-toggle="tab" href="#menu-<?php echo $tabCounter; ?>" role="tab" aria-controls="menu-<?php echo $tabCounter; ?>" aria-selected="<?php if($tabCounter == 1) { echo 'true'; } else { echo 'false';} ?>"><?php the_sub_field('name'); ?></a>
							</li><!-- /.nav-item -->

							<?php $tabCounter++; ?>
						<?php endwhile; ?>

					</ul><!-- /.food__tabs nav nav-tabs owl-carousel owl-theme element-margin-top -->
				</div><!-- /.col-12 col-md-auto mx-md-auto -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-12">
					<div class="tab-content" id="FoodTabsContent">

						<?php $menuCounter = 1; ?>
						<?php while ( have_rows('menus') ) : the_row(); ?>

							<div class="menus tab-pane fade<?php if($menuCounter == 1) {echo ' show active';} ?>" id="menu-<?php echo $menuCounter; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $menuCounter; ?>">
								<div class="row">

									<?php if( have_rows('menu_item') ): ?>
										<?php while ( have_rows('menu_item') ) : the_row(); ?>

											<div class="col-md-4">
												<div class="single-menu element-margins">
													<h3 class="single-menu__title"><?php the_sub_field('menu_item_title'); ?></h3><!-- /.single-menu__title -->
													<div class="single-menu__content content">
														<?php the_sub_field('menu_item_content'); ?>
													</div><!-- /.single-menu__content content -->
												</div><!-- /.single-menu element-margins -->
											</div><!-- /.col-md-4 -->

										<?php endwhile; ?>
									<?php endif; ?>

								</div><!-- /.row -->
							</div><!-- /.menus tab-pane fade show active -->

							<?php $menuCounter++; ?>
						<?php endwhile; ?>

					</div>
				</div><!-- /.col-12 -->
			</div><!-- /.row -->

		<?php endif; ?>

		<?php $images = get_field('food_gallery'); ?>
		<?php if( $images ): ?>

			<div class="row">
				<div class="col-12">
					<div id="food-gallery" class="food__gallery owl-carousel owl-theme element-margin-top">

						<?php foreach( $images as $image ): ?>

							<a class="food__gallery__image background-cover" style="background-image: url('<?php echo $image['url']; ?>');"></a><!-- /.food__gallery__image background-cover -->

						<?php endforeach; ?>

					</div><!-- /.food__gallery owl-carousel owl-theme element-margin-top -->
				</div><!-- /.col-12 -->
			</div><!-- /.row -->

		<?php endif; ?>

	</section><!-- /.food text-center element-paddings -->

	<section class="activities element-paddings">
		<img src="<?php echo get_template_directory_uri(); ?>/images/pattern.png" alt="pattern" class="activities__pattern itl d-none d-md-block rellax" data-rellax-speed="1"  data-rellax-percentage="0.5" />
		<img src="<?php echo get_template_directory_uri(); ?>/images/pattern.png" alt="pattern" class="activities__pattern itl d-none d-md-block rellax" data-rellax-speed="1"  data-rellax-percentage="0.5" />
		<div class="row">
			<div class="col-12">
				<h2 class="activities__title"><?php the_field('activities_title'); ?></h2><!-- /.activities__title -->
			</div><!-- /.col-12 -->
		</div><!-- /.row -->

		<?php if( have_rows('activites') ): ?>

			<div id="activities-carousel" class="activities-mobile owl-carousel owl-theme d-block d-md-none">

				<?php while ( have_rows('activites') ) : the_row(); ?>
					<?php $image = get_sub_field('activity_image'); ?>

					<div class="single-activity">
						<div class="row no-gutters">
							<div class="col-12">

								<?php if($image): ?>

									<div class="single-activity__image background-cover lazy itl d-block" style="background-image: url('<?php echo $image['url']; ?>');"></div>

								<?php endif; ?>

							</div><!-- /.col-12 -->
							<div class="col-12">

								<?php if( have_rows('activity_content') ): ?>
									<?php while ( have_rows('activity_content') ) : the_row(); ?>

										<div class="single-activity__content-wrapper" data-mh="single-activity-match-height">
											<span class="single-activity__content-wrapper__superscription d-block"><?php the_sub_field('activity_superscription'); ?></span>
											<h2 class="single-activity__content-wrapper__title"><?php the_sub_field('activity_title'); ?></h2><!-- /.single-activity__title -->
											<div class="single-activity__content-wrapper__content element-small-margin-top">
												<?php the_sub_field('activity_group_content'); ?>
											</div><!-- /.single-activity__content-wrapper__content element-small-margin-top -->
										</div><!-- /.single-activity__content-wrapper -->

									<?php endwhile; ?>
								<?php endif; ?>

							</div><!-- /.col-12 -->
						</div><!-- /.row no-gutters -->
					</div><!-- /.single-activity -->

				<?php endwhile; ?>

			</div><!-- /.activities-mobile owl-carousel owl-theme d-block d-md-none -->

			<div class="activities-desktop d-none d-md-block">

				<?php $loopCounter = 1; ?>
				<?php while ( have_rows('activites') ) : the_row(); ?>
					<?php $image = get_sub_field('activity_image'); ?>

					<div class="single-activity">
						<div class="row no-gutters<?php if($loopCounter % 3 == 0) { echo ' align-items-md-end';} ?>">
							<div class="col-md-6<?php if($loopCounter & 1 ) {} else { echo ' order-md-2';} ?>">
								<div class="single-activity__image background-cover lazy itl d-block" style="background-image: url('<?php echo $image['url']; ?>');"></div>
							</div><!-- /.col-md-6 -->
							<div class="col-md-6<?php if($loopCounter & 1 ) {} else { echo ' order-md-1';} ?>">

								<?php if( have_rows('activity_content') ): ?>
									<?php while ( have_rows('activity_content') ) : the_row(); ?>

										<div class="single-activity__content-wrapper rellax--no-mobile" data-rellax-speed=".8"  data-rellax-percentage="0.5">
											<span class="single-activity__content-wrapper__superscription d-block"><?php the_sub_field('activity_superscription'); ?></span>
											<h2 class="single-activity__content-wrapper__title"><?php the_sub_field('activity_title'); ?></h2><!-- /.single-activity__title -->
											<div class="single-activity__content-wrapper__content element-small-margin-top">
												<?php the_sub_field('activity_group_content'); ?>
											</div><!-- /.single-activity__content-wrapper__content element-small-margin-top -->
										</div><!-- /.single-activity__content-wrapper -->

									<?php endwhile; ?>
								<?php endif; ?>

							</div><!-- /.col-md-6 -->
						</div><!-- /.row no-gutters -->
					</div><!-- /.single-activity -->

					<?php $loopCounter++; ?>
				<?php endwhile; ?>

			</div><!-- /.activities-desktop d-none d-md-block -->

		<?php endif; ?>

	</section><!-- /.activities element-paddings -->

	<section class="instructors element-paddings">
		<div class="row">
			<div class="col-12">
				<h2 class="instructors__title"><?php the_field('instructors_title'); ?></h2><!-- /.instructors__title -->
			</div><!-- /.col-12 -->
		</div><!-- /.row -->

		<?php if( have_rows('instructors') ): ?>

			<div id="instructors-slider" class="instructors__gallery owl-carousel owl-theme element-small-margin-top">

				<?php while ( have_rows('instructors') ) : the_row(); ?>
					<?php $image = get_sub_field('instructor_image'); ?>

					<div class="instructors__gallery__item">

						<?php if( $image ) : ?>

							<div class="instructors__gallery__item__image background-cover" style="background-image: url('<?php echo $image['url']; ?>');"></div><!-- /.instructors__gallery__item__image background-cover -->

						<?php endif; ?>

						<h3 class="instructors__gallery__item__title element-small-margin-top"><?php the_sub_field('instructor_name'); ?></h3><!-- /.instructors__gallery__item__title element-small-margin-top -->
						<div class="instructors__gallery__item__content content">
							<?php the_sub_field('instructor_content'); ?>
						</div><!-- /.instructors__gallery__item__content content -->
					</div><!-- /.instructors__gallery__item -->

				<?php endwhile; ?>

			</div><!-- /.instructors__gallery owl-carousel owl-theme element-small-margin-top -->

		<?php endif; ?>

	</section><!-- /.instructors element-paddings -->

	<section id="booking" class="booking element-margins">
		<div class="row">
			<div class="col-md-6">
				<span class="booking__superscription d-block"><?php the_field('booking_superscription'); ?></span>
				<h2 class="booking__title"><?php the_field('booking_title'); ?></h2><!-- /.booking__title -->
				<div class="booking__content content">
					<?php the_field('booking_content'); ?>
				</div><!-- /.booking__content content -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->

		<?php if( have_rows('prices') ): ?>

			<div class="prices">
				<div class="row">

					<?php $priceCounter = 1; ?>
					<?php while ( have_rows('prices') ) : the_row(); ?>

						<div class="col-md-4">
							<div class="single-price element-margin-top">
								<h3 class="single-price__title"><?php the_sub_field('price_title'); ?></h3><!-- /.single-price__title -->
								<span class="single-price__price d-block">Price: $<?php the_sub_field('price_price'); ?></span>
								<div class="single-price__content content">
									<?php the_sub_field('price_content'); ?>
								</div><!-- /.single-price__content content -->

								<?php if( get_sub_field('upgrade_collapse') ): ?>
									<?php if( have_rows('upgrade') ): ?>

										<div class="single-price__buy" id="accordion-<?php echo $priceCounter; ?>" role="tablist">
											<div class="card">
												<div class="card-header" role="tab" id="heading-<?php echo $priceCounter; ?>">
													<a class="card-header__link" data-toggle="collapse" href="#collapse-<?php echo $priceCounter; ?>" role="button" aria-expanded="false" aria-controls="collapse-<?php echo $priceCounter; ?>">Reserve your spot</a><!-- /.card-header__link -->
												</div><!-- /.card-header -->
												<div id="collapse-<?php echo $priceCounter; ?>" class="collapse" role="tabpanel" aria-labelledby="heading-<?php echo $priceCounter; ?>" data-parent="#accordion-<?php echo $priceCounter; ?>">
													<div class="card-body">

														<?php while ( have_rows('upgrade') ) : the_row(); ?>

															<h4 class="card-body__title"><?php the_sub_field('upgrade_title'); ?></h4><!-- /.card-body__title -->
															<span class="card-body__upgrade d-block">+ $<?php the_sub_field('upgrade_price'); ?></span>
															<div class="card-body__content content">
																<?php the_sub_field('upgrade_content'); ?>
															</div><!-- /.card-body__content content -->

															<!-- <div class="card-body__checkboxes element-small-margin-top">
																<div class="row no-gutters">
																	<div class="col col-auto">
																		<input type="checkbox" class="upgradeYes" name="Yes" required >
																    	<label for="upgradeYes">Yes</label>
																	</div>
																	<div class="col col-auto">
																		<input type="checkbox" name="No" class="input-no" required >
																    	<label for="upgradeNo" class="label-no">No</label>
																	</div>
																</div>
															</div> -->

														<?php endwhile; ?>

														<div class="card-body__form--no-upgrade">
															<?php echo do_shortcode( get_sub_field('form_no-upgrade') ); ?>
														</div><!-- /.card-body__form--no-upgrade -->

														<!-- <div class="card-body__form--upgrade">
															<?php //echo do_shortcode( get_sub_field('form_upgrade') ); ?>
														</div> -->

														<?php if(get_sub_field('form_only_deposit')): ?>
															<div class="card-body__form--deposit">
																<?php echo do_shortcode( get_sub_field('form_only_deposit') ); ?>
															</div><!-- /.card-body__form--deposit -->
														<?php endif; ?>

														<!-- <button type="button" class="card-body__pay card-body__pay--disabled" data-open-pay-modal>Pay</button> -->
													</div><!-- /.card-body -->
												</div><!-- /.collapse -->
											</div><!-- /.card -->
										</div><!-- /.single-price__buy -->

									<?php endif; ?>
								<?php else: ?>

									<div class="single-price__buy-now">
										<?php echo do_shortcode( get_sub_field('form_no-upgrade') ); ?>
									</div><!-- /.single-price__buy-now -->

								<?php endif; ?>

							</div><!-- /.single-price element-margin-top -->
						</div><!-- /.col-md-4 -->

						<?php $priceCounter++; ?>
					<?php endwhile; ?>

				</div><!-- /.row -->
			</div><!-- /.prices -->

		<?php endif; ?>

	</section><!-- /.booking element-margins -->

</main><!-- /#main.retreats-second-stage-template -->

<?php get_footer(); ?>