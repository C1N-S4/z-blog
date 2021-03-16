<?php
/**
 *  Z-BLOG
 *   by UMUT CAN 2021
 * @author S4_C1N
 * @copyright 2021
 * @version v1
 * @link https://github.com/C1N-S4
 */

function search(){
  require "include/config.php";

  $post_search = $_POST['ara'];
  $postik = $db->prepare("SELECT * FROM zblog_posts where post_title LIKE :pattern;");
  $postik->execute(array('pattern' => "%".$post_search."%"));
  $x = $postik->fetchAll(PDO::FETCH_ASSOC);
  $v = $postik->rowCount();

  return $x;
  return $v;
}


 ?>
