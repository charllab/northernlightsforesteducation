<?php get_header(); ?>
    <main>
        <?php get_template_part('partials/hero/page-hero'); ?>
        <?php get_template_part('partials/body/flexible-content'); ?>

        <section class="green-hills-with-sky bg-white position-relative">
            <div class="green-hills"></div><!-- green-hills -->
        </section>

        <h1>Here</h1>

        <section class="snowy-hills-on-green bg-green position-relative">
            <div class="snowy-hills"></div><!-- green-hills -->
        </section>


        <section class="custom-post-blocks">
            <div class="container">
                <div class="row">
                    <div class="col-12"><p>custom-post-blocks</p></div>
                </div>
                <div class="card mb-2 position-relative border-0">
                    <div class="row g-md-2 align-items-center">
                        <div class="col-md-6 col-lg-5">
                            <img src="https://unsplash.it/1200/900"
                                 class="h-100 mb-1 rounded object-fit-cover bg-white" alt="...">
                        </div><!-- col -->
                        <div class="col-md-6 col-lg-7 pb-50">
                            <div class="card-body">
                                <h2 class="card-title">Card title</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                    voluptua. At vero eos et accusam et</p>
                            </div><!-- card body -->
                        </div><!-- col -->
                    </div><!-- row-->
                    <div class="position-absolute bottom-0 end-0">
                        <p class="card-text text-end pe-150 fw-bold">
                            <a href="#">
                                Show details <span class="ms-250"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
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

        <section class="custom-post-blocks bg-green">
            <div class="container">
                <div class="row">
                    <div class="col-12"><p>custom-post-resources</p></div>
                </div>
                <div class="card mb-2 position-relative border-0 bg-green">
                    <div class="row g-md-2">
                        <div class="col-md-6 col-lg-5">
                            <img src="https://unsplash.it/1200/900"
                                 class="h-100 mb-1 rounded object-fit-cover bg-white" alt="...">
                        </div><!-- col -->
                        <div class="col-md-6 col-lg-7">
                            <div class="pt-lg-50">
                                <p class="card-text text-end pe-150 fw-bold pt-50">
                                    <a href="#" class="text-white">
                                        Download <span class="ms-250"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor"
                                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg>
                                    </span>
                                        <img src="<?php bloginfo('template_url'); ?>/images/icons-download.svg"
                                             alt=" "
                                             class="d-block mt-250 icons-download">
                                    </a>
                                </p>
                            </div>
                            <div class="card-body pt-0">
                                <h2 class="card-title text-white">Card title</h2>
                                <p class="card-text text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                    sed
                                    diam
                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                    voluptua. At vero eos et accusam et</p>
                            </div><!-- card body -->
                        </div><!-- col -->
                    </div><!-- row-->
                </div><!-- card -->
            </div><!-- container -->
        </section><!--custom-post-blocks-->



        <section class="columned-white-media-and-text bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12"><p class="text-white">columned-media-and-text</p></div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-lg-2">
                    <div class="col">
                        <div class="card h-100 bg-transparent border border-0 rounded-0 mb-2">
                            <img src="https://unsplash.it/900/900"
                                 class="mb-150 img-fluid rounded-0 card-img-top object-fit-cover bg-dark" alt="...">
                            <div class="card-body p-0 pe-lg-1">
                                <h5 class="h3 card-title text-white">Program title goes here</h5>
                                <p class="card-subtitle text-white mb-50 fst-italic">Title: Executive Assistant and
                                    Program
                                    Administrator</p>
                                <div class="card-text mb-150 text-white">
                                    <p><b>Short Bio:</b> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam
                                        nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                        vero
                                        eos et
                                        accusam et justo duo dolores et ea rebum. </p>
                                    <p>
                                        <b>Contact: email@sample.com<br>
                                            Phone: 123 456 789</b>
                                    </p>
                                </div><!-- card-text-->
                            </div><!-- card-body-->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a short card.</p>
                            </div><!-- card-body-->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content.</p>
                            </div><!-- card-body-->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</p>
                            </div><!-- card-body-->
                        </div><!-- card -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- columned-white-media-and-text-on-green -->
    </main>
<?php get_footer();
