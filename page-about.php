<?php
    /**
    * Template Name: about page
    */
?>

<?php get_header(); ?>
<div class="hero__section about__hero-img">
  <h1 class="page-title">
    ABOUT
  </h1>
</div>
<div class="wrapper">
  <main>
    <section>
      <div class="section_about">
        <h2 class="section__title fadein">
          Organization
        </h2>
        <hr class="headline-bar">
        <div class="section">
          <p class="text paragraph">
          三浦半島研究会は、2018年度横浜市立大学公認サークルとして発足されました。
          </p>
          <p class="text paragraph">
          その後実績が認められ、2020年度には正式な文化系部活動へと昇格を果たしました。
          </p>
          <p class="text paragraph">
          「三浦半島ジャーナル」の発刊をメインの活動とし、現在まで計7号発行しています。
          </p>
          <p class="text paragraph">
          現在約50名で運営され、三浦半島内でさまざまなクリエイティブを制作するほか、
          </p>
          <p class="text paragraph">
          三浦半島を盛り上げるためのやイベント開催なども手がけています。
          </p>
        </div>
          <div class="about">
            <div class="about__flex-box about__flex-box_gray">
              <div class="about__flex-box--head txt">
                名称
              </div>
              <div class="about__flex-box--content txt">
                横浜市立大学公認サークル三浦半島研究会
              </div>
            </div>
            <div class="about__flex-box about__flex-box_white">
              <div class="about__flex-box--head txt">
                活動拠点
              </div>
              <div class="about__flex-box--content txt">
                金沢八景
              </div>
            </div>
            <div class="about__flex-box about__flex-box_gray">
              <div class="about__flex-box--head txt">
                連絡先
              </div>
              <div class="about__flex-box--content txt">
                mihanken@gmail.com
              </div>
            </div>
            <div class="about__flex-box about__flex-box_white">
              <div class="about__flex-box--head txt">
                活動内容
              </div>
              <div class="about__flex-box--content txt">
                  三浦半島にまつわるクリエイティブ制作
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="section">
      <h2 class="section__title fadein">
        News
      </h2>
      <hr class="headline-bar">
      <div class="section__flex-box">
        <!-- flex-wrapしてから表示する -->
        <div class="section__flex-box--item">
          <figure>
            <a href="https://www.townnews.co.jp/0110/amp/2021/04/08/569216.html" target="_blank">
              <img class="flex-box__item--img a__img" src="<?php echo get_template_directory_uri(); ?>/images/marche.jpeg" alt="タウンニュース掲載写真">
            </a>
            <div class="frame__img">
            </div>
            <figcaption>
              <figcaption class="flex-box__item--title">
                <a href="https://www.townnews.co.jp/0110/amp/2021/04/08/569216.html" target="_blank">
                地元の食の魅力を発信
                  <br>
                  学生主催の｢ちいさな駅前…
                </a>
              </figcaption>
              <figcaption class="flex-box__item--date">
              2021.04.08　｜　MEDIA
              </p>
            </figcaption>
          </figure>
        </div>
        <div class="section__flex-box--item">
          <figure>
            <a href="https://megalodon.jp/2020-0421-1228-00/https://zushi-hayama.keizai.biz:443/headline/137/" target="_blank">
              <img class="flex-box__item--img a__img" src="<?php echo get_template_directory_uri(); ?>/images/media__001.jpg" alt="逗子葉山経済新聞掲載写真">
            </a>
            <div class="frame__img">
            </div>
            <figcaption class="flex-box__item--title">
              <a href="https://zushi-hayama.keizai.biz/headline/137/" target="_blank">
                横浜市立大学生制作の機関誌
                <br>
                「三浦半島ジャーナル」で…
              </a>
            </figcaption>
            <figcaption class="flex-box__item--date">
              2019.01.20　｜　MEDIA
            </figcaption>
          </figure>
        </div>
        <div class="section__flex-box--item mtop40">
          <figure>
            <a href="https://www.townnews.co.jp/0501/2018/08/10/444118.html" target="_blank">
              <img class="flex-box__item--img a__img" src="<?php echo get_template_directory_uri(); ?>/images/media__002.jpg" alt="タウンニュース掲載写真">
            </a>
            <div class="frame__img">
            </div>
            <figcaption>
              <figcaption class="flex-box__item--title">
                <a href="https://www.townnews.co.jp/0501/2018/08/10/444118.html" target="_blank">
                  学生が感じた文化の息遣い
                  <br>
                  横浜市大生が「三浦半島ジ…
                </a>
              </figcaption>
              <figcaption class="flex-box__item--date">
                2018.08.10　｜　MEDIA
              </p>
            </figcaption>
          </figure>
        </div>
        
      </div>
    </div>
  </section>
</main>
</div>
<?php get_footer(); ?>
