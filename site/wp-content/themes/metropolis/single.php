<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Metropolis
 */
$activa="press";
get_header(); ?>
<article class="press-news">
      <section class="cover"></section>
      <section class="content">
         <div class="hgroup">
            <h1>Press</h1>
         </div>
         <section class="main-content">
			<article class="press-news-content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
					$imgid=get_post_thumbnail_id( get_the_ID());
					$imgsrc=wp_get_attachment_image_src( $imgid, "full-press");
				?>

               <h2><?php the_field("media"); ?> -</h2>
               <h1><?php the_title(); ?></h1>
               <h3><?php the_field("journalist"); ?><time><?php the_date("M d, Y"); ?></time></h3>
               <div class="press-image-related">
                  <img class="img" src="<?php echo $imgsrc[0]; ?>" />
               </div>
               			<?php the_content(); ?>
				<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
               <br />
               <br />
               <a href="<?php echo RAIZ; ?>/press" class="back">Back to all News</a>
			</article>
			<?php $next=get_next_post();
				if(!empty($next)){
				$arg=array("p"=>$next->ID);
				$proximo=new WP_Query($arg);
			 ?>
				<?php if ( $proximo->have_posts() ) : while ( $proximo->have_posts() ) : $proximo->the_post(); 
					$imgid=get_post_thumbnail_id( get_the_ID());
					$imgsrc=wp_get_attachment_image_src( $imgid, "press");
				?>				
            <article class="press-news-preview next">
               <div class="thumbnail box-img hover-animation">
                      <img class="img" src="<?php echo $imgsrc[0]; ?>" />
                   <div class="hover-content to-right">
                      <div>
                         <span><i>  
                           <a href="<?php the_permalink();?>" title="the_title();">Read more -</a>
                        </i></span>
                      </div>
                   </div>
               </div> 

               <a href="<?php the_permalink();?>" class="link">Read next</a>
               <h2><?php the_field("media"); ?>  —</h2>
               <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
               <h3><time><?php echo get_the_date("M d, Y") ?></time></h3>
               <p><?php echo get_the_excerpt(); ?></p>
            </article>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; 
					}
				?>


         </section>
      </section>
   </article>
	
<?php get_footer(); ?>