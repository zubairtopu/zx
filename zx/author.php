<?php get_header(); ?>
<div class="blogs">
    <div class="blogs-left">
        <h4>Post By:<?php the_author() ; ?></h4>
        <div class="author-info">
            <p>Description:<?php the_author_meta('description') ; ?></p>
            <p>Email: <?php the_author_meta('email') ;?></p>
            <img src="<?php echo get_avatar_url(get_the_author_meta('ID')) ?>" alt="" srcset="">
        </div>
        <?php get_template_part('template-parts/content', 'blogs'); ?>
    </div>
</div>
<?php get_footer(); ?>