<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php wp_title('«', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php wp_head(); ?>
    <link rel='stylesheet' id='font-style-css'
          href='http://fonts.googleapis.com/css?family=Oswald%3A400%2C300&#038;ver=4.7-beta1-39117' type='text/css'
          media='all'/>
</head>
<body>
<div class="header_top">
</div>
<div class="clr"></div>
<div id="wrapper">
    <header id="header">
        <div class="header_menu">
            <a href="/">КОМПАНИЯ</a><br/>
            <span>У нас самые низкие цены в Москве, потому что мы работаем без посредников.</span>
        </div>
        <div class="header_menu">
            <a href="/">ПРОДУКЦИЯ</a><br/>
            <span>Если Вы найдете в Москве дешевле, то мы вернем Вам разницу. </span>
        </div>
        <div class="header_logo">
            <a href="/"><img src="<?= get_stylesheet_directory_uri(); ?>/images/logo.png"/></a>
        </div>
        <div class="header_menu">
            <a href="<?=get_site_url()?>/category/blog">СТАТЬИ И СОВЕТЫ</a><br/>
            <span>Мы осуществляем бесплатную доставку по Москве при заказе от 2 тыс. руб.</span>
        </div>
        <div class="header_menu header_menu_last">
            <a href="<?=get_site_url()?>/contacts">КОНТАКТЫ</a><br/>
            <span>Как нас найти и не заблудиться</span>
        </div>
    </header>
    <div id="content">
    <div class="top_headings">
        <h2 class="headings_title">СИБИРСКОЕ ЗДОРОВЬЕ </h2>
        <h3 class="headings_title_bott">ИЗ АЛТАЙСКИХ ГОР</h3>
    </div>
