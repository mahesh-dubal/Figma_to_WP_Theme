<div class="mobile-container">

    <!-- Top Navigation Menu -->
    <div class="topnav">

        <a href="#" class="logoo" id="org">
        <?php if (has_custom_logo()) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
        <?php else : ?>
            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
        <?php endif; ?>
    </a>


    <div id="myLinks">
        <?php wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'menu_id' => 'primary-menu',
        )); ?>
    </div>

        <!-- Hamburger menu -->
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<header class="navigation">

    <!-- Custom logo -->
    <a href="#" class="logo" id="org">
        <?php if (has_custom_logo()) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
        <?php else : ?>
            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
        <?php endif; ?>
    </a>


    <div class="navlist">
        <?php wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'menu_id' => 'primary-menu',
        )); ?>
    </div>

</header>