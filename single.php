<?php get_header(); ?>

<?php include('parts/nav.php')?>

<div id="sin_main">
<!--******************************more content**************************-->

    <?php if(have_posts()):the_post();?>

        <div class="article">
            <h2 id="post-<?php the_ID(); ?>">
                标题：<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <small>
                时间：<?php the_time('Y , F , jS') ?>
                <br>
                作者：<?php the_author() ?>
            </small>
            <br>

<!--            --><?php //if (get_content_first_image(get_the_content())): ?>
<!--                <img src="--><?php //echo get_content_first_image(get_the_content()); ?><!--" alt="">-->
<!--            --><?php //endif; ?>

            <div class="cat_content">
                <?php the_content(); ?>
            </div>
        </div>

    <?php else:?>

        <h5>No Posts</h5>   

    <?php endif;?>

<!--********************************获取留言**************************************-->

<?php //comments_template( $file, $separate_comments ); ?>
<!--$file-->
<!--(字符串string) (可选) 要加载的文件-->
<!--默认: /comments.php-->
<!--$separate_comments-->
<!--(布尔值boolean) (可选) 是否根据评论的类型划分评论-->
<!--默认: false-->

<?php //comments_template('/page-chat.php'); ?>

<!--  TODO:  为啥必须有它 -->
<?php comments_template(); ?>



<div class="sin_comments">
<?php while (have_comments()) : the_comment(); ?>

    <?php comment_ID();?>
    <?php comment_author();?>
    <?php comment_date();?>
    <?php comment_time();?>
    <?php comment_text();?>
    <?php comment_reply_link();?>
    <script>
        console.log("111");
    </script>

<?php endwhile; ?>
</div>

<!--  **********************************************************************  -->

</div>


<?php get_footer(); ?>
    