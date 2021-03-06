<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title><?php echo $pTitle;?> - <?php echo __('OSM_EXTRACTS');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?php echo $baseUrl?>/assets/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo $baseUrl?>/assets/css/custom.min.css">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $baseUrl; ?>/assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $baseUrl; ?>/assets/favicon.ico" type="image/x-icon">

    <script type="text/javascript" src="//cdn.jsdelivr.net/cookie-bar/1/cookiebar-latest.min.js?tracking=1&thirdparty=1&always=1"></script>

  </head>
  <body>

<div class="container">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

           <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="<?php echo $baseUrl?>/">
        <img alt="Brand" src="<?php echo $baseUrl?>/assets/osm.png">
      </a>
      <a class="navbar-brand" href="<?php echo $baseUrl?>/"><?php echo __('OSM_EXTRACTS');?></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">

      <li<?php echo ($_SERVER['REQUEST_URI'] == $baseUrl . '/about/') ? ' class="active"':'' ?>><a href="<?php echo $baseUrl?>/about/"><?php echo __('ABOUT'); ?></a></li>
      <li<?php echo ($_SERVER['REQUEST_URI'] == $baseUrl . '/contact/') ? ' class="active"':'' ?>><a href="<?php echo $baseUrl?>/contact/"><?php echo __('CONTACTS'); ?></a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon glyphicon-flag"> </span> <?php echo __('LANGUAGE');?> <span class="caret"></span></a>
          <?php $baseLang = Flight::request()->base;
                $baseLang .= explode("?", Flight::request()->url)[0]; 
          ?>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $baseLang.'?lang=it'?>">Italiano</a></li>
            <li><a href="<?php echo $baseLang.'?lang=en'?>">English</a></li>
            <li><a href="<?php echo $baseLang.'?lang=de'?>">Deutsch</a></li>
          </ul>
        </li>
      </ul>
</div>

  </div>
</nav>
