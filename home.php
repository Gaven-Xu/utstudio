<?php get_header(); ?>

<?php include('parts/nav.php')?>

    <?php query_posts(array('category_name'=>'pic','posts_per_page'=>5));if(have_posts()):while(have_posts()):the_post();?>
        <?php if(get_content_first_image(get_the_content())):?>
            <img src="<?php echo get_content_first_image(get_the_content());?>" alt="">
        <?php endif;?>
    <?php endwhile;else:?>

        <h5>No Posts</h5>   

    <?php endif;wp_reset_query();?>

<hr>

    <?php query_posts(array('category_name'=>'text','posts_per_page'=>5));if(have_posts()):while(have_posts()):the_post();?>
    
    <div>
        <a href="<?php the_permalink();?>"><?php the_title();?></a>
    </div>

    <?php endwhile;else:?>

        <h5>No Posts</h5>   

    <?php endif;wp_reset_query();?>


<hr>  

<?php get_footer(); ?>
    