<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
	require('../../../wp-blog-header.php');
	header("HTTP/1.1 200 OK");

	$pagina=$_POST["page"];
	$cat=$_POST["category"];

	$args_news=array(
        "posts_per_page"=>4,
        "post_type"=>"post",
        "paged" =>$pagina,
        'lang' => 'en,zh'
    );

    if($cat!="all"){
    	$args_news["category_name"]=$cat;
    }

    $traer= new WP_Query($args_news);
}
?>
<?php if ( $traer->have_posts() ) : while ( $traer->have_posts() ) : $traer->the_post();

			$cat=get_the_category();
            $imgid=get_post_thumbnail_id( get_the_ID());
            $imgsrc=wp_get_attachment_image_src( $imgid, "press");
            $file=get_field("pdf");
            $video=get_field("video");

            if(!empty($file)){
              $enlace=$file;
              $text="DOWNLOAD PDF";
              $tar="_BLANK";
            }elseif(!empty($video)){
              $enlace=get_permalink();
              $text="PLAY VIDEO";
              $tar="";
            }else{
              $enlace=get_permalink();
              $text="READ MORE";
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