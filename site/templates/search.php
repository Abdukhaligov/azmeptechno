<?php namespace ProcessWire;

// look for a GET variable named 'q' and sanitize it
$q = $sanitizer->text($input->get->q); 

// did $q have anything in it?
if($q) { 
	// Send our sanitized query 'q' variable to the whitelist where it will be
	// picked up and echoed in the search box by _main.php file. Now we could just use
	// another variable initialized in _init.php for this, but it's a best practice
	// to use this whitelist since it can be read by other modules. That becomes 
	// valuable when it comes to things like pagination. 
	$input->whitelist('q', $q); 

	// Sanitize for placement within a selector string. This is important for any 
	// values that you plan to bundle in a selector string like we are doing here.
	$q = $sanitizer->selectorValue($q); 

	// Search the title and body fields for our query text.
	// Limit the results to 50 pages. 
	$selector = "title|body~=$q, limit=50"; 

	// If user has access to admin pages, lets exclude them from the search results.
	// Note that 2 is the ID of the admin page, so this excludes all results that have
	// that page as one of the parents/ancestors. This isn't necessary if the user 
	// doesn't have access to view admin pages. So it's not technically necessary to
	// have this here, but we thought it might be a good way to introduce has_parent.
	if($user->isLoggedin()) $selector .= ", has_parent!=2"; 

	// Find pages that match the selector
	$matches = $pages->find($selector); 
	$cnt = $matches->count;

	// did we find any matches?
	if($cnt) {

		// yes we did: output a headline indicating how many were found.
		// note how we handle singular vs. plural for multi-language, with the _n() function
		$content = "<h2>" . sprintf(_n('Found %d page', 'Found %d pages', $cnt), $cnt) . "</h2>";

		// we'll use our renderNav function (in _func.php) to render the navigation
		$content .= renderNav($matches);

	} else {
		// we didn't find any
		$content = "<h2>" . __('Sorry, no results were found.') . "</h2>";
	}

} else {
	// no search terms provided
	$content = "<h2>" . __('Please enter a search term in the search box (upper right corner)') . "</h2>";
}
?>


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

<a href="#main" class="visually-hidden element-focusable bypass-to-main"><?php echo _x('Skip to content', 'bypass'); ?></a>

<!-- language switcher / navigation -->
<ul class='languages' role='navigation'><?php
    foreach($languages as $language) {
        if(!$page->viewable($language)) continue; // is page viewable in this language?
        if($language->id == $user->language->id) {
            echo "<li class='current'>";
        } else {
            echo "<li>";
        }
        $url = $page->localUrl($language);
        $hreflang = $homepage->getLanguageValue($language, 'name');
        echo "<a hreflang='$hreflang' href='$url'>$language->title</a></li>";
    }
    ?></ul>

<!-- top navigation -->
<ul class='topnav' role='navigation'><?php
    // top navigation consists of homepage and its visible children
    foreach($homepage->and($homepage->children) as $item) {
        if($item->id == $page->rootParent->id) {
            echo "<li class='current' aria-current='true'><span class='visually-hidden'>" . _x('Current page:', 'navigation') . " </span>";
        } else {
            echo "<li>";
        }
        echo "<a href='$item->url'>$item->title</a></li>";
    }

    // output an "Edit" link if this page happens to be editable by the current user
    if($page->editable()) echo "<li class='edit'><a href='$page->editUrl'>" . __('Edit') . "</a></li>";
    ?></ul>

<!-- breadcrumbs -->
<div class='breadcrumbs' role='navigation' aria-label='<?php echo _x('You are here:', 'breadcrumbs'); ?>'><?php
    // breadcrumbs are the current page's parents
    foreach($page->parents() as $item) {
        echo "<span><a href='$item->url'>$item->title</a></span> ";
    }
    // optionally output the current page as the last item
    echo "<span>$page->title</span> ";
    ?></div>

<!-- search engine -->
<form class='search' action='<?php echo $pages->get('template=search')->url; ?>' method='get'>
    <label for='search' class='visually-hidden'><?php echo _x('Search:', 'label'); ?></label>
    <input type='text' name='q' id='search' placeholder='<?php echo _x('Search', 'placeholder'); ?>' />
    <button type='submit' name='submit' class='visually-hidden'><?php echo _x('Search', 'button'); ?></button>
</form>

test

<main id='main'>

    <!-- main content -->
    <div id='content'>

        <h1><?php echo $title; ?></h1>

        <?php echo $content; ?>

    </div>



</main>

<!-- footer -->
<footer id='footer'>
    <p>
        <a href='http://processwire.com'><?php echo __('Powered by ProcessWire CMS'); ?></a> &nbsp; / &nbsp;
        <?php
        if($user->isLoggedin()) {
            // if user is logged in, show a logout link
            echo "<a href='{$config->urls->admin}login/logout/'>" . sprintf(__('Logout (%s)'), $user->name) . "</a>";
        } else {
            // if user not logged in, show a login link
            echo "<a href='{$config->urls->admin}'>" . __('Admin Login') . "</a>";
        }
        ?>

    </p>
</footer>


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
