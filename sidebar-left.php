<?php
    global $dm_settings;
    if ($dm_settings['left_sidebar'] != 0) : ?>
    <div class="col-md-<?php echo $dm_settings['left_sidebar_width']; ?> dmbs-left hidden-xs hidden-sm">
        <?php dynamic_sidebar( 'Left Sidebar' ); ?>
    </div>
<?php endif; ?>