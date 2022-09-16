<?php

/**
 * Template Name: About
 *
 * @package Portfolio
 **/

get_header() ?>

<section class="aboutme">

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
            <h2 class="grandtitre">About meee</h2>
        </div>

    </div>

    <div class="about">
        <img src="<?= get_stylesheet_directory_uri() ?>\img\about.png" class="me" alt="">

        <div class="contentabout">
            <h4 class="intro">Hello, mon nom est Mathilde Vauquieres et je suis graphiste et UI/UX designer. Je suis passionnée par la création digitale </h4>

            <p class="texte">
                > Temps libre j’aime créer : dessin, peinture, aquarelle sur tous les formats et tous les supports
                <br> aime bien travailler dans la bonne humeur
                <br> super organisée sinon ça va pas
                <br> j’aime trop les chiens et les dinos => marque de fabrique
            </p>

            <a href="http://localhost/portfolio_v2/wp-content/uploads/2022/09/CV_MV.pdf" id="button">
                <h4>Voir mon cv</h4>

                <svg  width="44" height="45" viewBox="0 0 44 45" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <g clip-path="url(#clip0_330_1051)">
                        <path id="starbutton" d="M21.8795 0.954346L24.9458 12.4784L33.6511 4.47048L30.1069 15.8528L41.6854 13.9048L32.6543 21.5327L43.429 26.2595L31.7809 27.7085L38.3344 37.6161L27.7653 32.4257L28.0121 44.3651L21.8795 34.1837L15.747 44.3651L15.9938 32.4257L5.42474 37.6161L11.9782 27.7085L0.330078 26.2595L11.1048 21.5327L2.07682 13.9048L13.6521 15.8528L10.108 4.47048L18.8133 12.4784L21.8795 0.954346Z" fill="url(#paint0_linear_330_1051)" />
                        <path class="arrow" d="M18.9896 16.3609C18.8886 16.4662 18.832 16.6075 18.832 16.7546C18.832 16.9017 18.8886 17.043 18.9896 17.1482L24.6338 23.0399L18.9896 28.9304C18.8886 29.0356 18.832 29.1769 18.832 29.324C18.832 29.4712 18.8886 29.6124 18.9896 29.7177C19.0387 29.769 19.0974 29.8098 19.1623 29.8376C19.2271 29.8655 19.2968 29.8798 19.3672 29.8798C19.4376 29.8798 19.5073 29.8655 19.5721 29.8376C19.637 29.8098 19.6957 29.769 19.7448 29.7177L25.7469 23.4512C25.8523 23.3412 25.9113 23.1936 25.9113 23.0399C25.9113 22.8862 25.8523 22.7386 25.7469 22.6286L19.7448 16.3621C19.6957 16.3108 19.637 16.27 19.5721 16.2422C19.5073 16.2143 19.4376 16.2 19.3672 16.2C19.2968 16.2 19.2271 16.2143 19.1623 16.2422C19.0974 16.27 19.0387 16.3108 18.9896 16.3621V16.3609Z" fill="white" />
                    </g>

                    <defs>
                        <linearGradient id="green_gradient" x1="0.330078" y1="0.954346" x2="43.7397" y2="44.0522" gradientUnits="userSpaceOnUse">
                            <stop offset="0.0798075" stop-color="#A3D0BA" />
                            <stop offset="0.521289" stop-color="#76A698" />
                            <stop offset="1" stop-color="#86A970" />
                        </linearGradient>

                        <clipPath id="clip0_330_1051">
                            <rect width="43.2414" height="44" fill="white" transform="translate(0.258789 0.659668)" />
                        </clipPath>
                    </defs>

                </svg>

            </a>

        </div>


    </div>

    <span class="noise"></span>

</section>

<?php get_footer() ?>