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

<div id="assuntos-home" class="container ">

    <h2 class="text-center">Navegue pelos Assuntos abaixo</h2>


    <?php get_template_part('template-part', 'navassuntos'); ?>

    <!--<div class="col-md-4   text-center">

        <ul>
            <li><a href="#">Linhas de Pesquisa</a></li>
            <li><a href="#">Linhas de Pesquisa</a></li>
            <li><a href="#">Linhas de Pesquisa</a></li>
        </ul>
    </div>
    <div class="col-md-4  text-center">
        <ul>
            <li><a href="#">Linhas de Pesquisa</a></li>
            <li><a href="#">Linhas de Pesquisa</a></li>
            <li><a href="#">Linhas de Pesquisa</a></li>
        </ul>
    </div>
    <div class="col-md-4   text-center">
        <ul>
            <li><a href="#">Linhas de Pesquisa</a></li>
            <li><a href="#">Linhas de Pesquisa</a></li>
            <li><a href="#">Linhas de Pesquisa</a></li>
        </ul>
    </div>-->
</div>

<div id="promo-livro">
    <div class="container">
        <div class="col-sm-5 col-sm-offset-1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/foto-livro.png"
                 class="img-responsive center-block "/>
        </div>

        <div class="col-sm-5 ">
            <h3>
                Coleção São José dos Campos
                História e Cidade
            </h3>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id pretium nibh. Sed eget nulla
                venenatis, viverra augue a, volutpat justo. Phasellus feugiat dictum nibh in iaculis.
            </p>


            <button type="button" class="btn btn-success btn-lg">
                Saiba mais
            </button>
        </div>
    </div>
</div>



<div class="clear"></div>
<div id="feed-home" class="container">
    <div class="col-md-5 col-md-offset-1 col-sm-6">
        <h2>Notícias</h2>
        <?php
        $query = new WP_Query(array('category_name' => 'noticias', 'posts_per_page' => 2));

        while ($query->have_posts()) :
            $query->the_post(); ?>
            <div class="item-feed">
                <div class="data"><?php the_time('j \d\e F \d\e Y'); ?></div>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                <?php ?>
            </div>
        <?php endwhile; ?>
        <!--<div class="item-feed">
            <div class="data">12 de março de 2015</div>
            <h3>Coleção São José dos Caampos Htistória e Cidade</h3>

            <p>Está disponivel para download o primeiro volume da série - São José dos Campos História e Cidade. </p>
        </div>-->
    </div>
    <div class="col-md-5 col-md-offset-1 col-sm-6">
        <h2>Atualizações</h2>

        <?php
        $query = new WP_Query(array('category_name' => 'atualizacoes', 'posts_per_page' =>2));
        $i = 0;
        while ($query->have_posts()) :
            $query->the_post(); ?>
            <div class="item-feed">
                <div class="data"><?php the_time('j \d\e F \d\e Y'); ?></div>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                <?php ?>
            </div>
        <?php endwhile; ?>
    </div>
</div>

    <?php get_footer(); ?>

