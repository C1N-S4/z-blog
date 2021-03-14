<?php
/**
 *  Z-BLOG
 *   by UMUT CAN 2021
 * @author S4_C1N
 * @copyright 2021
 * @version Alfa
 * @link https://github.com/C1N-S4
 */

    function posts(){
    require "config.php";

    $page_id= intval($_GET['page_id']);
    if(!$page_id){
      $page_id=1;
    }

    $pagesz = $db->prepare("SELECT * FROM zblog_posts");
    $pagesz-> execute(array());
    $pagesw = $pagesz->rowCount();
    $page_limit = 2;
    $show_page = $page_id*$page_limit-$page_limit;
    $page_numbers = ceil($pagesw/$page_limit);
    $pagesww= 2;

    $post= $db->prepare("SELECT * from zblog_posts order by post_id DESC LIMIT $show_page,$page_limit");
    $post->execute();
    $post_1=$post->fetchALL(PDO::FETCH_ASSOC);
    return $post_1;
    return $pagesw ;
    return $show_page;
    return $page_numbers;

    }

    function short($desc,$str){
    //Short Desc

    $desc = substr($desc, 0, $str);

    return $desc;
    }

    function post_view(){
      require "config.php";
      $get=$_GET['id'];
      $post_views = array();
      $post_view= $db->query("SELECT * FROM zblog_posts INNER JOIN zblog_category	ON zblog_category.category_id = zblog_posts.post_cotegory where post_id = $get");
      if($post_view->rowCount() > 0){
      while($post_view1 = $post_view->fetch(PDO::FETCH_OBJ)){
     $post_views[] = array(
      'post_id' => $post_view1-> post_id,
      'post_title' => $post_view1-> post_title,
      'post_desc' => $post_view1-> post_desc,
      'post_pic' => $post_view1-> post_pic,
      'post_data' => $post_view1-> post_data,
      'categor_name' => $post_view1-> categor_name,
      'category_id' => $post_view1-> category_id,
    );
      }
      }
      return $post_views;
    }


?>
