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
 * Template Name: Team
 */
$activa="team";
get_header(); ?>

<main class="team">
  <figure class="wide one"></figure>
<div class="row">
  <div class="column small-12 text-center">
    <h1><?php _e("The Team","metropolis"); ?></h1>
    <hr>
    <a href="http://www.greenlandsc.com"><i class="icon icon-greenland"></i></a>
    <br>
    <br>
    <a href="http://www.greenlandsc.com"> <i class="icon icon-greenland-infinite"></i> </a>
   
    <h2><?php _e("Setting the Global Gold Standard for Excellence in Living","metropolis"); ?></h2>
    <img src="<?php echo URL; ?>/images/team/team-world.png" alt=""/>
  </div>
</div>

<div class="row">
  <div class="column small-10 small-centered">
    <?php _e("<p>Since its establishment in 1992 in Shanghai, the Greenland Holding Group has grown to become the leading real estate enterprise in China, ranked among Fortune Global 500 companies worldwide. Greenland Group’s corporate mission, “Creating a Better Life,” is linked strongly to the cities and communities in which the company operates. In addition, the company’s portfolio of developments includes 4 out of 10 world’s tallest buildings.</p><p>In 2012, after achieving the pinnacle of brand recognition and performance in the domestic market, Greenland Group has embarked on a comprehensive global expansion and has been since seizing critical opportunities by relying on its extensive experience in creating world-class developments, substantial resources and strong commitment to the communities in which they invest. Greenland Group’s philosophy is to operate and develop independently through immersion in local culture and collaboration of their global teams with the top local talent in each community. To date, Greenland Group operates in 13 cities, in 9 countries, on 4 continents throughout Asia, Australia, Europe and North America. Its development projects are distinguished by excellence in design and commitment to the highest quality of construction while maintaining the unique character and fabric of each city.</p>","metropolis"); ?>
    <hr>
  </div>
</div>

<div class="row">
  <div class="column small-10 small-centered medium-uncentered medium-5 medium-offset-1">
    <i class="icon icon-douglas"></i>
  <?php _e("<p>Douglas Elliman Development Marketing combines unrivaled sales and marketing expertise with an in-depth awareness of the most intricate details to major trends. The Elliman team delivers a holistic approach encompassing comprehensive in-house research, product development, marketing and sales, operations, property management, mortgage financing and title services in New York City, Miami and Southern California.</p><p>Our vision, values and people share one guiding principle: to ensure the highest level of quality and expertise powered by innovation, information and influence of the largest regional and global network of real estate professionals. </p><p>Through a strategic international partnership with Knight Frank Residential, the world’s largest privately owned property consultancy, we market our properties to global audiences in 43 countries across six continents. Knight Frank Residential allows access to global information on purchasing trends, enabling the ability to forecast future activity in the marketplace and stay ahead of the curve the highest quality of construction while maintaining the unique character and fabric of each city.</p>","metropolis"); ?>

  </div>
  <div class="column small-10 small-centered medium-uncentered  medium-5 end">
      <i class="icon icon-gensler"></i>
      <?php _e("<p>Gensler is a global design firm that partners with clients to make cities more livable, work smarter and leisure more engaging. Our 4,000 professionals networked across 46 locations believe quality design can transform organizations and improve people’s lives. Since 1965, we have helped clients achieve measurable business and organizational goals, delivering projects as large as a city and as small as a task light for an individual desk.</p><p>Gensler is organized to support clients at every stage of the design cycle, from initial strategy and design planning through implementation and management.</p><p>Gensler regards sustainable design as a guiding principle for all building and interior projects. It has been at the forefront of the movement for responsible design that considers the impact of decisions made today on our lives tomorrow.</p>","metropolis"); ?>
  </div>
</div>
<div class="row">
  <div class="column small-10 small-centered medium-uncentered  medium-5  medium-offset-1">
    
<i class="icon icon-span"></i>
<?php _e("<p>SPAN Architecture brings together a diverse array of experiences and interests as practitioners, teachers, artists and theorists. Karen Stonely, Peter Pelsinski and Jean-Gabriel Neukomm are registered architects, began collaboration in 1998 and formed SPAN in 2004. Their award-winning work combines thoughtful and inventive conceptual design with technological innovation and creative material application. Above all else, SPaN shares a deep appreciation and reverence for architecture that guides their pursuit of creating superlative work.</p>","metropolis"); ?>

  </div>
  <div class="column small-10 small-centered medium-uncentered  medium-5 end">
    
    <i class="icon icon-tishman"></i>
    <?php _e("<p>Tishman is a vertically integrated real estate owner, operator, developer and advisor. With roots dating back to 1898, Tishman is comprised of a diversified staff of experienced real estate, financial and hotel management specialists, and is complemented by a technical staff of architects, engineers and construction management professionals. Tishman maintains a strategic relationship with Tishman Construction Corporation, one of the nation’s leading construction management firms. Given these broad resources, Tishman typically manages all components of its projects and acquisitions, from feasibility, design, budgeting, financing and development management to ongoing property and asset management.</p><p>Over the last 30 years, Tishman has developed, managed and advised on more than 35 million square feet of all types of real estate - including more than 50,000 hotel rooms, plus convention centers, retail, residential and office.</p>","metropolis"); ?>
  </div>
</div>
</main>

<?php get_footer(); ?>