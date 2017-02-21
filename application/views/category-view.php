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
        </div><a href="<?php echo base_url();?>#contact" data-ix="load-3" class="w-nav-link nav-link">Контакты</a><a href="<?php echo base_url();?>#dostavka" data-ix="load-4" class="w-nav-link nav-link">Доставка</a>
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
  <div class="w-section">
    <div data-ix="3d" class="w-container w-preserve-3d info-category">
        <?php foreach ($some_category as $item) : ?>
      <div class="w-row">
        <div class="w-col w-col-5"><img class="img-category-page" src="/photo/<?=$item['photo_url'];?>">
        </div>
        <div class="w-col w-col-7">
          <h1 class="h1-category-page"><?=$item['title'];?></h1>
          <h2 class="h2-category-page"><?=$item['description'];?></h2>
        </div>
      </div>
        <?php endforeach; ?>  
    </div>
  </div>
  <div class="w-section product-section">
    <div class="w-container">
      <div class="w-dyn-list ps"_CONTEXT">
        <div class="w-dyn-items w-row dynamic-product">
          <?php foreach ($products as $product) : ?>
            <div data-ix="load-2" class="w-dyn-item w-col w-col-3 w-clearfix tovar-position"><img class="akcia" src="/images/<?=$product['akcia']?$product['akcia']:'empty.png'?>"><img class="tovar-img" src="/photo/<?=$product['photo_url']?>">
            <h3 class="h3-tovar"><?=$product['title'];?></h3>
            <div class="description-product"><?=$product['description'];?></div>
            <h4 class="price"><?=$product['price'];?></h4>
          </div>
          <?php endforeach;?>
        </div>
        <!--<div class="w-dyn-empty">
          <p>No items found.</p>
        </div>-->
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="/js/webflow.js"></script>
  <script type="text/javascript" src="/js/modernizr.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>