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
        "showposts"=>4,
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
               <li><a href="<?php echo RAIZ ?>/category/domestic/" class="art-filter" data-filter-value="domestic">Domestic</a></li>
               <li><a href="<?php echo RAIZ ?>/category/international/" class="art-filter" data-filter-value="international">International</a></li>

            </ul>
         </aside>
         <section class="main-content">

          <?php if ( $query_news->have_posts() ) : while ( $query_news->have_posts() ) : $query_news->the_post(); 
            $cat=get_the_category();
            $imgid=get_post_thumbnail_id( get_the_ID());
            $imgsrc=wp_get_attachment_image_src( $imgid, "press");
            $file=get_field("pdf");

            if(empty($file)){
              $enlace=get_permalink();
              $text="Read more";
              $tar="";
            }else{
              $enlace=$file;
              $text="Download PDF";
              $tar="_BAL";
            }
          ?>
          
            <article class="press-news-preview"  data-groups='["<?php echo $cat[0]->slug; ?>"]'>
                <div class="thumbnail box-img hover-animation">
                     <img class="img" src="<?php echo $imgsrc[0]; ?>" />
                   <div class="hover-content to-right">
                      <div>
                         <span><i>  
                           <a href="<?php the_permalink(); ?>" title="">Read More -</a>
                        </i></span>
                      </div>
                   </div>
               </div> 
               <h2><?php the_field("media"); ?> —</h2>
               <h1><a href="<?php echo $enlace; ?>"><?php the_title(); ?></a></h1>
               <h3><?php the_field("journalist"); ?> <time><?php the_date("M d, Y"); ?></time></h3>
               <p><?php echo get_the_excerpt(); ?></p>
               <a href="<?php echo $enlace; ?>" class="link"><?php echo $text; ?></a>
            </article>

          <?php endwhile; ?>
          <?php else: ?>
          <?php endif; ?>

            

         </section>
         
      </section>
   </article>

<?php get_footer(); ?>