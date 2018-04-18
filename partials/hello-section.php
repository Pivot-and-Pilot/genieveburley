<?php $background = get_field('hello_section_background'); ?>
<?php $icon = get_field('hello_section_icon'); ?>

<section class="hello-section d-flex align-items-end align-items-md-center">
	<div class="hello-section__background background-cover itl parallax-window" data-parallax="scroll" data-image-src="<?php echo $background['url']; ?>"></div><!-- /.hello-section__background background-cover itl -->
	<div class="row no-gutters w-100">
		<div class="col-md-6">
			<div class="hello-section__content-wrapper">
				<?php if($icon): ?>
					 <object id="hello-icon" type="image/svg+xml" data="<?php echo $icon['url']; ?>" class="hello-section__content-wrapper__icon"></object>
				<?php endif; ?>
				<?php if( get_field('hello_section_superscription')): ?><span class="hello-section__content-wrapper__superscription d-block" data-aos="fade-up"><?php the_field('hello_section_superscription'); ?></span><?php endif; ?>
				<h1 class="hello-section__content-wrapper__title" data-aos="fade-up"><?php the_title(); ?></h1><!-- /.hello-section__content-wrapper__title -->
				<div class="hello-section__content-wrapper__content content" data-aos="fade-up">
					<?php the_field('hello_section_content'); ?>
				</div><!-- /.hello-section__content-wrapper__content content -->
			</div><!-- /.hello-section__content-wrapper -->
		</div><!-- /.col-md-6 -->
	</div><!-- /.row no-gutters w-100 -->
</section><!-- /.hello-section d-flex align-items-end align-items-md-center -->


