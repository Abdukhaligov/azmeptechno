<!DOCTYPE html>
<html lang="<?php echo _x('en', 'HTML language code'); ?>">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $page->summary; ?>" />
    <link href="//fonts.googleapis.com/css?family=Lusitana:400,700|Quattrocento:400,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $config->urls->templates?>styles/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo $config->urls->templates?>styles/mdb.min.css" rel="stylesheet">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
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
                        <a class="nav-link" href="#about" data-offset="90">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" data-offset="90">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products" data-offset="90">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects" data-offset="90">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio" data-offset="90">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#partners" data-offset="90">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" data-offset="90">Contact</a>
                    </li>
                </ul>


                <!-- search engine -->
                <form class="form-inline mr-3" action='<?php echo $pages->get('template=search')->url; ?>' method='get'>


                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input type='text' name='q' id='search' placeholder='<?php echo _x('Search', 'placeholder'); ?>'
                               class="form-control my-0 py-1" aria-label="Search">
                        <div class="input-group-append">
                            <button type='submit' name='submit' class='input-group-text red lighten-3' id="basic-text1">
                                <i class="fas fa-search text-grey" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>

                <div class="">
            <span>
              <a class="black-text font-bold" href="#">AZ</a>
              <span class="red-text font-bold"> / </span>
              <a class="red-text font-bold" href="#">EN</a>
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
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-4 wow fadeIn" data-wow-delay="0.2s">Check
                our services</h3>

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
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Products</h3>

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

                                        <button class="btn btn-danger btn-sm m-auto" >Read More</button>

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

                                        <button class="btn btn-danger btn-sm m-auto" >Read More</button>

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

                                        <button class="btn btn-danger btn-sm m-auto" >Read More</button>

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

                                        <button class="btn btn-danger btn-sm m-auto" >Read More</button>

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

                                        <button class="btn btn-danger btn-sm m-auto" >Read More</button>

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

                                        <button class="btn btn-danger btn-sm m-auto" >Read More</button>

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

                                        <button class="btn btn-danger btn-sm m-auto" >Read More</button>

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

                                        <button class="btn btn-danger btn-sm m-auto" >Read More</button>

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

                    <button class="btn btn-default">View all products</button>

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
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Projects</h3>

            <!-- Section description -->
            <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor
                sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad
                voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima
                assumenda deleniti.</p>

            <div class="row">
                <!-- Second column -->
                <div class="col-md-12 mt-5 mb-5">

                    <div class="swiper-container swiper-container-projects col-md-12">
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
        <!-- Section: Portfolio -->

    </div>
    <div class="container">

        <!-- Section: Portfolio -->
        <section id="portfolio" class="mb-3">

            <!-- Section heading -->
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Gallery</h3>


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

                    <figure class="col-md-3">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(1).jpg" data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(1).jpg"
                                 class="img-fluid z-depth-1">
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(136).jpg" data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(136).jpg"
                                 class="img-fluid z-depth-1">
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(7).jpg" data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(7).jpg"
                                 class="img-fluid z-depth-1">
                        </a>

                    </figure>
                    <figure class="col-md-3">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(137).jpg" data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(137).jpg"
                                 class="img-fluid z-depth-1">
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(132).jpg" data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(132).jpg"
                                 class="img-fluid z-depth-1">
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(131).jpg" data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(131).jpg"
                                 class="img-fluid z-depth-1">
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(3).jpg" data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(3).jpg"
                                 class="img-fluid z-depth-1">
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(134).jpg" data-size="1600x1067">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(134).jpg"
                                 class="img-fluid z-depth-1">
                        </a>
                    </figure>
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
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Partners</h3>

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
            <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Contact</h3>

            <!-- Section sescription -->
            <p class="text-center w-responsive mx-auto mb-5 pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.

                Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum

                porro a pariatur accusamus veniam.</p>


            <div class="row">



                <!-- First column -->
                <div class="col-lg-5 mb-2">

                    <!-- Form with header -->
                    <div class="card">

                        <div class="card-body">

                            <!-- Header -->
                            <div class="form-header primary-color">

                                <h3><i class="fas fa-envelope"></i> Write to us:</h3>

                            </div>

                            <p>We'll write rarely, but only the best content.</p>

                            <br>

                            <!-- Body -->
                            <div class="md-form">

                                <i class="fas fa-user prefix"></i>

                                <input type="text" id="form3" class="form-control">

                                <label for="form3">Your name</label>

                            </div>

                            <div class="md-form">

                                <i class="fas fa-envelope prefix"></i>

                                <input type="text" id="form2" class="form-control">

                                <label for="form2">Your email</label>

                            </div>

                            <div class="md-form">

                                <i class="fas fa-tag prefix"></i>

                                <input type="text" id="form32" class="form-control">

                                <label for="form32">Subject</label>

                            </div>

                            <div class="md-form">

                                <i class="fas fa-pencil-alt prefix"></i>

                                <textarea type="text" id="form8" class="md-textarea form-control" rows="3"></textarea>

                                <label for="form8">Icon Prefix</label>

                            </div>

                            <div class="text-center">

                                <button class="btn btn-secondary mt-3">Submit</button>

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


                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.717285440294!2d49.84756841571897!3d40.370792666355435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307dad090d9181%3A0x2b88981f2bd87785!2z0J_QsNGA0Log0JHRg9C70YzQstCw0YA!5e0!3m2!1sru!2s!4v1579279671891!5m2!1sru!2s" frameborder="0"
                                style="border:0" allowfullscreen></iframe>

                    </div>

                    <br>

                    <!-- Buttons -->
                    <div class="row text-center mt-1">

                        <div class="col-md-4">

                            <a class=" mb-2 btn-floating btn-secondary"><i class="fas fa-map-marker-alt"></i></a>

                            <p>New York, NY 10012</p>

                            <p>United States</p>

                        </div>

                        <div class="col-md-4">

                            <a class="mb-2 btn-floating btn-secondary"><i class="fas fa-phone"></i></a>

                            <p>+ 01 234 567 89</p>

                            <p>Mon - Fri, 8:00-22:00</p>

                        </div>

                        <div class="col-md-4">

                            <a class="mb-2 btn-floating btn-secondary"><i class="fas fa-envelope"></i></a>

                            <p>info@gmail.com</p>

                            <p>sale@gmail.com</p>

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

        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });

    $('.navbar-collapse a').click(function () {

        $(".navbar-collapse").collapse('hide');
    });

    /* WOW.js init */
    new WOW().init();

</script>
</body>
</html>