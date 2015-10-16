<div class="responsive">
    <?php foreach($posts as $p){ ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="slide-image"><?= get_the_post_thumbnail( $p->ID, 'full', [] ); ?></div>
            <div class="slide-text">
                <h4><?= $p->post_title ?></h4>
                <p><?= $p->post_content ?></p></div>
        </div>
    <?php } ?>
</div>