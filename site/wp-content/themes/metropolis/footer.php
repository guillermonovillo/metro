<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Metropolis
 */
?>
<footer>
  <div class="row">
    
<div class="column small-10 small-centered medium-uncentered large-3 medium-3">
    <i class="icon icon-isologo"></i>
    <div class="vcard">
      <span class="fn org url">Sales Center —</span>
      <div class="adr">
        <div class="street-address">888 S Figueroa Street</div>
        <span class="locality">Los Angeles</span>,  
        <abbr class="region" title="California">CA</abbr> 
        <span class="postal-code">90017</span>
        <span class="country-name">United States</span>
      </div>
      <div class="tel">
        <a href="tel:8556578300">855-657-8300</a>
      </div>
    </div>
    <div class="vcard">
      <span class="fn org url">Sales Center China —</span>
      <div class="tel">
        <a href="tel:＋864006285588">＋86 400-628-5588</a>
      </div>
    </div>
</div>
<div class="column large-6 medium-6 small-10 small-centered medium-uncentered greenland">
      <a href="http://www.greenlandsc.com"><i class="icon icon-greenland"></i></a>
      <i class="icon icon-greenland-infinite"></i> 
      <p>Metropolis all rights reserved — <a href="#" class="btnOpen">Disclaimer</a> — <a href="#">Site Credits</a></p>
</div>
<div class="column large-3 small-5 small-centered medium-uncentered medium-3">
    <div class="hide-for-small">
      <canvas width="52" height="52" id="clockCanvasLA" class="clock"></canvas> 
      <span>Los Angeles</span>
    </div>
    <div class="text-center"><a href="#" class="icon icon-totop"></a></div>

    
</div>


  </div>
</footer>
 
    <div id="disclaimer">
	<div class="row">
		<div class="small-11 small-centered column" id="">
	      <div class="modal" id="modal">
	        <div class="modal-content">
	        	<a href="#" class="btnClose icon icon-xclose">Close</a>
		        <div class="line"> 
		        <span class="black vertical full to-t"></span>
		        </div>
				<h2>PRIVACY POLICY</h2>
				<p>435 West 50 Property Owner, P.C is committed to protecting the privacy of the users of our website. This statement discloses our privacy practices. The purpose of this statement is to inform you of: The kinds of information we collect from users of our website and how the information is used by us Whether we disclose any user information to third parties; How you can access, update or delete any information that we collect about you; and The security procedures ("privacy policy") we use to protect your personal information. By using our website, you're to this privacy policy. We reserve the right to change, modify, add, or remove portions of our Privacy Policy at any time. Please check this page periodically for changes. If you have any questions about our Privacy Policy, please e-mail us at info@stellatower.com </p>
				<h2>HOW WE COLLECT INFORMATION </h2>
				<p>You can visit www.stellatower.com without revealing any personal information. Our web servers collect the Internet Protocol addresses, but not the e-mail addresses, of visitors. This information can measure the number of visits, average time spent on the site, pages viewed, and other such statistics. In addition, you may be asked for information that identifies you, including your name, e-mail address, mailing address, zip code, telephone number, fax (collectively, "Personal Information"). You may also elect to provide such information to us by sending or responding to e-mails regarding certain listings or services offered in connection with.</p>
				<h2>HOW WE USE AND DISCLOSE YOUR INFORMATION </h2>
				<p>We collect, generate, retain and use your Personal Information for our own internal purposes in connection with the facilitation, recording and processing of any requests, communications, or interactions you may have with our website. We also automatically collect and store statistics and other information about you and your online activities on an aggregated, non-personally identifiable basis and in a manner that may allow us or our affiliated or related entities to improve our services to you. In addition, your Personal Information may also be used by us to provide you with information regarding our products and service.</p>
				<h2>COOKIES</h2>
				<p>Cookies allow websites to recognize you when you return and can keep track of information specific to you. Consistent with standard practices in the Internet industry, you may occasionally receive cookies from third parties to which you link from our website. If you prefer, you may set your browser to ask for your permission before you receive a cookie. We do not control these third party cookies, and they are not subject to our Privacy Policy.</p>
				<h2>INFORMATION SHARING AND DISCLOSURE</h2>
				<p>When you request information, we need to know your name, e-mail address, and mailing address. This allows us to process and fulfill your request. www.stellatower.com does not sell, trade, or rent your personal information to others. www.stellatower.com may provide aggregate statistics about our customers, sales, traffic patterns, and related site information to reputable third-party vendors, but these statistics will include no personal information. </p>
				<h2>DATA SECURITY</h2>
				<p>Data security is critical to us and thus all Personal Information is held in a secured database. While it is impossible to guarantee the complete security of any computer system and the data contained therein, our vendors are required to maintain and implement robust security policies and procedures that combine with available technologies in accordance with prevailing internet industry standards, all of which are designed to protect the confidentiality, integrity, and availability of your Personal Information. To the extent we are provided with social security numbers or personal financial information containing financial data, we comply with all applicable regulations regarding the confidentiality and safe disposal of such information.</p>
				<h2>ACCESSING, UPDATING OR DELETING INFORMATION COLLECTED ABOUT YOU BY US</h2>
				<p>If you wish to access, update, or delete contact information or preferences or personal information, please send an e-mail to info@stellatower.com. Please be aware, however, that we cannot always ensure that such corrections or deletions will immediately be made in our database.</p>
	        </div>
	      </div>
	    </div>
    </div> 
</div>


        <script type="text/javascript">
          var path="<?php echo URL; ?>";
        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo URL; ?>/js/vendor/jquery.min.js"><\/script>')</script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    <script src="<?php echo URL; ?>/js/vendor/libraries.min.js"></script>
    <script src="<?php echo URL; ?>/js/app.min.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js"></script>
     <script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerwithlabel/src/markerwithlabel.js"></script>
     <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>
     <script src="<?php echo URL; ?>/js/map.min.js"></script>
<?php wp_footer(); ?>
  </body>
</html>