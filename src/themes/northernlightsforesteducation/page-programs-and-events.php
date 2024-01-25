<?php
/**
 *
 * Template Name: Programs and Events
 *
 **/
get_header(); ?>
<main>
    <?php get_template_part('partials/hero/page-hero'); ?>

    <?php get_template_part('partials/body/flexible-content'); ?>


    <?php
    $args = array(
        'post_type' => 'program',
        'posts_per_page' => -1, // Set to a specific number if you want to limit the number of products
    );

    $program_query = new WP_Query($args);

    if ($program_query->have_posts()) : ?>
        <section class="columned-white-media-and-text bg-green pt-2">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-xl-3 g-lg-2">
                    <?php while ($program_query->have_posts()) : $program_query->the_post();
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the featured image URL
                        if (!$featured_img_url) {
                            $logo_url = get_template_directory_uri() . '/images/placeholder-440by332.png'; // Get the logo URL
                            $featured_img_url = $logo_url; // Set the logo URL as the default image
                        }
                        ?>
                        <div class="col">
                            <div class="card h-100 bg-transparent border border-0 rounded-0 mb-2">
                                <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo $featured_img_url; ?>"
                                     class="mb-150 img-fluid rounded-0 card-img-top object-fit-cover bg-white"
                                     alt="<?php the_title_attribute(); ?>">
                                </a>
                                <div class="card-body p-0 pe-lg-1">
                                    <h5 class="h4 card-title text-white"><?php the_title(); ?></h5>

                                    <div class="card-text text-white small-2">
                                        <?php the_excerpt(); ?>
                                    </div><!-- card-text-->
                                </div><!-- card-body-->
                                <div class="card-footer border-0 text-start bg-transparent p-0">
                                    <a href="<?php echo get_permalink(); ?>" class="btn btn-outline-light mb-1">Read More</a>
                                </div><!-- card-footer -->
                            </div><!-- card -->
                        </div><!-- col -->
                    <?php
                    endwhile; ?>
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- columned-white-media-and-text-on-green -->
    <?php else :
        echo '<h3>Sorry there are currently no programs running.</h3>';

        ?>
    <?php endif;
    wp_reset_postdata();
    ?>

    <section class="snowy-hills-on-green bg-green position-relative mb-2">
        <div class="snowy-hills"></div><!-- green-hills -->
    </section>

    <?php
    $event_intro = get_field('events_intro');
    //dump($event_intro);
    // structure > text (group)
    $text = $event_intro['text'];
    // structure > text > button (group)
    $buttons = $text['buttons']['button'];
    $above_header = $text['above_header'];
    $header = $text['header'];
    $text = $text['content'];
    ?>
    <section class="content-wide py-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="h1">
                        <?php if (!empty($above_header)): ?>
                            <span class="h6 d-block"><?php echo $above_header; ?></span>
                        <?php endif; ?>
                        <?php echo $header; ?>
                    </h2>
                    <div class="lead mb-175">
                        <?php echo $text; ?>
                    </div>
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
        </div><!-- container -->
    </section><!-- content-wide -->

    <?php
    $args = array(
        'post_type' => 'event',
        'posts_per_page' => -1, // Set to a specific number if you want to limit the number of products
    );

    $event_query = new WP_Query($args);

    if ($event_query->have_posts()) : ?>

        <?php while ($event_query->have_posts()) : $event_query->the_post();
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the featured image URL
            if (!$featured_img_url) {
                $logo_url = get_template_directory_uri() . '/images/placeholder-440by332.png'; // Get the logo URL
                $featured_img_url = $logo_url; // Set the logo URL as the default image
            }
            ?>
            <section class="custom-post-blocks">
                <div class="container">
                    <div class="card mb-2 position-relative border-0 bg-transparent">
                        <div class="row g-md-2 align-items-center">
                            <div class="col-md-6 col-lg-5">
                                <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo $featured_img_url; ?>"
                                     class="h-100 mb-1 rounded object-fit-cover bg-white"
                                     alt="<?php the_title_attribute(); ?>">
                                </a>
                            </div><!-- col -->
                            <div class="col-md-6 col-lg-7 pb-50">
                                <div class="card-body">
                                    <h2 class="h3 card-title"><?php the_title(); ?></h2>
                                    <div class="card-text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div><!-- card body -->
                            </div><!-- col -->
                        </div><!-- row-->
                        <div class="position-absolute bottom-0 end-0">
                            <p class="card-text text-end pe-150 fw-bold">
                                <a href="<?php echo get_permalink(); ?>">
                                    Show details <span class="ms-250"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor"
                                            class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg>
                        </span>
                                </a>
                            </p>
                        </div>
                    </div><!-- card -->
                </div><!-- container -->
            </section><!--custom-post-blocks-->
        <?php
        endwhile; ?>
    <?php else :
        echo '<p>Sorry there are currently no programs running.</p>'; ?>

    <?php endif;
    wp_reset_postdata();
    ?>

</main>

<?php get_footer(); ?>
