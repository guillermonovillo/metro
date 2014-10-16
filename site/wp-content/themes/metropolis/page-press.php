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
session_start();
$_SESSION["cat"]=false;
$activa="press";
get_header(); 

$args_news=array(
        "posts_per_page"=>4,
        "post_type"=>"post"
        );

$query_news= new WP_Query($args_news);
$idioma=pll_current_language();
?>

<article class="press">
      <section class="cover"></section>
      <section class="content">
         <div class="hgroup">
            <h1><?php _e("Press","metropolis"); ?></h1>
         </div>
         <aside class="aside">
            <ul class="aside-ul filter-options">
               <li><a href="<?php echo RAIZ ?>/category/us<?php if($idioma=="zh"){echo "-zh";} ?>/" class="art-filter" data-filter-value="us"><?php _e("US","metropolis"); ?></a></li>
               <li><a href="<?php echo RAIZ ?>/category/international<?php if($idioma=="zh"){echo "-zh";} ?>/" class="art-filter" data-filter-value="international"><?php _e("International","metropolis"); ?></a></li>

            </ul>
         </aside>
         <section class="main-content">

          <?php if ( $query_news->have_posts() ) : while ( $query_news->have_posts() ) : $query_news->the_post(); 
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
                           <a href="<?php echo $enlace; ?>" title="<?php the_title(); ?>" target="<?php echo $tar; ?>"><?php echo $text; ?> -</a>
                        </i></span>
                      </div>
                   </div>
               </div> 
               <h2><?php the_field("media"); ?> —</h2>
               <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
               <h3><?php the_field("journalist"); ?> <time><?php echo get_the_date("M d, Y"); ?></time></h3>
               <p><?php echo get_the_excerpt(); ?></p>
               <a href="<?php echo $enlace; ?>" class="link" target="<?php echo $tar; ?>"><?php echo $text; ?></a>
            </article>

          <?php endwhile; ?>
          <?php else: ?>
          <?php endif; ?>

            

         </section>
         <div class="loadMore-wrap"> 
          <a href="#" data-page="2" data-mode="all" class="load-more" data-max="<?php echo $query_news->max_num_pages; ?>"><?php _e("Load More","metropolis"); ?></a>
       </div>
      </section>
   </article>

<?php get_footer(); ?>

<script type="text/javascript">
  $(document).ready(function() {
    $(".load-more").click(function(event) {
      actual=$(".load-more").data("page");
      total=$(".load-more").data("max");
      if(actual > total){
        $(".load-more").hide();
      }
    });
  });
</script>