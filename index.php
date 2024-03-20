<?php
/*
* This template for displaing the header
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" clas="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="header_area" class="<?php echo get_theme_mod( 'themi_menu_postion' ); ?> ">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="logo" href=""><img src="<?php echo get_theme_mod('themi_logo'); ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <?php wp_nav_menu(array('themi_location' => 'main_menu', 'menu_id' => 'nav')); ?>
                </div>
            </div>
        </nav>
    </div>

    <?php wp_footer() ?>
</body>

</html>