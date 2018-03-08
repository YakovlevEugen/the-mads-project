<?
$PAGE['meta_title'] = "Элементы дизайна";
include($_SERVER['DOCUMENT_ROOT']."/templates/header.tpl.php");
?>

<div class="layout-main">
    <div class="design-elements">
        <div class="design-elements__row">
            <div class="design-elements__item">
                <div class="ttl-base">Заголовки</div>
                <div class="content">
                    <h1>Заголовок h1</h1>
                    <h2>Заголовок h2</h2>
                    <h3>Заголовок h3</h3>
                    <h4>Заголовок h4</h4>
                    <h5>Заголовок h5</h5>
                    <h6>Заголовок h6</h6>
                </div>
            </div>
            <div class="design-elements__item">
              <div class="ttl-base">Кнопки</div>
              <a href="#order" class="js-openDialogAjax btn btn_primary" data-title="Оставьте заявку">Купить билеты</a>
              <a href="#" class="btn btn_primary btn_arrow" data-title="Оставьте заявку">
                Подробней о фестивале
                <svg class="svg-icon icon-arrow">
                  <use xlink:href="/skin/images/svg-sprite.svg#arrow"></use>
                </svg>
              </a>
            </div>
        </div>
        <div class="design-elements__row">
            <div class="design-elements__item">
              <div class="ttl-base">Элементы форм</div>
              <div class="grid">
                <div class="grid__cell">
                  <div class="form-base">
                    <div class="form-base__field">
                      <input type="text" name="name" placeholder="Имя" class="inp-base">
                    </div>
                    <div class="form-base__field">
                      <input type="email" name="email" placeholder="Email" class="inp-base">
                    </div>
                    <div class="form-base__field">
                      <input type="text" name="phone" placeholder="Телефон" class="inp-base">
                    </div>
                  </div>
                </div>
                <div class="grid__cell">
                  <textarea name="message" placeholder="Ваше сообщение" class="textarea-base"></textarea>
                </div>
              </div>
              <div class="grid">
                <div class="grid__cell">
                  <label class="switch"><input type="radio" name="radio" class="switch__inp" checked><span class="switch__el"></span> radio 1</label>
                </div>
                <div class="grid__cell">
                  <label class="switch"><input type="radio" name="radio" class="switch__inp" checked><span class="switch__el"></span> radio 2</label>
                </div>
                <div class="grid__cell">
                  <label class="switch"><input type="checkbox" name="checkbox" class="switch__inp" checked><span class="switch__el"></span> checkbox</label>
                </div>
              </div>
            </div>
            <div class="design-elements__item">
                <div class="ttl-base">
                    <div class="ttl-base__text">Иконки</div>
                </div>
                <div class="grid">
                    <div class="grid__cell">
                        <h4>svg</h4>
                        <?
                        $dir  = $_SERVER['DOCUMENT_ROOT'].'/skin/images/svg-sprite/';
                        $files = scandir($dir);
                        foreach ($files as $file){
                          $file = substr($file, 0, -4);
                          if ($file) {?>
                            <svg class="svg-icon icon-<?=$file?>">
                              <use xlink:href="/skin/images/svg-sprite.svg#<?=$file?>"></use>
                            </svg>
                          <?}
                        }?>
                    </div>
                    <div class="grid__cell">
                        <h4>png</h4>
                        <span class="icon icon-checkbox"></span>
                        <span class="icon icon-wishlist"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="design-elements__row">
            <div class="design-elements__item">
                <div class="ttl-base">Контент</div>
                <div class="content">
                    <div class="grid">
                        <div class="grid__cell">
                            <p>Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я. Я так счастлив, мой друг, так упоен ощущением покоя, что искусство мое страдает от этого. Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты. Когда от милой моей долины поднимается пар и полдневное солнце стоит над непроницаемой чащей темного леса и лишь редкий луч проскальзывает в его святая святых, а я лежу в высокой траве у быстрого ручья и, прильнув к земле, вижу тысячи всевозможных былинок и чувствую, как близок моему сердцу крошечный мирок, что снует между стебельками, наблюдаю эти неисчислимые, непостижимые разновидности червяков и мошек и чувствую близость всемогущего, создавшего нас по своему подобию, веяние вселюбящего, судившего нам парить в вечном блаженстве, когда взор мой туманится и все вокруг меня и небо надо мной запечатлены в моей душе, точно образ возлюбленной, - тогда, дорогой друг, меня часто томит мысль: "Ах! Как бы выразить, как бы вдохнуть в рисунок то, что так полно, так трепетно живет во мне, запечатлеть отражение моей души, как душа моя - отражение предвечного бога!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?
include($_SERVER['DOCUMENT_ROOT']."/templates/footer.tpl.php");
?>