<?php
/**
 *  Z-BLOG
 *   by UMUT CAN 2021
 * @author S4_C1N
 * @copyright 2021
 * @version v1
 * @link https://github.com/C1N-S4
 */

 function about(){
 require "include/config.php";
  $about = $db->prepare("SELECT * FROM zblog_about");
  $about->execute();
  $about1 = $about->fetch(PDO::FETCH_ASSOC);
  return $about1 ;
}

  ?>
