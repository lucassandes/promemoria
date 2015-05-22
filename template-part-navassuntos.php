<?php
/*
class T5_Nav_Menu_Walker_Simple extends Walker_Nav_Menu
{
    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     *//*
    public function start_el( &$output, $item, $depth, $args )
    {
        $output     .= '<li>';
        $attributes  = '';

        ! empty ( $item->attr_title )
        // Avoid redundant titles
        and $item->attr_title !== $item->title
        and $attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';

        ! empty ( $item->url )
        and $attributes .= ' href="' . esc_attr( $item->url ) .'"';

        $attributes  = trim( $attributes );
        $title       = apply_filters( 'the_title', $item->title, $item->ID );
        $item_output = "$args->before<a $attributes>$args->link_before$title</a>"
            . "$args->link_after$args->after";

        // Since $output is called by reference we don't need to return anything.
        $output .= apply_filters(
            'walker_nav_menu_start_el'
            ,   $item_output
            ,   $item
            ,   $depth
            ,   $args
        );
    }

    /**
     * @see Walker::start_lvl()
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @return void
     *//*
    public function start_lvl( &$output )
    {
        $output .= '<ul class="sub-menu">';
    }

    /**
     * @see Walker::end_lvl()
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @return void
     *//*
    public function end_lvl( &$output )
    {
        $output .= '</ul>';
    }

    /**
     * @see Walker::end_el()
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @return void
     *//*
    function end_el( &$output )
    {
        $output .= '</li>';
    }
} */
?>
<?php if ( has_nav_menu( 'assuntos_home' ) ) : ?>

    <div id="assuntos-home-menu">


                <?php
                wp_nav_menu( array(
                        'theme_location'    => 'assuntos_home',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'text-center',
                        'menu_class'        => '',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                ?>

    </div>

<?php endif; ?>

<script>
    jQuery('#assuntos-home-menu  li').addClass('col-md-4 col-sm-6');
</script>