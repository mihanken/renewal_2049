<?php
    /**
    * Template Name: experimentation page
    */
?>

<?php get_header(); ?>
<div class="hero__section works__hero-img">
  <h1 class="page-title">
    WORKS
  </h1>
</div>
<div class="works-single__wrapper">
  <div class="works-single__heading__flex-box">
    <div class="works-single__heading__title text">
      <h2>
        実験用ページ
      </h2>
    </div>
  </div>
  <p class="works-single__heading__date">
    0000年00月00日発行
  </p>
  <div class="works-single__container">
    <div class="works-single__container__content viewport">
      <div class="works-single__container__content pc">
        <?php echo do_shortcode('[ngg src="galleries" ids="5" display="basic_imagebrowser"]'); ?>
      </div>
      <div class="swiper-container sp">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p1.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p2.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p3.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p4.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p5.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p6.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p7.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p8.jpeg" alt="" class="swiper-slide__img">
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <div class="works-single__container__txt text">
      <p>
        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
      </p>
      <p>
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      </p>
    </div>
    <a href="https://mihanken.com/works" class="btn">
      < BACK
    </a>
  </div>
</div>
<?php get_footer(); ?>
