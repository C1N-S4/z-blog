<?php
function search(){
require "config.php";
$post_get = $POST['search'];

$searchz = $db->prepare("SELECT * FROM zblog_posts INNER JOIN zblog_category ON zblog_category.category_id = zblog_posts.post_cotegory WHERE post_title LIKE $post_get");
$searchz-> execute(array($post_get));
$searchw = $searchz-> fetchALL(PDO::FETCH_ASSOC);
$noresult = $searchz-> rowCount();


if($noresult){
  echo '
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
                                        <a href="blog-grid.html" class="categorie"></a>
                                        <h5>
                                            <a href="post-default.html"></a>
                                        </h5>
                                        <p></p>
                                        <div class="post-card-info">
                                            <ul class="list-inline">
                                                <li>
                                                    <a href="author.html">
                                                        <img src="assets/img/author/1.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">Admin</a>
                                                </li>
                                                <li class="dot"></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--/-->
                            </div>
                    </div>
                </div>
            </div>
        </section>';

}else{
  echo "<H1>NO RESULT ....</H1>";
}
}

 ?>
