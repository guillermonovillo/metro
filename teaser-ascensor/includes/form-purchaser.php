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