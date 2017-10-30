<?php get_header(); ?>
    <link rel="stylesheet" href="<?php bloginfo(template_url)?>/css/page/page-chat.min.css">
<?php include('parts/nav.php');?>

<!--Chat-->

<?php if(have_posts()):the_post();?>

    <?php the_content();//content获取全文 ?>

<?php endif;?>

<div id="ChatBox">
    <?php comments_template();?>
</div>
<!--Chat end-->
<?php get_footer(); ?>