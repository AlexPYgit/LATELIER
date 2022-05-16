
<div class="block-section-bottom d-flex justify-content-center">
    <div class="block-container">
        <div class="mb-5">
            <h2><?= get_field('slider_title') ?></h2>
        </div>
        <div class=" block-container">
            <div class=" ">
                <div class="my-slider">
                    <?php $array_posts = get_posts( array('post_type'=> 'post'));
                    if($array_posts){
                        foreach ($array_posts as $post ):
                            setup_postdata($post);?>
                            <div style="width: 380px; height:414px;" class="card mx-3" style="width: 20rem;">
                                <a href="<?= get_the_permalink($post)  ?>">
                                    <img  height="200" style="object-fit: cover;" src="<?= get_the_post_thumbnail_url($post->ID) ?>" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body d-flex h-50 flex-column justify-content-between px-2 pb-2">
                                    <div>
                                        <h3><?= $post->post_title ?></h3>
                                        <p class="card-text"><?= $post->post_excerpt ?></p>
                                    </div>
                                    <div>
                                        <a href="<?= get_the_permalink($post); ?>" class="w-100 btn btn-primary ">See more...</a>
                                    </div>
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
</div>
