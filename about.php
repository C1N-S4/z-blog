<?php
/**
 *  Z-BLOG
 *   by UMUT CAN 2021
 * @author S4_C1N
 * @copyright 2021
 * @version Alfa
 * @link https://github.com/C1N-S4
 */
include_once "include/config.php";
require_once "include/settings.php";
require_once "include/category.php";
require_once "include/posts.php";
require_once "include/search.php";

$setting = settings();
$cotegorys = category();
$f = search();
$ab = about();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!--By S4_C1N :) -->
    <link href="style/style.css" type="text/css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ef13e8ff7d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <title><?php echo $setting["z-blog_title"]; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="<?php echo $setting['z-blog_desc']; ?>">
    <meta name="Keywords" content="<?php echo $setting['z-blog_keyw']; ?>">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $setting['z-blog_url']; ?>"><img src="<?php echo $setting['z-blog_logo'];?>" class="logo_img"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Projects
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">z-blog</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" action="" method="POST">
            <input class="form-control me-2" name="searchtext" type="text" placeholder="Search">
            <input class="btn-umut btn btn-outline-success" type="submit" value="Search">
          </form>
        </div>
      </div>
    </nav>
    <br><br>

    <div class="about-us">
                        <div class="about-us-image">
                            <img src="assets/img/about-us.jpg" alt="">
                        </div>
                        <div class="description">
                            <h6><?php echo $ab['about_title']; ?></h6>
                          <p><?php echo $ab['about_desc']; ?></p>
                        </div>
                    </div>

    <div class='cekom'>
       <div class='row'>
         <h1 class='cekom'>Cotegorys</h1><hr><br>
    <?php  foreach ($cotegorys as $cot) {
      echo '<p>'.$cot['categor_name'].'</p>';
    } ?>
  </div><br>


  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>
