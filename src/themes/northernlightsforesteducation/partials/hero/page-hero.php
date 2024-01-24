<?php
$hero = get_field('header');
if($hero) :
    $heading = $hero['heading'];
    $blurb = $hero['heading'];
    $buttons = $hero['buttons_outline']['button'];
    $image = $hero['banner_image'];
    ?>
    <section class="content-hero vh-100 pb-2 pt-0 position-relative" style="background: url(<?php echo esc_url($image['url']); ?>); background-repeat: no-repeat; background-size: cover; background-position: bottom center;">
        <div class="snowy-hills"></div><!-- snowy-hills -->
        <div class="container h-100 d-flex align-items-center position-relative">
            <div class="row">
                <div class="col-xl-7">
                    <h1 class="text-white"><?php echo $heading; ?></h1>
                    <h2 class="text-white fw-normal"><?php echo $blurb; ?></h2>
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
            </div><!-- row -->

            <div class="position-absolute bottom-0 start-50 translate-middle-x">
                <a href="#start"
                   class="text-decoration-none d-flex flex-column align-items-center text-white pb-25 pb-xs-5">
                    <span>Scroll</span>
                    <img src="<?php bloginfo('template_url'); ?>/images/scroll-bottom-icon.svg"
                         alt="<?php bloginfo('name'); ?> - Logo"
                         class="img-fluid scroll-icon">
                    <span class="sr-only"><?php bloginfo('name'); ?></span>
                </a>
            </div><!-- position-absolute -->
        </div><!-- container -->
    </section><!-- content-hero -->

    <div id="start"></div>
<?php endif;?>
