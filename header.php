<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- meta情報 -->
    <title>enplus 2023年採用サイト</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- ogp -->
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header p-header">
        <div class="l-header-inner">
            <div class="p-header__content">
                <h1 class="p-header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__home">
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/header_logo.png" alt="エンプラス">
                        <p class="p-header__logo-text">recruiting&nbsp;site</p>
                    </a>
                </h1>
                <nav class="p-header__nav">
                    <ul class="p-header__lists">
                        <li class="p-header__list">
                            会社を知る
                            <ul class="p-header__menus">
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/reading/')); ?>" class="p-header__menuLink">先を読むターゲット領域</a>
                                </li>
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/other/')); ?>" class="p-header__menuLink">他がやらないエンプラスの事業</a>
                                </li>
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/challenge/')); ?>" class="p-header__menuLink">エンプラス挑戦の軌跡</a>
                                </li>
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/future/')); ?>" class="p-header__menuLink">エンプラスがよむ未来</a>
                                </li>
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/number/')); ?>" class="p-header__menuLink">数字で見る</a>
                                </li>
                            </ul>
                        </li>
                        <li class="p-header__list">
                            仕事を知る
                            <ul class="p-header__menus">
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/introduce/')); ?>" class="p-header__menuLink">職種紹介</a>
                                </li>
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/interview/')); ?>" class="p-header__menuLink">社員インタビュー</a>
                                </li>
                            </ul>
                        </li>
                        <li class="p-header__list">
                            環境を知る
                            <ul class="p-header__menus">
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/introduce/')); ?>" class="p-header__menuLink">研修制度</a>
                                </li>
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/environment/')); ?>" class="p-header__menuLink">福利厚生</a>
                                </li>
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/interview/')); ?>" class="p-header__menuLink">エンプラスの取り組み</a>
                                </li>
                            </ul>
                        </li>
                        <li class="p-header__list">
                            採用情報
                            <ul class="p-header__menus">
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/question/')); ?>" class="p-header__menuLink">Q&A</a>
                                </li>
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="p-header__menuLink">新卒募集要項</a>
                                </li>
                                <li class="p-header__menu">
                                    <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="p-header__menuLink">中途募集要項</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <button class="p-header__drawer p-drawer-icon">
                    <span class="p-drawer-icon__bars">
                        <span class="p-drawer-icon__bar1"></span>
                        <span class="p-drawer-icon__bar2"></span>
                        <span class="p-drawer-icon__bar3"></span>
                    </span>
                </button>
                <div class="p-header__drawer-content p-drawer-content">
                    <div class="p-drawer-content__items-row">
                        <div class="p-drawer-content__items">
                            <p class="p-drawer-content__text">会社を知る</p>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/reading/')); ?>">先をよむターゲット領域</a></div>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/other/')); ?>">他がやらないエンプラスの事業</a></div>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/challenge/')); ?>">エンプラス挑戦の軌跡</a></div>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/future/')); ?>">エンプラスがよむ未来</a></div>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/number/')); ?>">数字で見る</a></div>
                        </div>
                        <div class="p-drawer-content__items">
                            <p class="p-drawer-content__text">仕事を知る</p>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/introduce/')); ?>">職種紹介</a></div>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/interview/')); ?>">社員インタビュー</a></div>
                        </div>
                    </div>
                    <div class="p-drawer-content__items-row">
                        <div class="p-drawer-content__items">
                            <p class="p-drawer-content__text">環境を知る</p>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/')); ?>">研修制度</a></div>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/environment')); ?>">福利厚生</a></div>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/')); ?>">エンプラスの取り組み</a></div>
                        </div>
                        <div class="p-drawer-content__items">
                            <p class="p-drawer-content__text">採用情報</p>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/question/')); ?>">Q&A</a></div>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/recruit/')); ?>">新卒採用募集要項</a></div>
                            <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/')); ?>">中途採用募集要項</a></div>
                        </div>
                    </div>
                </div>
                <div class="p-header__drawer-background p-drawer-background"></div>
            </div>
        </div>
    </header>