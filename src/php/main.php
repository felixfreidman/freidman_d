<?php get_header()?>
<?php
/*
Template Name: Main
 */
?>

<body class="page-home index-home">
    <div class="header-container--index">
        <div class="header--index" id="header-main">
            <div class="header-container--vertical">
                <div class="logo"><a href="."> <img
                            src="<?php echo get_template_directory_uri() . '/assets/images/content/logo-hor.svg' ?>"
                            alt="Logo Image"></a>
                </div>
            </div>
        </div>
        <div class="header-nav"> <a class="header-nav__link" href="./about" target="_blank">Обо
                мне</a><a class="header-nav__link" href="./projects"
                target="_blank">Проекты</a><a class="header-nav__link" href="./contact"
                target="_blank">Связаться </a></div>
    </div>
    <div class="header-layer header-js--hidden" id="blur-header-layer"></div>
    <div class="header" id="header-main">
        <div class="header-container--vertical">
            <div class="menu-toggler" id="toggle-open"><img
                    src="<?php echo get_template_directory_uri() . '/assets/images/content/Menu.svg' ?>" alt=""></div>
            <div class="logo"><a href="."> <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/content/logo.svg' ?>"
                        alt="Logo Image"></a></div>
        </div>
    </div>
    <div class="header-layer header-js--hidden" id="blur-header-layer"></div>
    <div class="header header--100height header-js--hidden" id="header-opened">
        <div class="header-container--horizontal">
            <div class="logo"><a href="."> <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/content/logo-hor.svg' ?>"
                        alt="Logo Image"></a></div>
            <div class="menu-toggler" id="toggle-close"><span class="cross-one"> </span><span class="cross-two"></span>
            </div>
        </div>
        <div class="header-container">
            <div class="header-navigation">
                <ul class="navigation-list">
                    <li class="navigation-elem"> <a href="./about"> Обо мне</a></li>
                    <li class="navigation-elem"> <a href="./projects">Проекты</a></li>
                    <li class="navigation-elem"><a href="./contact">Связаться</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header--mobile">
        <div class="header--mobile__container">
            <div class="logo"><a href="."> <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/content/logo-hor.svg' ?>"
                        alt="Logo Image"></a></div>
            <div class="header--mobile__toggler" id="mobile-toggler"><span class="line-one" id="mobile-line--one">
                </span><span class="line-two" id="mobile-line--two"> </span><span class="line-three"
                    id="mobile-line-three"></span></div>
        </div>
    </div>
    <div class="header-layer--mobile header-layer--transform_top" id="mobile-blur-layer"> </div>
    <div class="header-list--mobile header-list--transform_top" id="mobile-list"><a class="header-nav__link"
            href="./about" target="_blank">Обо мне</a><a class="header-nav__link"
            href="./projects" target="_blank">Проекты</a><a class="header-nav__link"
            href="./contact" target="_blank">Связаться </a>
    </div>
    <main class="main main-home">
        <div class="main-container">
            <div class="swiper home-swiper" id="home-swiper">
                <div class="swiper-wrapper home-wrapper">
                    <?php if (have_rows('home_slider')): ?>
                    <?php while (have_rows('home_slider')): the_row();?>
				                    <?php
    $image = get_sub_field('project_image');
    $link = get_sub_field('link_project');
    ?>
				                    <div class="swiper-slide home-slide">
				                        <a href="<?=$link?>"><img src="<?=$image?>" alt=""></a>
				                    </div>
				                    <?php endwhile;?>
                    <?php endif;?>

                </div>
                <div class="home-container">
                    <div class="pagination-container">
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="navigation-container">
                        <div class="swiper-button-prev custom-buttom-prev" id="el-prev"></div>
                        <div class="swiper-button-next custom-buttom-next" id="el-next"></div>
                    </div>
                </div>
            </div><a class="watch-all-container" href="./projects" target="_blank">Посмотреть
                все проекты </a>
        </div>
    </main>
    <?php get_footer()?>