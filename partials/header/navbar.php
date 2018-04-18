<nav class="navbar">
    <h2 class="hide">Main navigation</h2>
    <div class="row align-items-center justify-content-between w-100 no-gutters">
        <div class="col col-auto">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
                <img data-src="<?php echo get_template_directory_uri(); ?>/images/logo__genieve-burley.svg" src="<?php echo get_template_directory_uri(); ?>/images/img__empty.png" alt="<?php echo get_bloginfo('name'); ?>" class="navbar-brand__logo lazy itl" />
            </a>
        </div><!-- /.col col-auto -->
        <div class="col col-auto">
            <div class="row align-items-end no-gutters">
                <div class="col col-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php the_permalink(5); ?>" class="nav-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon__chiro.svg" alt="Instagram" class="nav-link__icon itl mx-auto" />
                                <span class="nav-link__label">Chiro</span>
                            </a>
                        </li><!-- /.nav-item -->
                        <li class="nav-item">
                            <a href="<?php the_permalink(11); ?>" class="nav-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon__classes.svg" alt="Instagram" class="nav-link__icon itl mx-auto" />
                                <span class="nav-link__label">Classes</span>
                            </a>
                        </li><!-- /.nav-item -->
                        <li class="nav-item">
                            <a href="<?php the_permalink(14); ?>" class="nav-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon__retreats.svg" alt="Instagram" class="nav-link__icon itl mx-auto" />
                                <span class="nav-link__label">Retreats</span>
                            </a>
                        </li><!-- /.nav-item -->
                        <li class="nav-item">
                            <a href="<?php the_permalink(104); ?>" class="nav-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/About-icon.svg" alt="Instagram" class="nav-link__icon itl mx-auto" />
                                <span class="nav-link__label">About</span>
                            </a>
                        </li><!-- /.nav-item -->
                    </ul><!-- /.navbar-nav -->
                    <button id="open-mobile-navigation" class="hamburger" type="button">
                        <span class="hamburger__inner"></span>
                    </button>
                </div><!-- /.col col-auto -->
                <div class="col col-auto">
                    <div class="navbar-buttons">
                        <a href="https://bechiro.janeapp.com/#/staff_member/41" target="_blank" class="navbar-buttons__button genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color">Book an Appointment</a>
                        <a href="javascript:" data-open-contact-modal class="navbar-buttons__button navbar-buttons__button--second genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color">Contact me</a>
                    </div><!-- /.navbar-buttons -->
                </div><!-- /.col col-auto -->
            </div><!-- /.row align-items-end no-gutters -->
        </div><!-- /.col col-auto -->
    </div><!-- /.row align-items-center justify-content-between w-100 no-gutters -->
</nav><!-- /.navbar -->

<div class="scrolled-navbar">
    <div class="row align-items-center justify-content-between w-100 no-gutters">
        <div class="col col-auto">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
                <img data-src="<?php echo get_template_directory_uri(); ?>/images/logo__genieve-burley--short--secondary-color.svg" src="<?php echo get_template_directory_uri(); ?>/images/img__empty.png" alt="<?php echo get_bloginfo('name'); ?>" class="navbar-brand__logo lazy" />
            </a>
        </div><!-- /.col col-auto -->
        <div class="col col-auto">
            <div class="row align-items-center no-gutters">
                <div class="col col-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php the_permalink(5); ?>" class="nav-link">Chiro</a>
                        </li><!-- /.nav-item -->
                        <li class="nav-item">
                            <a href="<?php the_permalink(11); ?>" class="nav-link">Classes</a>
                        </li><!-- /.nav-item -->
                        <li class="nav-item">
                            <a href="<?php the_permalink(14); ?>" class="nav-link">Retreats</a>
                        </li><!-- /.nav-item -->
                        <li class="nav-item">
                            <a href="<?php the_permalink(104); ?>" class="nav-link">About</a>
                        </li><!-- /.nav-item -->
                    </ul><!-- /.navbar-nav -->
                </div><!-- /.col col-auto -->
                <div class="col col-auto">
                    <div class="navbar-buttons d-flex align-items-center">
                        <a href="javascript:" data-open-contact-modal class="navbar-buttons__button genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color">Contact me</a>
                        <a href="https://bechiro.janeapp.com/#/staff_member/41" target="_blank" class="navbar-buttons__button navbar-buttons__button--second genieve-burley-button genieve-burley-button__outline genieve-burley-button__outline--primary-color">Book an Appointment</a>
                    </div><!-- /.navbar-buttons d-flex align-items-center -->
                </div><!-- /.col col-auto -->
            </div><!-- /.row align-items-center no-gutters -->
        </div><!-- /.col col-auto -->
    </div><!-- /.row align-items-center justify-content-between w-100 no-gutters -->
</div><!-- /.scrolled-navbar -->