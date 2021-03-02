<?php
//PDO ile mysql bağlantısı

try{

   $db=new PDO("mysql:host=localhost;dbname=z-blog;charset=utf8",'root','');

   echo "Connection successful";

}catch(PDOException $e){

  echo getmassage();
}





?>
