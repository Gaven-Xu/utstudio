<?php get_header(); ?>

<?php include('parts/nav.php')?>
<?php include('parts/banner.php')?>

<div id="HomePosts">
    <?php query_posts(array('category_name'=>'posts','posts_per_page'=>5));if(have_posts()):while(have_posts()):the_post();?>
        <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
    <?php endwhile;else:?>
        <h5>No Posts</h5>   
    <?php endif;wp_reset_query();?>

    <?php query_posts(array('category_name'=>'life','posts_per_page'=>5));if(have_posts()):while(have_posts()):the_post();?>
        <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
    <?php endwhile;else:?>
        <h5>No Posts</h5>   
    <?php endif;wp_reset_query();?>
</div>

<?php get_footer(); ?>
    