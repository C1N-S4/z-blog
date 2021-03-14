<?php
/**
 *  Z-BLOG
 *   by UMUT CAN 2021
 * @author S4_C1N
 * @copyright 2021
 * @version Alfa
 * @link https://github.com/C1N-S4
 */


function settings(){
     //website settings ...
  require 'config.php';
  $settings = $db->prepare("SELECT * FROM zblog_setting");
  $settings->execute();
  $settings_1 = $settings->fetch(PDO::FETCH_ASSOC);
  return $settings_1;

}
function about(){
  require 'config.php';
  $about = $db->prepare("SELECT * FROM zblog_about");
  $about->execute();
  $about1 = $about->fetch(PDO::FETCH_ASSOC);
  return $about1 ;
}
 ?>
