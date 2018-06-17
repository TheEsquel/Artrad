
<div class="content wrapper">
    <?php  foreach ($pictures as $picture ): ?>
        <div class="gallery-picture-item" style="background-image: url("<? echo $picture['url']?>")">

        </div>
    <?php  endforeach; ?>
</div>
<div class="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/prev_diptych_zaitsevi.jpg" alt="Academy 1">
                <div class="carousel-caption">
                    First
                </div>
            </div>
            <div class="item active">
                <img src="img/prev_diptych_zaitsevi.jpg" alt="Academy 1">
                <div class="carousel-caption">
                    First
                </div>
            </div>

        </div>
<!--        controls-->
        <a href="#carousel-example-generic" class="left carousel-control"></a>
    </div>

</div>
