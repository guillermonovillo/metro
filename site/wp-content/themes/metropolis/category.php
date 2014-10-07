<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Metropolis
 *
 */
$activa="press";
get_header(); 
global $query_string;
$query_string.="&posts_per_page=4&lang='en,zh'";
query_posts( $query_string );
?>

<article class="press">
      <section class="cover"></section>
      <section class="content">
         <div class="hgroup">
            <h1>Press</h1>
         </div>
         <aside class="aside">
            <ul class="aside-ul filter-options">
               <li><a href="<?php echo RAIZ ?>/category/us/" class="art-filter" data-filter-value="us"><?php _e("US","metropolis"); ?></a></li>
               <li><a href="<?php echo RAIZ ?>/category/international/" class="art-filter" data-filter-value="international"><?php _e("International","metropolis"); ?></a></li>

            </ul>
         </aside>
         <section class="main-content">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            $cat=get_the_category();
            $imgid=get_post_thumbnail_id( get_the_ID());
            $imgsrc=wp_get_attachment_image_src( $imgid, "press");
            $file=get_field("pdf");
            $video=get_field("video");

            if(!empty($file)){
              $enlace=$file;
              $text=__("DOWNLOAD PDF","metropolis");
              $tar="_BLANK";
            }elseif(!empty($video)){
              $enlace=get_permalink();
              $text=__("PLAY VIDEO","metropolis");
              $tar="";
            }else{
              $enlace=get_permalink();
              $text=__("READ MORE","metropolis");
              $tar="";
            }
          ?>
          
            <article class="press-news-preview"  data-groups='["<?php echo $cat[0]->slug; ?>"]'>
                <div class="thumbnail box-img hover-animation">
                     <img class="img" src="<?php echo $imgsrc[0]; ?>" />
                   <div class="hover-content to-right">
                      <div>
                         <span><i>  
                           <a href="<?php echo $enlace; ?>" title="<?php echo the_title(); ?>" TARGET="<?php echo $tar; ?>"><?php echo $text ?> -</a>
                        </i></span>
                      </div>
                   </div>
               </div> 
               <h2><?php the_field("media"); ?> —</h2>
               <h1><a href="<?php echo $enlace; ?>" TARGET="<?php echo $tar; ?>"><?php the_title(); ?></a></h1>
               <h3><?php the_field("journalist"); ?> <time><?php echo get_the_date("M d, Y"); ?></time></h3>
               <p><?php echo get_the_excerpt(); ?></p>
               <a href="<?php echo $enlace; ?>" class="link" TARGET="<?php echo $tar; ?>"><?php echo $text; ?></a>
            </article>

          <?php endwhile; ?>
          <?php else: ?>
          <?php endif; ?>

            

         </section>
         <div class="loadMore-wrap">
         <a href="#" data-page="2" data-mode="<?php echo $cat[0]->slug ?>" class="load-more">Load More</a>
       </div>
      </section>
   </article>

<?php get_footer(); ?>

<!-- Remover una vez que esté comprimido -->
<script type="text/javascript" src="<?php echo URL; ?>/js/app_max.js"></script>