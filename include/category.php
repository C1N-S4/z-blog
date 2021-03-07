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

 ?>
