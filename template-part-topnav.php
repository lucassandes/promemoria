<?php if (has_nav_menu('main_menu')) : ?>

    <div class="dmbs-top-menu">


        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
              <!--  Pro Memoria   &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;   Atualização e Notícias   &nbsp;&nbsp;&nbsp;|   &nbsp;&nbsp;&nbsp;FAQ    &nbsp;&nbsp;&nbsp;|   &nbsp;&nbsp;&nbsp;Contato
                -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
                        <span class="sr-only"><?php _e('Toggle navigation', 'devdmbootstrap3'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <?php
                wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse navbar-1-collapse',
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker())
                );
                ?>

                <!-- ASSUNTOS NO MENU MOBILE -->
                <?php if ( has_nav_menu( 'assuntos_home' ) && !(is_front_page()) ) : ?>
                        <?php
                        wp_nav_menu( array(
                                'theme_location'    => 'assuntos_home',
                                'depth' => 2,
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse navbar-1-collapse ',
                                'menu_class' => 'visible-xs nav navbar-nav',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker())
                        );
                        ?>
                <?php endif; ?>
                <!-- / ASSUNTOS -->

            </div>
        </nav>

        <?php /*
        <div class="container">
            <div class="col-md-9">as</div>
            <div class="col-md-3 search-interna ">

                Pesquise documentos históricos, pesquisas...

                <div class="center-block col-md-9 ">
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
        </div> */ ?>

    </div>

<?php endif; ?>