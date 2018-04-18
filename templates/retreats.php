<?php
    /*
        Template Name: Retreats
    */
?>

<?php get_header(); ?>

<main id="main" class="retreats-template" tabindex="-1">

	<?php get_template_part('partials/hello-section'); ?>

	<?php
		$args = array(
		    'post_type'      => 'page',
		    'posts_per_page' => -1,
		    'post_parent'    => $post->ID,
		    'order'          => 'ASC',
		    'orderby'        => 'menu_order'
		 );
	?>

	<?php $parent = new WP_Query( $args ); ?>

	<?php if ( $parent->have_posts() ) : ?>

		<div class="retreats">

			<?php $loopCounter = 0; ?>
			<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

				<div class="single-retreat">
					<div class="row">

						<?php if ( has_post_thumbnail() ): ?>

							<div class="col-md-6<?php if($loopCounter & 1 ) { echo ' order-md-2';} ?>">
								<a href="<?php the_permalink(); ?>" class="single-retreat__image-link">
									<span class="single-retreat__image-link__image background-cover lazy itl d-block h-100" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></span>
								</a>
							</div><!-- /.col-md-6 -->

						<?php endif; ?>

						<div class="col-md-6<?php if($loopCounter & 1 ) { echo ' order-md-1';} ?>">
							<div class="single-retreat__content-wrapper rellax--no-mobile" data-rellax-speed=".8">
								<span class="single-retreat__content-wrapper__superscription d-block"><?php the_field('hello_section_superscription'); ?></span>
								<h2 class="single-retreat__content-wrapper__title"><?php the_title(); ?></h2><!-- /.single-retreat__title -->
								<div class="single-retreat__content-wrapper__content element-small-margin-top">
									<?php the_field('hello_section_content'); ?>
								</div><!-- /.single-retreat__content-wrapper__content element-small-margin-top -->
								<a href="<?php the_permalink(); ?>" class="genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color">Learn more</a>
							</div><!-- /.single-retreat__content-wrapper -->
						</div><!-- /.col-md-6 -->
					</div><!-- /.row -->
				</div><!-- /.single-retreat -->

				<?php $loopCounter++; ?>
			<?php endwhile; ?>

		</div><!-- /.retreats -->

	<?php endif; wp_reset_postdata(); ?>

</main><!-- /#main.retreats-template -->

<?php get_footer(); ?>