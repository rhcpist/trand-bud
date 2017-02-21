<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ru">
    <meta charset="utf-8">
    <title>Trend-Bud Кирпич и строительные материалы в городе Киеве</title>
    <meta name="description" content="Прямые поставки строительных материалов с заводов Украины в городе Киев.
    ЖБИ, Газобетонные блоки, Кирпич, строительные смеси, склад в Киеве, доставка по Украине, +38 (098) 469-49-16, +38 (066) 365-29-31, +38 (073) 046-67-96">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="/css/normalize.css"/>
    <link type="text/css" rel="stylesheet" href="/css/webflow.css"/>
    <link type="text/css" rel="stylesheet" href="/css/trend-bud.webflow.css"/>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="/image/x-icon" href="/images/trend-bud-favicon.png">
    <link rel="apple-touch-icon" href="/images/trend-bud-Webclip.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
<body>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-contain="1" data-easing="ease-in-out" data-easing2="ease-in-out" class="w-nav nav-menu">
    <div class="w-container">
      <a href="/" class="w-nav-brand logo-link"><img width="100" src="/images/trend-bud-logo3.png" data-ix="load" class="logo-trande-bud">
      </a>
      <div data-ix="load-5" class="w-hidden-medium w-hidden-small w-hidden-tiny w-clearfix cont-div">
        <div class="w-embed code _1"><i class="fa fa-phone"></i>
        </div>
        <div class="txt _2">+38&nbsp;(098) 469-49-16</div>
        <div class="txt _2">+38&nbsp;(066) 365-29-31</div>
        <div class="txt _2">+38&nbsp;(073) 046-67-96</div>
      </div>
      <nav role="navigation" class="w-nav-menu dd-menu">
        <div data-delay="0" class="w-dropdown w-clearfix">
          <div data-ix="load-6-hoover" class="w-dropdown-toggle drop-down">
            <div class="drop-text">Каталог</div>
            <div class="w-icon-dropdown-toggle ico-drop-down"></div>
          </div>
          <nav class="w-dropdown-list dl">
            <div class="w-dyn-list">
              <div class="w-dyn-items w-row w-clearfix dlo">
                <?php foreach ($product_category as $item) : ?> 
                    <div class="w-dyn-item w-col w-col-6 nav-bloc">
                        <a class="nav-link _2" href="/category/<?=$item['id'];?>"><?=$item['title'];?></a>
                    </div>
                <?php endforeach;?>
              </div>
              <!--<div class="w-dyn-empty">
                <p>No items found.</p>
              </div>-->
            </div>
          </nav>
        </div><a href="#contact" data-ix="load-3" class="w-nav-link nav-link">Контакты</a><a href="#dostavka" data-ix="load-4" class="w-nav-link nav-link">Доставка</a>
      </nav>
      <div data-ix="load-5" class="w-hidden-main w-hidden-tiny w-clearfix cont-div _2">
        <div class="w-embed code _1"><i class="fa fa-phone"></i>
        </div>
        <div class="txt _2">+38&nbsp;(098) 469-49-16</div>
        <div class="txt _2">+38&nbsp;(066) 365-29-31</div>
        <div class="txt _2">+38&nbsp;(073) 046-67-96</div>
      </div>
      <div class="w-nav-button menu-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="w-section saction-slideshow">
    <div data-animation="cross" data-duration="500" data-infinite="1" data-easing="ease-in-out-quint" data-delay="4000" data-autoplay="1" class="w-slider hero-slidesow">
      <div class="w-slider-mask">
        <div class="w-slide">
          <h1 class="h1-sslide-show-right">СТРОИТЕЛЬНЫЕ МАТЕРИАЛЫ В КИЕВЕ</h1>
          <h2 class="h2-slide-show-right">Доступные цены, быстрая доставка</h2><img src="/images/background01.jpg">
        </div>
        <div class="w-slide">
          <h1 class="h1-sslide-show-right left">Облицовочный кирпич брусок красный</h1>
          <h2 class="h2-slide-show-right left">Всегда большой выбор</h2><img src="/images/background02.jpg">
        </div>
      </div>
      <div class="w-slider-arrow-left left-arrow">
        <div class="w-icon-slider-left icon-left"></div>
      </div>
      <div class="w-slider-arrow-right">
        <div class="w-icon-slider-right icon-right"></div>
      </div>
    </div>
  </div>
  <div class="w-section s1">
    <div class="w-container">
      <h1 class="name-h">Каталог</h1>
      <p class="p-for-catalog">«Трэнд–Буд» специализируется на продаже керамического кирпича в Украине. Мы отслеживаем мировые и отечественные тенденции, новинки и перспективные направления, работая с ведущими производителями и архитекторами, предлагая лучшее в каждом сегменте.&nbsp;Мы представляем все виды керамического кирпича, черепицы, клинкерной брусчатки, фасадной плитки, строительных смесей и сопутствующих материалов. Благодаря прямым связям с производителями и отлаженной логистике «Трэнд–Буд»&nbsp;может&nbsp;гарантировать лучшие цены&nbsp;и оптимальные условия сотрудничества</p>
    </div>
    <div class="w-container">
      <div class="w-dyn-list">
        <div class="w-dyn-items w-row w-clearfix">
          <?php foreach ($product_category as $item) : ?>
            <div class="w-dyn-item w-col w-col-4 category-bloc">
                <a class="w-inline-block link-product" href="/category/<?=$item['id']?>"><img class="img-category" src="/photo/<?=$item['photo_url'];?>">
              </a>
              <a class="h1-category"><?=$item['title'];?></a>
            </div>
          <?php endforeach; ?>
        </div>
        <!--<div class="w-dyn-empty">
          <p>No items found.</p>
        </div>-->
      </div>
    </div>
    <div class="w-container partner-cont">
      <h1 data-ix="new-interaction" class="name-h _2">Партнеры</h1>
      <div data-animation="slide" data-duration="500" data-easing="ease-in-out-quint" data-delay="4000" data-autoplay="1" data-infinite="1" class="w-slider slider-logo">
        <div class="w-slider-mask mlp">
          <div class="w-slide">
            <div class="company-s1"><img width="190" src="/images/SBK_zavodi-6.jpg" class="logo-partner">
            </div>
            <div class="company-s1"><img src="/images/ekaterinovsky kerpich.jpg" class="logo-partner">
            </div>
            <div class="company-s1"><img src="/images/prokeram.png" class="logo-partner">
            </div>
            <div class="company-s1"><img src="/images/Budmaster.jpg" class="logo-partner">
            </div>
            <div class="company-s1"><img src="/images/evroton.jpg" class="logo-partner">
            </div>
          </div>
          <div class="w-slide">
            <div class="company-s1"><img src="/images/15_kerameja.jpg" class="logo-partner">
            </div>
            <div class="company-s1"><img src="/images/stonelight-logo.png" class="logo-partner">
            </div>
            <div class="company-s1"><img src="/images/stolichniy asfaltoviy zavod.gif" class="logo-partner">
            </div>
            <div class="company-s1"><img src="/images/jksv.png" class="logo-partner">
            </div>
            <div class="company-s1"><img src="/images/HSM.png" class="logo-partner">
            </div>
          </div>
          <div class="w-slide">
            <div class="company-s1"></div>
            <div class="company-s1"><img src="/images/agro bud indastry.png" class="logo-partner">
            </div>
            <div class="company-s1"><img src="/images/Aeroc_logo_smal.jpg" class="logo-partner">
            </div>
            <div class="company-s1"><img src="/images/bc_logo.png" class="logo-partner">
            </div>
            <div class="company-s1"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="contact" class="w-section section-contact">
    <div class="div-contact">
      <div data-ix="new-interaction" class="w-container cont">
        <h1 class="name-h _2">Контакты</h1>
        <div class="nomber">
          <div class="w-row row-contact">
            <div class="w-col w-col-4 w-clearfix colum-contact">
              <div class="w-embed code _2 new _1"><i class="fa fa-phone"></i>
              </div>
              <div class="contact-text _2 _1">+38&nbsp;(098) 469-49-16
                <br>+38&nbsp;(066) 365-29-31
                <br>+38&nbsp;(073) 046-67-96</div>
            </div>
            <div class="w-col w-col-4 w-clearfix colum-contact _1">
              <div class="w-embed code _2 new _1 contact"><i class="fa fa-envelope"></i>
              </div><a href="mailto:trend-bud@i.ua?subject=trend-bud" class="contact-text _2">trend-bud@i.ua</a>
            </div>
            <div class="w-col w-col-4 w-clearfix colum-contact _2">
              <div class="w-embed code _2 new _1 contact"><i class="fa fa-map-marker"></i>
              </div>
              <div class="contact-text _2 _3">03083 г. Киев,
                <br>ул. Червонопрапорна 34, корп. 7</div>
            </div>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-8">
            <div class="w-form">
              <form id="email-form" name="email-form" data-name="Email Form" class="form-body">
                <label for="node" class="contact-text">Ваше имя, телефон</label>
                <input id="node" type="text" placeholder="Введите Ваше имя и телефон" data-name="Имя телефон" required="required" class="w-input contact-text">
                <label for="email" class="contact-text">Ваш Email:</label>
                <input id="email" type="email" placeholder="Введите Email" name="email" data-name="Email" required="required" class="w-input contact-text">
                <input type="submit" value="Обратный званок" data-wait="Please wait..." class="w-button buton">
              </form>
              <div class="w-form-done">
                <p>Thank you! Your submission has been received!</p>
              </div>
              <div class="w-form-fail">
                <p>Oops! Something went wrong while submitting the form</p>
              </div>
            </div>
            <p class="p-for-catalog new">«Трэнд–Буд» специализируется на продаже керамического кирпича в Украине. Мы отслеживаем мировые и отечественные тенденции, новинки и перспективные направления, работая с ведущими производителями и архитекторами, предлагая лучшее в каждом сегменте.&nbsp;</p>
          </div>
          <div class="w-col w-col-4">
            <div data-widget-latlng="50.37313,30.548007" data-widget-style="terrain" data-widget-zoom="14" data-widget-tooltip="Trend-Bud, (098) 469-49-16" data-disable-touch="1" data-disable-scroll="1" class="w-widget w-widget-map w-preserve-3d map"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="dostavka" class="w-section section-dostavka">
    <div class="w-container">
      <h1 data-ix="new-interaction" class="name-h _2">Доставка</h1>
      <div class="w-row rc">
        <div class="w-col w-col-3"><img src="/images/dostavka.png" class="ico-dostavka">
        </div>
        <div class="w-col w-col-9">
          <div data-ix="new-interaction" class="w-row">
            <div class="w-col w-col-4 colum-dostavk">
              <h2 class="h2-dostavka">Самовывоз:</h2>
              <p class="dostavka-txt">Свяжитесь с менеджером</p>
            </div>
            <div class="w-col w-col-4 colum-dostavk">
              <h2 class="h2-dostavka">Адрес склада:</h2>
              <p class="dostavka-txt">Со склада в г.Кеве</p>
            </div>
            <div class="w-col w-col-4 colum-dostavk">
              <h2 class="h2-dostavka">График работы склада:</h2>
              <p class="dostavka-txt">Пн. - Пт.&nbsp;8:00 - 17:00
                <br>Сб.&nbsp;9:00 - 13:00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-footer">
      <div class="w-container">
        <div class="footer-txt">made by: ZeeZeeZaZuZu Studio</div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="/js/webflow.js"></script>
  <script type="text/javascript" src="/js/modernizr.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>