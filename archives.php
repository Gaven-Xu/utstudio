<?php get_header(); ?>

<h2>hello</h2>
<?php include('parts/nav.php')?>

    <?php if(have_life()):while(have_life()):the_post();?>

        <a href="<?php the_permalink();?>"><?php the_title();?></a>

    <?php endwhile;else:?>

        <h5>No Posts</h5>

    <?php endif;?>

<?php get_footer(); ?>
    