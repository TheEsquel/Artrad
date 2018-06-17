<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Артрад</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div id="background"></div>
<header>
    <div class="container">
        <div id="header1">
            <button class="button_lang">English</button>
            <div class="logo"></div>
        </div>
        <div id="header2">
            <h2>Радужный путь художника</h2>
            <h1>Ляли</h1>
            <h1>Асадуллиной</h1>
        </div>
        <div id="header3">

            <div id="portrait"></div>
        </div>
    </div>
    <div class="menu" id="horizontal">
        <a href="index.php?page=main"><div class="menu-item">Главная</div></a>
        <a href="index.php?page=gallery"><div class="menu-item">Галерея</div></a>
        <a href="index.php?page=order"><div class="menu-item">Заказы</div></a>
        <a href="index.php?page=writing"><div class="menu-item">Сочинения</div></a>
        <a href="index.php?page=exhibition"><div class="menu-item">Выставки</div></a>
        <a href="index.php?page=about"><div class="menu-item">Обо мне</div></a>
        <a href="index.php?page=contacts"><div class="menu-item">Контакты</div></a>
    </div>
</header>
<main>
    <div class="container">


        <?php

        $page = $_GET['page'];
        $pictures = [
            [
                    'description' => 'Казанская улица',
                    'url' => 'img/kazan_street.jpg',
                    'width' => '1280',
                    'height' => '909'
                ],[
                    'description' => 'Тихая Гавань',
                    'url' => 'img/silent_harbour.jpg',
                    'width' => '1280',
                    'height' => '909'
                ],[
                    'description' => 'Софьюшкина аллея',
                    'url' => 'img/sofia_alley.jpg',
                    'width' => '1280',
                    'height' => '960'
                ]

        ];

        

        if ($page == 'main'){
            require ('main.php');
        } elseif ($page == 'gallery') {
            require ('gallery.php');
        } elseif ($page == 'portraits'){
            require ('portraits.php');
        } elseif ($page == 'walking_ufa'){
            require ('walking_ufa.php');
        } elseif ($page == 'order') {
            require ('order.php');
        } elseif ($page == 'writing') {
            require('writing.php');
        } elseif ($page == 'poems'){
            require ('poems.php');
        } elseif ($page == 'articles') {
            require('articles.php');
        } elseif ($page == 'projects') {
            require('projects.php');
        } elseif ($page == 'exhibition'){
            require ('exhibition.php');
        } elseif ($page == 'about'){
            require ('about.php');
        } elseif ($page == 'contacts'){
            require ('contacts.php');
        }
        ?>

    </div>
</main>
<footer>
    <div class="container">
        <p>&copy; Все права защищены</p>
    </div>
</footer>
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
