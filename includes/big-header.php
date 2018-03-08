<?php include 'big-config.php'?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/big-form.css" />
    <link rel="stylesheet" href="css/big-nav.css" />
</head>
<body>
<!--start wrapper-->
<div class="wrapper">
<header>
    <h1><a href="index.php">Catherine Blake Smith's Web Dev Examples</a></h1>
    <nav id="cssmenu">
  <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
     <li><a href="flexbox.php"><span>Flexbox</span></a></li>
     <li><a href="galleries.php"><span>Galleries</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
           <li><a href="map.php"><span><i class="fa fa-fw fa-map-marker"></i> Map</span></a></li>
           <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-play"></i> YouTube</span></a></li>
        </ul>
     </li>
     <li><a href="parallax.php"><span>Parallax</span></a></li>
     <li><a href="shopping.php"><span>Shopping Carts</span></a></li>
     <li><a href="siteapp.php"><span>Site vs App</span></a></li>
     <li><a href="webcam.php"><span>Web Cams</span></a></li>
  </ul>
      </nav>
</header>
<!--start left column-->
<h2 class="pageID"><i class="logo fa <?=$logo?>"></i> <?=$PageID?></h2>
<section>
<!--end header.php-->