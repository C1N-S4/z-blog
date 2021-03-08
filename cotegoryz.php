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
$setting = settings();
$cotegorys = category();
$cotegorywz = cotegory_view();

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
        <a class="navbar-brand" href="<?php echo $setting['z-blog_url']; ?>>"><img src="<?php echo $setting['z-blog_logo'];?>" class="logo_img"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
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
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn-umut btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <br><br><br>
    <div class='cekom'>
       <div class='row'>
         <h1 class='cekom'>Cotegorys</h1><hr><br>
    <?php  foreach ($cotegorys as $cot) {
      echo '<p>'.$cot['categor_name'].'</p>';
    } ?>
  </div>
  </div>
  <section class="blog-grid">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-8 mt-30">
                      <div class="row">
                          <div class="col-lg-6 col-md-6">
                              <!--Post-1-->
                              <div class="post-card">
                                  <div class="post-card-image">
                                      <a href="post-default.html">
                                          <img src="assets/img/blog/7.jpg" alt="">
                                      </a>
                                  </div>
                                  <div class="post-card-content">
                                      <a href="blog-grid.html" class="categorie"><?php echo $categoryw_1['cotegory_name'];?></a>
                                      <h5>
                                          <a href="post-default.html">7 Dinner Recipes for a Date Night at Home</a>
                                      </h5>
                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                           Odit quam atque ipsa laborum sunt distinctio...</p>
                                      <div class="post-card-info">
                                          <ul class="list-inline">
                                              <li>
                                                  <a href="author.html">
                                                      <img src="assets/img/author/1.jpg" alt="">
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="author.html">David Smith</a>
                                              </li>
                                              <li class="dot"></li>
                                              <li>January 15, 2021</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <!--/-->
                          </div>
                  </div>
              </div>
          </div>
      </section>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>
