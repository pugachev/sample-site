<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/style.css'); ?> ">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body>

<div id="container">

<header>
    <h1 id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_file_uri('images/logo.png');?>" alt="SAMPLE SITE"></a></h1>
    
    <?php if(is_home() || is_front_page()): ?>
        <aside id="mainimg"><img src="<?php echo get_theme_file_uri('images/mainimg.jpg');?>" alt=""></aside>
    <?php endif; ?>
</header>

<nav id="menubar">
    <ul>
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo home_url(); ?>/about/">About</a></li>
        <li><a href="<?php echo home_url(); ?>/gallery/">Gallery</a></li>
        <li><a href="<?php echo home_url(); ?>/link/">Link</a></li>
    </ul>
</nav>

<div id="contents">