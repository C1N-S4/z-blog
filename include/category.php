<?php
/**
 *  Z-BLOG
 *   by UMUT CAN 2021
 * @author S4_C1N
 * @copyright 2021
 * @version Alfa
 * @link https://github.com/C1N-S4
 */
function category(){
require "config.php";
$category = $db->prepare("SELECT * FROM zblog_category");
$category-> execute();
$category_1 = $category->fetchAll(PDO::FETCH_ASSOC);
return $category_1;
}

function cotegory_view(){
  require "config.php";
  $categoryw_1 = array();
  $get_cotegory= $_GET['id'];
  $categoryw = $db->prepare("SELECT cat.*, post.post_cotegory, post.post_pic, post.post_data, post.post_desc, post.post_title, post.post_id as post_id FROM zblog_cotegory as cat INNER JOIN zblog_posts as post ON post.post_id = cat.category_id WHERE cat.cotegory_id= ".$get_cotegory." ");
//  $categoryw = $db->prepare("SELECT * FROM zblog_cotegory INNER JOIN zblog_posts  ON zblog_category.category_id = zblog_posts.post_cotegory Where cotegory_id= $get_cotegory");
  $categoryw-> execute(array($get_cotegory));

  while($pos = $categoryw->fetch(PDO::FETCH_OBJ)){
  $categoryw_1[] = array(
  'post_id' => $pos-> post_id,
  'post_title' => $pos-> post_title,
  'post_desc' => $pos-> post_desc,
  'post_pic' => $pos-> post_pic,
  'post_data' => $pos-> post_data,
  'categor_name' => $pos-> categor_name,
  'category_id' => $pos-> category_id,
);
}
  return $categoryw_1;
}
 ?>
