<?php
get_header();
?>

    <main class="py-1">

        <?php
        // Start the loop.
        while (have_posts()) : the_post(); ?>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <h1 class="h3 blog-article-header"><?php echo the_title(); ?></h1>
                        <div class="eventsingleimg-wrapper">
                            <?php
                            if ( has_post_thumbnail() ) {
                                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                echo '<img src="' . esc_url($featured_img_url) . '" class="img-fluid rounded object-fit-cover mb-2">';
                            }
                            ?>
                        </div><!-- eventsingleimg-wrapper -->
                    </div><!-- col -->
                </div><!-- row -->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">

                        <div class="entry-content">
                            <?php
                            the_content();
                            ?>
                        </div><!-- .entry-content -->
                    </div><!-- col -->
                </div><!-- row -->

                <div class="row justify-content-center">
                    <div class="col-6 col-md-5">
                        <span class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">' . _x('&larr;', 'Previous post link', 'sproingcreative') . '</span> Prev'); ?></span>
                    </div><!-- col -->
                    <div class="col-6 col-md-5 d-flex justify-content-end blog-nav-single-right">
                        <span class="nav-next"><?php next_post_link('%link', 'Next <span class="meta-nav">' . _x('&rarr;', 'Next post link', 'sproingcreative') . '</span>'); ?></span>
                    </div><!-- col -->
                </div><!-- row -->

            </div><!-- container -->

        <?php endwhile; // end of the loop. ?>

    </main>

<?php get_footer();
