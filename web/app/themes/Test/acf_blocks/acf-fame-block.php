<div class="p-5">
        <div class="-content">
            <div class="block-display">
                <div class="col-md-6 d-flex ">
                    <div style="color:var(--color-title)" class="ps-4  w-50" >
                        <span style="font-size:70px;font-weight:800;line-height:1;">4.8</span>
                        <div>
                            <img width="12.5" height="12.5" src="<?= get_template_directory_uri(). '/assets/images/star.png' ?>">
                            <img width="12.5" height="12.5" src="<?= get_template_directory_uri(). '/assets/images/star.png' ?>">
                            <img width="12.5" height="12.5" src="<?= get_template_directory_uri(). '/assets/images/star.png' ?>">
                            <img width="12.5" height="12.5" src="<?= get_template_directory_uri(). '/assets/images/star.png' ?>">
                            <img width="12.5" height="12.5" src="<?= get_template_directory_uri(). '/assets/images/star.png' ?>">
                        </div>
                        <div class="fw-bold" >2,394 Ratings</div>
                        <div class="fw-bold" >Google Reviews</div>
                    </div>
                    <div style="color:var(--color-title)" class="ps-2  w-50">
                        <span class="text-uppercase" style="font-size:70px;font-weight:750;line-height: 1;">a+</span>
                        <div>
                            <img width="12.5" height="12.5" src="<?= get_template_directory_uri(). '/assets/images/star.png' ?>">
                            <img width="12.5" height="12.5" src="<?= get_template_directory_uri(). '/assets/images/star.png' ?>">
                            <img width="12.5" height="12.5" src="<?= get_template_directory_uri(). '/assets/images/star.png' ?>">
                            <img width="12.5" height="12.5" src="<?= get_template_directory_uri(). '/assets/images/star.png' ?>">
                            <img width="12.5" height="12.5" src="<?= get_template_directory_uri(). '/assets/images/star.png' ?>">
                        </div>
                        <div class="fw-bold" >2,394 Ratings</div>
                        <div class="fw-bold">Google Reviews</div>                    </div>
                </div>
                <div id="témoin" class="col-md-6">
                    <div class="mb-4">
                        <h3><?= get_field('title') ?></h3>
                    </div>
                    <div class="d-flex">
                        <div class="col-md-7 me-5" >
                            <h4 class="mb-3" style="color:var(--color-global-hover)"><?= get_field('name') ?></h4>
                            <div>
                                <?= get_field('comment') ?>
                            </div> 
                        </div>
                        <div class="col-md-4"> 
                            <?= wp_get_attachment_image(get_field('photo'),array('110','110'),false,array('alt')) ?>
                        </div>
                    </div>
                </div>  
            </div>
            

        </div>
</div>