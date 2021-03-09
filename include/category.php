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
$get_cotegory_id = $_GET['id'];
$cotegory_view = $db->prepare("SELECT * FROM zblog_posts INNER JOIN zblog_category	ON zblog_category.category_id = zblog_posts.post_cotegory  WHERE category_id = $get_cotegory_id ORDER BY post_id DESC");
$cotegory_view -> execute(array($get_cotegory_id));
$cotegory_view1 = $cotegory_view-> fetchALL(PDO::FETCH_ASSOC);

return $cotegory_view1 ;
}


 ?>
