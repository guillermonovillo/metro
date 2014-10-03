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
$activa="neighborhood";
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
             <h1><?php _e("Live the light and life of<br> Los Angeles.","metropolis"); ?></h1>
          <div class="line">
            <span class="white vertical full to-b"></span>
          </div>
       </div>
     </div>
</figure>



<div class="row space">
  <div class="column small-12 small-centered text-center">
    <h1 class="wow fadeInUp"><?php _e("Access the Best of L.A.","metropolis"); ?></h1>
    <p class="wow fadeInUp"><?php _e("Created by an award-winning design and development team, Metropolis is a glittering city-within-a-city that is easily accessible to the nearby financial district, internationally renowned performing arts institutions, and high-profile entertainment complexes.","metropolis"); ?> </p>
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
                      <h2><?php _e("Walt Disney Concert Hall","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Staples Center","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Via Rodeo","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Venice Beach","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Hollywood Sign","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Santa Monica Pier","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Downtown Los Angeles","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Walt Disney Concert Hall","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Staples Center","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Via Rodeo","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Venice Beach","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Hollywood Sign","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Santa Monica Pier","metropolis"); ?> —</h2>
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
                      <h2><?php _e("Downtown Los Angeles","metropolis"); ?> —</h2>
                   </span>
                </div>
             </div>
          </div>
      </div>
    </div>
</div>



<div class="row space">
  <div class="column small-12 small-centered medium-8 text-center">
    <h1  class="wow fadeInUp"><?php _e("Downtown is the epicenter<br>for exceptional educational<br>opportunities","metropolis"); ?></h1>
  <p  class="wow fadeInUp"><?php _e("In addition to being a vibrant destination for the best entertainment, arts and dining, Downtown L.A. offers a myriad of exceptional education options, including private schools, colleges, universities, and libraries.","metropolis"); ?> </p>
  </div>
</div>



<div class="row">
  <div class="column small-10 small-centered medium-6">
    <img src="<?php echo URL; ?>/images/neighborhood/neighborhood-3.jpg" width="100%" alt="UNIVERSITY OF SOUTH CALIFORNIA">
<p class="caption column small-12 text-center wow fadeInUp"><?php _e("UNIVERSITY OF SOUTH CALIFORNIA","metropolis"); ?></p>
  </div>
</div>




<div class="row space notop">
  <div class="column  small-12 small-centered medium-uncentered medium-4">
    <h2 class="edu wow fadeInUp"><?php _e("Colleges and Universities","metropolis"); ?></h2>
    <ul  class="wow fadeInUp edu" data-wow-delay="0.25s">
      <li>— <?php _e("Fashion Institute of Design & Merchandising","metropolis"); ?></li>
      <li>— <?php _e("University of Southern California","metropolis"); ?></li>
      <li>— <?php _e("USC Marshall School of Business","metropolis"); ?></li>
      <li>— <?php _e("The Loyola Law School Los Angeles of Loyola Marymount University","metropolis"); ?></li>
      <li>— <?php _e("Figoly","metropolis"); ?></li>
      <li>— <?php _e("Golden Gate University","metropolis"); ?></li>
      <li>— <?php _e("Southern California Institute of Architecture","metropolis"); ?></li>
      <li>— <?php _e("Zipper Hall at Colburn School of Performing Arts","metropolis"); ?></li>
    </ul>
  </div>
  <div class="column  small-12 small-centered medium-uncentered medium-4">
     <h2 class="edu wow fadeInUp" data-wow-delay=".5s">Public schools</h2>
     <ul class="wow fadeInUp edu" data-wow-delay=".75s">
       <li>— <?php _e("Alliance Dr. Olga Mohan High","metropolis"); ?> </li>
       <li>— <?php _e("Alliance Gertz-Ressler High","metropolis"); ?> </li>
       <li>— <?php _e("CA Academy for Liberal Studies Early College High","metropolis"); ?> </li>
       <li>— <?php _e("Castelar Street Elementary","metropolis"); ?> </li>
       <li>— <?php _e("Downtown Business High","metropolis"); ?> </li>
       <li>— <?php _e("Endeavor College Preparatory Charter","metropolis"); ?> </li>
       <li>— <?php _e("Frank Lanterman","metropolis"); ?> </li>
       <li>— <?php _e("Garza (Carmen Lomas) Primary Center","metropolis"); ?> </li>
       <li>— <?php _e("New Designs Charter","metropolis"); ?> </li>
     </ul>
  </div>
  <div class="column small-12 small-centered medium-uncentered medium-4">
     <h2 class="edu wow fadeInUp" data-wow-delay="1s">Private schools</h2>
     <ul class="wow fadeInUp edu" data-wow-delay="1.25s">
       <li>— <?php _e("Bishop Mora Salesian High School","metropolis"); ?> </li>
       <li>— <?php _e("Cathedral High School","metropolis"); ?> </li>
       <li>— <?php _e("Divine Providence Day Nursery and Kindergarten","metropolis"); ?> </li>
       <li>— <?php _e("Dolores Mission","metropolis"); ?> </li>
       <li>— <?php _e("Immaculate Conception","metropolis"); ?> </li>
       <li>— <?php _e("New Covenant Academy","metropolis"); ?> </li>
       <li>— <?php _e("Personal Coaching Systems","metropolis"); ?> </li>
       <li>— <?php _e("Red Star","metropolis"); ?> </li>
       <li>— <?php _e("Santa Isabel","metropolis"); ?> </li>
       <li>— <?php _e("Star Christian","metropolis"); ?> </li>
       <li>— <?php _e("St. Mary Catholic Elementary","metropolis"); ?> </li>
       <li>— <?php _e("St. Turibius Elementary","metropolis"); ?> </li>
       <li>— <?php _e("St. Vincent Elementary School","metropolis"); ?> </li>
     </ul>
  </div>
</div>

<div class="row space bgold">
  <div class="column small-12 small-centered text-center">
    <h1 class="wow fadeInUp"><?php _e("downtown l.a.<br>neighborhood favorites","metropolis"); ?></h1>
  </div>
</div>

    <div class="txt-wrap">
      <div class="txt">
      <h3><strong><?php _e("“America’s Next Great City Is Inside L.A.”","metropolis"); ?></strong></h3>
      <cite><?php _e("“...amid the glittering towers and crumbly Art Deco facades, a new generation of adventurous chefs, bartenders, loft dwellers, artists, and developers are creating a neighborhood as electrifying and gritty as New York in the ‘70s... the coolest new downtown in America.”","metropolis"); ?>
    </cite>
      <p><strong> ~ <?php _e("GQ Magazine, January 2014.","metropolis"); ?></strong></p>
      </div>
    </div>
   


<div id="map_canvas"></div>

<div class="row poi">
  <div class="column small-10 small-centered medium-uncentered medium-3">
    <h2 class="food wow fadeInUp"  data-type="food"><?php _e("Food & Drinks","metropolis"); ?></h2>
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
    <h2 class="culture wow fadeInUp" data-wow-delay="0.5s"><?php _e("Entertainment","metropolis"); ?></h2>
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
    <h2 class="education wow fadeInUp" data-wow-delay="1s"><?php _e("Schools and Parks","metropolis"); ?></h2>
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
    <h2 class="misc wow fadeInUp" data-wow-delay="1.5s"><?php _e("Shopping and relaxation","metropolis"); ?></h2>
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