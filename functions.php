<?php

function get_content_first_image($content){
    if ( $content === false ) $content = get_the_content();
  
    preg_match_all('|<img.*?src=[\'"](.*?)[\'"].*?>|i', $content, $images);
  
    if($images){
      return $images[1][0];
    }else{
      return false;
    }
  }//获取文章首图片


function auto_post_link($content) {
  global $post;
        $content = preg_replace('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i', "<p style=\"text-align:center\"><img src=\"$2\" alt=\"".$post->post_title."\" rel=\"nofollow\"/>", $content);
  return $content;
}
add_filter ('the_content', 'auto_post_link',0);
//去掉文章图片链接外部链接标签，将图片居中，并自动为<img>标签添加nofollow

function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0";
  }
  return $count.'';
}//显示文章浏览次数
  
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  }else{
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}//获取文章浏览次数

foreach(array(
  'rsd_link',//rel="EditURI"
  'index_rel_link',//rel="index"
  'start_post_rel_link',//rel="start"
  'wlwmanifest_link'//rel="wlwmanifest"
  ) as $xx)
  remove_action('wp_head',$xx);//X掉以上
    //rel="category"或rel="category tag", 这个最巨量
    function the_category_filter($thelist){
    return preg_replace('/rel=".*?"/','rel="tag"',$thelist);
  }
add_filter('the_category','the_category_filter');//去掉无用rel属性，让wordpress通过HTML5验证


add_theme_support( 'post-thumbnails' ); //特色图

function pagenavi() {
  global $wp_query, $wp_rewrite;
  $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
  $pagination = array(
      'base' => @add_query_arg('paged','%#%'),
      'format' => '2',
      'total' => $wp_query->max_num_pages,
      'current' => $current,
      'show_all' => false,
      'type' => 'plain',
      'prev_next' => true
  );
  if( $wp_rewrite->using_permalinks() )
      $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');
  if( !empty($wp_query->query_vars['s']) )
      $pagination['add_args'] = array('s'=>get_query_var('s'));
  echo '<div id="pagenavi">'.paginate_links($pagination).'</div>';
}//分页效果函数
?>