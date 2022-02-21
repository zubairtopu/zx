
<?php get_header(); 

    get_template_part( 'template-parts/content', 'slider' )

?>
        <?php get_template_part( 'template-parts/content', 'services' ) ;?>
        <!-- Blog Start Here -->
        <div class="blogs">
        
            <?php get_template_part( 'template-parts/content', 'blogs' ); ?>
            <?php get_sidebar(); ?>
        </div>
        <!-- Blog End Here -->
      <?php
        get_footer();
      ?>