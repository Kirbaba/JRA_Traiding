<div class="row">

<div class="col-lg-12">
        <p><h1>Services</h1></p>
    <form action="admin.php?page=services" method="post">
        <ul class="list-group services-list">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" class="form-control" placeholder="1st title" name="title1" value="<?php echo $box['title1']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" class="form-control" placeholder="1st description" name="text1" value="<?php echo $box['text1']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img src="<?php echo $box['img1']; ?>" alt="" class="services-img media">
                        <button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button>
                        <input type="hidden" class="media-img" name="img1" value="<?php echo $box['img1']; ?>">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" class="form-control" placeholder="2nd title" name="title2" value="<?php echo $box['title2']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" class="form-control" placeholder="2nd description" name="text2" value="<?php echo $box['text2']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img src="<?php echo $box['img2']; ?>" alt="" class="services-img media">
                        <button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button>
                        <input type="hidden" class="media-img" name="img2" value="<?php echo $box['img2']; ?>">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" class="form-control" placeholder="3rd title" name="title3" value="<?php echo $box['title3']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" class="form-control" placeholder="3rd description" name="text3" value="<?php echo $box['text3']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img src="<?php echo $box['img3']; ?>" alt="" class="services-img media">
                        <button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button>
                        <input type="hidden" class="media-img" name="img3" value="<?php echo $box['img3']; ?>">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" class="form-control" placeholder="4th title" name="title4" value="<?php echo $box['title4']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" class="form-control" placeholder="4th description" name="text4" value="<?php echo $box['text4']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img src="<?php echo $box['img4']; ?>" alt="" class="services-img media">
                        <button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button>
                        <input type="hidden" class="media-img" name="img4" value="<?php echo $box['img4']; ?>">
                    </div>
                </div>
            </li>
        </ul>
        <input type="submit" class="btn btn-success pull-right" value="Сохранить">
    </form>

</div>
</div>