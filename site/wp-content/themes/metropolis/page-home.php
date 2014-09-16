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
 * Template Name: Home
 */

get_header(); ?>
<main class="home">



<figure class="wide one">
     <div class="table">
       <div class="cell"> 
          <div class="line" style="height:40px;"> 
            <span class="white vertical full to-t"></span>
          </div>
            <h1>URBAN LIVING REIMAGINED</h1>
            <h2>Introducing the most luxurious<br/> new address in downtown L.A.</h2>
          <div class="line" style="height:40px; position:relative">
            <span class="white vertical full to-b"></span>
          </div>
       </div>
     </div>
</figure>





<figure id="sunset">
<div class="overlay-black" > </div> 
<div class="row" >
  <img src="<?php echo URL; ?>/images/sunset/0.jpg" alt="Metropolis"  usemap="#m_crop_c01_Sunset2" id="sunset-image">
    <img src="<?php echo URL; ?>/images/sunset/1.jpg" alt="Metropolis - Hotel Tower"  usemap="#m_crop_c01_Sunset2" class="sunset img1">
    <img src="<?php echo URL; ?>/images/sunset/2.jpg" alt="Metropolis Residential — Tower 1"  usemap="#m_crop_c01_Sunset2" class="sunset img2">
    <img src="<?php echo URL; ?>/images/sunset/3.jpg" alt="Metropolis Residential — Tower 2"  usemap="#m_crop_c01_Sunset2" class="sunset img3">
    <img src="<?php echo URL; ?>/images/sunset/4.jpg" alt="Metropolis Residential — Tower 3"  usemap="#m_crop_c01_Sunset2" class="sunset img4">
    <span class="t1-line-for-medium"></span>
    <div class="txt t1">
      <h1><span class="h-large">— </span> Metropolis <span class="h-small">—</span> </h1> 
      <h2>Hotel Tower</h2>
    </div>
    <div class="txt t2"><h1>Metropolis Residential <span>—</span></h1> <h2>Tower 1</h2></div>
    <div class="txt t3"><h1>Metropolis Residential <span>—</span></h1> <h2>Tower 2</h2></div>
    <div class="txt t4"><h1><span>—</span> Metropolis Residential</h1> <h2>Tower 3</h2></div>
</div>
</figure>

<map name="m_crop_c01_Sunset2" id="m_crop_c01_Sunset2" width="960px" height="650px">
<area shape="poly" data-zone="4" coords="655,556,655,455,648,454,648,148,664,121,678,121,693,97,730,97,730,103,742,103,741,89,747,80,808,83,807,349,797,354,798,406,814,406,814,423,872,424,871,565,864,570,865,581,864,613,907,623,896,625,897,649,727,651,695,638,697,610,697,567,655,556" href="javascript:;" alt="" />
<area shape="poly" data-zone="3" coords="473,473,473,406,467,406,467,215,473,215,476,164,532,186,553,187,547,201,547,207,558,207,558,193,561,190,595,169,604,167,605,396,596,403,596,575,595,604,597,628,565,629,563,473,473,473" href="javascript:;" alt="" />
<area shape="poly" data-zone="2" coords="327,621,306,621,304,565,303,563,302,277,306,275,388,264,391,271,391,466,324,467,323,473,318,473,318,578,328,579,327,621" href="javascript:;" alt="" />
<area shape="poly" data-zone="1" coords="36,612,36,364,76,372,104,365,128,377,168,365,212,395,217,391,229,392,230,593,189,607,189,641,170,650,50,650,36,612" href="javascript:;" alt="" />
</map>

</main>

<?php get_footer(); ?>