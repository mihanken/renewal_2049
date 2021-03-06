<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="三浦半島のあらゆる営みを記録し、三浦半島に新しい文化を残すことをモットーに活動する三浦半島研究会の公式サイトです。">
    <link rel="stylesheet" media="screen and (min-width: 480px)">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/master.css">
    <!-- 以下スタイルシートは bunzoが 20221年度新刊期のリニューアルに伴い、管理の簡略化のために追加したものです -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/add.css">
    <!-- Swiperスタイルシートです -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>三浦半島研究会</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://mihanken.com/wp-content/themes/mihanken/js/fadein.js"></script>
    <script type="text/javascript" src="https://mihanken.com/wp-content/themes/mihanken/js/hamburger.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id=”wptime-plugin-preloader”></div>
    <header>
      <div class="header-wrapper">
        <div class="header-container">
          <div class="header__title">
            <a href="/home">
              <img class="header__logo header__logo-item" src="<?php echo get_template_directory_uri(); ?>/images/header-logo.png">
            </a>
          </div>
          <div class="header__menu">
            <div class="header__nav">
              <ul class="header__nav-ul">
                <li class="header__nav--item">
                  <a class="header--link_pc" href="/home">
                    HOME
                  </a>
                </li>
                <li class="header__nav--item">
                  <a class="header--link_pc" href="/about">
                    ABOUT
                  </a>
                </li>
                <li class="header__nav--item">
                  <a class="header--link_pc" href="/works">
                    WORKS
                  </a>
                </li>
                <li class="header__nav--item">
                  <a class="header--link_pc" href="/contact">
                    CONTACT
                  </a>
                </li>
                <li class="header__nav--item">
                  <a class="header--link_pc" href="https://twitter.com/ycu_mihanken">
                    <i class="fab fa-twitter fa-lg"></i>
                  </a>
                </li>
                <li class="header__nav--item" style="margin-left: 5px;">
                  <a class="header--link_pc" href="https://www.instagram.com/ycu_mihanken/">
                    <i class="fab fa-instagram fa-lg"></i>
                  </a>
                </li>
                <!--以下ページは新歓期間のみの限定公開です-->
                <!-- <li class="header__nav--item">
                  <a class="header--link_pc" href="https://mihanken.com/qanda">
                    新入生向けQ&A
                  </a>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="hamburger">
        <div id="nav-toggle">
          <div>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div id="gloval-nav">
          <nav>
            <ul>
              <li>
                <a href="/">
                  HOME
                </a>
              </li>
              <li>
                <a href="/about">
                  ABOUT
                </a>
              </li>
              <li>
                <a href="/works">
                  WORKS
                </a>
              </li>
              <li>
                <a href="/contact">
                  CONTACT
                </a>
              </li>
              <!-- <li>
                <a href="/qanda">
                  新入生向けQ&A
                </a>
              </li> -->
            </ul>
          </nav>
        </div>
      </div>
    </header>
