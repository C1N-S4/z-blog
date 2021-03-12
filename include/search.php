<?php
function search(){
  require "config.php";
  $post_get = trim($_POST['searchtext']);
  $searchz = $db->prepare("SELECT *FROM zblog_posts  WHERE post_title LIKE :pattern;");

  $searchz->execute(array('pattern' => "%".$post_get."%"));
  $search1 = $searchz-> fetchALL(PDO::FETCH_ASSOC);
  $noresult = count($search1);
  return $search1;
}


 ?>
