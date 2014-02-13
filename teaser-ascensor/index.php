<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
   <!-- Set the viewport width to device width for mobile -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
   <meta name="format-detection" content="telephone=no" />
   
   <link type="text/plain" rel="author" href="humans.txt" />

   <meta charset="utf-8" />
   
   <title>Metropolis | Home page</title>

   <!-- Favicon -->
   <link rel="icon" href="favicon.ico" type="image/x-icon" />
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

   <!-- Included CSS Files -->
   <link rel="stylesheet" href="css/styles.css" type="text/css" />

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.src.js"></script>
   <![endif]-->
   
   <script type="text/javascript">
      var validation_messages = {
         "required": "Required"
      };
   </script>

   <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/placeholder_polyfill.jquery.min.combo.js"></script>

</head>
<body class="home">
   <script>
      var split = document.createElement('div');
      split.id = 'split';
      document.getElementsByTagName('body')[0].appendChild(split); 
   </script>
   <div id="ascensor-container">
      <div class="floor-2">
         <?php include('includes/form-purchaser.php'); ?>
      </div>
      <div class="floor-1 home">
         <div class="language">
            <ul class="language-list">
               <li>Language</li>
               <li><a href="javascript:void(0)">En</a></li>
            </ul>
            <a href="index_chn.php">中<br />文</a>
         </div>
         <div class="content">
            <header class="header">
               <h1>Metropolis, Los Angeles</h1>
               <h2>Coming soon to<br />Downtown Los Angeles</h2>
            </header>
            <div class="main-content">
               <p>Please select one :</p>
               <span class="button-effect"><a class="trigger-purchaser" href="purchaser.php" data-hover="Prospective purchaser"><span>Prospective purchaser</span></a></span>
               <span class="button-effect"><a class="trigger-broker" href="brokers.php" data-hover="Broker"><span>Broker</span></a></span>
            </div>
            <footer class="footer">
               <p class="developed">Developed by<br />Greenland USA</p>
               <p class="copyright">Metropolis <span>All right reserved.</span></p>
               <p class="featured">Exclusive Sales &amp; Marketing<img class="img" src="img/logo_douglas_elliman.png" alt="Doouglas Elliman Development Marketing - Logo" width="126" height="22" /></p>
               <ul class="link-list">
                  <li><a class="trigger-disclaimer" href="disclaimer.php">Disclaimer</a></li>
                  <li><a id="credits" class="credits" href="#">Site Credits</a></li>
               </ul>
            </footer>
         </div>
      </div>
      <div class="floor-3">
         <?php include('includes/form-broker.php'); ?>
      </div>
      <div class="floor-4">
         <section class="fullscreen">
            <a class="close trigger-home" href="index.php">Close</a>
            <div class="wrapper">
               <div class="disclaimer">
                  <div class="main-content">
                     <h1>Disclaimer</h1>
                     <p>This advertisement is not an offering. It is a solicitation of interest in the advertised property. No offering of the advertised units can be made and no deposits can be accepted, or reservations, binding or non-binding, can be made until an offering plan is filed with the California Bureau of Real Estate. No real estate broker or agent is authorized to make any representations or other statements regarding the project, and no agreements with, deposits paid to or other arrangements with any real estate broker are or shall be binding on the developer. This advertising material is not an offer to sell nor a solicitation of an offer to buy to residents of any state or jurisdiction in which registration requirements have not been fulfilled.</p>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   <script type="text/javascript" src="js/jquery.ascensor.min.js"></script>
   <script type="text/javascript" src="js/plugins.js"></script>
   <script type="text/javascript" src="js/scripts.js"></script>

   <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

     ga('create', 'UA-47674030-1', 'metropolislosangeles.com');
     ga('send', 'pageview');

   </script>
</body>
</html>