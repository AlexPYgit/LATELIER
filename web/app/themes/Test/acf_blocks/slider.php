
<div class="section">
    <div class="container">
        <div class="content">
            <div class="my-slider">
                <?php $array_posts = get_posts( array('post_type'=> 'post'));
                if($array_posts){
                    foreach ($array_posts as $post ):
                        setup_postdata($post);?>
                        <div class="card mx-3" style="width: 25rem;">
                            <img src="<?= get_the_post_thumbnail_url($post->ID) ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3><?= $post->post_title ?></h3>
                                <p class="card-text"><?= $post->post_excerpt ?></p>
                                <a href="<?= the_permalink(); ?>" class="btn btn-primary">See more...</a>
                            </div>
                        </div>                   
                    <?php 
                    endforeach;
                    wp_reset_postdata();
                }
                 ?>
            </div>
        </div>
    </div>
</div>
