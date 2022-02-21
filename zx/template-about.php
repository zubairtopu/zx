<?php
/*
    Template Name: About-Template
*/
get_header() ; ?>



        <!-- Page Banner Start Here -->
        <div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri() ;?>/assets/img/page-bannar.jpg');">
            <h2>about us</h2>
        </div>
        <!-- Page Banner End Here -->
        
        <!-- About Start Here -->
        <div class="about fix">
            <div class="about-left">
                <h4>about us</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum architecto quaerat praesentium impedit. Aut libero, magnam non totam consectetur velit reprehenderit soluta officiis minima tempora.</p>
            </div>
            <div class="blogs">
                <?php get_sidebar( ); ?>
            </div>
        </div>
        <!-- About End Here -->

<?php get_footer(); ?>