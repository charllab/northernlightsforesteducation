<?php get_header(); ?>
    <main>
        <?php if (is_page([3])) : ?>

            <div class="container">
                <div class="row">
                    <div class="col-12 py-2">
                        <?php if (have_posts()) : ?>

                            <?php /* Start the Loop */ ?>

                            <?php while (have_posts()) : the_post(); ?>

                                <?php the_content(); ?>

                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php else : ?>

            <?php get_template_part('partials/hero/page-hero'); ?>
            <?php get_template_part('partials/body/flexible-content'); ?>

        <?php endif; ?>
    </main>
<?php get_footer();
