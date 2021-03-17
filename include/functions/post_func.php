<?php
/**
 *  Z-BLOG
 *   by UMUT CAN 2021
 * @author S4_C1N
 * @copyright 2021
 * @version v1
 * @link https://github.com/C1N-S4
 */

function post(){
require "include/config.php";

$post = $db->prepare("SELECT * FROM zblog_posts");
$post->execute(array());
$post_post = $post->fetchALL(PDO::FETCH_ASSOC);
return $post_post;
}

function short($desc,$str){
//Short Desc

$desc = substr($desc, 0, $str);

return $desc;
}

function post_view(){
require "include/config.php";
  $get=$_GET['id'];
  $post_views = array();
  $post_view= $db->query("SELECT * FROM zblog_posts where post_id = $get");
  if($post_view->rowCount() > 0){
  while($post_view1 = $post_view->fetch(PDO::FETCH_OBJ)){
 $post_views[] = array(
  'post_id' => $post_view1-> post_id,
  'post_title' => $post_view1-> post_title,
  'post_desc' => $post_view1-> post_desc,
  'post_pic' => $post_view1-> post_pic,
  'post_data' => $post_view1-> post_data,
);
  }
  }
  return $post_views;
}


 ?>
