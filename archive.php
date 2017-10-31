<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/archive/archive.min.css">
<?php include('parts/nav.php') ?>

<div id="archive">
    <div class="cat_box">
        <div class="cat_main">
            <?php
            //            ************************************************************
            $arc_post = $_POST['arc'];

            $arch = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER["REQUEST_URI"];
            $arc = [];
            if ($arch) {
                $arc[0] = strtok($arch, "/");
                echo "0 是 $arc[0]" . "<br>";
                for ($x = 1; $x < 4; $x++) {
                    $arc[x] = strtok("/");
                    echo "$x 是 $arc[x]" . "<br>";
                }
            }
            //            query_posts(array('category_name' => $arc[3], 'posts_per_page=10'));
            //            query_posts( 'posts_per_page=10' );
            //            *********************************************************************
            if (have_posts()):while (have_posts()):the_post(); ?>

                <div class="article">
                    <h2 id="post-<?php the_ID(); ?>">
                        标题：<a href="<?php the_permalink() ?>" rel="bookmark"
                              title="Permanent Link to <?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <small>
                        时间：<?php the_time('F jS, Y') ?>
                        <br>
                        作者：<?php the_author() ?>
                    </small>
                    <br>
                    <?php if (get_content_first_image(get_the_content())): ?>
                        <img src="<?php echo get_content_first_image(get_the_content()); ?>" alt="">
                    <?php endif; ?>
                    <div class="cat_content">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; else: ?>

                <h5>No Posts</h5>

            <?php endif; ?>
        </div>
        <div class="cat_other">

        </div>
    </div>
</div>
<script src="<?php bloginfo('template_url') ?>/assets/jquery-3.2.1.js"></script>
<script>
    (function () {
        var oP = document.querySelectorAll(".cat_content");
        for (var i = 0; i < oP.length; i++) {
            oP[i].innerText = oP[i].innerText.substr(0, 100);
            oP[i].innerText += "...";
        }
//        var test = window.location.pathname;
//        var strs= new Array();
//        strs=test.split("/");
//        $.ajax({
//            type: "POST",
//            url: "./",
//            data: {
//                arc : strs[2]
//            },
//            dateType:'text',
//            success: function(msg){
//                console.log( msg );
//            }
//        });

//        $.post("./",{arc : strs[2]},function (data) {
//            console.log(data);
//        });
//        console.log(strs[2]);
    })();
</script>

<hr>
<?php get_footer(); ?>

