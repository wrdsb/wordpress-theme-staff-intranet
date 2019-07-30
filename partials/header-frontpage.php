<?php if (get_header_image()) { ?>
    <div class="container" role="Img" aria_label="Header Image">
        <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    </div>
<?php }
