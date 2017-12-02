<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <base href="<?php echo _SITE_URL; ?>" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>FIL Art d.o.o.</title>
  <meta http-equiv='Cache-control' content='no-cache' />
  <meta name='robots' content='index,follow' />
  <meta name="Copyright" content="FIL Art d.o.o." />
  <meta name="DC.language" content="hr-HR" />
  <meta name="DC.title" content="FIL Art d.o.o." />
  <meta name="DC.format" content="text/html" />
  <meta name="DC.publisher" content="FIL Art d.o.o." />
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="../images/favicon.png">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="../js/magnific-popup/magnific-popup.css">
  <link href="../css/normalise-min.css" rel="stylesheet" type="text/css" />
  <link href="../css/animations.css" rel="stylesheet" type="text/css" />
  <link href="../css/animations-ie-fix.css" rel="stylesheet" type="text/css" />
  <link href="../css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="row header">

  <div class="acenter">
    <div class="absolute">
      <p class="tagline">Studio za grafički dizajn</p>

      <div class="hlogo">
        <a href="home.php"><img src="../images/filart-logo.svg" alt="" /></a>
      </div><!-- end .hlogo -->

      <div class="hinfo">
        <ul>
          <li class="hloc">Gajeva 5, Krapina</li>
          <li class="htel"><a data-rel="external" href="tel:+38549300223">049 300 223</a> ili <a data-rel="external" href="tel:+38549300225">049 300 225</a></li>
          <li class="hmail"><a href="mailto:filartdoo@gmail.com">filartdoo@gmail.com</a></li>
        </ul>
      </div><!-- end .hinfo -->
    </div><!-- end .absolute -->
  </div><!-- end .acenter -->

  <div class="menu-holder">

    <div id="toggle" class="nav-icon">
      <span></span>
      <span></span>
      <span></span>
    </div><!-- end #toggle -->

    <div class="animatedParent">
      <div class="animated fadeIn izbornik">
        <ul class="main-menu">
          <li><a href="home.php">Početna</a></li>
          <li><a href="o_nama.php">O nama</a></li>
          <li class="has-drop">
            <a href="dizajn.php">Dizajn</a>
            <ul class="sub-menu">
              <li><a href="dizajn_detalji.php">Vizualni identitet</a></li>
              <li><a href="dizajn_detalji.php">Dizajn ambalaže</a></li>
              <li><a href="dizajn_detalji.php">Plakati, brošure, publikacije</a></li>
              <li><a href="dizajn_detalji.php">Akcijski materijali trgovačkih lanaca</a></li>
            </ul><!-- end of .sub-menu -->
          </li>
          <li class="has-drop">
            <a href="tisak.php">Tisak</a>
            <ul class="sub-menu">
              <li><a href="tisak_detalji.php">Outdoor</a></li>
              <li><a href="tisak_detalji.php">Uređenje maloprodajnih trgovina</a></li>
              <li><a href="tisak_detalji.php">Prezentacijski sustavi</a></li>
              <li><a href="tisak_detalji.php">Digitalni tisak</a></li>
            </ul><!-- end of .sub-menu -->
          </li>
          <li><a href="projekti.php">Projekti</a></li>
          <li><a href="reference.php">Reference</a></li>
          <li><a href="kontakti.php">Kontakti</a></li>
        </ul><!-- end of .main-menu -->
      </div><!-- end of .izbornik -->
    </div><!-- end .animatedParent -->

  </div><!-- end .menu-holder -->

</div><!-- end .header -->


<?php
  if(strpos($_SERVER['REQUEST_URI'], 'home.php') == true )
  {
?>

  <div class="row dizajn-tisak animatedParent animateOnce">
    <div class="w5 dizajn animated fadeInLeft">
      <a href="dizajn.php">
        <div class="image" style="background:url('../lib/plugins/thumb.php?src=../images/content-images/dizajn1.jpg&w=1000&h=635&q=80&zc=1');"></div>
        <div class="hover">
          <h2 class="dttitle">Dizajn</h2>
        </div><!-- end .hover -->
      </a>
    </div><!-- end .dizajn -->
    <div class="w5 tisak animated fadeInRight">
      <a href="tisak.php">
        <div class="image" style="background:url('../lib/plugins/thumb.php?src=../images/content-images/tisak1.jpg&w=1000&h=635&q=80&zc=1');"></div>
        <div class="hover">
          <h2 class="dttitle">Tisak</h2>
        </div><!-- end .hover -->
      </div><!-- end .tisak -->
    </a>
  </div><!-- end .dizajn-tisak -->

<?php } ?>

<div class="main-content">
