<?
$PAGE['meta_title'] = "Главная";
$page = 'index';
include($_SERVER['DOCUMENT_ROOT']."/templates/main/header.tpl.php");
?>
  <div class="main-slider poster-slider-layout">
    <div class="poster-slider js-posterSlider">
      <?for ($i = 0; $i < 4; $i++) {?>
        <div class="poster-slider__item poster-slider-item">
          <div class="poster-slider-item__poster" style="background-image: url('/uploads/films/slider/main/nuestros-amantes.jpg');"></div>
          <div class="poster-slider-item__content">
            <div class="poster-slider-item__subttl">Nuestros amantes</div>
            <div class="poster-slider-item__ttl">Наши любовники</div>
            <div class="poster-slider-item__text">
              <p>Карлос — умный и привлекательный, но выглядит грустно, будто судьба совсем не балует его. Однажды он отправляется в книжный бар, чтобы впервые в жизни выпить бренди. Ирен — прирожденная выдумщица и завсегдатай этого места.</p>
            </div>
          </div>
        </div>
      <?}?>
    </div>
    <div class="poster-slider-arrows"></div>
    <div class="slider-progress">
      <div class="slider-progress__progress"></div>
    </div>
  </div>

  <div class="main-block">
    <div class="main-desc">
      <div class="ttl-base">О фестивале</div>
      <div class="main-desc__text">
        <p>Дорогие друзья! В двенадцатый раз вы принимаете у себя кинофестиваль из стран Европейского Союза. Много изменилось в мире с тех пор, как мы вместе стартовали в кинотеатре «Заря» в 2005 году. Но одно остается неизменным – наш с вами ежегодный кинопраздник здесь, в Калининграде. С каждым годом растет его масштаб и охват. В этом году вашему вниманию будут представлены 50 кинофильмов из 25 стран ЕС. Фестиваль стал связующим звеном между любителями кино, видными деятелями культуры и лучшими кинолентами Европы.</p>
        <a class="main-desc__btn btn btn_primary btn_arrow" href="#">Подробнее о фестивале
          <svg class="svg-icon icon-arrow">
            <use xlink:href="/skin/images/svg-sprite.svg#arrow"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>

  <div class="main-block main-block_dark-bckg">
    <div class="films-block">
      <div class="films-block__ttl ttl-base ttl-base_more-btn">
        <span>Фильмы</span>
        <a class="btn btn_primary btn_arrow" href="#">
          Все фильмы фестиваля
          <svg class="svg-icon icon-arrow">
            <use xlink:href="/skin/images/svg-sprite.svg#arrow"></use>
          </svg></a>
      </div>
      <div class="films-block__list">
        <?for ($i = 0; $i < 4; $i++) {?>
        <div class="films-block__item">
          <a class="films-block__item-img" href="#">
            <div class="atvImg">
              <div class="atvImg-layer" data-img="/uploads/films/pre/ozzy-bckg-layer.jpg"></div>
              <div class="atvImg-layer" data-img="/uploads/films/pre/ozzy-layer3.png"></div>
              <div class="atvImg-layer" data-img="/uploads/films/pre/ozzy-layer2.png"></div>
              <div class="atvImg-layer" data-img="/uploads/films/pre/ozzy-layer4.png"></div>
            </div>
          </a>
          <div class="films-block__item-ttl"><a href="#">Большой собачий побег</a></div>
          <div class="films-block__item-desc">2016  —  Испания, Канада</div>
        </div>
        <?}?>


        <?/*?>
        <div class="films-block__item">
          <div class="films-block__item-img">
            <a href="#" class="films-block__item-img-link">
              <div class="shine"></div>
              <div class="layer-1" data-offset="1" style="background-image: url('/uploads/films/pre/ozzy-bckg-layer.jpg')"></div>
              <div class="layer-3" data-offset="2" style="background-image: url('/uploads/films/pre/ozzy-layer3.png')"></div>
              <div class="layer-2" data-offset="5" style="background-image: url('/uploads/films/pre/ozzy-layer2.png')"></div>
              <div class="layer-4" data-offset="2" style="background-image: url('/uploads/films/pre/ozzy-layer4.png')"></div>
              <?/*?>
              <img class="films-block__item-img-layer1" src="/uploads/films/pre/ozzy-bckg-layer.jpg" alt="Мультфильм Большой собачий побег (2016)"/>
              <img class="films-block__item-img-layer2" src="/uploads/films/pre/ozzy-layer2.png" alt="Мультфильм Большой собачий побег (2016)"/>
              <img class="films-block__item-img-layer3" src="/uploads/films/pre/ozzy-layer3.png" alt="Мультфильм Большой собачий побег (2016)"/>
              <img class="films-block__item-img-layer4" src="/uploads/films/pre/ozzy-layer4.png" alt="Мультфильм Большой собачий побег (2016)"/>
<?/?>
            </a>
          </div>
          <div class="films-block__item-ttl"><a href="#">Большой собачий побег</a></div>
          <div class="films-block__item-desc">2016  —  Испания, Канада</div>
        </div>
    <?*/?>
        <?/*?>
        <div class="films-block__item">
          <div class="films-block__item-img">
            <a href="#">
              <div class="shine"></div>
              <img src="/uploads/films/pre/i-daniel-blake.jpg" alt="Фильм Я, Дэниел Блэйк (2016)"/>
            </a>
          </div>
          <div class="films-block__item-ttl"><a href="#">Я, Дэниел Блэйк</a></div>
          <div class="films-block__item-desc">2016  —  Великобритания, Франция, Бельгия</div>
        </div>
        <div class="films-block__item">
          <div class="films-block__item-img">
            <a href="#">
              <div class="shine"></div>
              <img src="/uploads/films/pre/aferim.jpg" alt="Фильм Браво! (2016)"/>
            </a>
          </div>
          <div class="films-block__item-ttl"><a href="#">Браво!</a></div>
          <div class="films-block__item-desc">2016  —  Румыния, Болгария, Чехия</div>
        </div>
        <div class="films-block__item">
          <div class="films-block__item-img">
            <a href="#">
              <div class="shine"></div>
              <img src="/uploads/films/pre/odyssey.jpg" alt="Фильм Одиссея (2016)"/>
            </a>
          </div>
          <div class="films-block__item-ttl"><a href="#">Одиссея</a></div>
          <div class="films-block__item-desc">2016  —  Франция</div>
        </div>
        <?*/?>
      </div>
    </div>
  </div>


<?
include($_SERVER['DOCUMENT_ROOT']."/templates/main/footer.tpl.php");
?>