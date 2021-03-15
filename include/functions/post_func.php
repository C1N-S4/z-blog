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
 ?>
