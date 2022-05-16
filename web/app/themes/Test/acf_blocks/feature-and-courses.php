
<div class="block-section d-flex justify-content-center background-color ">
    <div class="block-container ">
        <div class="px-5">
            <div class="d-flex">
                <div>
                    <div class="text-uppercase fw-bold mb-3">change your life</div>
                    <div class="col-md-11">
                        <h2><?= get_field('title') ?></h2>
                    </div>

                </div>
                <div class="col-md-4 d-flex align-items-start justify-content-end">
                    <div class="col-6 px-2">
                        <a class="btn btn-success py-2 w-100" href="#"> View All Courses</a>
                    </div>
                </div>
            </div>
            <div class="mt-5 d-grid gap-4 d-flex">
                <?php 
                    if(have_rows('card'));
                    while( have_rows('card') ) : the_row();
                    $title_card = get_sub_field('title_card');
                    $image_card = get_sub_field('image_card');
                    $text_card = get_sub_field('text_card');
                    ?>
                        <div style="width: 380px; height:auto;"  >
                            <div class=" d-flex  flex-column justify-content-between  pb-2">
                                <div>
                                    <?= wp_get_attachment_image($image_card,null,false,array('alt', "class"=> "img-fluid "));?>
                                </div>
                                <div>
                                    <h3 class="my-2 lh-1"><?= $title_card ?></h3>
                                    <p class="card-text"><?= $text_card ?></p>
                                </div>
                                
                            </div>
                        </div>                   
                    <?php  endwhile;?>          
            </div>
            <div class="py-5">
                <div class="separator text-center py-4">
                    <span class="text-center">
                        Feature & Benefits
                    </span> 
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="col-md-3"> 
                    <div class="mb-4">                        
                        <h3>Features</h3>
                    </div>
                    <div class="mt-3">
                        <ul class="p-0 d-grid gap-3">
                            <?php 
                                if(have_rows('features')) 
                                while(have_rows('features')) : the_row();?>

                                  <li class="d-flex align-items-center w-100" style="list-style-type: none;">
                                    <div style="background-color: #278575; border-radius:50%; margin:1%; width:4px; height:4px; outline-offset: 3px; outline: 1px solid #278575;"></div>
                                    <span class="w-100 ps-2"><?= get_sub_field('features_title') ?></span>
                                </li>

                                <?php endwhile; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-4">
                        <h3>Benefits</h3>
                    </div>
                    <div class="mt-3 w-100">
                        <ul class="w-100 p-0 d-grid gap-3">
                            <?php 
                                if(have_rows('benefits')) 
                                while(have_rows('benefits')) : the_row();?>

                                <li class="d-flex align-items-center w-100" style="list-style-type: none;">
                                    <div style="background-color: #278575; border-radius:50%; margin:1%; width:4px; height:4px; outline-offset: 3px; outline: 1px solid #278575;"></div>
                                    <span class="w-100 ps-2"><?= get_sub_field('benefits_title') ?></span>
                                </li>

                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <div > <img src="https://bedrock.local/app/uploads/2022/05/features-and-benefits.jpg"  alt="yoga"></div>
            </div>
            
        </div>

    </div>
    
</div>