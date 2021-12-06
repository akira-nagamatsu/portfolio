<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="永松彰のポートフォリオサイトです。制作物は随時更新しています！お仕事の依頼や相談はコンタクトフォームより受け付けております！">
    <!-- cssとscriptの読み込み -->
    <?php
    wp_enqueue_style('reset-css', get_template_directory_uri() . '/assets/css/modern-css-reset.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/26d1ebdb5f.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('portfolio-main', get_template_directory_uri() . '/assets/js/script.js');
    ?>
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Lobster&family=PT+Sans:wght@700&display=swap" rel="stylesheet">
    <!-- ファビコン読み込み -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/android-chrome-192x192.png">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ponnkotsu20.com/portfolio">
    <meta property="og:title" content="Akira's portfolio">
    <meta property="og:description" content="永松彰のポートフォリオサイトです。制作物は随時更新しています！お仕事の依頼や相談はコンタクトフォームより受け付けております！">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/akira-portfolio.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://ponnkotsu20.com/portfolio">
    <meta property="twitter:title" content="Akira's portfolio">
    <meta property="twitter:description" content="永松彰のポートフォリオサイトです。制作物は随時更新しています！お仕事の依頼や相談はコンタクトフォームより受け付けております！">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/akira-portfolio.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- ヘッダー -->
    <header class="header">
        <div class="header__inner">
            <a href="<?php echo esc_url(home_url()); ?>" class="site-title">
                <h1 class="site-title__text">Akira's portfolio</h1>
            </a>
            <nav class="header__nav">
                <ul class="horizontal-nav">
                    <li class="horizontal-nav__item"><a href="<?php echo display_link('#about'); ?>">ABOUT</a></li>
                    <li class="horizontal-nav__item"><a href="<?php echo display_link('#my-skills'); ?>">SKILLS</a></li>
                    <li class="horizontal-nav__item"><a href="<?php echo display_link('#works'); ?>">WORKS</a></li>
                    <li class="horizontal-nav__item"><a href="<?php echo display_link('#price'); ?>">PRICE</a></li>
                    <li class="horizontal-nav__item"><a href="<?php echo display_link('#contact'); ?>">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- ヘッダーここまで -->
    <!-- ハンバーガーメニュー -->
    <button class="humburger-btn">
        <div class="humburger-btn__line"></div>
    </button>

    <div class="humburger-nav-wrapper">
        <nav class="humburger-nav">
            <ul class="humburger-nav__list">
                <li class="humburger-nav__item"><a href="<?php echo display_link('#about'); ?>">ABOUT</a></li>
                <li class="humburger-nav__item"><a href="<?php echo display_link('#my-skills'); ?>">SKILLS</a></li>
                <li class="humburger-nav__item"><a href="<?php echo display_link('#works'); ?>">WORKS</a></li>
                <li class="humburger-nav__item"><a href="<?php echo display_link('#price'); ?>">PRICE</a></li>
                <li class="humburger-nav__item"><a href="<?php echo display_link('#contact'); ?>">CONTACT</a></li>
            </ul>
        </nav>
    </div>
    <!-- ハンバーガーメニューここまで -->