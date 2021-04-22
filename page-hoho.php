<?php
    /**
    * Template Name: hoho page
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
      三崎カルチャーマガジン「ホホ」
      </h2>
    </div>
  </div>
  <p class="works-single__heading__date">
    2020年5月30日発行
  </p>
  <div class="works-single__container">
    <div class="works-single__container__content">
      <?php echo do_shortcode('[ngg src="galleries" ids="4" sortorder="217,225,224,223,222,221,220,219,218" display="basic_imagebrowser"]'); ?>
    </div>
    <div class="works-single__container__txt text">
      <p>
      三崎の文化は、あけっぴろげで、魅力的。むき出しで、チャーミング。

      </p>
      <p>
      どこか懐かしく、それでいて「特別」だと感じる、そんな三崎の「おいしいトコロ」を集めました。
      </p>
      <p>
      噛めば噛むほどじんわりウマい、三崎カルチャーマガジン「ホホ」。
      </p>
      <p>
      通し企画「三崎と○○」、三崎二大町中華屋による対談企画も見どころです。
      </p>
    </div>
    <a href="https://mihanken.com/works" class="btn">
      < BACK
    </a>
  </div>
</div>
<?php get_footer(); ?>