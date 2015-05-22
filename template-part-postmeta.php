<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>
    <p class="text-left post-meta">
        <?php the_category(', '); ?> |
        <?php the_time('j \d\e F \d\e Y'); ?>

        <?php edit_post_link(__('Edit  <span class="glyphicon glyphicon-edit"></span>','devdmbootstrap3')); ?>
    </p>

    <?php if( has_tag() ) : ?>
        <p class="text-right"><span class="glyphicon glyphicon-tags"></span>
        <?php the_tags(); ?>
        </p>
    <?php endif; ?>
<?php endif; ?>