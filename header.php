<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社estra</title>
    <!-- <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css"> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header" id="header">
            <h1 class="header-ttl"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <nav class="header-list" id="header-list">
                <li class="header-list-item"><a class="header-list-a" href="<?php echo get_template_directory_uri(); ?>./about.html">About</a></li>
                <li class="header-list-item"><a class="header-list-a" href="<?php echo get_template_directory_uri(); ?>./news.html">News</a></li>
                <li class="header-list-item"><a class="header-list-a" href="<?php echo get_template_directory_uri(); ?>./service.html">Sevice</a></li>
                <li class="header-list-item"><a class="header-list-a" href="<?php echo get_template_directory_uri(); ?>./recruit.html">Recruit</a></li>
                <li class="header-list-item"><a class="header-list-a" href="<?php echo get_template_directory_uri(); ?>./contact.html">Contact</a></li>
                <li class="header-list-item"><a class="header-list-a" href="<?php echo get_template_directory_uri(); ?>./policy.html">Policy</a></li>
            </nav>
        </div>
        <div class="header-hum-menu" id="menu">
            <span class="menu__line--top"></span>
            <span class="menu__line--middle"></span>
            <span class="menu__line--bottom"></span>
        </div>
    </header>