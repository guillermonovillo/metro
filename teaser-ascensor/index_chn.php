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
   
   <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript" type="text/javascript">window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/placeholder_polyfill.jquery.min.combo.js"></script>

</head>
<body class="body chn">
   <div id="ascensor-container">
      <div class="floor-2">
         <?php include('includes/form-purchaser-chn.php'); ?>
      </div>
      <div class="floor-1 home">
         <div class="language">
            <ul class="language-list">
               <li>Language</li>
               <li><a href="index.php">En</a></li>
            </ul>
            <a href="javascript:void(0)">中<br />文</a>
         </div>
         <div class="content">
            <header class="header">
               <h1>Metropolis, Los Angeles</h1>
               <h2>即将来临到洛杉矶市中心野</h2>
            </header>
            <div class="main-content">
               <p>请选择</p>
               <span class="button-effect"><a class="trigger-purchaser" href="purchaser.php" data-hover="潜在购买者"><span>潜在购买者</span></a></span>
               <span class="button-effect"><a class="trigger-broker" href="brokers.php" data-hover="房地产经纪人"><span>房地产经纪人</span></a></span>
            </div>
            <footer class="footer">
               <p class="developed">由绿地美国公司开发</p>
               <p class="copyright">大都会 版权所有</span></p>
               <p class="featured">独家销售和市场<img class="img" src="img/logo_douglas_elliman.png" alt="Doouglas Elliman Development Marketing - Logo" width="126" height="22" /></p>
               <ul class="link-list">
                  <li><a class="trigger-disclaimer" href="disclaimer.php">免责申明</a></li>
                  <li><a id="credits" class="credits" href="#">网站授权</a></li>
               </ul>
            </footer>
         </div>
      </div>
      <div class="floor-3">
         <?php include('includes/form-broker-chn.php'); ?>
      </div>
      <div class="floor-4">
         <section class="fullscreen">
            <a class="close trigger-home" href="index.php"></a>
            <div class="wrapper">
               <div class="disclaimer">
                  <div class="main-content">
                     <h1>免责申明</h1>
                     <p>本则广告非要约邀请。仅作为楼盘广告宣传使用。在加利福尼亚州房产局发出正式要约邀请公文之前不接收对所广告公寓的要约、押金、约束性或非约束性预订。开发商未授权任何房产经纪人或代理人代表本楼盘或发表相关声明，任何与房产经纪人达成的协议、已付押金或其他安排均对开发商无约束力。此广告材料非楼盘出售要约亦非对任何州或未经登记辖区的居民的要约邀请。</p>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>   
   <script type="text/javascript" src="js/jquery.ascensor.min.js"></script>
   <script type="text/javascript" src="js/plugins.js"></script>
   <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>