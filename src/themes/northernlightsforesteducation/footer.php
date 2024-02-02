<?php
$involved = get_field('get_involved', 'options');
//acf fields data
// structure > media (group)
$media = $involved['media'];
// structure > text (group)
$text = $involved['text'];
// structure > text > button (group)
$buttons = $involved['text']['buttons']['button'];

$image = $media['image'];
$alignment = $media['alignment'];
$above_header = $text['above_header'];
$header = $text['header'];
$text = $text['content'];
?>
<section class="text-media-blocked py-2" id="final">
    <div class="container">
        <div class="row align-items-center g-lg-3">
            <div class="col-lg-6">
                <?php if (!empty($above_header)): ?>
                    <h6 class="d-block"><?php echo $above_header; ?></h6>
                <?php endif; ?>
                <h2 class="h1">
                    <span><?php echo $header; ?></span>
                </h2>
                <div class="mb-175">
                    <?php echo $text; ?>
                </div><!-- mb -->
                <?php if (!empty($buttons)): ?>
                    <div class="column-content--button-set mb-1 mb-md-0">
                        <?php foreach ($buttons as $button) :
                            $target = $button['link']['target'] ?>
                            <a href="<?php echo esc_url($button['link']['url']); ?>"
                               class="btn <?php echo $button['style']; ?> mb-1"
                                <?php if (!empty($target)): ?>
                                    target="<?php echo $target ?>"
                                <?php endif; ?>
                            >
                                <?php echo $button['link']['title']; ?>
                            </a>
                        <?php endforeach; ?>
                    </div><!-- column-content--button-set -->
                <?php endif; ?>
            </div><!-- col -->
            <div class="col-lg-6 order-lg-<?php echo $alignment; ?> h-100">
                <img src="<?php echo esc_url($image['url']); ?>"
                     class="mb-150 mb-lg-0 h-100 img-fluid card-img-top rounded border border-dark object-fit-cover bg-white"
                     loading="lazy"
                     alt="<?php echo $image['alt']; ?>"
                >
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- text-media-blocked -->


<footer>
    <?php
    $newsletter = get_field('newsletter', 'options');
    $blurb = $newsletter['blurb'];
    $form_id = $newsletter['form_id'];
    ?>

    <section class="newsletter-cta py-1 bg-green <?php echo $newsletter['show_hide']; ?>">
        <div class="container">
            <div class="row justify-content-lg-around align-items-center">
                <div class="col-lg-4">
                    <h2 class="text-white"><?php echo $newsletter['title']; ?></h2>
                    <?php if ($blurb): ?>
                        <p class="text-white mb-75 mb-lg-50"><?php echo $blurb; ?></p>
                    <?php endif; ?>
                </div><!-- col -->
                <div class="col-lg-6">
                    <?php echo do_shortcode('[gravityform id="' . $form_id . '" title="false" ajax="true"]'); ?>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- newsletter-cta -->
    <div id="contact"></div>
    <?php
    $footer_content = get_field('footer_contact_section', 'options');
    $background_image = $footer_content['background_image'];
    $contact_form_id = $footer_content['footer_form_id'];
    ?>

    <section class="p-0"
        style="background-image: url( <?php echo $background_image['url']; ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <section class="footer-cta pt-3 pb-4 pt-xl-4">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-5">
                        <div class="pt-1 pt-lg-2 text-white">
                            <h2><?php echo $footer_content['title']; ?></h2>
                            <?php echo $footer_content['footer_content']; ?>
                            <div class="text-white">
                                Phone:
                                <a href="tel:<?php echo strip_tel(get_field('phone_number', 'options')); ?>"
                                   class="fw-semibold text-white">
                                    <?php echo get_field('phone_number', 'options'); ?>
                                </a>
                                <br>
                                Email:
                                <a href="mailto:<?php echo get_field('email', 'options'); ?>"
                                   class="fw-semibold text-white"><?php echo get_field('email', 'options'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form-wrapper p-1 p-md-150 px-xxl-4 py-lg-2 text-white">
                            <?php echo do_shortcode('[gravityform id="' . $contact_form_id . '" title="true" ajax="true"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer-details text-center text-md-start py-1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="footer-logo mx-auto mx-lg-start mb-150 mb-lg-0">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/images/logo-white.svg"
                                     alt="<?php bloginfo('name'); ?> - Logo"
                                     class="img-fluid mb-250">
                                <span class="sr-only"><?php bloginfo('name'); ?></span>
                            </a>
                            <div class="w-100 text-center text-white">
                                <p class="small">Website sponsored by <a href="https://friaa.ab.ca/" class="text-white">FRIAA</a></p>
                            </div>
                        </div><!-- nav-logo -->
                    </div><!-- col -->
                    <div class="col-md-5 col-lg-3">
                        <div class="text-white">
                            <span class="fw-bold">Contact us</span><br>
                            <?php
                            $address = get_field('address', 'options');
                            if ($address) {
                                echo $address . '<br>';
                            }
                            ?>
                            Phone:
                            <a href="tel:<?php echo strip_tel(get_field('phone_number', 'options')); ?>"
                               class="fw-semibold text-white">
                                <?php echo get_field('phone_number', 'options'); ?>
                            </a>
                            <br>
                            Email:
                            <a href="mailto:<?php echo get_field('email', 'options'); ?>"
                               class="fw-semibold text-white"><?php echo get_field('email', 'options'); ?>
                            </a>
                        </div>
                    </div><!-- col -->
                    <div class="col-md-4 col-lg-3">
                        <p class="text-white mb-250"><span class="fw-bold">Quick Links</span></p>
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
                    <div class="col-md-3 col-lg-2">
                        <?php if (get_field('social_links', 'options')): ?>
                        <p class="text-white small-0 mb-50">Follow us</p>
                            <div class="social-links px-250">
                                <?php while (have_rows('social_links', 'options')): the_row(); ?>
                                    <a class="text-decoration-none social-link text-white pt-250 ps-0 pe-250 pb-250 my-0"
                                       style="margin-right: 4px" target="_blank" href="<?php the_sub_field('url'); ?>">
                                        <i class="<?php the_sub_field('icon_class'); ?>" style="font-size: 28px;">
                                            <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                        </i>
                                    </a>
                                <?php endwhile; ?>
                            </div><!-- social-links -->
                        <?php endif; ?>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- footer-details -->
    </section>

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
