<?php get_header()?>

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
            href="./about" target="_blank">Обо мне</a><a class="header-nav__link"
            href="./projects" target="_blank">Проекты</a><a class="header-nav__link"
            href="./contact" target="_blank">Связаться </a>
    </div>
    <?php
$taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$mypost = array(
    'post_type' => 'project',
    'posts_per_page' => -1,
    'orderby' => 'name',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'blog_category',
            'field' => 'slug',
            'terms' => $taxonomy->slug,
        ),
    ),
);
?>
    <?php
$terms = get_terms(array(
    'taxonomy' => 'blog_category',
    'hide_empty' => false,
));
?>
    <?php
$loop = new WP_Query($mypost);
$i = 0;
?>

    <main class="main main-projects">

        <div class="page-header">Проекты</div>
        <div class="page-content">
            <div class="projects-filter"><span class="filter-header">Категория</span>
                <ul class="filter-list">
                    <li class="filter-elem">
                        <a href="<?php the_permalink(10);?>" class="category">Все</a>
                    </li>
                    <?php foreach ($terms as $key => $term): ?>
                    <?php $active = 0;?>
                    <?php $active = $term == $taxonomy ? true : $active?>
                    <li class="filter-elem">

                        <a href="<?=get_term_link($term)?>"
                            class="category<?=$term == $taxonomy ? ' category--active' : ''?>"><?=$term->name?></a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="projects-container">
                <?php while ($loop->have_posts()): $loop->the_post();?>
		                <?php get_template_part('project-card');?>
		                <?php endwhile;?>
                <?php wp_reset_postdata();?>
                <div class="projects-filter--mobile filter--closed" id="mobileFilterOpen">
                <div class="filter-image">
                    Все фильтры
                </div>
                <ul class="filter-list js--hidden" id="mobileMenuFilter">
                    <li class="filter-elem">
                        <a href="<?php the_permalink(10);?>"
                            class="category">Все</a>
                    </li>
                    <?php foreach ($terms as $key => $term): ?>
                    <?php $active = 0;?>
                    <?php $active = $term == $taxonomy ? true : $active?>
                    <li class="filter-elem">
                        <a href="<?=get_term_link($term)?>"
                            class="category<?=$term == $taxonomy ? ' category--active' : ''?>"><?=$term->name?></a>
                    </li>
                    <?php endforeach;?>
                </ul>

            </div>
            </div>
        </div>
    </main>
    <?php get_footer()?>