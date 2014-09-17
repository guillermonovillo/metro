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
 * Template Name: Neighborhood
 */

get_header(); ?>

<?php
  $args_food=array(
      "nopaging"=>"true",
      "post_type"=>"map-point",
      "tax_query"=>array(
        array(
              "taxonomy"=>"type",
              "field"=>"slug",
              "terms"=>"food-drinks"
          )
        )
      );
  $args_ent=array(
      "nopaging"=>"true",
      "post_type"=>"map-point",
      "tax_query"=>array(
        array(
              "taxonomy"=>"type",
              "field"=>"slug",
              "terms"=>"entertainment"
          )
        )
      );
  $args_scho=array(
      "nopaging"=>"true",
      "post_type"=>"map-point",
      "tax_query"=>array(
        array(
              "taxonomy"=>"type",
              "field"=>"slug",
              "terms"=>"schools-and-parks"
          )
        )
      );

$args_relax=array(
      "nopaging"=>"true",
      "post_type"=>"map-point",
      "tax_query"=>array(
        array(
              "taxonomy"=>"type",
              "field"=>"slug",
              "terms"=>"shopping-and-relaxation"
          )
        )
      );
$count=1;
?>

<main class="neighborhood">

<figure class="wide one">
     <div class="table">
       <div class="cell"> 
          <div class="line"> 
            <span class="white vertical full to-t"></span>
          </div>
             <h1>Live the light and life of<br> Los Angeles.</h1>
          <div class="line">
            <span class="white vertical full to-b"></span>
          </div>
       </div>
     </div>
</figure>



<div class="row space">
  <div class="column small-12 small-centered text-center">
    <h1 class="wow fadeInUp">Access the Best of L.A.</h1>
    <p class="wow fadeInUp">Created by an award-winning design and development team, Metropolis is a glittering city-within-a-city that is easily accessible to the nearby financial district, internationally renowned performing arts institutions, and high-profile entertainment complexes. </p>
  </div>
</div>

<div class="gallery-grid show-for-medium-up">
    <div class="row">
      <div class="column medium-6 wow fadeIn">
          <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/small_0000_Walt Disney Concert Hall.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Walt Disney Concert Hall —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
      <div class="column medium-6 wow fadeIn" data-wow-delay="0.4s">
          <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/small_0002_Staples Center.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Staples Center —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="column small-4 wow fadeIn">
              <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/square_0006_Via Rodeo.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Via Rodeo —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
      <div class="column small-4 wow fadeIn" data-wow-delay="0.4s">
          <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/square_0001_Venice Beach.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Venice Beach —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
      <div class="column small-4 wow fadeIn" data-wow-delay="0.8s">
          <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/square_0004_Hollywood Sign.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Hollywood Sign —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="column medium-4 wow fadeIn">
          <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/square_0003_Santa Monica Pier.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Santa Monica Pier —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
      <div class="column medium-8 wow fadeIn" data-wow-delay="0.4s">
          <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/small_0005b_Downtown Los Angeles.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Downtown Los Angeles —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
    </div>
</div>




<div class="gallery-grid show-for-small-only">
    <div class="row">
      <div class="column small-11 small-centered wow fadeIn">
          <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/small_0000_Walt Disney Concert Hall.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Walt Disney Concert Hall —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
      <div class="column small-11 small-centered wow fadeIn" data-wow-delay="0.4s">
          <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/small_0002_Staples Center.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Staples Center —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="column small-11 small-centered wow fadeIn">
              <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/small_0006_Via Rodeo.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Via Rodeo —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
      <div class="column small-11 small-centered wow fadeIn" data-wow-delay="0.4s">
          <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/small_0001_Venice Beach.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Venice Beach —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
      <div class="column small-11 small-centered wow fadeIn" data-wow-delay="0.8s">
          <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/small_0004_Hollywood Sign.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Hollywood Sign —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="column small-11 small-centered wow fadeIn">
          <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/small_0003_Santa Monica Pier.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Santa Monica Pier —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
      <div class="column small-11 small-centered wow fadeIn" data-wow-delay="0.4s">
          <div class="box-img hover-animation">
             <img src="<?php echo URL; ?>/images/neighborhood/small_0005_Downtown Los Angeles.jpg" width="100%" class="img">
             <div class="hover-content to-right">
                <div>
                   <span>
                      <h2>Downtown Los Angeles —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
    </div>
</div>



<div class="row space">
  <div class="column small-12 small-centered medium-8 text-center">
    <h1  class="wow fadeInUp">Downtown is the epicenter<br> 
for exceptional educational<br> 
opportunities</h1>
  <p  class="wow fadeInUp">In addition to being a vibrant destination for the best entertainment, arts and dining, Downtown L.A. offers a myriad of exceptional 
education options, including private schools, colleges, universities, and libraries. </p>
  </div>
</div>



<div class="row">
  <div class="column small-10 small-centered medium-6">
    <img src="<?php echo URL; ?>/images/neighborhood/neighborhood-3.jpg" width="100%" alt="UNIVERSITY OF SOUTH CALIFORNIA">
<p class="caption column small-12 text-center wow fadeInUp">UNIVERSITY OF SOUTH CALIFORNIA</p>
  </div>
</div>




<div class="row space notop">
  <div class="column  small-12 small-centered medium-uncentered medium-4">
    <h2 class="edu wow fadeInUp">Colleges and Universities</h2>
    <ul  class="wow fadeInUp edu" data-wow-delay="0.25s">
      <li>— Fashion Institute of Design & Merchandising</li>
      <li>— University of Southern California</li>
      <li>— USC Marshall School of Business</li>
      <li>— The Loyola Law School Los Angeles of Loyola Marymount University</li>
      <li>— Figoly</li>
      <li>— Golden Gate University</li>
      <li>— Southern California Institute of Architecture</li>
      <li>— Zipper Hall at Colburn School of Performing Arts</li>
    </ul>
  </div>
  <div class="column  small-12 small-centered medium-uncentered medium-4">
     <h2 class="edu wow fadeInUp" data-wow-delay=".5s">Public schools</h2>
     <ul class="wow fadeInUp edu" data-wow-delay=".75s">
       <li>— Alliance Dr. Olga Mohan High</li>
       <li>— Alliance Gertz-Ressler High</li>
       <li>— CA Academy for Liberal Studies Early College High</li>
       <li>— Castelar Street Elementary</li>
       <li>— Downtown Business High</li>
       <li>— Endeavor College Preparatory Charter</li>
       <li>— Frank Lanterman</li>
       <li>— Garza (Carmen Lomas) Primary Center</li>
       <li>— New Designs Charter</li>
     </ul>
  </div>
  <div class="column small-12 small-centered medium-uncentered medium-4">
     <h2 class="edu wow fadeInUp" data-wow-delay="1s">Private schools</h2>
     <ul class="wow fadeInUp edu" data-wow-delay="1.25s">
       <li>— Bishop Mora Salesian High School</li>
       <li>— Cathedral High School</li>
       <li>— Divine Providence Day Nursery and Kindergarten</li>
       <li>— Dolores Mission</li>
       <li>— Immaculate Conception</li>
       <li>— New Covenant Academy</li>
       <li>— Personal Coaching Systems</li>
       <li>— Red Star</li>
       <li>— Santa Isabel</li>
       <li>— Star Christian</li>
       <li>— St. Mary Catholic Elementary</li>
       <li>— St. Turibius Elementary</li>
       <li>— St. Vincent Elementary School</li>
     </ul>
  </div>
</div>

<div class="row space bgold">
  <div class="column small-12 small-centered text-center">
    <h1 class="wow fadeInUp">downtown l.a.<br>neighborhood favorites</h1>
  </div>
</div>

    <div class="txt-wrap">
      <div class="txt">
      <h3><strong>“America’s Next Great City Is Inside L.A.”</strong></h3>
      <cite>“...amid the glittering towers and crumbly Art Deco facades, a new generation of adventurous chefs, bartenders, loft dwellers, artists, and developers are creating a neighborhood as electrifying and gritty as New York in the ‘70s... the coolest new 
      downtown in America.”
    </cite>
      <p><strong> ~ GQ Magazine, January 2014.</strong></p>
      </div>
    </div>
   


<div id="map_canvas"></div>

<div class="row poi">
  <div class="column small-10 small-centered medium-uncentered medium-3">
    <h2 class="food wow fadeInUp"  data-type="food">Food & Drinks</h2>
    <ul class="wow fadeInUp mapData" data-wow-delay="0.25s" data-type="food" data-color="574e74">
      <?php 
        $cosultar_food=new WP_Query($args_food);
        if ( $cosultar_food->have_posts() ) : while ( $cosultar_food->have_posts() ) : $cosultar_food->the_post(); 
          $coord=get_field("location");
          $adr=get_field("addres");
      ?>
        <li><a href="#" data-type="food" data-iteration="<?php echo $count; ?>" data-coords="<?php echo $coord["lat"] ?>, <?php echo $coord["lng"] ?>" data-address="<?php echo $adr; ?>" ><?php echo $count; ?> — <?php the_title(); ?></a></li>
      <?php 
        $count++;
        endwhile; 
      ?>
      <?php else: ?>
      <?php endif; ?>
      
    </ul>
  </div>
  <div class="column small-10 small-centered medium-uncentered  medium-3">
    <h2 class="culture wow fadeInUp" data-wow-delay="0.5s">Entertainment</h2>
    <ul class="wow fadeInUp mapData" data-wow-delay="0.75s" data-type="Entertainment" data-color="ffb67d">
      <?php 
        $cosultar_ent=new WP_Query($args_ent);
        if ( $cosultar_ent->have_posts() ) : while ( $cosultar_ent->have_posts() ) : $cosultar_ent->the_post(); 
          $coord=get_field("location");
          $adr=get_field("addres");
      ?>
        <li><a href="#" data-type="entertainment" data-iteration="<?php echo $count; ?>" data-coords="<?php echo $coord["lat"] ?>, <?php echo $coord["lng"] ?>" data-address="<?php echo $adr; ?>" ><?php echo $count; ?> — <?php the_title(); ?></a></li>
      <?php 
        $count++;
        endwhile; 
      ?>
      <?php else: ?>
      <?php endif; ?>
    </ul>
  </div>
  <div class="column small-10 small-centered medium-uncentered  medium-3">
    <h2 class="education wow fadeInUp" data-wow-delay="1s">Schools and Parks</h2>
    <ul class="wow fadeInUp mapData" data-wow-delay="1.25s" data-type="education" data-color="ff7092">
      <?php 
        $cosultar_edu=new WP_Query($args_scho);
        if ( $cosultar_edu->have_posts() ) : while ( $cosultar_edu->have_posts() ) : $cosultar_edu->the_post(); 
          $coord=get_field("location");
          $adr=get_field("addres");
      ?>
        <li><a href="#" data-type="education" data-iteration="<?php echo $count; ?>" data-coords="<?php echo $coord["lat"] ?>, <?php echo $coord["lng"] ?>" data-address="<?php echo $adr; ?>" ><?php echo $count; ?> — <?php the_title(); ?></a></li>
      <?php 
        $count++;
        endwhile; 
      ?>
      <?php else: ?>
      <?php endif; ?>
    </ul>
  </div>
  <div class="column  small-10 small-centered medium-uncentered medium-3">
    <h2 class="misc wow fadeInUp" data-wow-delay="1.5s">Shopping and relaxation</h2>
    <ul class="wow fadeInUp mapData" data-wow-delay="1.75s" data-type="shopping" data-color="00c1bc">
      <?php 
        $cosultar_relax=new WP_Query($args_relax);
        if ( $cosultar_relax->have_posts() ) : while ( $cosultar_relax->have_posts() ) : $cosultar_relax->the_post(); 
          $coord=get_field("location");
          $adr=get_field("addres");
      ?>
        <li><a href="#" data-type="shopping" data-iteration="<?php echo $count; ?>" data-coords="<?php echo $coord["lat"] ?>, <?php echo $coord["lng"] ?>" data-address="<?php echo $adr; ?>" ><?php echo $count; ?> — <?php the_title(); ?></a></li>
      <?php 
        $count++;
        endwhile; 
      ?>
      <?php else: ?>
      <?php endif; ?>
    </ul>

  </div>
</div>
</main>

<?php get_footer(); ?>