<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;700&display=swap" rel="stylesheet">

    <link href="http://fonts.cdnfonts.com/css/lemonmilk" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <?php wp_head(); ?>
    <title>Portfolio Mathilde Vauquieres</title>
</head>

<body>
    <nav>
        <div class="header">
            <a href="<?php echo home_url(); ?>">
                <img src="<?= get_stylesheet_directory_uri() ?>\img\logo_green_textured.svg"  class="">
            </a>
            <div>
                <svg class="icn_menu" width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_314_1201)">
                        <path d="M32.5 0.435547L37.1092 17.4597L50.1948 5.62983L44.8673 22.4447L62.272 19.5669L48.6965 30.8354L64.8929 37.8182L47.3836 39.9587L57.2347 54.595L41.3474 46.9273L41.7184 64.565L32.5 49.5244L23.2816 64.565L23.6526 46.9273L7.7653 54.595L17.6164 39.9587L0.107056 37.8182L16.3035 30.8354L2.73274 19.5669L20.1326 22.4447L14.8052 5.62983L27.8908 17.4597L32.5 0.435547Z" fill="url(#paint0_linear_314_1201)" />
                        <path d="M43.2578 36.5439C43.2578 37.185 42.7382 37.7047 42.0971 37.7047H23.5257C22.8847 37.7047 22.365 37.185 22.365 36.5439C22.365 35.9029 22.8847 35.3832 23.5257 35.3832H42.0971C42.7382 35.3832 43.2578 35.9029 43.2578 36.5439ZM43.2578 29.5797C43.2578 30.2207 42.7382 30.7404 42.0971 30.7404H23.5257C22.8847 30.7404 22.365 30.2207 22.365 29.5797C22.365 28.9386 22.8847 28.4189 23.5257 28.4189H42.0971C42.7382 28.4189 43.2578 28.9386 43.2578 29.5797Z" fill="white" />
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_314_1201" x1="0.107056" y1="0.435547" x2="64.2332" y2="65.2181" gradientUnits="userSpaceOnUse">
                            <stop offset="0.357292" stop-color="#E9B1BB" />
                            <stop offset="0.682812" stop-color="#C0A9B8" />
                            <stop offset="1" stop-color="#B6AA9E" />
                        </linearGradient>
                        <clipPath id="clip0_314_1201">
                            <rect width="65" height="65" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

            </div>
        </div>

        <div class="menu">

            <div class="header2">
                <img src="<?= get_stylesheet_directory_uri() ?>\img\logo_green_textured.svg"  class="logoheader2">
                <svg class="icn_menu2" width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_314_1285)">
                        <path d="M32.5 64.565C50.2089 64.565 64.5648 50.2091 64.5648 32.5003C64.5648 14.7914 50.2089 0.435547 32.5 0.435547C14.7912 0.435547 0.435303 14.7914 0.435303 32.5003C0.435303 50.2091 14.7912 64.565 32.5 64.565Z" fill="url(#paint0_linear_314_1285)" />
                        <path d="M42.0972 42.3478L23.5258 23.7764L42.0972 42.3478ZM42.0972 23.7764L23.5258 42.3478L42.0972 23.7764Z" fill="white" />
                        <path d="M42.0972 42.3478L23.5258 23.7764M42.0972 23.7764L23.5258 42.3478" stroke="white" stroke-width="2" stroke-linecap="round" />
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_314_1285" x1="0.435303" y1="0.435547" x2="64.5648" y2="64.565" gradientUnits="userSpaceOnUse">
                            <stop offset="0.0798075" stop-color="#A3D0BA" />
                            <stop offset="0.521289" stop-color="#76A698" />
                            <stop offset="1" stop-color="#86A970" />
                        </linearGradient>
                        <clipPath id="clip0_314_1285">
                            <rect width="65" height="65" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <?php wp_nav_menu(
                array(
                    'menu' => 'Primary Menu',
                    'menu_class' => "",
                    'menu_id' => '',
                    'container_class' => '',
                    'container_id' => '',
                )
            );
            ?>

            <div class="contactheader">

                <a href="https://www.instagram.com/mavauq/?hl=fr" id="circle2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" id="rs2" clip-rule="evenodd" d="M7.00473 0.195268C8.24057 0.138375 8.6346 0.125732 11.7827 0.125732C14.9307 0.125732 15.3248 0.139429 16.5596 0.195268C17.7944 0.251107 18.6372 0.448125 19.3747 0.733643C20.147 1.02548 20.8476 1.48168 21.4271 2.07168C22.0171 2.65009 22.4722 3.34966 22.763 4.12298C23.0496 4.86048 23.2455 5.70334 23.3024 6.93602C23.3593 8.17396 23.372 8.568 23.372 11.715C23.372 14.8631 23.3583 15.2571 23.3024 16.493C23.2466 17.7256 23.0496 18.5685 22.763 19.306C22.4722 20.0794 22.0163 20.7802 21.4271 21.3594C20.8476 21.9494 20.147 22.4046 19.3747 22.6953C18.6372 22.9819 17.7944 23.1779 16.5617 23.2348C15.3248 23.2917 14.9307 23.3043 11.7827 23.3043C8.6346 23.3043 8.24057 23.2906 7.00473 23.2348C5.77205 23.1789 4.92919 22.9819 4.19169 22.6953C3.41829 22.4045 2.71756 21.9486 2.13828 21.3594C1.54868 20.7807 1.09242 20.0803 0.801301 19.3071C0.515783 18.5696 0.319818 17.7267 0.262926 16.494C0.206033 15.2561 0.19339 14.862 0.19339 11.715C0.19339 8.56695 0.207086 8.17291 0.262926 6.93812C0.318765 5.70334 0.515783 4.86048 0.801301 4.12298C1.09285 3.34975 1.54946 2.64937 2.13934 2.07063C2.71779 1.48115 3.41782 1.0249 4.19064 0.733643C4.92814 0.448125 5.771 0.252161 7.00368 0.195268H7.00473ZM16.4658 2.28134C15.2437 2.2255 14.877 2.21391 11.7827 2.21391C8.68834 2.21391 8.32169 2.2255 7.09955 2.28134C5.96907 2.33296 5.35589 2.52155 4.9471 2.68064C4.40662 2.89136 4.01996 3.14105 3.61434 3.54668C3.22983 3.92075 2.93392 4.37614 2.7483 4.87945C2.58921 5.28823 2.40062 5.90141 2.349 7.03189C2.29316 8.25404 2.28157 8.62068 2.28157 11.715C2.28157 14.8094 2.29316 15.176 2.349 16.3981C2.40062 17.5286 2.58921 18.1418 2.7483 18.5506C2.93373 19.0531 3.22978 19.5093 3.61434 19.8834C3.98835 20.2679 4.44455 20.564 4.9471 20.7494C5.35589 20.9085 5.96907 21.0971 7.09955 21.1487C8.32169 21.2045 8.68728 21.2161 11.7827 21.2161C14.8781 21.2161 15.2437 21.2045 16.4658 21.1487C17.5963 21.0971 18.2095 20.9085 18.6182 20.7494C19.1587 20.5387 19.5454 20.289 19.951 19.8834C20.3356 19.5093 20.6316 19.0531 20.817 18.5506C20.9761 18.1418 21.1647 17.5286 21.2164 16.3981C21.2722 15.176 21.2838 14.8094 21.2838 11.715C21.2838 8.62068 21.2722 8.25404 21.2164 7.03189C21.1647 5.90141 20.9761 5.28823 20.817 4.87945C20.6063 4.33896 20.3566 3.9523 19.951 3.54668C19.5769 3.1622 19.1215 2.86629 18.6182 2.68064C18.2095 2.52155 17.5963 2.33296 16.4658 2.28134V2.28134ZM10.3024 15.2877C11.1291 15.6318 12.0496 15.6783 12.9068 15.4191C13.7639 15.1599 14.5045 14.6112 15.002 13.8667C15.4995 13.1221 15.7231 12.228 15.6346 11.3369C15.5461 10.4458 15.1509 9.61311 14.5167 8.981C14.1124 8.57693 13.6235 8.26753 13.0852 8.07508C12.547 7.88263 11.9728 7.81192 11.4039 7.86802C10.8351 7.92413 10.2857 8.10567 9.79543 8.39957C9.30515 8.69346 8.88614 9.09241 8.56855 9.56768C8.25096 10.043 8.0427 10.5827 7.95875 11.1482C7.87481 11.7136 7.91728 12.2906 8.0831 12.8376C8.24892 13.3847 8.53397 13.8881 8.91772 14.3118C9.30147 14.7354 9.77438 15.0687 10.3024 15.2877ZM7.5705 7.50284C8.12365 6.94969 8.78033 6.5109 9.50306 6.21154C10.2258 5.91218 11.0004 5.7581 11.7827 5.7581C12.5649 5.7581 13.3396 5.91218 14.0623 6.21154C14.785 6.5109 15.4417 6.94969 15.9949 7.50284C16.548 8.05599 16.9868 8.71268 17.2862 9.4354C17.5855 10.1581 17.7396 10.9327 17.7396 11.715C17.7396 12.4973 17.5855 13.2719 17.2862 13.9946C16.9868 14.7174 16.548 15.374 15.9949 15.9272C14.8777 17.0443 13.3625 17.6719 11.7827 17.6719C10.2028 17.6719 8.68764 17.0443 7.5705 15.9272C6.45336 14.8101 5.82576 13.2949 5.82576 11.715C5.82576 10.1351 6.45336 8.61998 7.5705 7.50284V7.50284ZM19.0607 6.64523C19.1978 6.51593 19.3076 6.36043 19.3835 6.18795C19.4594 6.01548 19.4999 5.82952 19.5026 5.6411C19.5054 5.45269 19.4703 5.26563 19.3995 5.09101C19.3286 4.9164 19.2235 4.75777 19.0902 4.62452C18.957 4.49128 18.7983 4.38612 18.6237 4.31528C18.4491 4.24444 18.262 4.20935 18.0736 4.2121C17.8852 4.21484 17.6993 4.25537 17.5268 4.33127C17.3543 4.40717 17.1988 4.51691 17.0695 4.65398C16.818 4.92057 16.6803 5.27466 16.6857 5.6411C16.691 6.00755 16.839 6.35748 17.0981 6.61662C17.3572 6.87576 17.7072 7.0237 18.0736 7.02905C18.4401 7.03439 18.7942 6.89671 19.0607 6.64523V6.64523Z" fill="url(#paint0_linear_273_177)" />
                        <defs>
                            <linearGradient id="paint0_linear_273_177" x1="0.19339" y1="0.125732" x2="23.372" y2="23.3043" gradientUnits="userSpaceOnUse">
                                <stop offset="0.0798075" stop-color="#A3D0BA" />
                                <stop offset="0.521289" stop-color="#76A698" />
                                <stop offset="1" stop-color="#86A970" />
                            </linearGradient>
                        </defs>
                    </svg>
                </a>

                <a href="https://www.linkedin.com/in/mathilde-vauquieres/" id="circle2">
                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="rs2" fill-rule="evenodd" clip-rule="evenodd" d="M8.53282 7.52178H12.5121V9.47089C13.0853 8.34989 14.5553 7.34268 16.7635 7.34268C20.9968 7.34268 22.0018 9.57414 22.0018 13.6683V21.2509H17.716V14.6007C17.716 12.2692 17.1428 10.9543 15.6835 10.9543C13.6596 10.9543 12.8185 12.3714 12.8185 14.5997V21.2509H8.53282V7.52178V7.52178ZM1.1839 21.0718H5.46961V7.34268H1.1839V21.0718V21.0718ZM6.08354 2.86605C6.0837 3.21929 6.01246 3.56903 5.87395 3.89495C5.73545 4.22088 5.53245 4.51648 5.27675 4.76459C4.75861 5.27096 4.05726 5.5544 3.32675 5.55266C2.59753 5.55218 1.8978 5.26946 1.3789 4.76564C1.12412 4.51669 0.921809 4.22076 0.783549 3.89479C0.64529 3.56882 0.573802 3.21923 0.573181 2.86605C0.573181 2.15278 0.862467 1.47007 1.37997 0.966461C1.89842 0.461967 2.59844 0.179128 3.32782 0.179444C4.05854 0.179444 4.75925 0.462854 5.27675 0.966461C5.79318 1.47007 6.08354 2.15278 6.08354 2.86605Z" fill="url(#paint0_linear_273_591)" />
                        <defs>
                            <linearGradient id="paint0_linear_273_591" x1="0.573181" y1="0.179443" x2="21.6416" y2="21.605" gradientUnits="userSpaceOnUse">
                                <stop offset="0.0798075" stop-color="#A3D0BA" />
                                <stop offset="0.521289" stop-color="#76A698" />
                                <stop offset="1" stop-color="#86A970" />
                            </linearGradient>
                        </defs>
                    </svg>
                </a>

                <a href="mailto:mathildevauquieres@gmail.com" id="circle2">
                    <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="rs2" d="M19.8589 17.1438H2.71604C2.14772 17.1438 1.60267 16.9218 1.20081 16.5266C0.798946 16.1314 0.573181 15.5955 0.573181 15.0366V2.3021C0.597216 1.75929 0.833548 1.24659 1.23284 0.871038C1.63212 0.495484 2.1635 0.286108 2.71604 0.286622H19.8589C20.4272 0.286622 20.9723 0.508624 21.3741 0.90379C21.776 1.29896 22.0018 1.83492 22.0018 2.39376V15.0366C22.0018 15.5955 21.776 16.1314 21.3741 16.5266C20.9723 16.9218 20.4272 17.1438 19.8589 17.1438ZM2.71604 4.36184V15.0366H19.8589V4.36184L11.2875 9.97948L2.71604 4.36184ZM3.57318 2.39376L11.2875 7.45091L19.0018 2.39376H3.57318Z" fill="url(#paint0_linear_273_595)" />
                        <defs>
                            <linearGradient id="paint0_linear_273_595" x1="0.573181" y1="0.286621" x2="16.9564" y2="21.1128" gradientUnits="userSpaceOnUse">
                                <stop offset="0.0798075" stop-color="#A3D0BA" />
                                <stop offset="0.521289" stop-color="#76A698" />
                                <stop offset="1" stop-color="#86A970" />
                            </linearGradient>
                        </defs>
                    </svg>
                </a>

            </div>

            <svg class="star_menu" width="381" height="560" viewBox="0 0 381 560" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="star_menu2" d="M189.687 175.397L328.307 131.734L231.153 239.149L228.963 241.57L232.115 242.421L372.809 280.407L232.458 318.187L229.287 319.041L231.501 321.467L329.619 428.967L190.659 385.122L187.534 384.136L188.086 387.366L212.511 530.366L119.016 418.774L116.927 416.281L115.645 419.27L58.5607 552.325L40.2603 408.418L39.8515 405.204L37.1612 407.01L-83.2662 487.888L-20.5994 357.369L-19.1916 354.437L-22.4433 354.504L-167.995 357.489L-44.2217 281.821L-41.426 280.112L-44.2242 278.406L-168.656 202.584L-23.1452 205.773L-19.8623 205.844L-21.3046 202.895L-85.1353 72.3473L35.9872 153.314L38.7016 155.128L39.0848 151.886L56.082 8.05306L114.379 141.182L115.68 144.152L117.75 141.656L210.227 30.2023L187.112 173.17L186.595 176.371L189.687 175.397Z" stroke="url(#paint0_linear_91_1113)" stroke-width="4" />
                <defs>
                    <linearGradient id="paint0_linear_91_1113" x1="-42.707" y1="-93.0659" x2="228.036" y2="647.73" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0798075" stop-color="#A3D0BA" />
                        <stop offset="0.521289" stop-color="#76A698" />
                        <stop offset="1" stop-color="#86A970" />
                    </linearGradient>
                </defs>
            </svg>

            <span class="noise2"></span>

        </div>

        <span class="noise"></span>

    </nav>