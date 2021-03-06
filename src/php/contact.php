<?php
/*
Template Name: Contact
 */
?>
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
    <main class="main main-contact">
        <div class="page-header">Связаться</div>
        <div class="page-content">
            <div class="contact-content">
                <div class="form-content">
                    <!-- <form id="contact-form" class="contact-form" action="send-form.php" enctype=”multipart/form-data”
                        name=”EmailForm”>
                        <input class="contact-form__input" id="nameInput" type="text" name="nameInput"
                            placeholder="Ваше имя" required>
                        <input class="contact-form__input" id="mailInput" type="email" name="mailInput"
                            placeholder="Ваша почта" required>
                        <textarea class="contact-form__area" id="commentArea" name="commentArea" cols="30" rows="5"
                            placeholder="Ваше сообщение"></textarea><button class="contact-form__submit"
                            id="contactSubmit">Отправить</button>
                    </form> -->
                    <?php the_content();?>
                </div>
                <div class="contact-section">
                    <div class="email-section">
                        <div class="contact-header">Сотрудничество</div>
                        <div class="contact-text"><?php echo get_field('mail', 'option') ?></div>
                        <div class="contact-text">+<?php echo get_field('phone', 'option') ?></div>
                    </div>
                    <div class="message-section">
                        <div class="contact-header">Контакты</div>
                        <div class="contact-text">+<?php echo get_field('phone', 'option') ?></div>
                        <div class="contact-text">Telegram/WhatsApp</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php get_footer()?>