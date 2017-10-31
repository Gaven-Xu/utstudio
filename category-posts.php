<?php include('archive.php')?>

<?php //get_header(); ?>
<!---->
<?php //include('parts/nav.php') ?>
<!---->
<?php //query_posts(array('category_name' => 'posts', 'posts_per_page' => 10));
//if (have_posts()):while (have_posts()):the_post(); ?>
<!---->
<!--    <div id="catgory_post">-->
<!--        <h2 id="post---><?php //the_ID(); ?><!--">-->
<!--            标题：<a href="--><?php //the_permalink() ?><!--" rel="bookmark" title="Permanent Link to --><?php //the_title(); ?><!--">-->
<!--                --><?php //the_title(); ?>
<!--            </a>-->
<!--        </h2>-->
<!--        <small>-->
<!--            时间：--><?php //the_time('F jS, Y') ?>
<!--            <br>-->
<!--            作者：--><?php //the_author() ?>
<!--        </small>-->
<!--        <br>-->
<!--        --><?php //if (get_content_first_image(get_the_content())): ?>
<!--            <img src="--><?php //echo get_content_first_image(get_the_content()); ?><!--" alt="">-->
<!--        --><?php //endif; ?>
<!--        <div class="cat_content">-->
<!--            --><?php //the_content(); ?>
<!--        </div>-->
<!--    </div>-->
<!---->
<?php //endwhile; else: ?>
<!---->
<!--    <h5>No Posts</h5>-->
<!---->
<?php //endif; ?>
<!---->
<!--<script>-->
<!--    var oP = document.querySelectorAll(".cat_content");-->
<!--    for (var i = 0; i < oP.length; i++) {-->
<!--        oP[i].innerText = oP[i].innerText.substr(0, 100);-->
<!--        oP[i].innerText += "...";-->
<!--    }-->
<!--</script>-->
<!---->
<!--<hr>-->
<?php //get_footer(); ?>
<!---->
