<div id="mobile-navigation" class="mobile-navigation">
    <button id="close-mobile-navigation" class="mobile-navigation__close" type="button">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon__close--secondary-color.svg" alt="" class="mobile-navigation__close__icon" />
    </button>
    <ul class="mobile-navigation__list">
        <li>
            <a class="mobile-navigation__list__link" href="<?php the_permalink(5); ?>">Chiropractic</a>
        </li>
        <li>
            <a class="mobile-navigation__list__link" href="<?php the_permalink(11); ?>">Classes</a>
        </li>
        <li>
            <a class="mobile-navigation__list__link" href="<?php the_permalink(14); ?>">Retreats</a>
        </li>
        <li>
            <a class="mobile-navigation__list__link" href="<?php the_permalink(104); ?>">About</a>
        </li>
        <li>
            <a class="genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color" data-open-book-an-appointment href="javascript:">Book An Appointment</a>
        </li>
        <li>
            <a class="genieve-burley-button genieve-burley-button--second genieve-burley-button__outline genieve-burley-button__outline--primary-color" data-open-contact-modal href="javascript:" >Contact me</a>
        </li>
    </ul><!-- /.mobile-navigation__list -->
</div><!-- /#mobile-navigation.mobile-navigation -->


<div id="pay-modal" class="pay-modal">
    <button id="close-pay-modal" class="pay-modal__close" type="button">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon__close--narrow.svg" alt="" class="pay-modal__close__icon" />
    </button>

    <div class="pay-modal__body d-flex w-100 h-100 align-items-center justify-content-center">
        <div class="pay-box d-inline-block">
            <div class="pay-box__content-wrapper text-center">
                <span class="pay-box__content-wrapper__title">Genieve Burley</span>
                <a href="mailto:<?php the_field('email', 'option'); ?>" class="pay-box__content-wrapper__email"><?php the_field('email', 'option'); ?></a>
                <?php echo do_shortcode( '[simpay id="299"]' ); ?>
            </div><!-- /.pay-box__content-wrapper text-center -->
        </div><!-- /.pay-box d-inline-block -->
    </div><!-- /.pay-modal__body d-flex w-100 h-100 align-items-center justify-content-center -->
</div><!-- /#pay-modal.mobile-navigation -->


<div id="contact-modal" class="contact-modal">
    <div class="row justify-content-between">
        <div class="col col-auto">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="contact-modal__logo">
                <img data-src="<?php echo get_template_directory_uri(); ?>/images/logo__genieve-burley--short--secondary-color.svg" src="<?php echo get_template_directory_uri(); ?>/images/img__empty.png" alt="<?php echo get_bloginfo('name'); ?>" class="navbar-brand__logo lazy" />
            </a>
        </div><!-- /.col col-auto -->
        <div class="col col-auto">
            <button id="close-contact-modal" class="contact-modal__close" type="button">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon__close--narrow.svg" alt="" class="contact-modal__close__icon" />
            </button>
        </div><!-- /.col col-auto -->
    </div><!-- /.row justify-content-between -->


    <div class="contact-modal__body d-md-flex w-100 h-100 align-items-center justify-content-center">
        <div class="row no-gutters w-100">
            <div class="col-md-6">
                <div class="contact-modal__body__form">
                    <?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
                </div><!-- /.contact-modal__body__form -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <?php $location = get_field('location', 'option'); ?>

                <?php if( !empty($location) ): ?>

                    <div class="acf-map">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>

                <?php endif; ?>

                <div class="contact-modal__body__content content text-md-right">
                    <h3><em>Don't like forms?</em></h3>
                    <span class="email">Send an email <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></span>
                    <span class="call">Or give us a call: <a href="tel:<?php echo filter_var(get_field('phone', 'option'), FILTER_SANITIZE_NUMBER_INT); ?>"><?php the_field('phone', 'option'); ?></a></span>
                    <address class="contact-modal__body__content__address element-small-margin-top">
                        <?php the_field('address', 'option'); ?>
                    </address><!-- /.contact-modal__body__content__address element-small-margin-top -->
                </div><!-- /.contact-modal__body__content content text-md-right -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row no-gutters w-100 -->
    </div><!-- /.contact-modal__body d-md-flex w-100 h-100 align-items-center justify-content-center -->
</div><!-- /#contact-modal.mobile-navigation -->

<div id="preloader" class="preloader d-flex flex-wrap align-items-center justify-content-center">
    <span class="txt-perc"></span>
    <div class="preloader-wrapper">
        <object id="preloader-svg" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/images/genieve-burley-heart-emblem.svg" class="preloader__logo d-block<?php if(is_page_template('templates/homepage.php')) { echo ' preloader__logo--small';} ?>"></object>

        <?php if(is_page_template('templates/homepage.php')): ?>

            <div class="preloader__content-wrapper text-center element-small-margin-top">
                <span class="preloader__content-wrapper__title">
                    <?php the_field('preloader_content', 'option'); ?>
                </span>
                <span class="preloader__content-wrapper__subtitle element-small-margin-top d-inline-block" data-aos="fade-up"><?php the_field('preloader_description', 'option'); ?></span>
            </div><!-- /.preloader__content-wrapper text-center element-small-margin-top -->

        <?php endif; ?>

    </div><!-- /.preloader-wrapper -->
</div><!-- /#preloader.preloader d-flex align-items-center justify-content-center -->