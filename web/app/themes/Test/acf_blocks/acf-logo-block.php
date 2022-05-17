<div class="block-section d-flex justify-content-center">
    <div class="block-container w-100">
        <div class="block-display align-items-center justify-content-between">
            <h4 class="me-4"><?= get_field('title');?></h4>
            <?php if(have_rows('partner')):
                while(have_rows('partner')) : the_row();
                $logo_partner = get_sub_field('logo_partner');
            ?>
            <div class="col-md-2">
                <?= wp_get_attachment_image($logo_partner,array('140','78'),false,array('alt')); ?>
            </div>
            <?php endwhile; endif;?>            
        </div>
    </div>
</div>