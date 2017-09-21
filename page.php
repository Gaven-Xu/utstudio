<?php get_header(); ?>

<?php include('parts/nav.php')?>

    this is page

    <?php if(have_posts()):the_post();?>

    <?php the_content()?>    

    <?php else:?>

        <h5>No Posts</h5>   

    <?php endif;?>

<?php get_footer(); ?>
    