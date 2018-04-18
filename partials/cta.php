<?php $background = get_field('cta_background', 'option'); ?>

<section class="cta">
	<div class="cta__background background-cover itl parallax-window" data-parallax="scroll" data-bleed="100" data-image-src="<?php echo $background['url']; ?>"></div><!-- /.cta__background background-cover itl -->
	<div class="row no-gutters">
		<div class="col-md-10 offset-md-1">

			<?php $post_objects = get_field('cta_testimonials', 'option'); ?>
			<?php if( $post_objects ): ?>

				<div id="cta-carousel" class="cta__carousel owl-carousel owl-theme">

					<?php foreach( $post_objects as $post): ?>
					    <?php setup_postdata($post); ?>

						<div class="cta__testimonials cta__testimonials--unblur">"<?php the_field('blockquote'); ?>"</div>

					<?php endforeach; ?>

				</div><!-- /.cta__carousel owl-carousel owl-theme -->

				<!-- <blockquote class="cta__testimonials cta__testimonials--blur"></blockquote> -->

				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

		</div><!-- /.col-md-10 offset-md-1 -->
	</div><!-- /.row no-gutters -->
	<div class="row no-gutters">
		<div class="col-md-8 offset-md-2">
			<div class="cta__content content">
				<?php the_field('cta_content', 'option'); ?>
			</div><!-- /.cta__content content -->
			<h2 class="cta__title"><?php the_field('cta_title', 'option'); ?></h2><!-- /.cta__title -->

			<?php if( have_rows('cta_button', 'option') ): ?>
				<?php while ( have_rows('cta_button', 'option') ) : the_row(); ?>

					<a href="<?php the_sub_field('cta_link'); ?>" target="_blank" class="genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--white"><?php the_sub_field('cta_label'); ?></a>

				<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- /.col-md-8 offset-md-2 -->
	</div><!-- /.row no-gutters -->
</section><!-- /.cta -->