<?php get_header(); ?>
    <link rel="stylesheet" href="<?php bloginfo(template_url)?>/css/page/page-chat.min.css">
<?php include('parts/nav.php');wp_reset_query()?>

<!--Chat-->
<div id="ChatList">
    <?php wp_list_comments();?>
</div>
<div id="ChatBox">
    
    <?php if(comments_open()) comments_template();?>
</div>
<!--Chat end-->
<?php get_footer(); ?>