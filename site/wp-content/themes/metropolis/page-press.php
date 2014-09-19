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
 * Template Name: Press
 */
$activa="press";
get_header(); 

$args_news=array(
        "showposts"=>5,
        "post_type"=>"post" 
        );

$query_news= new WP_Query($args_news);
?>

<article class="press">
      <section class="cover"></section>
      <section class="content">
         <div class="hgroup">
            <h1>Press</h1>
         </div>
         <aside class="aside">
            <ul class="aside-ul filter-options">
               <li><a href="#" class="art-filter" data-filter-value="domestic">Domestic</a></li>
               <li><a href="#" class="art-filter" data-filter-value="international">International</a></li>

            </ul>
         </aside>
         <section class="main-content">

          <?php if ( $query_news->have_posts() ) : while ( $query_news->have_posts() ) : $query_news->the_post(); 
            $cat=get_the_category();
          ?>
          
            <article class="press-news-preview"  data-groups='["<?php echo $cat[0]->slug; ?>"]'>
                <div class="thumbnail box-img hover-animation">
                     <img class="img" src="<?php echo URL ?>/images/press/img/1. Downtown LA Development Boom Pits Condos Against Hotels.jpg" alt="Downtown LA Development Boom Pits Condos Against Hotels" />
                   <div class="hover-content to-right">
                      <div>
                         <span><i>  
                           <a href="press/0.html" title="">Read more -</a>
                        </i></span>
                      </div>
                   </div>
               </div> 
               <h2><?php the_field("media"); ?> —</h2>
               <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
               <h3><?php the_field("journalist"); ?> <time><?php the_date("M d, Y"); ?></time></h3>
               <p><?php echo get_the_excerpt(); ?></p>
               <a href="<?php the_permalink(); ?>" class="link">Read more</a>
            </article>

          <?php endwhile; ?>
          <?php else: ?>
          <?php endif; ?>

            

         </section>
         
      </section>
   </article>

<?php get_footer(); ?>