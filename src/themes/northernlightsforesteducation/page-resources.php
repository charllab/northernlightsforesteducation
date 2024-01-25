<?php
/**
 *
 * Template Name: Resources
 *
 **/
get_header(); ?>
<main>
    <?php get_template_part('partials/hero/page-hero'); ?>

    <?php get_template_part('partials/body/flexible-content'); ?>

    <div id="resources"></div>
    <?php
    $args = array(
        'post_type' => 'resource',
        'posts_per_page' => -1,
    );

    $resource_query = new WP_Query($args);

    if ($resource_query->have_posts()) : ?>

        <?php while ($resource_query->have_posts()) : $resource_query->the_post();
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the featured image URL
            if (!$featured_img_url) {
                $logo_url = get_template_directory_uri() . '/images/placeholder-440by332.png'; // Get the logo URL
                $featured_img_url = $logo_url; // Set the logo URL as the default image
            }

            // Get ACF 'resource' field (file array)
            $resource_file = get_field('resource');

            // Check if the resource file exists and get its URL
            $resource_url = $resource_file ? $resource_file['url'] : '#';
            ?>
            <section class="custom-post-blocks module-color--green">
                <div class="container">
                    <div class="card mb-2 position-relative border-0 bg-green">
                        <div class="row g-md-2">
                            <div class="col-md-6 col-lg-5">
                                <a href="<?php echo esc_url($resource_url); ?>">
                                    <img src="<?php echo esc_url($featured_img_url); ?>"
                                         class="h-100 mb-1 rounded object-fit-cover bg-white"
                                         alt="<?php the_title_attribute(); ?>">
                                </a>
                            </div><!-- col -->
                            <div class="col-md-6 col-lg-7">
                                <div class="pt-lg-50">
                                    <p class="card-text text-end pe-150 fw-bold pt-50">
                                        <a href="<?php echo esc_url($resource_url); ?>">
                                            Download <span class="ms-250"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                                </span>
                                         <a href="<?php echo esc_url($resource_url); ?>">
                                            <img src="<?php bloginfo('template_url'); ?>/images/icons-download.svg"
                                                 alt=" "
                                                 class="d-block mt-250 icons-download">
                                        </a>
                                    </p>
                                </div>
                                <div class="card-body pt-0">
                                    <h2 class="h3 card-title"><?php the_title(); ?></h2>
                                    <div class="card-text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div><!-- card body -->
                            </div><!-- col -->
                        </div><!-- row-->
                    </div><!-- card -->
                </div><!-- container -->
            </section><!--custom-post-blocks-->
        <?php
        endwhile; ?>
    <?php else :
        echo '<p>Sorry there are currently no resources available.</p>'; ?>

    <?php endif;
    wp_reset_postdata();
    ?>


</main>

<?php get_footer(); ?>
