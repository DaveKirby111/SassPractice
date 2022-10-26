<?php get_header(); ?>

<div class="main">

<div class="content-1">

    <div class="menu">

    <?php

        wp_nav_menu(

            array(

            'theme_location' => 'cont-menu',
            'container_class' => 'cont-nav'

            )


        );

    ?>
    
    </div>

    <?php
    
    the_post_thumbnail();
    
    ?>
    

    <?php
    
    if( have_posts() ) {
        while( have_posts() ) {
            the_post();
            the_content();
        }
    }
    
    ?>


</div>

</div>

<div class="aside">

</div>

<?php get_footer(); ?>