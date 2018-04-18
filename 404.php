<?php get_header(); ?>

<main id="main" class="error-page-template" tabindex="-1">

    <article class="error-page element-paddings">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="error-page__content content text-center">
                        <h1>Page Not Found</h1>
                        <p>Sorry, but the page you were trying to view does not exist.</p>
                    </div><!-- /.error-page__content content text-center -->
                </div><!-- /.col-md-10 mx-auto -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </article><!-- /.error-page element-paddings -->

    <?php get_template_part('partials/cta'); ?>

</main><!-- /#main.error-page-template -->

<?php get_footer(); ?>

