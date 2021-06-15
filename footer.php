    <footer class="footer">
      <div class="footer-inner">
        <div class="footer-logo">
          <p>©三浦半島研究会 All Rights Reserved.</p>
        </div>
      </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/js/seemore.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        // scrollbar: {
        //     el: '.swiper-scrollbar',
        // },
        });
    </script>

    <?php wp_footer(); ?>
  </body>
</html>
