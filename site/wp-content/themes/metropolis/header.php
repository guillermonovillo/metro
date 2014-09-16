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
?><!doctype html>
<!--[if lt IE 9]>      <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Metropolis</title>
    <link rel="stylesheet" href="<?php echo URL ?>/css/libraries.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>/css/app.min.css">
    <script src="<?php echo URL ?>/js/vendor/modernizr.min.js"></script>

    <script type="text/javascript" src="//use.typekit.net/kwt3kgo.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>


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

 
        <header role="mainNav" class="main-nav">
  
   <div class="row nav-lang">
      <div class="column medium-4">
       <p class="lang">
          LANGUAGE <a href="" class="active">EN</a> <a href="">中文</a><br>
          <span class="gold">AVAILABILITY    —    floor plans</span>
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
         <li class="nav-item home"><a href="index.html" class="active">HOME<span></span></a></li>
                  <li class="lifestyle separator">&middot;</li>
         <li class="nav-item lifestyle"><a href="lifestyle.html" >LIFESTYLE<span></span></a></li>
                  <li class="neighborhood separator">&middot;</li>
         <li class="nav-item neighborhood"><a href="neighborhood.html" >NEIGHBORHOOD<span></span></a></li>
                  <li class="overview separator">&middot;</li>
         <li class="nav-item overview"><a href="overview.html" >OVERVIEW<span></span></a></li>
                  <li class="team separator">&middot;</li>
         <li class="nav-item team"><a href="team.html" >TEAM<span></span></a></li>
                  <li class="press separator">&middot;</li>
         <li class="nav-item press"><a href="press.html" >PRESS<span></span></a></li>
         <li class="nav-item contact"><a href="contact_us.html" >CONTACT<span></span></a></li>
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