<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Metropolis
 */

define("URL",get_template_directory_uri());
define("RAIZ",get_bloginfo("url"));
global $activa;
?><!doctype html>
<!--[if IE 9]>      <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 10]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <title>Exclusive Condominium Residences in Downtown Los Angeles | Metropolis</title>
   <meta name="description" content="Upscale, beautiful modern condominium residences with gorgeous panoramic views in Downtown Los Angeles" />
   <meta name="keywords" content="Exclusive real estate in LA, Luxury real estate los angeles, Apartments Downtown, Los Angeles, Modern Real Estate Developments, Sophisticated Los Angeles condominiums, Upscale condo community, Southern California premium real estate" />

    <link rel="stylesheet" href="<?php echo URL ?>/css/libraries.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>/css/app.min.css">
    <script src="<?php echo URL ?>/js/vendor/modernizr.min.js"></script>

    <script type="text/javascript" src="//use.typekit.net/kwt3kgo.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<link rel="shortcut icon" href="<?php echo URL;?>/favicon.ico"/>
<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">
<meta name="apple-mobile-web-app-title" content="Metropolis">
<link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="mstile-144x144.png">
<meta name="application-name" content="Metropolis">

<?php wp_head(); ?>
  </head>

    <body>
<div class="loader_overlay"></div>
 
        <header role="mainNav" class="main-nav">
  
   <div class="row nav-lang">
      <div class="column medium-4">
       <p class="lang">
          LANGUAGE <a href="" class="active">EN</a> <a href="">中文</a><br>
          <span class="gold">AVAILABILITY — <a href="<?php echo URL; ?>/files/Metropolis - Final floor plans 09-03.pdf" Target="_BLANK">floor plans</a></span>
        </p>
      </div>
      <div class="column medium-4 text-right"><p class="sale rp gold">sales center  los angeles   —   <a href="#">855-657-8300</a></p></div>
   </div>


  <div class="btn-menu show-for-small-only">
    <a href=""><i class="icon icon-menu"></i></a>
  </div>

   <div class="row nav-logo">
     <div class="large-12">
      <i class="icon icon-metropolis"></i>
      <i class="icon icon-isologo"></i>
     </div>
    </div> 


   <div class="row navigation">
     <nav class="medium-12 columns nav-links">
       <ul>
         <li class="nav-item home"><a href="<?php echo RAIZ; ?>" <?php if($activa=="home"){echo "class='active'";} ?>>HOME<span></span></a></li>
                  <li class="lifestyle separator">&middot;</li>
         <li class="nav-item lifestyle"><a href="<?php echo RAIZ; ?>/lifestyle" <?php if($activa=="lifestyle"){echo "class='active'";} ?>>LIFESTYLE<span></span></a></li>
                  <li class="neighborhood separator">&middot;</li>
         <li class="nav-item neighborhood"><a href="<?php echo RAIZ; ?>/neighborhood" <?php if($activa=="neighborhood"){echo "class='active'";} ?>>NEIGHBORHOOD<span></span></a></li>
                  <li class="overview separator">&middot;</li>
         <li class="nav-item overview"><a href="<?php echo RAIZ; ?>/overview" <?php if($activa=="overview"){echo "class='active'";} ?>>OVERVIEW<span></span></a></li>
                  <li class="team separator">&middot;</li>
         <li class="nav-item team"><a href="<?php echo RAIZ; ?>/team" <?php if($activa=="team"){echo "class='active'";} ?>>TEAM<span></span></a></li>
                  <li class="press separator">&middot;</li>
         <li class="nav-item press"><a href="<?php echo RAIZ; ?>/press" <?php if($activa=="press"){echo "class='active'";} ?>>PRESS<span></span></a></li>
         <li class="nav-item contact"><a href="<?php echo RAIZ; ?>/contact" <?php if($activa=="contact"){echo "class='active'";} ?>>CONTACT<span></span></a></li>
       </ul>
     </nav>
     <hr class="line">
     <div class="medium-12 nav-lang-small">
      <div class="">
       <p>LANGUAGE <a href="#en" class="active">EN</a> <a href="#cn">中文</a></p>
       <p>AVAILABILITY    —    floor plans</p>
       <p>sales center  los angeles   —   <a href="#">855-657-8300</a></p>
      </div>
   </div>

   </div>
</header>