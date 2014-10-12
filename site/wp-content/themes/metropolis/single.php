<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Metropolis
 */
session_start();
$activa="press";
$press=get_post(pll_get_post(15,$idioma),"OBJECT");
get_header(); ?>
<article class="press-news">
      <section class="cover"></section>
      <section class="content">
         <div class="hgroup">
            <h1><?php _e("Press","metropolis"); ?></h1>
         </div>
         <section class="main-content">
			<article class="press-news-content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
					$imgid=get_post_thumbnail_id( get_the_ID()); 
					$imgsrc=wp_get_attachment_image_src( $imgid, "full-press");
          $file=get_field("pdf");
          $video=get_field("video");
				?>

               <h2><?php the_field("media"); ?> -</h2>
               <h1><?php the_title(); ?></h1>
               <h3><?php the_field("journalist"); ?><time><?php the_date("M d, Y"); ?></time></h3>
               <?php if(empty($video)){ ?>
               <div class="press-image-related">
                  <img class="img" src="<?php echo $imgsrc[0]; ?>" />
               </div>
               <?php } ?>
               			<?php the_content(); ?>
				<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>

        <?php 
            if(!empty($file)){
              ?>
              <a href="<?php echo $file; ?>" class="link" target="_BLANK"><?php _e("Download PDF","metropolis"); ?></a>
              <?php
            }

            if(!empty($video)){
              $iframe=wp_oembed_get($video);
              echo $iframe;
            }
        ?>
               <br />
               <br />
               <a href="<?php echo RAIZ."/$press->post_name"; ?>" class="back"><?php _e("Back to all News","metropolis"); ?></a>
			</article>
			<?php 
      $next=get_previous_post();
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
                           <a href="<?php the_permalink();?>" title="the_title();"><?php _e("Read more","metropolis"); ?> -</a>
                        </i></span>
                      </div>
                   </div>
               </div> 

               <a href="<?php the_permalink();?>" class="link"><?php _e("Read next","metropolis"); ?></a>
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

<SCRIPT TYPE="text/javascript">
  $(document).ready(function() {
    $("iframe").attr({
      width: '100%',
      height: 360
    });
  });
</SCRIPT>