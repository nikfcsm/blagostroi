<footer>
      <div class="container">
        <div class="footer-wrapper">
          <a class="footer-logo" href=""><img src="/img/home/logo.png" alt=""></a>
          <div class="footer-info">
            <div class="footer-menu">
              <a href="">УСЛУГИ</a>
              <a href="">АРЕНДА</a>
              <a href="">ПОРТФОЛИО</a>
              <a href="">ЦЕНЫ</a>
              <a href="">О НАС</a>
              <a href="">КОНТАКТЫ</a>
            </div>
            <div class="footer-slogan">БЕРЕМ НА СЕБЯ ОТВЕТСТВЕННОСТЬ ЗА ВАШ УЧАСТОК</div>
          </div>
        </div>
        <div class="footer-made">Сайт разработан Groupnet</div>
      </div>
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <script src="/js/owlcarousel/owl.carousel.min.js"></script>

      <script>
        $('.owl-carousel-slider').owlCarousel({
          loop: true,
          navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
          nav: true,

          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 1
            },
            1000: {
              items: 1
            }
          }
        })
      </script>
      <script>
        var dots = $('.owl-dots').css('position', 'absolute').css('bottom', '35px');
        dots.css('left', 'calc(50% - ' + dots.width() / 2 + 'px)');
      </script>
    </footer>
  </body>
</html>