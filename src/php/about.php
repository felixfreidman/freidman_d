<?php
/*
Template Name: About
 */
?>
<?php get_header()?>

<body class="page-home">
    <div class="header-layer header-js--hidden" id="blur-header-layer"></div>
    <div class="header" id="header-main">
        <div class="header-container--vertical">
            <div class="menu-toggler" id="toggle-open"><img
                    src="<?php echo get_template_directory_uri() . '/assets/images/content/Menu.svg' ?>" alt=""></div>
            <div class="logo"><a href="http://dfreidman.hostfl.ru"> <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/content/logo.svg' ?>"
                        alt="Logo Image"></a></div>
        </div>
    </div>
    <div class="header-layer header-js--hidden" id="blur-header-layer"></div>
    <div class="header header--100height header-js--hidden" id="header-opened">
        <div class="header-container--horizontal">
            <div class="logo"><a href="http://dfreidman.hostfl.ru"> <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/content/logo-hor.svg' ?>"
                        alt="Logo Image"></a></div>
            <div class="menu-toggler" id="toggle-close"><span class="cross-one"> </span><span class="cross-two"></span>
            </div>
        </div>
        <div class="header-container">
            <div class="header-navigation">
                <ul class="navigation-list">
                    <li class="navigation-elem"> <a href="http://dfreidman.hostfl.ru/about"> Обо мне</a></li>
                    <li class="navigation-elem"> <a href="http://dfreidman.hostfl.ru/projects">Проекты</a></li>
                    <li class="navigation-elem"><a href="http://dfreidman.hostfl.ru/contact">Связаться</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header--mobile">
        <div class="header--mobile__container">
            <div class="logo"><a href="http://dfreidman.hostfl.ru"> <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/content/logo-hor.svg' ?>"
                        alt="Logo Image"></a></div>
            <div class="header--mobile__toggler" id="mobile-toggler"><span class="line-one" id="mobile-line--one">
                </span><span class="line-two" id="mobile-line--two"> </span><span class="line-three"
                    id="mobile-line-three"></span></div>
        </div>
    </div>
    <div class="header-layer--mobile header-layer--transform_top" id="mobile-blur-layer"> </div>
    <div class="header-list--mobile header-list--transform_top" id="mobile-list"><a class="header-nav__link"
            href="http://dfreidman.hostfl.ru/about" target="_blank">Обо мне</a><a class="header-nav__link"
            href="http://dfreidman.hostfl.ru/projects" target="_blank">Проекты</a><a class="header-nav__link"
            href="http://dfreidman.hostfl.ru/contact" target="_blank">Связаться </a>
    </div>
    <main class="main main-about">
        <div class="page-header">Обо мне</div>
        <div class="page-content">
            <div class="about-content">
                <div class="about-text">
                    <div class="text-content"><?=get_field('about_text');?></div>
                </div>
                <div class="about-image"><img
                        src="<?=get_field('about_image');?>" alt="">
                </div>
            </div>
        </div>
    </main>
    <?php get_footer()?>