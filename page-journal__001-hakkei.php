<?php
    /**
    * Template Name: journal__001-hakkei page
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
        三浦半島ジャーナル001金沢八景号
      </h2>
    </div>
  </div>
  <p class="works-single__heading__date">
    2018年4月14日発行
  </p>
  <div class="works-single__container">
  <div class="works-single__container__content viewport">
      <div class="works-single__container__content pc">
        <?php echo do_shortcode('[ngg src="galleries" ids="1" display="basic_imagebrowser"]'); ?>
      </div>
      <div class="swiper-container sp" dir="rtl">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p1.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p3.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p2.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p5.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p4.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p7.jpeg" alt="" class="swiper-slide__img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/journal_sp/001/p6.jpeg" alt="" class="swiper-slide__img">
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
        学生街、京浜地区のベッドタウン、漁師町、そしてかつての別荘地…。多様な顔を持つ金沢八景を愛した人は数知れない。
      </p>
      <p>
        源頼朝、伊藤博文など、歴史上の偉人が愛した景色。フツーの大学生がぼんやりと郷愁を感じる景色。時代は違えど、思いを馳せる座標は変わらない。
      </p>
      <p>
        三浦半島研究会の処女作にして、今後の方針を決めた一冊。
      </p>
    </div>
    <a href="https://mihanken.com/works" class="btn">
      < BACK
    </a>
  </div>
</div>
<?php get_footer(); ?>

