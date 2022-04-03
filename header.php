<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon"  href="/img/fav_logo.ico?<?php echo time();?>">
  <script src="https://use.fontawesome.com/e8a42d7e14.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/style.css?<?php echo time() ?>">
  <title><?php print_r(Contacts::$tag_title);?></title>
</head>
<body>
  <pre><?php print_r(Contacts::$supplement_status); ?></pre>
  <div class="header">
    <div class="header_container">
      <div class="header_menu">
        <div class="header_menu-item">
          <a href="<?php echo Contacts::$main_site_url;?>">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            На главную
          </a>
        </div>
        <!-- <div class="header_menu-item">
          <a href="https://семейныйлагерь.рф/history">О нас</a>
        </div>
        <div class="header_menu-item">
          <a href="https://семейныйлагерь.рф/personnel">Ведущие</a>
        </div>
        <div class="header_menu-item">
          <a href="https://семейныйлагерь.рф/comments">Отзывы</a>
        </div> -->
      </div>
      <div class="logo_wrapper">
        <a href="<?php echo Contacts::$main_site_url;?>">
          <img src="img/header-logo.png?v=<?php echo time();?>" alt="Семейный лагерь" class="logo">
        </a>
      </div>
      <div class="header_contacts">
        <div>
          <a href="tel:<?php echo Contacts::$site_phone; ?>">
            <?php echo Contacts::$site_phone; ?>
          </a>
        </div>
        <div>
          <?php foreach (Contacts::$social_icons_list as $key => $value): ?>
            <a href="<?php echo $value['value'] ?>" class="soc_link">
              <i class="fa fa-<?php  echo $value['icon'];?>" aria-hidden="true"></i>
            </a>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>