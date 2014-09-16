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
 * Template Name: OverView
 *
 */

get_header(); ?>

<main class="overview">

<figure class="gallery"> 
        <div class="slider gallery">
          <div><img src="<?php echo URL; ?>/images/overview/overview-gal-Bed-Room.jpg" alt="Bedroom"/></div>
          <div><img src="<?php echo URL; ?>/images/overview/overview-gal-Dining-Room.jpg" alt="Dining Room" class="hide"/></div>
          <div><img src="<?php echo URL; ?>/images/overview/overview-gal-Kitchen.jpg" alt="Kitchen" class="hide"/></div>
          <div><img src="<?php echo URL; ?>/images/overview/overview-gal-Living-Room.jpg" alt="Living Room" class="hide"/></div>
        </div>
</figure>

<div class="gallery-control">
  <div class="row">
    <div class="column medium-3">
        <h2 class="gallery-name"></h2>
    </div>
    <div class="column medium-6 end">
        <div class="row gallery-btngroup">
          <div class="column small-3 text-right">
                <a href="" class="btn btn-prev">        
                  <div class="line"> 
                  <span class="gold horizontal full to-l"></span>
                  </div> 
                  Prev
                </a>
          </div>
          <div class="column small-6 gallery-counter">
                  <span class="counter-current">01</span>/<span class="counter-total">05</span>
          </div>
          <div class="column small-3">
                <a href="" class="btn btn-next" >
                  Next         
                  <div class="line"> 
                  <span class="gold horizontal full to-r"></span>
                  </div>
                </a>
          </div>
        </div>   
    </div>
  </div>
</div>

  <div class="row">
    <div class="column small-8 small-centered text-center">
      <h1 class="wow fadeInUp">Residences</h1>
      <p class="wow fadeInUp">From the stunning view to the subtle details, Metropolis is designed for 
stylish, effortless living. Residences feature the finest materials, top-of-the-line appliances, energy-efficient design, maximized light and space and 
cinematic views from every angle. </p>
      <a class="btn download wow fadeInUp" href="#">Download Floor Plans </a>
    </div>
  </div>

<figure class="wide one wow fadeInUp"></figure>

<div class="row">
<div class="column small-8 small-centered text-center">
  <h1 class="wow fadeInUp">Hotel</h1>
  <p class="wow fadeInUp">Operated by a renown global hospitality brand, the hotel within the 
Metropolis complex will offer 350 rooms, and a variety of dining 
options and services. </p>
</div>
</div>

<figure class="wide two wow fadeInUp"></figure>
<div class="row">
<div class="column small-8 small-centered text-center">
  <h1 class="wow fadeInUp">RETAIL COLLECTION 
AND FINE DINING</h1>
  <p class="wow fadeInUp">The Metropolis complex will offer a thoughtfully curated collection of 
retail and dining to provide its residents and guests with all elements 
for effortless lifestyle.</p>
</div>
</div>
</main>

<?php get_footer(); ?>