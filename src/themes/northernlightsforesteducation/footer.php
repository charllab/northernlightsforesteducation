<footer>
    <section class="newsletter-cta bg-primary-subtle">
        <div class="container py-1">
            <div class="row justify-content-lg-around align-items-center">
                <div class="col-lg-4">
                    <h2>Our Newsletters</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et</p>
                </div><!-- col -->
                <div class="col-lg-5">
                    <p class="mb-0">Embed Gravity Form here</p>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- newsletter-cta -->

    <section class="footer-cta bg-dark pt-3 pb-4 pt-xl-4 pb-xl-7">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-5">
                    <h2 class="text-white">Have any question?</h2>
                    <p class="fst-italic text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                    <p class="text-white"><b>Phone:</b> (000) - 000 - 000<br>
                        <b>Email:</b> info@nlfes.com</p>
                </div>
                <div class="col-md-6">
                    <p class="text-white">Gravity forms goes here</p>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-details bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo-white.svg"
                                 alt="<?php bloginfo('name'); ?> - Logo"
                                 class="img-fluid">
                            <span class="sr-only"><?php bloginfo('name'); ?></span>
                        </a>
                    </div><!-- nav-logo -->
                </div><!-- col -->
                <div class="col-md-3">
                    <p class="text-white">
                        <b>Contact us</b><br>
                        PO BOX 123 Address<br>
                        City, AL, V2P 6J4<br>
                        Telephone: 250.592.3213<br>
                        Toll Free: 800.665.3899<br>
                        info@nlfes.com<br>
                    </p>
                </div><!-- col -->
                <div class="col-md-3">
                    <p class="text-white"><b>Quick Links</b></p>
                    <?php wp_nav_menu([
                        'theme_location' => 'secondary',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'navbar-nav',
                        'fallback_cb' => '',
                        'menu_id' => '',
                        'walker' => new bootstrap_5_wp_nav_menu_walker(),
                    ]); ?>
                </div><!-- col -->
                <div class="col-md-3">
                    <p class="text-white small-0">Follow us</p>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- footer-details -->

    <section class="footer-bar pt-2 pb-1 pt-lg-1 pb-lg-0 bg-secondary">
        <div class="container">
            <div class="row text-white">
                <div class="col d-lg-flex justify-content-center text-center px-150">
                    <p class="small-2 fw-semibold pe-lg-150 mb-50">
                        &copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?></p>
                    <p class="small-1 pe-lg-150 mb-50"><a
                            href="<?php echo esc_url(home_url('/terms-and-conditions')); ?>" class="text-white">Terms &
                            Conditions</a></p>
                    <p class="small-1 pe-lg-150">Website by <a href="https://sproing.ca" target="_blank"
                                                               class="text-white">Sproing&nbsp;Creative</a>
                    </p>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- footer-bar -->
</footer>

<?php wp_footer(); ?>

</body>

</html>
