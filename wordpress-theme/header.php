<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="container">
        <div class="header-inner">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="text-decoration: none; color: inherit;">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
            
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                    'fallback_cb' => function() {
                        echo '<ul>';
                        echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
                        echo '<li><a href="#services">Services</a></li>';
                        echo '<li><a href="#portfolio">Portfolio</a></li>';
                        echo '<li><a href="#about">About</a></li>';
                        echo '<li><a href="#contact">Contact</a></li>';
                        echo '</ul>';
                    }
                ));
                ?>
            </nav>
        </div>
    </div>
</header>