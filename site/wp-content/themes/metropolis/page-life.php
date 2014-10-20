<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Metropolis
 * Template Name: Life Style
 */
$activa="lifestyle";
get_header(); ?>

<main class="lifestyle">

<figure class="wide one">
     <div class="table">
       <div class="cell"> 
          <div class="line"> 
            <span class="white vertical full to-t"></span>
          </div>
            <h1><?php _e("GQ:<br/>AMERICA'S <br>NEXT GREAT CITY<br>IS INSIDE L.A.","metropolis"); ?> </h1>
          <div class="line">
            <span class="white vertical full to-b"></span>
          </div>
       </div>
     </div>
</figure>


<div class="row">
  <div class="column small-10 small-centered text-center">
    <h1 class="wow fadeInUp"><?php _e("Cinematic Views","metropolis"); ?></h1>
    <p class="wow fadeInUp"><?php _e("From the comfort of your home, from any angle, in any room, take in the most expansive and breathtaking views of the Downtown skyline and beyond.","metropolis"); ?>
</p>
  </div>
</div>

<figure class="wide two wow fadeInUp"></figure>

<div class="row">
  <div class="column small-10 small-centered text-center">
    <h1 class="wow fadeInUp"><?php _e("ALL THE ELEMENTS OF <br>A LIFE WELL-LIVED","metropolis"); ?></h1>
    <p class="wow fadeInUp"><?php _e("In the stunning vertical community of Metropolis, daily desires and necessities are both easily met by the diverse selection of options for work, play and life all located mere moments away. From green spaces and cafes to a carefully curated collection of retail and fine dining, Metropolis brings together all the elements of a life well-lived in one dynamic city block.","metropolis"); ?></p>
  </div>
</div>


<figure class="wide three wow fadeInUp"></figure>


<div class="row">
  <div class="column small-10 small-centered text-center">

    <h1 class="wow fadeInUp"><?php _e("A Gateway to Downtown","metropolis"); ?></h1>
    <p class="wow fadeInUp"><?php _e("The new \"Gateway\" to downtown L.A., Metropolis is strategically located between three of Los Angeles' key neighborhoods. The 6.33-acre urban community sits at Francisco Street between 8th and 9th Streets, with ample parking and easy access to the city's major highways and public transportation.","metropolis"); ?>
    </p>
  </div>
</div>


<figure class="lifestyle wide four wow fadeInUp"></figure>

</main>



<?php get_footer(); ?>