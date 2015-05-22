<?php global $dm_settings; ?>

<div id="header">
    <div class="container dmbs-container">

        <?php if ($dm_settings['show_header'] != 0) : ?>

        <div class="row dmbs-header">

            <?php if (get_header_image() != '' || get_header_textcolor() != 'blank') : ?>

                <?php if (get_header_image() != '') : ?>
                    <!--<div class="col-md-4 dmbs-header-img text-center">-->
                    <div class="col-md-4 col-sm-6 dmbs-header-img text-center">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php header_image(); ?>"
                                                                             height="<?php echo get_custom_header()->height; ?>"
                                                                             width="<?php echo get_custom_header()->width; ?>"
                                                                             alt="" /></a>
                    </div>

                    <div class="col-md-8 col-sm-6 parceiros hidden-xs">
                        <ul>

                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/cmsjc.png" alt="" /> </li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/univap.png" alt="" /> </li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/fcr.png" alt="" /> </li>
                        </ul>
                    </div>

                <?php endif; ?>


                <div class="col-md-8 dmbs-header-text">


                </div>
            <?php
            endif;
            ?>
        </div>

    </div>

    <?php endif; ?>
</div>