<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ; ?>
</head>
<body <?php body_class() ?> >
    <div class="area">
        <!-- Header Start Here -->
        <div class="header fix">
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() ;?>/assets/img/logo.png" alt="Logo">
                </a>
            </div>
            <div class="menu">
                <?php wp_nav_menu( array(
                    'theme_location'  => 'main-menu',
                    'menu_class'      => 'test-class',
                    'menu_id'         => 'test-id',
                    'container_class' => 'test-container',
                    
                ) ); ?>
                
            </div>
        </div>
