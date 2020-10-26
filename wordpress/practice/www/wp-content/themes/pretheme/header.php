<!DOCTYPE html>
<html>

<head>
  <!-- 裏設定エリアの開始 -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8"><!-- 文字化け防止 -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
  <?php wp_head(); ?>
</head><!-- 裏設定エリアの終了 -->

<body>
  <!-- 画面に表示されるエリアの開始 -->
  <!-- header -->
  <header>

    <ul class="nav-list">
      <li class="nav-list-item"><a href="<?php echo get_page_link(82); ?>">about</a></li>
      <li class="nav-list-item"><a href="<?php echo get_page_link(16); ?>">menu</a></li>
      <li class="nav-list-item"><a href="<?php echo get_page_link(28); ?>">blog</a></li>
      <li class="nav-list-item"><a href="<?php echo get_page_link(14); ?>">gallery</a></li>
      <li class="nav-list-item"><a href="https://reservia.jp/reserve/login/4107">reserved</a></li>

    </ul>
    <figure>
      <a href="<?php echo get_page_link(12); ?>">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/header/logo.png">
      </a>
      <img class="mail" src="<?php echo get_template_directory_uri(); ?>/assets/header/mail.png">
      <img class="phone" src="<?php echo get_template_directory_uri(); ?>/assets/header/phone.png">
    </figure>
  </header>
  <div class="content">
