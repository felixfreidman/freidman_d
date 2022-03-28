<?php get_header()?>
<?php
$terms = get_terms(array(
    'taxonomy' => 'blog_category',
    'hide_empty' => false,
));

$taxonomies = get_taxonomies('', 'names');
wp_get_post_terms($post->ID, $taxonomies, array("fields" => "names"));
$post_type = get_post_type(get_the_ID());
$taxonomies = get_object_taxonomies($post_type);
$taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies, array("fields" => "names"));

?>

<body class="page-home">
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
            href="./about" target="_blank">Обо мне</a><a class="header-nav__link" href="./projects"
            target="_blank">Проекты</a><a class="header-nav__link" href="./contact" target="_blank">Связаться </a>
    </div>
    <main class="main main-project">
        <div class="page-header">Проекты</div>
        <div class="page-content">
            <div class="project-content">
                <div class="project-text">
                    <div class="text-content"> <span
                            class="project-content__header"><?php echo get_the_title() ?></span>
                        <div class="project-data">
                            <div class="project-filter">
                                <?php
                                    if (!empty($taxonomy_names)):
                                        foreach ($taxonomy_names as $tax_name):
                                            echo $tax_name;
                                        endforeach;
                                    endif;?>


                            </div>
                            <div class="project-date"><?php echo get_the_date("M Y"); ?></div>
                        </div>
                        <?php echo get_field("project_description")?>
                    </div>
                </div>
                <div class="project-image">
                    <div class="swiper project-swiper" id="project-swiper">
                        <div class="swiper-wrapper project-wrapper">
                            <?php 
                            if( have_rows('project_slider') ):

                                while( have_rows('project_slider') ) : the_row();
                            
                                    $sub_value = get_sub_field('project_image'); ?>
                            <div class="swiper-slide project-slide">
                                <div class="project-img-container"
                                    style="background-image: url(<?php echo $sub_value ?>)">
                                </div>
                            </div>
                            <?php
                            endwhile;
                            endif;?>

                        </div>
                        <div class="project-container">
                            <div class="pagination-container">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="navigation-container--project">
                            <div class="swiper-button-prev custom-buttom-prev" id="el-prev"></div>
                            <div class="swiper-button-next custom-buttom-next" id="el-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php get_footer()?>