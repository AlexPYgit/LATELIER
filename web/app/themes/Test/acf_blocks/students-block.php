<div class="block-section">
    <div class="block-container">
        <div class="block-display justify-content-between">
            <div class="col-4">
                <!-- partie de la section étudients qui affiche les texts -->
                <?php
                    $tile = get_field('title');
                    $description = get_field('description');
                    $button_text = get_field('button_text');
                ?>
                    <h1> <?= $tile?></h1>
                    <p> <?= $description ?> </p>
                    <div class="btn btn-success"> <?= $button_text ?></div>

                </div>

                <!-- partie de la section qui affiche les photo des étudients -->

               
                <?php 
                    $numb_rows = get_field('student_photo');
                    count($rows);
                    ?>
                <div class="col-7 d-flex "> 

                    <?php 
                    // Check rows exists.
                    
                    if( have_rows('student_photo') ):

                    // Loop through rows.
                    while( have_rows('student_photo') ) : the_row();

                    // Load sub field value.
                    $sub_value_photo_student = get_sub_field('photo_student');
                 ?>
                    <div class="col-6">
                     <img class="rounded-3" src="<?= $sub_value_photo_student ?>" alt="décoration"> 
                    </div>

                    <?php  endwhile; endif; ?>
                   
              
            </div>
        </div>
        <div>
            <img style="z-index: -10; position:relative; top:-770px; left:-200px;" width="360" height="480" src="<?= get_template_directory_uri(). '/assets/images/bg-shape.jpg' ?>" alt="décoration">
        </div>
    </div>
</div>