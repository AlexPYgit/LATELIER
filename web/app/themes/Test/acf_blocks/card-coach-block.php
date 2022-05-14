<section class="block-section">
    <div class="block-container">
        <div class="mb-5">
            <p>WE HELP YOU STAY HEALTHY</p>
            <h2>The Trainers</h2>
            <p >Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
            <div class="position-relative d-flex justify-content-end">
                    <img style="top:-200px;" class=" start-90  position-absolute" src="<?= get_template_directory_uri(). '/assets/images/pattern.png' ?>" alt="décoration" width="200" height="96" >
            </div>
        </div>
        <div class="block-display">
            <?php

            // Check rows exists.
            if( have_rows('coaches') ):

                // Loop through rows.
                while( have_rows('coaches') ) : the_row();

                    // Load sub field value.
                    $sub_value_name = get_sub_field('name');
                    $sub_value_first_name = get_sub_field('first_name');
                    $sub_value_presentation = get_sub_field('presentation');
                    $sub_value_img_ID = get_sub_field('photo');
            ?>
            <div class=" bolck-content" >
                <div class="row g-4">
                    <div class="col-md-4">
                    <?= wp_get_attachment_image($sub_value_img_ID,null,false,array('alt', "class"=> "img-fluid "));?>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-8 card-body">
                            <h3 class="card-title"> <?php echo $sub_value_first_name ?> </h3>
                            <h3 class="card-title"> <?php echo $sub_value_name ?> </h3>
                            <p class="card-text"> <?php echo $sub_value_presentation ?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php  endwhile; endif; ?>
        </div>
        <div class="position-relative">
            <img style="z-index: -10; position:absolute; top:-80px; left:-200px; display:float;" width="360" height="480" src="<?= get_template_directory_uri(). '/assets/images/bg-shape.jpg' ?>" alt="décoration">
        </div>
    </div>
</section>