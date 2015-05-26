<?php
/**
 * Template Name: Cronograma
 **/
?>

<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>
<div class="container">
    <!-- start content container -->
    <div class="row dmbs-content ">

        <?php //left sidebar ?>
        <?php get_sidebar('left'); ?>

        <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main " id="cronologia-page">

            <?php // theloop
            if (have_posts()) : while (have_posts()) :
                the_post(); ?>

                <h2 class="page-header"><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>

                <?php //comments_template(); ?>
                <div class="text-center">
                    <div class="btn-group" role="group" aria-label="Default button group">
                        <?php
                        $ano = 1501;
                        for ($i = 1; $i < 6; $i++):?>
                            <a href="#<?php echo ('periodo-'.$i);?>" type="button" class="btn btn-default"><?php echo $ano; ?>
                                - <?php echo $ano + 99; ?></a>
                            <?php  $ano += 100;
                        endfor;
                        ?>
                        <a href="#periodo-6"  type="button" class="btn btn-default"><?php echo $ano ?>
                            - <?php echo date("Y"); ?></a>
                    </div>
                </div>

                <div class="timeline"></div>
                <?php

                //query
                $query = new WP_Query(array('post_type' => 'cronologia', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'));
                $periodo = 0;
                while ($query->have_posts()) :
                    $query->the_post();
                    ?>
                    <!--<h5><a href="<?php the_permalink(); ?>"
                           title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'devdmbootstrap3'), the_title_attribute('echo=0'))); ?>"
                           rel="bookmark"><?php the_title(); ?></a>
                    </h5> -->


                    <?php
                    //$string = the_title();
                    $ano = (int)get_the_title(); ?>
                    <?php if ($ano >= 1500 && $ano < 1601) { ?>
                    <?php if ($periodo == 0) {
                        echo('
                                    <div class="col-md-12">
                                        <div class="text-center periodo" id="periodo-1">1500 - 1600</div>
                                    </div>
                                    <div class="clear"></div>
                            ');
                        $periodo = 1;
                    } ?>

                    <div class="col-sm-12">
                        <div class="marker center-block"></div>
                    </div>
                    <div class="entry entry-left col-sm-6">
                        <h3><?php the_title(); ?></h3>

                        <p>
                           <?php the_excerpt();?>
                        </p>

                    </div>
                    <div class="clear"></div>

                <?php } elseif ($ano >= 1601 && $ano <= 1700) { ?>

                    <?php if ($periodo == 1) {
                        echo('
                                    <div class="col-md-12">
                                        <div class="periodo center-block text-center" id="periodo-2">1601 - 1700</div>
                                    </div>
                            ');
                        $periodo = 2;
                    } ?>

                    <div class="col-sm-12">
                        <div class="marker center-block"></div>
                    </div>
                    <div class="entry  col-sm-6 col-sm-offset-6">
                        <h3><?php the_title(); ?></h3>

                        <p>
                            <?php the_excerpt();?>
                        </p>

                    </div>
                    <div class="clear"></div>

                <?php
                } elseif ($ano >= 1701 && $ano <= 1800) {
                    ?>
                    <?php if ($periodo == 2) {
                        echo('
                                    <div class="col-sm-12">
                                         <div class="periodo center-block text-center" id="periodo-3">1701 - 1800</div>
                                    </div>
                            ');
                        $periodo = 3;
                    } ?>

                    <div class="col-sm-12">
                        <div class="marker center-block"></div>
                    </div>
                    <div class="entry entry-left col-sm-6">
                        <h3><?php the_title(); ?></h3>

                        <p>
                            <?php the_excerpt();?>
                        </p>

                    </div>
                    <div class="clear"></div>

                <?php
                } elseif ($ano >= 1801 && $ano <= 1900) {
                    ?>
                    <?php if ($periodo == 3) {
                        echo('
                                    <div class="col-md-12">
                                         <div class="periodo center-block text-center" id="periodo-4">1801 - 1900</div>
                                    </div>
                            ');
                        $periodo = 4;
                    } ?>

                    <div class="col-md-12">
                        <div class="marker center-block"></div>
                    </div>
                    <div class="entry  col-sm-6 col-sm-offset-6">
                        <h3><?php the_title(); ?></h3>

                        <p>
                            <?php the_excerpt();?>
                        </p>

                    </div>
                    <div class="clear"></div>
                <?php
                } elseif ($ano >= 1901 && $ano <= 2000) {
                    ?>
                    <?php if ($periodo == 4) {
                        echo('
                                    <div class="col-md-12">
                                         <div class="periodo center-block text-center" id="periodo-5">1901 - 2000</div>
                                    </div>
                            ');
                        $periodo = 5;
                    } ?>
                    <div class="col-md-12">
                        <div class="marker center-block"></div>
                    </div>
                    <div class="entry entry-left col-sm-6">
                        <h3><?php the_title(); ?></h3>

                        <p>
                            <?php the_excerpt();?>
                        </p>

                    </div>
                    <div class="clear"></div>
                <?php
                } else {
                    ?>
                    <?php if ($periodo == 5) {
                        echo('
                                    <div class="col-md-12">
                                         <div class="periodo center-block text-center" id="periodo-6">2001 - '.date("Y").' </div>
                                    </div>
                            ');
                        $periodo = 6;
                    } ?>

                    <div class="col-md-12">
                        <div class="marker center-block"></div>
                    </div>
                    <div class="entry  col-sm-6 col-sm-offset-6">
                        <h3><?php the_title(); ?></h3>

                        <p>
                            <?php the_excerpt();?>
                        </p>

                    </div>
                    <div class="clear"></div>

                <?php } ?>



                <!--
                    <div class="col-md-12">
                        <div class="marker center-block"></div>
                    </div>
                    <div class="entry entry-left col-md-6">
                        <h3>1963</h3>

                        <p>
                            Vila Nova - Os jesuítas obtiveram para os índios, sesmarias compostas de quatro léguas em
                            quadras, criando um novo aldeamento onde estão hoje as praças Padre João e Expedicionários
                        </p>

                    </div>
                    <div class="clear"></div>

                    <div class="col-md-12">
                        <div class="marker center-block"></div>
                    </div>
                    <div class="entry entry-right col-md-6 col-md-offset-6">
                        <h3>1963</h3>

                        <p>
                            Vila Nova - Os jesuítas obtiveram para os índios, sesmarias compostas de quatro léguas em
                            quadras, criando um novo aldeamento onde estão hoje as praças Padre João e Expedicionários
                        </p>

                    </div>
                    <div class="clear"></div>

                    <div class="col-md-12">
                        <div class="marker center-block"></div>
                    </div>
                    <div class="entry entry-left col-md-6">
                        <h3>1963</h3>

                        <p>
                            Vila Nova - Os jesuítas obtiveram para os índios, sesmarias compostas de quatro léguas em
                            quadras, criando um novo aldeamento onde estão hoje as praças Padre João e Expedicionários
                        </p>

                    </div>
                    <div class="clear"></div>


                    <div class="col-md-12">
                        <div class="marker center-block"></div>
                    </div>
                    <div class="entry entry-left col-md-6">
                        <h3>1963</h3>

                        <p>
                            Vila Nova - Os jesuítas obtiveram para os índios, sesmarias compostas de quatro léguas em
                            quadras, criando um novo aldeamento onde estão hoje as praças Padre João e Expedicionários
                        </p>

                    </div>
                    <div class="clear"></div>
                    -->








                    <?php
                    //fim query
                    wp_reset_postdata(); ?>
                <?php endwhile; ?>


            <?php endwhile; ?>


            <?php else: ?>

                <?php get_404_template(); ?>

            <?php endif; ?>

        </div>

        <?php //get the right sidebar ?>
        <?php get_sidebar('right'); ?>

    </div>
    <!-- end content container -->

    <?php get_footer(); ?>

