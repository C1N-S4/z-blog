<?php
//PDO ile mysql bağlantısı

try{

   $db=new PDO("mysql:host=localhost;dbname=z-blog;charset=utf8",'root','');

}catch(PDOException $e){

  echo getmassage();
}




?>
