<section id="top-nav">
    <div class="top-navbar">
        <div class="container">
            <div class="row">
                <div class="col-4 logo">
                    <a href="">
                        <!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/img/brunet-logo.png" alt="Logo Brunet" height="50"> -->
                        <span class="brunet">BRUNET</span>
                        <span class="line"></span>
                        <span class="rs">Rescate y Salvamento</span>
                    </a>
                </div>
                <div class="col-8 menunav">
                    <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'custom-menu', 
                        'container_class' => 'principal-menu',
                        'fallback_cb' => 'wp_page_menu' ) ); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>