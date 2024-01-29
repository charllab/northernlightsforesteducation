<?php get_header(); ?>
    <main>

        <div class="container py-3">
            <div class="owl-carousel owl-carousel-logos owl-theme">
                <div class="item position-relative">
                    <a href="#" class="d-block w-100 h-100 position-relative z-index-100">
                        <img src="https://picsum.photos/1500/900" class="img-fluid object-fit-contain" alt=""/>
                        <div class="position-absolute h-100 block__tint-grey"></div>
                    </a>
                </div><!-- item-->
            </div><!-- owl -->
        </div><!-- container -->

        <div class="container py-3">
            <div class="owl-carousel owl-carousel-content owl-theme">
                <div class="item">
                    <img src="https://picsum.photos/1500/900" class="img-fluid" alt=""/>
                </div><!-- item-->
            </div><!-- owl -->
        </div><!-- container -->

        <?php get_template_part('partials/hero/page-hero'); ?>
        <?php get_template_part('partials/body/flexible-content'); ?>
    </main>
<?php get_footer();
