<?php

function category(){
require "config.php";
$category = $db->prepare("SELECT * FROM zblog_category");
$category-> execute();
$category_1 = $category->fetchAll(PDO::FETCH_ASSOC);
return $category_1;
}

 ?>
