<?php
    /**
    * Template Name: mogumogu page
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
      もぐもぐ 金沢区のおいしさのひみつ
      </h2>
    </div>
  </div>
  <p class="works-single__heading__date">
    2021年03月21日発行
  </p>
  <div class="works-single__container">
  <div class="works-single__container__content viewport">
      <div class="works-single__container__content pc">
        <?php echo do_shortcode('[ngg src="galleries" ids="10" display="basic_imagebrowser"]'); ?>
      </div>
      <div class="swiper-container sp">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/mogumogu/p1.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/mogumogu/p2.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/mogumogu/p3.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/mogumogu/p4.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/mogumogu/p5.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/mogumogu/p6.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/mogumogu/p7.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/mogumogu/p8.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/mogumogu/p9.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/mogumogu/p10.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/mogumogu/p11.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/mogumogu/p12.jpeg" alt="" class="swiper-slide__img">
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <div class="works-single__container__txt text">
      <p>
      世界的なパンデミックに伴う自粛ムードの影響は、人々の食を支える地元の農家や飲食店にも及んだ。
      </p>
      <p>
      それでもなお、金沢区の「食」がこんなにもオイシイのはなぜだろう。そんな金沢区のオイシイのひみつ、教えちゃいます！
      </p>
    </div>
    <a href="https://mihanken.com/works" class="btn">
      < BACK
    </a>
  </div>
</div>
<?php get_footer(); ?>
