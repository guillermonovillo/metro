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
$idioma=pll_current_language();
$lifestyle=get_post(pll_get_post(6,$idioma),"OBJECT");
$neighborhood=get_post(pll_get_post(9,$idioma),"OBJECT");
$overview=get_post(pll_get_post(11,$idioma),"OBJECT");
$team=get_post(pll_get_post(13,$idioma),"OBJECT");
$press=get_post(pll_get_post(15,$idioma),"OBJECT");
$contact=get_post(pll_get_post(17,$idioma),"OBJECT");



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
          <?php _e("LANGUAGE","metropolis"); ?> <a href="<?php echo pll_home_url("en"); ?>" <?php if($idioma=="en"){echo 'class="active"'; } ?>>EN</a> <a href="<?php echo pll_home_url("zh"); ?>" <?php if($idioma=="zh"){echo 'class="active"'; } ?>>中文</a><br>
          <span class="gold hide"><?php _e("AVAILABILITY","metropolis"); ?> — <a href="<?php echo URL; ?>/files/Metropolis - Final floor plans 09-03.pdf" Target="_BLANK"><?php _e("floor plans","metropolis"); ?></a></span>
        </p>
      </div>
      <div class="column medium-4 text-right"><p class="sale rp gold"><?php _e("sales center  los angeles","metropolis"); ?>   —   <a href="#">855-657-8300</a></p></div>
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
     <nav class="medium-12 columns nav-links <?php echo $idioma; ?>">
       <ul>
         <li class="nav-item home"><a href="<?php echo pll_home_url($idioma); ?>" <?php if($activa=="home"){echo "class='active'";} ?>><?php _e("HOME","metropolis"); ?><span></span></a></li>
                  <li class="lifestyle separator">&middot;</li>
         <li class="nav-item lifestyle"><a href="<?php echo RAIZ."/$lifestyle->post_name"; ?>" <?php if($activa=="lifestyle"){echo "class='active'";} ?>><?php _e("LIFESTYLE","metropolis"); ?><span></span></a></li>
                  <li class="neighborhood separator">&middot;</li>
         <li class="nav-item neighborhood"><a href="<?php echo RAIZ."/$neighborhood->post_name"; ?>" <?php if($activa=="neighborhood"){echo "class='active'";} ?>><?php _e("NEIGHBORHOOD","metropolis"); ?><span></span></a></li>
                  <li class="overview separator">&middot;</li>
         <li class="nav-item overview"><a href="<?php echo RAIZ."/$overview->post_name"; ?>" <?php if($activa=="overview"){echo "class='active'";} ?>><?php _e("OVERVIEW","metropolis"); ?><span></span></a></li>
                  <li class="team separator">&middot;</li>
         <li class="nav-item team"><a href="<?php echo RAIZ."/$team->post_name"; ?>" <?php if($activa=="team"){echo "class='active'";} ?>><?php _e("TEAM","metropolis"); ?><span></span></a></li>
                  <li class="press separator">&middot;</li>
         <li class="nav-item press"><a href="<?php echo RAIZ."/$press->post_name"; ?>" <?php if($activa=="press"){echo "class='active'";} ?>><?php _e("PRESS","metropolis"); ?><span></span></a></li>
         <li class="nav-item contact"><a href="<?php echo RAIZ."/$contact->post_name"; ?>" <?php if($activa=="contact"){echo "class='active'";} ?>><?php _e("CONTACT","metropolis"); ?><span></span></a></li>
       </ul>
     </nav>
     <hr class="line">
     <div class="medium-12 nav-lang-small">
      <div class="">
       <p><?php _e("LANGUAGE","metropolis"); ?> <a href="#en" class="active">EN</a> <a href="#cn">中文</a></p>
       <p class="hide"><?php _e("AVAILABILITY","metropolis"); ?>    —    <?php _e("floor plans","metropolis"); ?></p>
       <p><?php _e("sales center  los angeles","metropolis"); ?>   —   <a href="#">855-657-8300</a></p>
      </div>
   </div>

   </div>
</header>