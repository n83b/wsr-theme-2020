<?php //footer menu
    wp_nav_menu( array(  
        'menu'              => 'footer',
        'theme_location'    => 'footer',
        'depth'             => 2,
        'container'         => 'div',
        'container_id'      => 'navbar',
        'container_class'   => 'navbar',
        'menu_class'        => 'menu'
    ));

    wp_footer(); ?>		
</body>
</html>