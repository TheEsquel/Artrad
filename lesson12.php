<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Артрад</title>-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"-->
<!--          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->
<!--    <link rel="stylesheet"  type="text/css" href="css/style.css">-->
<!--    <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">-->
<!--</head>-->
<!--<body>-->
<!--<div id="background"></div>-->
<!--<header>-->
<!--    <div class="container">-->
<!--        <div id="header1">-->
<!--            <button class="button_lang">English</button>-->
<!--            <div class="logo"></div>-->
<!--        </div>-->
<!--        <div id="header2">-->
<!--            <h2>Радужный путь художника</h2>-->
<!--            <h1>Ляли</h1>-->
<!--            <h1>Асадуллиной</h1>-->
<!--        </div>-->
<!--        <div id="header3">-->
<!--            <div id="portrait"></div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--    <div class="menu" id="horizontal">-->
<!--        <a href="index.html"><div class="menu-item">Главная</div></a>-->
<!--        <a href="gallery.html"><div class="menu-item">Галерея</div></a>-->
<!--        <a href="order.html"><div class="menu-item">Заказы</div></a>-->
<!--        <a href="writing.html"><div class="menu-item">Сочинения</div></a>-->
<!--        <a href="exhibition.html"><div class="menu-item">Выставки</div></a>-->
<!--        <a href="about.html"><div class="menu-item">Обо мне</div></a>-->
<!--        <a href="contacts.html"><div class="menu-item">Контакты</div></a>-->
<!--    </div>-->
<!---->
<!--</header>-->
<!--<main>-->
<!--    <div class="container">-->
<!---->
<!---->
<!---->
<!--    </div>-->
<!--</main>-->
<!--<footer>-->
<!--    <div class="container">-->
<!--        <p>&copy; Все права защищены</p>-->
<!--    </div>-->
<!--</footer>-->
<!--</body>-->
<!--</html>-->
<div class="content wrapper">
    <?php foreach ( $goods  as $good): ?>

        <img src="/img/kazan_street.jpg" alt="" class="main-picture-item">
        <? echo  $goods ?>


    <?php endforeach; ?>
</div>
