<!DOCTYPE html>
<html lang="<?php echo _x('en', 'HTML language code'); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?php echo $page->summary; ?>" />
    <title><?php echo $title; ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $config->urls->templates?>/styles/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo $config->urls->templates?>/styles/mdb.min.css" rel="stylesheet">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link href="<?php echo $config->urls->templates?>/styles/main.css" rel="stylesheet">
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $config->urls->templates?>styles/bootstrap.min.css" rel="stylesheet">

    <?php

    // handle output of 'hreflang' link tags for multi-language
    // this is good to do for SEO in helping search engines understand
    // what languages your site is presented in
    foreach($languages as $language) {
        // if this page is not viewable in the language, skip it
        if(!$page->viewable($language)) continue;
        // get the http URL for this page in the given language
        $url = $page->localHttpUrl($language);
        // hreflang code for language uses language name from homepage
        $hreflang = $homepage->getLanguageValue($language, 'name');
        // output the <link> tag: note that this assumes your language names are the same as required by hreflang.
        echo "\n\t<link rel='alternate' hreflang='$hreflang' href='$url' />";
    }

    ?>
</head>

<body class="<?php if($sidebar) echo "has-sidebar"; ?>">

<!-- Navigation & Intro -->
<header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar" style="background: rgb(255,255,240);
background: linear-gradient(270deg, rgba(255,255,240,1) 0%, rgba(215,215,215,1) 50%);">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?php echo $config->urls->templates?>/img/logo.png" style="width: 60%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="#about" data-offset="90"><?=__('About us');?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" data-offset="90"><?=__('Services');?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products" data-offset="90"><?=__('Products');?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects" data-offset="90"><?=__('Projects');?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio" data-offset="90"><?=__('Gallery');?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#partners" data-offset="90"><?=__('Partners');?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" data-offset="90"><?=__('Contact');?></a>
                    </li>
                </ul>


                <!-- search engine -->
                <form class="form-inline mr-3" action='<?php echo $pages->get('template=search')->url; ?>' method='get'>


                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input type='text' name='q' id='search' placeholder='<?php echo _x('Search', 'placeholder'); ?>'
                               class="form-control my-0 py-1" aria-label="<?=__('Search');?>">
                        <div class="input-group-append">
                            <button type='submit' name='submit' class='input-group-text red lighten-3' id="basic-text1">
                                <i class="fas fa-search text-grey" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>

                <div class="">
            <span>

                <?php
                $c = 0;
                foreach($languages as $language) {

                    if(!$page->viewable($language)) continue; // is page viewable in this language?

                    $url = $page->localUrl($language);
                    $hreflang = $homepage->getLanguageValue($language, 'name');

                    if($c == 1){
                        echo "<span class='red-text font-bold'> / </span>";
                    }

                    if($language->id == $user->language->id) {
                        echo "<a class='red-text font-bold' hreflang='$hreflang' href='$url'>$language->title</a>";

                    } else {
                        echo "<a class='black-text font-bold' hreflang='$hreflang' href='$url'>$language->title</a>";
                    }


                    $c++;
                }
                ?>

            </span>
                </div>

            </div>
        </div>
    </nav>

    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}'
         style="background-image: url(<?php echo $config->urls->templates?>img/layer1.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">

        <div class="mask rgba-black-strong">

            <div class="container h-100 d-flex justify-content-center align-items-center">

                <div class="row smooth-scroll">

                    <div class="col-md-12">

                        <div class="white-text text-center">

                            <h2 class="display-4 font-weight-bold text-uppercase yellow-text mb-4 wow fadeIn">Legal services</h2>

                            <h4 class="mt-2 mb-4 wow fadeIn" data-wow-delay="0.2s">Professional legal services</h4>

                            <p class="grey-text wow fadeIn" data-wow-delay="0.2s">- EST. 1995 -</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</header>
<!-- Navigation & Intro -->

<!-- Main layout -->
<main>

    <div class="container">

        <!-- Section: Features -->
        <section id="about" class="mb-3 mt-5 pt-4 pb-3">

            <!-- Section heading -->
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-4 wow fadeIn" data-wow-delay="0.2s">We Build Your
                Dream House</h3>

            <!-- Section description -->
            <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor
                sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad
                voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima
                assumenda deleniti.</p>

            <!-- Grid row -->
            <div class="row text-center">

                <!-- Grid column -->
                <div class="col-md-4 mb-1 mt-1 wow fadeIn" data-wow-delay="0.4s">
                    <i class="fas fa-cubes orange-text-2 fa-4x mb-4"></i>
                    <h5 class="font-weight-bold mb-4">Perfection</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                        aperiam minima assumenda deleniti hic.</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-1 mt-1 wow fadeIn" data-wow-delay="0.4s">
                    <i class="fas fa-users orange-text-2 fa-4x mb-4"></i>
                    <h5 class="font-weight-bold mb-4">Safety</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                        aperiam minima assumenda deleniti hic.</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-1 mt-1 wow fadeIn" data-wow-delay="0.4s">
                    <i class="fas fa-magic orange-text-2 fa-4x mb-4"></i>
                    <h5 class="font-weight-bold mb-4">Flexibility</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                        aperiam minima assumenda deleniti hic.</p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Features -->

        <hr class="mt-5 pb-4">

        <!-- Section: Services -->
        <section id="services" class="mb-5">

            <!-- Section heading -->
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-4 wow fadeIn" data-wow-delay="0.2s"><?=__('Check our services');?></h3>

            <!-- Section description -->
            <p class="text-center grey-text mt-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor
                sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad
                voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima
                assumenda deleniti.</p>

            <!-- Grid row -->
            <div class="row wow fadeIn" data-wow-delay="0.4s">

                <!-- Grid column -->
                <div class="col-md-12">

                    <!--  Nav tabs  -->
                    <ul class="nav md-pills flex-center flex-wrap mx-0 mb-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active font-weight-bold text-uppercase" data-toggle="tab" href="#panel31"
                               role="tab">construction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#panel33"
                               role="tab">painting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#panel32"
                               role="tab">architecture</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#panel34"
                               role="tab">renovation</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Tab panels -->
                <div class="tab-content pt-0">

                    <!-- Panel 1 -->
                    <div class="tab-pane fade show in active" id="panel31" role="tabpanel">
                        <br>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-5">

                                <!-- Featured image -->
                                <div class="view overlay z-depth-1 zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%281%29.jpg"
                                         class="img-fluid">
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-5">

                                <!-- Featured image -->
                                <div class="view overlay z-depth-1 zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%282%29.jpg"
                                         class="img-fluid">
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-5">

                                <!-- Featured image -->
                                <div class="view overlay z-depth-1 zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%283%29.jpg"
                                         class="img-fluid">
                                </div>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Panel 1 -->

                    <!-- Panel 2 -->
                    <div class="tab-pane fade" id="panel32" role="tabpanel">
                        <br>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-5">

                                <!-- Featured image -->
                                <div class="view overlay z-depth-1 zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%286%29.jpg"
                                         class="img-fluid">
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-5">

                                <!-- Featured image -->
                                <div class="view overlay z-depth-1 zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%285%29.jpg"
                                         class="img-fluid">
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-5">

                                <!-- Featured image -->
                                <div class="view overlay z-depth-1 zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%284%29.jpg"
                                         class="img-fluid">
                                </div>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Panel 2 -->

                    <!-- Panel 3 -->
                    <div class="tab-pane fade" id="panel33" role="tabpanel">
                        <br>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-5">

                                <!-- Featured image -->
                                <div class="view overlay z-depth-1 zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%2810%29.jpg"
                                         class="img-fluid">
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-5">

                                <!-- Featured image -->
                                <div class="view overlay z-depth-1 zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%2813%29.jpg"
                                         class="img-fluid">
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-5">

                                <!-- Featured image -->
                                <div class="view overlay z-depth-1 zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%2814%29.jpg"
                                         class="img-fluid">
                                </div>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Panel 3 -->

                    <!-- Panel 4 -->
                    <div class="tab-pane fade" id="panel34" role="tabpanel">
                        <br>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-5">

                                <!-- Featured image -->
                                <div class="view overlay z-depth-1 zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%289%29.jpg"
                                         class="img-fluid">
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-5">

                                <!-- Featured image -->
                                <div class="view overlay z-depth-1 zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%288%29.jpg"
                                         class="img-fluid">
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-5">

                                <!-- Featured image -->
                                <div class="view overlay z-depth-1 zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%286%29.jpg"
                                         class="img-fluid">
                                </div>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Panel 4 -->

                </div>
                <!-- Tab panels -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Services -->

    </div>

    <!-- Streak -->
    <div class="streak streak-photo streak-md"
         style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/City/12-col/img%20%2822%29.jpg');">
        <div class="flex-center mask rgba-indigo-strong">
            <div class="text-center white-text">
                <h2 class="h2-responsive mb-5"><i class="fas fa-quote-left" aria-hidden="true"></i> Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit. <i class="fas fa-quote-right" aria-hidden="true"></i></h2>
                <h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s">~ Erich Fromm</h5>
            </div>
        </div>
    </div>
    <!-- Streak -->
    <div class="container">

        <!-- Section: Portfolio -->
        <section id="products" class="mb-3">

            <!-- Section heading -->
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s"><?=__('Products');?></h3>

            <!-- Section description -->
            <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor
                sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad
                voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima
                assumenda deleniti.</p>

            <!-- Section: Last items -->
            <section>


                <hr class="mb-5">

                <!-- Grid row -->
                <div class="row">

                    <div class="col-lg-3 col-md-6 mb-4">

                        <!-- Card -->
                        <div class="card card-ecommerce">

                            <!-- Card image -->
                            <div class="view overlay">

                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                                     alt="sample image">

                                <a>

                                    <div class="mask rgba-white-slight"></div>

                                </a>

                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Category & Title -->
                                <h5 class="card-title mb-1">

                                    <strong>

                                        <a href="" class="dark-grey-text">Headphones</a>

                                    </strong>

                                </h5>

                                <span class="badge badge-danger mb-2">bestseller</span>
                                <span class="badge badge-secondary mb-2">new</span>
                                <span class="badge badge-default mb-2">free</span>
                                <span class="badge badge-primary mb-2">-50%</span>

                                <!-- Card footer -->
                                <div class="card-footer pb-0">

                                    <div class="row mb-0">

                                        <button class="btn btn-danger btn-sm m-auto" ><?=__('Read more');?></button>

                                    </div>

                                </div>

                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->

                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">

                        <!-- Card -->
                        <div class="card card-ecommerce">

                            <!-- Card image -->
                            <div class="view overlay">

                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                                     alt="sample image">

                                <a>

                                    <div class="mask rgba-white-slight"></div>

                                </a>

                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Category & Title -->
                                <h5 class="card-title mb-1">

                                    <strong>

                                        <a href="" class="dark-grey-text">Headphones</a>

                                    </strong>

                                </h5>

                                <span class="badge badge-danger mb-2">bestseller</span>
                                <span class="badge badge-secondary mb-2">new</span>
                                <span class="badge badge-default mb-2">free</span>
                                <span class="badge badge-primary mb-2">-50%</span>

                                <!-- Card footer -->
                                <div class="card-footer pb-0">

                                    <div class="row mb-0">

                                        <button class="btn btn-danger btn-sm m-auto" ><?=__('Read more');?></button>

                                    </div>

                                </div>

                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->

                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">

                        <!-- Card -->
                        <div class="card card-ecommerce">

                            <!-- Card image -->
                            <div class="view overlay">

                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                                     alt="sample image">

                                <a>

                                    <div class="mask rgba-white-slight"></div>

                                </a>

                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Category & Title -->
                                <h5 class="card-title mb-1">

                                    <strong>

                                        <a href="" class="dark-grey-text">Headphones</a>

                                    </strong>

                                </h5>

                                <span class="badge badge-danger mb-2">bestseller</span>
                                <span class="badge badge-secondary mb-2">new</span>
                                <span class="badge badge-default mb-2">free</span>
                                <span class="badge badge-primary mb-2">-50%</span>

                                <!-- Card footer -->
                                <div class="card-footer pb-0">

                                    <div class="row mb-0">

                                        <button class="btn btn-danger btn-sm m-auto" ><?=__('Read more');?></button>

                                    </div>

                                </div>

                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->

                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">

                        <!-- Card -->
                        <div class="card card-ecommerce">

                            <!-- Card image -->
                            <div class="view overlay">

                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                                     alt="sample image">

                                <a>

                                    <div class="mask rgba-white-slight"></div>

                                </a>

                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Category & Title -->
                                <h5 class="card-title mb-1">

                                    <strong>

                                        <a href="" class="dark-grey-text">Headphones</a>

                                    </strong>

                                </h5>

                                <span class="badge badge-danger mb-2">bestseller</span>
                                <span class="badge badge-secondary mb-2">new</span>
                                <span class="badge badge-default mb-2">free</span>
                                <span class="badge badge-primary mb-2">-50%</span>

                                <!-- Card footer -->
                                <div class="card-footer pb-0">

                                    <div class="row mb-0">

                                        <button class="btn btn-danger btn-sm m-auto" ><?=__('Read more');?></button>

                                    </div>

                                </div>

                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->

                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">

                        <!-- Card -->
                        <div class="card card-ecommerce">

                            <!-- Card image -->
                            <div class="view overlay">

                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                                     alt="sample image">

                                <a>

                                    <div class="mask rgba-white-slight"></div>

                                </a>

                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Category & Title -->
                                <h5 class="card-title mb-1">

                                    <strong>

                                        <a href="" class="dark-grey-text">Headphones</a>

                                    </strong>

                                </h5>

                                <span class="badge badge-danger mb-2">bestseller</span>
                                <span class="badge badge-secondary mb-2">new</span>
                                <span class="badge badge-default mb-2">free</span>
                                <span class="badge badge-primary mb-2">-50%</span>

                                <!-- Card footer -->
                                <div class="card-footer pb-0">

                                    <div class="row mb-0">

                                        <button class="btn btn-danger btn-sm m-auto" ><?=__('Read more');?></button>

                                    </div>

                                </div>

                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->

                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">

                        <!-- Card -->
                        <div class="card card-ecommerce">

                            <!-- Card image -->
                            <div class="view overlay">

                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                                     alt="sample image">

                                <a>

                                    <div class="mask rgba-white-slight"></div>

                                </a>

                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Category & Title -->
                                <h5 class="card-title mb-1">

                                    <strong>

                                        <a href="" class="dark-grey-text">Headphones</a>

                                    </strong>

                                </h5>

                                <span class="badge badge-danger mb-2">bestseller</span>
                                <span class="badge badge-secondary mb-2">new</span>
                                <span class="badge badge-default mb-2">free</span>
                                <span class="badge badge-primary mb-2">-50%</span>

                                <!-- Card footer -->
                                <div class="card-footer pb-0">

                                    <div class="row mb-0">

                                        <button class="btn btn-danger btn-sm m-auto" ><?=__('Read more');?></button>

                                    </div>

                                </div>

                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->

                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">

                        <!-- Card -->
                        <div class="card card-ecommerce">

                            <!-- Card image -->
                            <div class="view overlay">

                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                                     alt="sample image">

                                <a>

                                    <div class="mask rgba-white-slight"></div>

                                </a>

                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Category & Title -->
                                <h5 class="card-title mb-1">

                                    <strong>

                                        <a href="" class="dark-grey-text">Headphones</a>

                                    </strong>

                                </h5>

                                <span class="badge badge-danger mb-2">bestseller</span>
                                <span class="badge badge-secondary mb-2">new</span>
                                <span class="badge badge-default mb-2">free</span>
                                <span class="badge badge-primary mb-2">-50%</span>

                                <!-- Card footer -->
                                <div class="card-footer pb-0">

                                    <div class="row mb-0">

                                        <button class="btn btn-danger btn-sm m-auto" ><?=__('Read more');?></button>

                                    </div>

                                </div>

                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->

                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">

                        <!-- Card -->
                        <div class="card card-ecommerce">

                            <!-- Card image -->
                            <div class="view overlay">

                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                                     alt="sample image">

                                <a>

                                    <div class="mask rgba-white-slight"></div>

                                </a>

                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Category & Title -->
                                <h5 class="card-title mb-1">

                                    <strong>

                                        <a href="" class="dark-grey-text">Headphones</a>

                                    </strong>

                                </h5>

                                <span class="badge badge-danger mb-2">bestseller</span>
                                <span class="badge badge-secondary mb-2">new</span>
                                <span class="badge badge-default mb-2">free</span>
                                <span class="badge badge-primary mb-2">-50%</span>

                                <!-- Card footer -->
                                <div class="card-footer pb-0">

                                    <div class="row mb-0">

                                        <button class="btn btn-danger btn-sm m-auto" ><?=__('Read more');?></button>

                                    </div>

                                </div>

                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->

                    </div>

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row justify-content-center mb-4">

                    <button class="btn btn-default"><?=__('View all products');?></button>

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Last items -->

        </section>
        <!-- Section: Portfolio -->

    </div>
    <div class="container">

        <!-- Section: Portfolio -->
        <section id="projects" class="mb-3">

            <!-- Section heading -->
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s"><?=__('Projects');?></h3>

            <!-- Section description -->
            <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s"><?=$pages->get('/projects/')->Text;?></p>

            <div class="row">
                <!-- Second column -->
                <div class="col-md-12 mt-5 mb-5">

                    <div class="swiper-container swiper-container-projects col-md-12">
                        <div class="swiper-wrapper">

                            <?php foreach ($pages->get('/projects/')->images as $image):?>

                                <div class="swiper-slide partner">
                                    <img src="<?=$image->url;?>">
                                </div>

                            <?php endforeach; ?>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
                <!-- Second column -->
            </div>

        </section>
        <!-- Section: Portfolio -->

    </div>
    <div class="container">

        <!-- Section: Portfolio -->
        <section id="portfolio" class="mb-3">

            <!-- Section heading -->
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s"><?=__('Gallery');?></h3>


        </section>
        <!-- Section: Portfolio -->

    </div>

    <div class="container-fluid">

        <div class="row mb-5 wow fadeIn" data-wow-delay="0.4s">

            <!-- Grid column -->
            <div class="col-md-12 mb-5">

                <div id="mdb-lightbox-ui"></div>

                <!-- Full width lightbox -->
                <div class="mdb-lightbox">

                    <?php foreach ($pages->get('/gallery/')->images as $image):?>

                        <figure class="col-md-3">
                            <a href="<?=$image->url;?>" data-size="1600x1067">
                                <img src="<?=$image->url;?>" class="img-fluid z-depth-1">
                            </a>
                        </figure>

                    <?php endforeach; ?>

                </div>
                <!-- Full width lightbox -->

            </div>
            <!-- Grid column -->

        </div>

    </div>

    <!-- Second container -->
    <div class="container">
        <section id="partners"  class="section pb-5 mb-5">

            <!-- Section heading -->
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s"><?=__('Partners');?></h3>

            <div class="row">
                <!-- Second column -->
                <div class="col-md-12 mt-5 mb-5">

                    <div class="swiper-container swiper-container-partners col-md-12">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide partner">
                                <img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands-1/512/142_Github_logo_logos-512.png">
                            </div>
                            <div class="swiper-slide partner">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1280px-PHP-logo.svg.png">
                            </div>
                            <div class="swiper-slide partner">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo-ubuntu_cof-orange-hex.svg">
                            </div>
                            <div class="swiper-slide partner">
                                <img src="https://www.kindpng.com/picc/m/1-12327_aws-amazon-logo-amazon-web-services-hd-png.png">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
                <!-- Second column -->
            </div>
        </section>

        <!-- Section: Contact -->
        <section id="contact" class="section pb-5 mb-5">

            <!-- Section heading -->
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s"><?=__('Contact');?></h3>

            <!-- Section sescription -->
            <p class="text-center w-responsive mx-auto mb-5 pb-5"><?=$pages->get('/contacts/')->Text;?></p>


            <div class="row">



                <!-- First column -->
                <div class="col-lg-5 mb-2">

                    <!-- Form with header -->
                    <div class="card">

                        <div class="card-body">

                            <!-- Header -->
                            <div class="form-header primary-color">

                                <h3><i class="fas fa-envelope"></i><?=__(' Write to us:');?></h3>

                            </div>


                            <!-- Body -->
                            <div class="md-form">

                                <i class="fas fa-user prefix"></i>

                                <input type="text" id="form3" class="form-control">

                                <label for="form3"><?=__('Your name');?></label>

                            </div>

                            <div class="md-form">

                                <i class="fas fa-envelope prefix"></i>

                                <input type="text" id="form2" class="form-control">

                                <label for="form2"><?=__('Your email');?></label>

                            </div>

                            <div class="md-form">

                                <i class="fas fa-phone prefix"></i>

                                <input type="text" id="form32" class="form-control">

                                <label for="form32"><?=__('Your phone');?></label>

                            </div>

                            <div class="md-form">

                                <i class="fas fa-pencil-alt prefix"></i>

                                <textarea type="text" id="form8" class="md-textarea form-control" rows="3"></textarea>

                                <label for="form8"><?=__('Message');?></label>

                            </div>

                            <div class="text-center">

                                <button class="btn btn-secondary mt-3"><?=__('Submit');?></button>

                            </div>

                        </div>

                    </div>
                    <!-- Form with header -->

                </div>
                <!-- First column -->

                <!-- Second column -->
                <div class="col-lg-7">

                    <!-- Google map -->
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 400px">

                        <?=$pages->get('/contacts/')->gmap;?>

                    </div>

                    <br>

                    <!-- Buttons -->
                    <div class="row text-center mt-1">

                        <div class="col-md-4">

                            <a class=" mb-2 btn-floating btn-secondary"><i class="fas fa-map-marker-alt"></i></a>

                            <?=$pages->get('/contacts/')->Address;?>

                        </div>

                        <div class="col-md-4">

                            <a class="mb-2 btn-floating btn-secondary"><i class="fas fa-phone"></i></a>

                            <?=$pages->get('/contacts/')->Phone;?>

                        </div>

                        <div class="col-md-4">

                            <a class="mb-2 btn-floating btn-secondary"><i class="fas fa-envelope"></i></a>

                            <?=$pages->get('/contacts/')->Email_Address;?>

                        </div>

                    </div>

                </div>


            </div>

        </section>
        <!-- Section: Contact -->

        <!-- Second container -->

    </div>

    <script>
        var swiperPartners = new Swiper('.swiper-container-partners', {
            spaceBetween: 10,
            loop: true,
            slidesPerView: "auto",
            breakpoints: {
                640: {slidesPerView: 2, spaceBetween: 20,},
                768: {slidesPerView: 3, spaceBetween: 40,},
                1024: {slidesPerView: 4, spaceBetween: 50,},
                1600: {slidesPerView: 4, spaceBetween: 50,},
            },
            autoplay: {delay: 2500}
        });

        var swiperProjects = new Swiper('.swiper-container-projects', {
            spaceBetween: 10,
            loop: true,
            slidesPerView: "auto",
            breakpoints: {
                640: {slidesPerView: 2, spaceBetween: 20,},
                768: {slidesPerView: 3, spaceBetween: 40,},
                1024: {slidesPerView: 4, spaceBetween: 50,},
                1600: {slidesPerView: 4, spaceBetween: 50,},
            },
            autoplay: {delay: 2500}
        });

    </script>

</main>
<!-- Main layout -->

<!-- Footer -->
<footer class="page-footer footer-tiles text-center text-md-left">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">

        <div class="container-fluid black-text">

            © 2020 Copyright: AZMEP

        </div>

    </div>
    <!-- Copyright -->

</footer>

<!-- Scrollspy -->
<div class="dotted-scrollspy clearfix d-none d-sm-block">

    <ul class="nav smooth-scroll flex-column">

        <li class="nav-item"><a class="nav-link" href="#home"><span></span></a></li>

        <li class="nav-item"><a class="nav-link" href="#about"><span></span></a></li>

        <li class="nav-item"><a class="nav-link" href="#services"><span></span></a></li>

        <li class="nav-item"><a class="nav-link" href="#products"><span></span></a></li>

        <li class="nav-item"><a class="nav-link" href="#projects"><span></span></a></li>

        <li class="nav-item"><a class="nav-link" href="#portfolio"><span></span></a></li>

        <li class="nav-item"><a class="nav-link" href="#partners"><span></span></a></li>

        <li class="nav-item"><a class="nav-link" href="#contact"><span></span></a></li>

    </ul>

</div>
<!-- Scrollspy -->









<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript " src="<?php echo $config->urls->templates?>scripts/jquery-3.4.1.min.js "></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript " src="<?php echo $config->urls->templates?>scripts/popper.min.js "></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript " src="<?php echo $config->urls->templates?>scripts/bootstrap.min.js "></script>
<!-- MDB core JavaScript -->
<script type="text/javascript " src="<?php echo $config->urls->templates?>scripts/mdb.min.js "></script>
<!-- Google Maps -->
<script src="https://maps.google.com/maps/api/js"></script>

<script>
    // initialize scrollspy
    $('body').scrollspy({

        target: '.dotted-scrollspy'
    });

    // initialize lightbox
    $(function () {

        $("#mdb-lightbox-ui").load("<?php echo $config->urls->templates?>/mdb-addons/mdb-lightbox-ui.html");
    });

    $('.navbar-collapse a').click(function () {

        $(".navbar-collapse").collapse('hide');
    });

    /* WOW.js init */
    new WOW().init();

</script>

</body>
</html>
