<?php
/**
 *  Z-BLOG
 *   by UMUT CAN 2021
 * @author S4_C1N
 * @copyright 2021
 * @version v1
 * @link https://github.com/C1N-S4
 */

function cotegoryz(){
require "include/config.php";

$cotegory = $db->prepare("SELECT * FROM zblog_cotegorys");
$cotegory->execute(array());
$cotegor_view = $cotegory->fetchALL(PDO::FETCH_ASSOC);
return $cotegor_view;
}


 ?>
