
<div class="menu" id="vertical">
    <a href="index.php?page=poems"><div class="menu-item">Стихи</div></a>
    <a href="index.php?page=articles"><div class="menu-item">Статьи</div></a>
    <a href="index.php?page=projects"><div class="menu-item">Проекты</div></a>
</div>
<div class="content poems_wrapper">
    <div class="poems_col1">
        <? echo file_get_contents("texts/poems_v_brone.txt") ?>
    </div>
    <div class="poems_col2">
        <? echo file_get_contents("texts/poems_uroki.txt") ?>
    </div>

</div>