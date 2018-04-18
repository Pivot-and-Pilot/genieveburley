<?php get_header(); ?>

<main id="main" class="standard-page-template" tabindex="-1">

	<?php get_template_part('partials/hello-section'); ?>

	<article class="standard-page element-paddings">
		<div class="container">
			<div class="row">
				<div class="col-md-10 mx-auto">
					<div class="standard-page__content content">
						<?php the_content(); ?>
					</div><!-- /.standard-page__content content -->
				</div><!-- /.col-md-10 mx-auto -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</article><!-- /.standard-page element-paddings -->

	<?php get_template_part('partials/cta'); ?>

</main><!-- /#main.standard-page-template -->

<?php get_footer(); ?>