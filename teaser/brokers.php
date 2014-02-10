<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
   <!-- Set the viewport width to device width for mobile -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta name="format-detection" content="telephone=no" />
   
   <link type="text/plain" rel="author" href="humans.txt" />

   <meta charset="utf-8" />
   
   <title>Metropolis | Broken Registration</title>

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
</head>
<body>
   <section class="fullscreen">
      <a class="close" href="#">Close</a>
      <div class="wrapper">
         <div class="registration alt">
            <div class="hgroup">
               <h1>Broker registration</h1>
            </div>
            <div class="main-content">
               <form class="form" method="post" action="http://ep1.uhdns.com/api_postform.php">
                  <input type="hidden" name="seckey" value="hEBU830x7T">
                  <input type="hidden" name="debug" value="0">
                  <input type="hidden" name="realtor_name" value="">
                  <fieldset>
                     <div class="row">
                        <div class="medium-4 large-4 columns column-1">
                           <div class="field field-2">
                              <label>*Name</label>
                              <div class="first">
                                 <input name="firstname" placeholder="First" class="text required first" type="text" value="" />
                              </div>
                              <div class="last">
                                 <input name="lastname" placeholder="Last" class="text required last" type="text" value="" />
                              </div>
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
                           <div class="field">
                              <label class="alt">How did you hear<br />about metropolis ?</label>
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
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script src="js/plugins.js"></script>
   <script src="js/scripts.js"></script>
</body>
</html>