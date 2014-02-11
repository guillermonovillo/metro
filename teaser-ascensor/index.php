<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
   <!-- Set the viewport width to device width for mobile -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
   
   <script src="js/modernizr.custom.min.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script src="js/placeholder_polyfill.jquery.min.combo.js"></script>

</head>
<body class="home">
   <div id="ascensor-container">
      <div class="floor-1 home">
         <div class="language">
            <ul class="language-list">
               <li>Language</li>
               <li><a href="#">En</a></li>
            </ul>
            <a href="#">中<br />文</a>
         </div>
         <div class="content">
            <header class="header">
               <h1>Metropolis, Los Angeles</h1>
               <h2>Coming soon to<br />Downtown Los Angeles</h2>
            </header>
            <div class="main-content">
               <p>Please select one:</p>
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
      <div class="floor-2">
         <section class="fullscreen">
            <a class="close trigger-home" href="index.php">Close</a>
            <div id="purchaser-form-content" class="wrapper">
               <div class="registration">
                  <div class="hgroup">
                     <h1>Purchaser registration</h1>
                  </div>
                  <div class="main-content">
                     <?php
                        $aux = explode('/', $_SERVER["REQUEST_URI"]);
                        array_pop($aux);
                        $aux = implode('/', $aux);
                        $returnURL = $_SERVER["SERVER_NAME"].$aux;
                     ?>
                     <form class="form" method="post" action="http://ep1.uhdns.com/api_postform.php">
                        <input type="hidden" name="seckey" value="hEBU830x7T">
                        <input type="hidden" name="debug" value="0">
                        <input type="hidden" name="post_type" value="post">
                        <input type="hidden" id="realtor-name" name="realtor_name" value="">
                        <input type="hidden" name="returnURL" value="<?php echo $returnURL . '/thanks.php'; ?>">
                        <fieldset>
                           <div class="row">
                              <div class="medium-4 large-4 columns column-1">
                                 <div class="field field-2">
                                    <label for="purchaser-firstname">*Name</label>
                                    <input id="purchaser-firstname" name="firstname" placeholder="First" class="text required first" type="text" />
                                    <input name="lastname" placeholder="Last" class="text required last" type="text" />
                                 </div>
                                 <div class="field">
                                    <label>*Address</label>
                                    <input name="address" class="text required" type="text" />
                                 </div>
                                 <div class="field">
                                    <label>*Email</label>
                                    <input name="email" class="text required email" type="email" />
                                 </div>
                              </div>
                              <div class="medium-4 large-4 columns column-2">
                                 <div class="field">
                                    <label>Country</label>
                                    <select name="country" class="prettyfied">
                                       <option value="" selected="selected">-</option>
                                       <option value="Argentine" data-html-text="Argentine">Argentine</option>
                                       <option value="Brazil" data-html-text="Brazil">Brazil</option>
                                       <option value="Uruguay" data-html-text="Uruguay">Uruguay</option>
                                       <option value="Chile" data-html-text="Chile">Chile</option>
                                    </select>
                                 </div>
                                 <div class="field">
                                    <label>*Phone</label>
                                    <input name="" class="text required" type="text" />
                                 </div>
                                 <div class="field alt">
                                    <label>How did you hear<br />about metropolis ?</label>
                                     <select name="hearfrom" class="prettyfied">
                                       <option selected="selected">None</option>
                                       <option value="9123" data-html-text="Broker">Broker</option>
                                       <option value="9131" data-html-text="Google">Google</option>
                                       <option value="9129" data-html-text="Direct Mail">Direct Mail</option>value="4" data-html-text="Element Four">Option Four</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="medium-4 large-4 columns column-3">
                                 <div class="field">
                                    <label>*Represented by Brokers?</label>
                                    <a class="radio-button selected" href="#">Yes</a>
                                    <input name="hasbroker" type="hidden" value="1" />
                                    <a class="radio-button" href="#">No</a>
                                    <input name="" type="hidden" value="0" />
                                 </div>
                                 <div class="field field-2">
                                    <label>*Broker's name</label>
                                    <input id="broker-firstname" name="" class="text first" type="text" />
                                    <input id="broker-lastname" name="" class="text last" type="text" />
                                 </div>
                                 <div class="field field-2">
                                    <label>*Broker's Co. Contact Number</label>
                                    <input name="brokerage_company" class="text first" type="text" />
                                    <input name="realtor_phone" class="text last" type="text" />
                                 </div>
                                 <div class="field">
                                    <label>*Broker's Co. email</label>
                                    <input name="realtor_email" class="text email" type="text" />
                                 </div>
                                 <div class="field field-button">
                                    <button class="form-button">Send</button><br /><small>*Required</small>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <div class="floor-3">
         <section class="fullscreen">
            <a class="close trigger-home" href="index.php">Close</a>
            <div class="wrapper">
               <div class="registration alt">
                  <div class="hgroup">
                     <h1>Broker registration</h1>
                  </div>
                  <div class="main-content">
                     <?php
                        $aux = explode('/', $_SERVER["REQUEST_URI"]);
                        array_pop($aux);
                        $aux = implode('/', $aux);
                        $returnURL = $_SERVER["SERVER_NAME"].$aux;
                     ?>
                     <form id="brokers-form" class="form" method="post" action="http://ep1.uhdns.com/api_postform.php">
                        <input type="hidden" name="seckey" value="hEBU830x7T">
                        <input type="hidden" name="debug" value="0">
                        <input type="hidden" name="post_type" value="post">
                        <input type="hidden" name="returnURL" value="<?php echo $returnURL . '/thanks.php'; ?>">
                        <input type="hidden" id="realtor-name" name="realtor_name" value="">
                        <fieldset>
                           <div class="row">
                              <div class="medium-4 large-4 columns column-1">
                                 <div class="field field-2">
                                    <label>*Name</label>
                                    <input id="broker-firstname" name="firstname" placeholder="First" class="text required first" type="text" value="" />
                                    <input id="broker-lastname" name="lastname" placeholder="Last" class="text required last" type="text" value="" />
                                 </div>
                                 <div class="field">
                                    <label>*Brokerage company</label>
                                    <input name="brokerage_company" class="text required" type="text" />
                                 </div>
                                 <div class="field">
                                    <label>*Email</label>
                                    <input name="email" class="text required email" type="email" />
                                 </div>
                              </div>
                              <div class="medium-4 large-4 columns column-2">
                                 <div class="field alt">
                                    <label>How did you hear<br />about metropolis ?</label>
                                    <select name="hearfrom" class="prettyfied">
                                       <option selected="selected">None</option>
                                       <option value="9123" data-html-text="Broker">Broker</option>
                                       <option value="9131" data-html-text="Google">Google</option>
                                       <option value="9129" data-html-text="Direct Mail">Direct Mail</option>
                                    </select>
                                 </div>
                                 <div class="field field-button">
                                    <button class="form-button">Send</button><br /><small>*Required</small>
                                 </div>
                              </div>
                              <div class="medium-4 large-4 columns"></div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <div class="floor-4">
         <section class="fullscreen">
            <a class="close trigger-home" href="index.php">Close</a>
            <div class="wrapper">
               <div class="disclaimer">
                  <div class="main-content">
                     <h1>Privacy policy</h1>
                     <p>435 West 50 Property Owner, P.C is committed to protecting the privacy of the users of our website. This statement discloses our privacy practices. The purpose of this statement is to inform you of: The kinds of information we collect from users of our website and how the information is used by us Whether we disclose any user information to third parties; How you can access, update or delete any information that we collect about you; and The security procedures ("privacy policy") we use to protect your personal information. By using our website, you're to this privacy policy. We reserve the right to change, modify, add, or remove portions of our Privacy Policy at any time. Please check this page periodically for changes. If you have any questions about our Privacy Policy, please e-mail us at info@stellatower.com</p>
                     <h1>How we collect information</h1>
                     <p>You can visit www.stellatower.com without revealing any personal information. Our web servers collect the Internet Protocol addresses, but not the e-mail addresses, of visitors. This information can measure the number of visits, average time spent on the site, pages viewed, and other such statistics. In addition, you may be asked for information that identifies you, including your name, e-mail address, mailing address, zip code, telephone number, fax (collectively, "Personal Information"). You may also elect to provide such information to us by sending or responding to e-mails regarding certain listings or services offered in connection with.</p>
                     <h1>How we use and disclose your information</h1>
                     <p>We collect, generate, retain and use your Personal Information for our own internal purposes in connection with the facilitation, recording and processing of any requests, communications, or interactions you may have with our website. We also automatically collect and store statistics and other information about you and your online activities on an aggregated, non-personally identifiable basis and in a manner that may allow us or our affiliated or related entities to improve our services to you. In addition, your Personal Information may also be used by us to provide you with information regarding our products and service.</p>
                     <h1>Cookies</h1>
                     <p>Cookies allow websites to recognize you when you return and can keep track of information specific to you. Consistent with standard practices in the Internet industry, you may occasionally receive cookies from third parties to which you link from our website. If you prefer, you may set your browser to ask for your permission before you receive a cookie. We do not control these third party cookies, and they are not subject to our Privacy Policy.</p>
                     <h1>Information sharing and disclosure</h1>
                     <p>When you request information, we need to know your name, e-mail address, and mailing address. This allows us to process and fulfill your request. www.stellatower.com does not sell, trade, or rent your personal information to others. www.stellatower.com may provide aggregate statistics about our customers, sales, traffic patterns, and related site information to reputable third-party vendors, but these statistics will include no personal information.</p>
                     <h1>Data security</h1>
                     <p>Data security is critical to us and thus all Personal Information is held in a secured database. While it is impossible to guarantee the complete security of any computer system and the data contained therein, our vendors are required to maintain and implement robust security policies and procedures that combine with available technologies in accordance with prevailing internet industry standards, all of which are designed to protect the confidentiality, integrity, and availability of your Personal Information. To the extent we are provided with social security numbers or personal financial information containing financial data, we comply with all applicable regulations regarding the confidentiality and safe disposal of such information.</p>
                     <h1>Accessing, updating or deleting information collected about you by us</h1>
                     <p>If you wish to access, update, or delete contact information or preferences or personal information, please send an e-mail to info@stellatower.com. Please be aware, however, that we cannot always ensure that such corrections or deletions will immediately be made in our database.</p>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   
   <script src="js/jquery.ascensor.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/scripts.js"></script>
</body>
</html>