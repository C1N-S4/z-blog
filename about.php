
<?php
/**
 *  Z-BLOG
 *   by UMUT CAN 2021
 * @author S4_C1N
 * @copyright 2021
 * @version v1
 * @link https://github.com/C1N-S4
 */

include_once "include/config.php";
include_once "include/functions/post_func.php";
include_once "include/functions/cotegory_func.php";
include_once "include/functions/about_contact.php";
$postz = post();
$cotegoryz = cotegoryz();
$ab = about();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>about</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic+Slab">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=6d013c276dd762abad7054e214a644f0">
</head>

<body style="background: rgb(41,40,40);">
    <nav class="navbar navbar-dark navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand link-secondary" href="index.php">Z-BLOG</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#">Projects</a>
                <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
            </div>
        </div>
    </nav>
    <main class="pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12 col-12">
                    <div class="bg-danger border rounded border-light shadow"></div><img class="rounded-circle img-fluid">
                    <p class="text-warning"><?php echo $ab['about_desc']; ?></p>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                    <aside></aside>
                    <h3 class="font-monospace text-center text-success border rounded border-info shadow-lg" style="font-family: 'Antic Slab', serif;box-shadow: inset 0px 21px 8px 12px var(--bs-blue);opacity: 0.43;">* Search *</h3>
                    <div class="bg-white p-3">
                                        <div class="input-group"><form action="search.php" method="POST"><span class="input-group-text">SEARCH</span><input class="form-control" name="search" type="text"><input class="btn btn-primary" type="submit" value="Find"></form></div>
                    </div>
                    <h3 class="font-monospace text-center text-success border rounded border-info shadow-lg" style="font-family: 'Antic Slab', serif;box-shadow: inset 0px 21px 8px 12px var(--bs-blue);opacity: 0.43;margin: 6px;">* Cotegorys*</h3>
                    <?php foreach($cotegoryz as $r2){ ?>  <p class="font-monospace text-uppercase text-center text-primary" style="font-family: 'Antic Slab', serif;font-size: 37px;color: rgb(182,196,218);"><?php echo $r2['cotegory_name']?></p><?php }?>
                </div>
            </div>
        </div>
        </main>
    <footer>
        <!-- Start: Social Icons -->
        <div class="social-icons" style="background: rgb(41,40,40);margin-top: 151px;color: var(--bs-blue);"><a href="#"><i class="icon ion-social-twitter" style="color: var(--bs-blue);"></i></a><a href="#"><i class="icon ion-social-facebook" style="color: var(--bs-indigo);"></i></a><a href="#"><i class="icon ion-social-snapchat" style="color: var(--bs-white);"></i></a><a href="#"><i class="icon ion-social-youtube" style="color: var(--bs-red);"></i></a></div><!-- End: Social Icons -->
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
