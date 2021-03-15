<?php
/**
 *  Z-BLOG
 *   by UMUT CAN 2021
 * @author S4_C1N
 * @copyright 2021
 * @version v1
 * @link https://github.com/C1N-S4
 */

try{
  $db = new PDO("mysql:host=localhost;dbname=z-blog;charset=utf8",'root','');
}catch(Pdoexception $e){
  echo $e->getMessage();
}
 ?>
