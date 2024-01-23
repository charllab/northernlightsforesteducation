<?php
$body = get_field('body');
$layouts = $body['layout'];
if ($layouts) : ?>
    <?php $counter = 0;
    foreach ($layouts as $layout) : ?>
        <?php if ($layout['acf_fc_layout'] == 'media_and_text'): ?>

            <?php
            //acf fields data
            // structure > media (group)
            $media = $layout['structure']['media'];
            // structure > text (group)
            $text = $layout['structure']['text'];
            // structure > text > button (group)
            $buttons = $layout['structure']['text']['buttons']['button'];

            $image = $media['image'];
            $alignment = $media['alignment'];
            $above_header = $text['above_header'];
            $header = $text['header'];
            $text = $text['content'];
            ?>

            <section class="text-media-blocked pt-xl-3">
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

        <?php elseif ($layout['acf_fc_layout'] == 'media_and_text_wide'): ?>
            <?php
            //acf fields data
            // structure > media (group)
            $media = $layout['structure']['media'];
            // structure > text (group)
            $text = $layout['structure']['text'];
            // structure > text > button (group)
            $buttons = $layout['structure']['text']['buttons']['button'];

            $image = $media['image'];
            $alignment = $media['alignment'];
            $above_header = $text['above_header'];
            $header = $text['header'];
            $text = $text['content'];
            ?>

            <section class="text-media-wide pt-lg-3 pb-lg-1 py-xxxl-3">
                <div class="container">
                    <div class="row align-items-center g-lg-3 position-relative">
                        <div class="col-lg-6 py-lg-6">
                            <?php if (!empty($above_header)): ?>
                                <h6 class="d-block"><?php echo $above_header; ?></h6>
                            <?php endif; ?>
                            <h2 class="h1">
                                <span><?php echo $header;?></span>
                            </h2>
                            <div class="mb-175">
                                <?php echo $text;?>
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
                        </div>
                        <div class="col-lg-6 order-lg-<?php echo $alignment;?> h-100">
                            <img src="<?php echo esc_url($image['url']);?>"
                                 class="mb-2 mb-lg-0 h-100 img-fluid card-img-top object-fit-cover d-lg-none"
                                 loading="lazy"
                                 alt="<?php echo $image['alt'];?>"
                            >
                            <div class="text-media-wide--img position-absolute d-none d-lg-block">
                                <img src="<?php echo esc_url($image['url']);?>"
                                     class="card-img-top object-fit-cover"
                                     loading="lazy"
                                     alt="<?php echo $image['alt'];?>"
                                >
                            </div><!-- position-absolute-->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </section><!-- text-media-wide -->

        <?php elseif ($layout['acf_fc_layout'] == 'content_wide'): ?>

            <?php
            // structure > text (group)
            $text = $layout['structure']['text'];
            // structure > text > button (group)
            $buttons = $layout['structure']['text']['buttons']['button'];
            $above_header = $text['above_header'];
            $header = $text['header'];
            $text = $text['content'];
            ?>
            <section class="content-wide pt-2 pt-xl-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h1">
                                <?php if (!empty($above_header)): ?>
                                    <span class="h6 d-block"><?php echo $above_header; ?></span>
                                <?php endif; ?>
                                <?php echo $header;?>
                            </h2>
                            <div class="lead mb-175">
                                <?php echo $text;?>
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


        <?php elseif ($layout['acf_fc_layout'] == 'cards'): ?>
            <?php
            //dump($layout);
            $intro_above_header = $layout['section_intro']['above-header_text'];
            $intro_header = $layout['section_intro']['header'];
            $intro_content = $layout['section_intro']['content'];
            $section_bg_color = $layout['background_colour'];
            $section_bg_img_assoc = $layout['background_image'];
            $cards_index = $layout['cards']['card'];
            ?>

            <section class="section--wrapper section--cards py-lg-4 position-relative mb-0">
                <div class="position-absolute card-section__background z-index-1"
                     style="background-image: url(<?php echo esc_url($section_bg_img_assoc['url']); ?>);
                         background-size: cover;
                         background-position: center;
                         background-repeat: no-repeat;
                         filter: grayscale(100%);
                         "
                ></div>
                <div
                    class="position-absolute card-section__background-color z-index-2 bg-<?php echo $section_bg_color; ?>"></div>

                <div class="position-relative z-index-10">
                    <div class="mb-lg-2">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-xxxl-9">
                                    <div class="text-center">
                                        <?php if (!empty($intro_above_header)) : ?>
                                            <h2 class="lead"><?php echo $intro_above_header; ?></h2>
                                        <?php endif; ?>
                                        <h3 class="h2"><?php echo $intro_header ?></h3>
                                        <?php if (!empty($intro_content)) {
                                            echo $intro_content;
                                        } ?>
                                    </div><!-- text-center -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- container -->
                    </div>

                    <section class="mb-0">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-md-3 g-1 text-center">
                                <?php foreach ($cards_index as $card):
                                    //get the array item in the indexed array
                                    $button_cta_assoc = $card['button_cta'];
                                    ?>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="<?php echo esc_url($card['icon']['url']); ?>" class="card-img-top"
                                                 alt="<?php echo $card['icon']['title'] ?>">
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $card['card_title']; ?></h4>
                                                <p class="card-text"><?php echo $card['card_text']; ?></p>
                                            </div><!-- card-body -->
                                            <div class="card-footer">
                                                <?php if (!empty($button_cta_assoc)):
                                                    $target = $button_cta_assoc['target'];
                                                    ?>
                                                    <a href="<?php echo esc_url($button_cta_assoc['url']); ?>"
                                                       class="btn btn-light"
                                                        <?php if ($target):
                                                            echo 'target="' . $target . '"';
                                                        endif; ?>
                                                    >
                                                        <?php echo $button_cta_assoc['title']; ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div><!-- card -->
                                    </div><!-- col -->
                                <?php endforeach; ?>
                            </div><!-- row -->
                        </div><!-- container -->
                    </section>

                </div><!-- position-relative -->
            </section>

        <?php elseif ($layout['acf_fc_layout'] == 'cards_with_icons'): ?>
            <?php
            //dump($layout);
            $intro_above_header = $layout['section_intro']['above-header_text'];
            $intro_header = $layout['section_intro']['header'];
            $intro_content = $layout['section_intro']['content'];
            $section_bg_color = $layout['background_colour'];
            $section_bg_img_assoc = $layout['background_image'];
            $cards_index = $layout['cards']['card'];
            ?>

            <section class="section--wrapper section--cards py-lg-4 position-relative mb-0">

                <div class="position-absolute card-section__background z-index-1"
                     style="background-image: url(<?php echo esc_url($section_bg_img_assoc['url']); ?>);
                         background-size: cover;
                         background-position: center;
                         background-repeat: no-repeat;
                         filter: grayscale(100%);
                         "
                ></div>
                <div
                    class="position-absolute card-section__background-color z-index-2 bg-<?php echo $section_bg_color; ?>"></div>

                <div class="position-relative z-index-10">
                    <div class="mb-lg-2">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-xxxl-9">
                                    <div class="text-center">
                                        <?php if (!empty($intro_above_header)) : ?>
                                            <h2 class="lead"><?php echo $intro_above_header; ?></h2>
                                        <?php endif; ?>
                                        <h3 class="h2"><?php echo $intro_header ?></h3>
                                        <?php if (!empty($intro_content)) {
                                            echo $intro_content;
                                        } ?>
                                    </div><!-- text-center -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- container -->
                    </div>

                    <section class="mb-0 cards-clean">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-lg-3 g-0 text-center">
                                <?php foreach ($cards_index as $card):
                                    //get the array item in the indexed array
                                    $button_cta_assoc = $card['button_cta'];
                                    ?>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-line">
                                                <div class="px-lg-1">
                                                    <img src="<?php echo esc_url($card['icon']['url']); ?>"
                                                         class="card-img-top"
                                                         alt="<?php echo $card['icon']['title'] ?>">
                                                    <div class="card-body">
                                                        <h4 class="card-title"><?php echo $card['card_title']; ?></h4>
                                                        <p class="card-text"><?php echo $card['card_text']; ?></p>
                                                    </div><!-- card-body -->
                                                </div><!-- px -->
                                            </div><!-- card-line -->
                                            <div class="card-footer">
                                                <?php if (!empty($button_cta_assoc)):
                                                    $target = $button_cta_assoc['target'];
                                                    ?>
                                                    <a href="<?php echo esc_url($button_cta_assoc['url']); ?>"
                                                       class="btn btn-light"
                                                        <?php if (!empty($target)):
                                                            echo 'target="' . $target . '"';
                                                        endif; ?>
                                                    >
                                                        <?php echo $button_cta_assoc['title']; ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div><!-- card -->
                                    </div><!-- col -->
                                <?php endforeach; ?>
                            </div><!-- row -->
                        </div><!-- container -->
                    </section>

                </div><!-- position-relative -->
            </section>

        <?php endif;
        $counter++;
    endforeach;
    wp_reset_postdata();
    ?>
<?php endif; ?>
