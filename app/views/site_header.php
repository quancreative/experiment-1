<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Windwalker</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.tmp) styles/main.css -->

    <link rel="stylesheet" href="styles/main.css">
    <!-- endbuild -->
    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="components/modernizr/modernizr.js"></script>
    <!-- endbuild -->
</head>
<body class="page-<?php echo $page_name;?>">
<!--[if lt IE 10]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Fixed navbar -->
<div id="main-nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="#">Windwalker</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
                $count = 0;
                $menuitems = array(
                    array('name' => 'home', 'link' => WEB_URL),
                    array('name' => 'works', 'link' => 'works'),
                    array('name' => 'about', 'link' => 'about'),
                    array('name' => 'contact', 'link' => 'contact')
                );

                foreach( $menuitems as $item):
                    $name = $item['name'];
                    $link = $item['link'];
                ?>

                <li class="nav-<?php echo $name ?> <?php if($page_name == $name) { echo 'active';} ?>">
                    <a href="<?php echo $link; ?>" ><?php echo ucwords($name); ?></a>
                </li>

                <?php $count++; endforeach; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<!-- Page Content -->

<div id="page-content">
    <div class="container">