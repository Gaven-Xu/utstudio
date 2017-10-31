<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Unnuo
 * @since Unnuo 1.0
 */
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>


<?php if (have_comments()) : ?>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
        <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php _e('Comment navigation', 'unnuo'); ?></h1>
            <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'unnuo')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'unnuo')); ?></div>
        </nav><!-- #comment-nav-above -->
    <?php endif; // Check for comment navigation. ?>

    <?php
    wp_list_comments('type=comment&callback=mytheme_comment');
    ?><!-- .comment-list -->

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
        <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php _e('Comment navigation', 'unnuo'); ?></h1>
            <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'unnuo')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'unnuo')); ?></div>
        </nav><!-- #comment-nav-below -->
    <?php endif; // Check for comment navigation. ?>

    <?php if (!comments_open()) : ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'UTStudio'); ?></p>
    <?php endif; ?>

<?php endif; // have_comments() ?>

<div id="cancel_comment_reply">
    <?php cancel_comment_reply_link() ?>
</div>

<?php if (get_option('comment_registration') && !$user_ID) : ?>
    <p>
        <?php printf(__('您需要 <a href="%s">登录</a> 才可以发表评论.'), get_option('siteurl') . "/wp-login.php?redirect_to=" . urlencode(get_permalink())); ?>
    </p>
<?php else : ?>
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform"
          class="commentform" name="commentform">
        <?php if ($user_ID) : ?>
            <p style="text-align:right;padding: 5px 7px 0;">
                <?php printf(__('%s' . ' : '), '<a href="' . get_option('siteurl') . '/wp-admin/profile.php">' . $user_identity . '</a>'); ?>
                <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出">退出</a>
            </p>
        <?php else : ?>
            <p class="user_info">
                <input type="text" name="author" id="author_input" value="<?php echo $comment_author; ?>" size="22"
                       tabindex="1" placeholder="昵称（必填）"/>
                <input type="email" name="email" id="email_input" value="<?php echo $comment_author_email; ?>" size="22"
                       tabindex="2" placeholder="邮箱（必填）"/>
                <!-- <input type="url" name="url" id="url_input" value="<?php echo $comment_author_link; ?>" size="22" tabindex="2" placeholder="网址（选填）"/> -->
            </p>
        <?php endif; ?>
        <p class="user_text">
            <textarea name="comment" id="respond" rows="5" tabindex="4"></textarea>
            <?php //get_template_part('smiley'); ?>
        </p>
        <p class="nook">
            <!-- <input type="reset" id="reset" tabindex="4" value="<?php echo attribute_escape(__('重新输入')); ?>" /> -->
            <input type="submit" id="submit" tabindex="5" value="<?php echo attribute_escape(__('确认提交')); ?>"/>
        </p>
        <?php comment_id_fields(); ?>
        <?php do_action('comment_form', $post->ID); ?>
    </form>
<?php endif; // If registration required and not logged in ?>
