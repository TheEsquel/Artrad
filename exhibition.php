

<div class="content" id="exhibition_wrapper">
    <div id="exhibition_side">
        <div class="side_item" id="1991">1990</div>
        <div class="side_item" id="group_photo">
            <img src="img/academ6.jpg" alt="" class="side_picture">
        </div>
        <div class="side_item" id="group_photo">
            <img src="img/academ7.jpg" alt="" class="side_picture">
        </div>
        <div class="side_item" id="group_photo">
            <img src="img/academ2.jpg" alt="" class="side_picture">
        </div>
    </div>
    <div id="exhibition_main">
        <? echo  file_get_contents('texts/exhibition_greetings.txt') . '<br><br> '?>
        <? echo  file_get_contents('texts/exhibition1991.txt')?>
    </div>
</div>