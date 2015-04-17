<?php
/**
 * Template Name: Index
 **/
?><?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->

<div id="home-search">
    <div class="container">

        <div class="dizeres center-block ">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet rutrum tortor.
            Quisque consectetur odio in tincidunt vestibulum. Fusce at ultricies ex.
        </div>


        <div class="search-home center-block col-md-9 " style="float: none">
            <form role="search" method="get" id="searchform" class="searchform"
                  action="<?php echo home_url('/'); ?>">
                <div class="input-group">


                    <!--<span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span> -->
                    <input type="search" class="form-control" class="search-field" name="s" id="s"
                           placeholder="<?php echo esc_attr_x('Faça sua busca ...', 'placeholder') ?>"
                           name="s"
                           title="<?php echo esc_attr_x('Search for:', 'label') ?>"/>
                                    <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit" type="button">
                                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                            </button>
                                          </span>

                    <!--<input type="submit" id="searchsubmit" value="Pesquisar"> -->
                </div>

            </form>
        </div>
    </div>

</div>

<div class="container">
    <div class="row dmbs-content ">


        <div class="col-md-12 dmbs-main">

            <?php

            //if this was a search we display a page header with the results count. If there were no results we display the search form.
            if (is_search()) :

                $total_results = $wp_query->found_posts;

                echo "<h2 class='page-header'>" . sprintf(__('%s Search Results for "%s"', 'devdmbootstrap3'), $total_results, get_search_query()) . "</h2>";

                if ($total_results == 0) :
                    get_search_form(true);
                endif;

            endif;

            ?>

            <?php // theloop
            if (have_posts()) : while (have_posts()) : the_post();

                // single post
                if (is_single()) : ?>

                    <div <?php post_class(); ?>>

                        <h2 class="page-header"><?php the_title(); ?></h2>

                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <div class="clear"></div>
                        <?php endif; ?>
                        <?php the_content(); ?>
                        <?php wp_link_pages(); ?>
                        <?php get_template_part('template-part', 'postmeta'); ?>
                        <?php comments_template(); ?>

                    </div>
                <?php
                // list of posts
                else : ?>
                    <div <?php post_class(); ?>>

                        <h2 class="page-header">
                            <a href="<?php the_permalink(); ?>"
                               title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'devdmbootstrap3'), the_title_attribute('echo=0'))); ?>"
                               rel="bookmark"><?php the_title(); ?></a>
                        </h2>

                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <div class="clear"></div>
                        <?php endif; ?>
                        <?php the_content(); ?>
                        <?php wp_link_pages(); ?>
                        <?php get_template_part('template-part', 'postmeta'); ?>
                        <?php if (comments_open()) : ?>
                            <div class="clear"></div>
                            <p class="text-right">
                                <a class="btn btn-success"
                                   href="<?php the_permalink(); ?>#comments"><?php comments_number(__('Leave a Comment', 'devdmbootstrap3'), __('One Comment', 'devdmbootstrap3'), '%' . __(' Comments', 'devdmbootstrap3')); ?>
                                    <span class="glyphicon glyphicon-comment"></span></a>
                            </p>
                        <?php endif; ?>
                    </div>

                <?php  endif; ?>

            <?php endwhile; ?>
                <?php posts_nav_link(); ?>
            <?php else: ?>

                <?php get_404_template(); ?>

            <?php endif; ?>

        </div>


    </div>
    <!-- end content container -->

    <?php get_footer(); ?>

