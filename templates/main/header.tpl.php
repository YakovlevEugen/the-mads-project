<?include($_SERVER['DOCUMENT_ROOT']."/templates/header.tpl.php")?>
<div class="main-container">
  <header class="main-header">
    <aside class="header-aside">
      <div class="header-aside__top">
        <div class="header-aside__ttl">
          <span class="header-aside__ttl-num">13</span>
          <span class="header-aside__ttl-text">Фестиваль<br>кино</span>
        </div>

        <div class="header-aside__city change-city">
          <div class="change-city__ttl">Город:</div>
          <select class="change-city__select" name="city-select">
            <option value="1">Калининград</option>
            <option value="2">Москва</option>
            <option value="3">Большой куяш</option>
          </select>
        </div>
      </div>

      <nav class="header-aside__menu menu">
        <ul class="menu__list">
          <li class="menu__item"><a href="#" class="menu__link">О фестивале</a></li>
          <li class="menu__item"><a href="#" class="menu__link">Фильмы</a></li>
          <li class="menu__item"><a href="#" class="menu__link">Расписание</a></li>
          <li class="menu__item"><a href="#" class="menu__link">Фото</a></li>
          <li class="menu__item"><a href="#" class="menu__link">Контакты</a></li>
          <li class="menu__item"><a href="#" class="menu__link">Архив</a></li>
        </ul>
      </nav>

      <div class="header-aside__btns">
        <a class="btn btn_primary js-openDialogAjax" href="#order" data-title="Заказать билет">Купить билет</a>
        <div class="poster-slider-dots mt_20"></div>
      </div>
    </aside>
  </header>

  <div class="main-content">
    <main class="main-center">