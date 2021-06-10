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
    <div class="works-single__container__content pc">
      <?php echo do_shortcode('[ngg src="galleries" ids="5" display="basic_imagebrowser"]'); ?>
    </div>
    <div class="works-single__container__content  sp">
      <?php echo do_shortcode('[ngg src="galleries" ids="12" display="basic_imagebrowser"]'); ?>
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
