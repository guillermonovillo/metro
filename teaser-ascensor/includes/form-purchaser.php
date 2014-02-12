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
            <form id="purchaser-form" class="form" method="post" action="http://ep1.uhdns.com/api_postform.php">
               <input type="hidden" name="seckey" value="hEBU830x7T">
               <input type="hidden" name="debug" value="0">
               <input type="hidden" name="post_type" value="post">
               <input type="hidden" id="purchaser-realtor-name" name="realtor_name" value="">
               <input type="hidden" name="returnURL" value="<?php echo $returnURL . '/thanks.php'; ?>">
               <fieldset>
                  <div class="row">
                     <div class="medium-4 large-4 columns column-1">
                        <div class="field field-2">
                           <label for="purchaser-firstname">*Name</label>
                           <input id="purchaser-firstname" name="firstname" placeholder="First" class="text required first" type="text" />
                           <label for="purchaser-lastname"></label>
                           <input id="purchaser-lastname" name="lastname" placeholder="Last" class="text required last" type="text" />
                        </div>
                        <div class="field">
                           <label for="purchaser-address">*Address</label>
                           <input id="purchaser-address" name="address" placeholder="" class="text required" type="text" />
                        </div>
                        <div class="field">
                           <label for="purchaser-email">*Email</label>
                           <input id="purchaser-email" name="email" placeholder="" class="text required email" type="email" />
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
                           <label for="purchaser-phone">*Phone</label>
                           <input id="purchaser-phone" name="homephone" placeholder="" class="text required" type="text" />
                        </div>
                        <div class="field alt">
                           <label>How did you hear<br />about metropolis ?</label>
                           <select name="hearfrom" class="prettyfied">
                              <option selected="selected">None</option>
                              <option value="9123" data-html-text="Broker">Broker</option>
                              <option value="9131" data-html-text="Google">Google</option>
                              <option value="9129" data-html-text="Direct Mail">Direct Mail</option>
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
                           <label for="purchaser--broker-firstname">*Broker's name</label>
                           <input id="purchaser-broker-firstname" name="" placeholder="" class="text first" type="text" />
                           <label for="purchaser-broker-lastname"></label>
                           <input id="purchaser-broker-lastname" name="" placeholder="" class="text last" type="text" />
                        </div>
                        <div class="field field-2">
                           <label for="purchaser-broker-company">*Broker's Co. Contact Number</label>
                           <input id="purchaser-broker-company" name="brokerage_company" placeholder="" class="text first" type="text" />
                           <label></label>
                           <input name="realtor_phone" class="text last" type="text" />
                        </div>
                        <div class="field">
                           <label for="purchaser-broker-email">*Broker's Co. email</label>
                           <input id="purchaser-broker-email" name="realtor_email" placeholder="" class="text email" type="text" />
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