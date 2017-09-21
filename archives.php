<?php get_header(); ?>


<?php include('parts/nav.php')?>

    <?php if(have_posts()):while(have_posts()):the_post();?>
    
        <a href="<?php the_permalink();?>"><?php the_title();?></a>

    <?php endwhile;else:?>

        <h5>No Posts</h5>   

    <?php endif;?>

<?php get_footer(); ?>
    