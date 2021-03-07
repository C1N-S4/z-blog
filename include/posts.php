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
$post= $db->prepare("SELECT * from zblog_posts");
$post->execute();
$post_1=$post->fetchALL(PDO::FETCH_ASSOC);
return $post_1;
}

function short($desc,$str){
//Short Desc

$desc = substr($desc, 0, $str);

return $desc;
}
?>
