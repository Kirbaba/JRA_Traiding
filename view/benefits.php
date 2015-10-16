<?php if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="benefits__item">
            <div class="benefits__item-icon">
                <?= get_the_post_thumbnail(get_the_ID(),'full'); ?>
            </div>
            <h4><?= get_the_title(get_the_ID()) ?></h4>
            <p> <?= get_the_content(get_the_ID()) ?></p>
        </div>
    </div>
    <?php
endwhile;
}
wp_reset_query(); ?>