<?php
/**
 *  Z-BLOG
 *   by UMUT CAN 2021
 * @author S4_C1N
 * @copyright 2021
 * @version Alfa
 * @link https://github.com/C1N-S4
 */

try{

   $db=new PDO("mysql:host=localhost;dbname=z-blog;charset=utf8",'root','');

}catch(PDOException $e){

  echo $e->getmassage();
}




?>
