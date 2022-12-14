<?php

/**
 * Template Name: Projets
 *
 * @package Portfolio
 **/

get_header() ?>


<section class="travaux">

    <div class="titre_page">
        <div class="titre1">
            <svg class="startitre" width="57" height="58" viewBox="0 0 57 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.5 0.526123L32.5419 15.7169L44.017 5.16102L39.3452 20.165L54.6078 17.5972L42.7031 27.6522L56.9061 33.883L41.5518 35.793L50.1904 48.853L36.2585 42.011L36.5839 57.7493L28.5 44.3285L20.4161 57.7493L20.7415 42.011L6.80957 48.853L15.4482 35.793L0.0938797 33.883L14.2969 27.6522L2.3964 17.5972L17.6548 20.165L12.983 5.16102L24.4581 15.7169L28.5 0.526123Z" fill="url(#paint0_linear_239_225)" />
                <defs>
                    <linearGradient id="paint0_linear_239_225" x1="0.0938797" y1="0.526123" x2="57.3156" y2="57.3369" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0798075" stop-color="#A3D0BA" />
                        <stop offset="0.521289" stop-color="#76A698" />
                        <stop offset="1" stop-color="#86A970" />
                    </linearGradient>
                </defs>
            </svg>
            <h2 class="grandtitre">selected works</h2>
        </div>

        <h3 class="soustitre">A selection of my works that I have been creating throughout my years at school, my personnal project and my profesionnal experiences</h3>
    </div>

    <div class="works">

        <?php
        $args = array(
            'numberposts' => -1,
            'posts_per_page' => -1,
            'post_type' => 'projets',
            'order'   => 'ASC',
        );
        ?>

        <?php $listproject = new WP_Query($args);
        if ($listproject->have_posts()) :
            while ($listproject->have_posts()) : ?>
                <?php $listproject->the_post(); ?>

                <div class="previewprojet">
                    <?php echo the_post_thumbnail() ?>
                </div>

                <div class="container-btn">
                    <div class="btnprojet">

                        <a href="#" id="button">

                            <h3><?php echo the_title() ?></h3>

                            <div class="tags">
                                <p class="tag">Identit?? Visuelle</p>
                            </div>

                            <div class="icn_star">
                                <svg id="starbutton" width="57" height="58" viewBox="0 0 57 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28.5 0.526123L32.5419 15.7169L44.017 5.16102L39.3452 20.165L54.6078 17.5972L42.7031 27.6522L56.9061 33.883L41.5518 35.793L50.1904 48.853L36.2585 42.011L36.5839 57.7493L28.5 44.3285L20.4161 57.7493L20.7415 42.011L6.80957 48.853L15.4482 35.793L0.0938797 33.883L14.2969 27.6522L2.3964 17.5972L17.6548 20.165L12.983 5.16102L24.4581 15.7169L28.5 0.526123Z" />

                                    <defs>
                                        <linearGradient id="green_gradient" x1="0.0938797" y1="0.526123" x2="57.3156" y2="57.3369" gradientUnits="userSpaceOnUse">
                                            <stop offset="0.0798075" stop-color="#A3D0BA" />
                                            <stop offset="0.521289" stop-color="#76A698" />
                                            <stop offset="1" stop-color="#86A970" />
                                        </linearGradient>
                                    </defs>

                                </svg>

                                <img src="<?= get_stylesheet_directory_uri() ?>\img\icn_arrowleft.png" class="arrow">

                            </div>
                        </a>

                    </div>
                </div>



            <?php endwhile; ?>
        <?php endif; ?>



        <?php wp_reset_postdata(); ?>




    </div>

    <span class="noise"></span>

</section>



<?php get_footer() ?>