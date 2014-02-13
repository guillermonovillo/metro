<section class="fullscreen">
   <a class="close trigger-home" href="index.php"></a>
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
                           <label for="purchaser-firstname">*姓名</label>
                           <input id="purchaser-firstname" name="firstname" placeholder="名" class="text required first" type="text" />
                           <label for="purchaser-lastname"></label>
                           <input id="purchaser-lastname" name="lastname" placeholder="姓" class="text required last" type="text" />
                        </div>
                        <div class="field">
                           <label for="purchaser-address">*地址</label>
                           <input id="purchaser-address" name="address" placeholder="" class="text required" type="text" />
                        </div>
                        <div class="field">
                           <label for="purchaser-email">*电子邮件地址</label>
                           <input id="purchaser-email" name="email" placeholder="" class="text required email" type="email" />
                        </div>
                     </div>
                     <div class="medium-4 large-4 columns column-2">
                        <div class="field">
                           <label>国家</label>
                           <select name="country" class="prettyfied">
                              <option value="" selected="selected">-</option>
                              <option value="Argentine" data-html-text="Argentine">Argentine</option>
                              <option value="Brazil" data-html-text="Brazil">Brazil</option>
                              <option value="Uruguay" data-html-text="Uruguay">Uruguay</option>
                              <option value="Chile" data-html-text="Chile">Chile</option>
                           </select>
                        </div>
                        <div class="field">
                           <label for="purchaser-phone">电话</label>
                           <input id="purchaser-phone" name="homephone" placeholder="" class="text" type="text" />
                        </div>
                        <div class="field">
                           <label class="large">您是如何得知大都会项目？</label>
                           <select name="hearfrom" class="prettyfied">
                              <option selected="selected">请选择</option>
                              <option value="" data-html-text="活动">活动</option>
                              <option value="" data-html-text="签名">签名</option>
                              <option value="" data-html-text="网络搜索">网络搜索</option>
                              <option value="" data-html-text="The Real Deal">The Real Deal</option>
                              <option value="" data-html-text="NYtimes.com">NYtimes.com</option>
                              <option value="" data-html-text="Elliman.com">Elliman.com</option>
                              <option value="" data-html-text="Wall Street Journal">华尔街日报</option>
                              <option value="" data-html-text="Curbed.com">Curbed.com</option>
                              <option value="" data-html-text="其他">其他</option>
                           </select>
                        </div>
                     </div>
                     <div class="medium-4 large-4 columns column-3">
                        <div id="represented-by-broker-wrap" class="field">
                           <label>*为经纪人代表？</label>
                           <a data-hasbroker="1" class="radio-button" href="#">是的</a>
                           <a data-hasbroker="0" class="radio-button selected" href="#">是</a>
                           <input name="hasbroker" type="hidden" value="0" />
                        </div>
                        <div class="field field-2">
                           <label for="purchaser--broker-firstname">*经纪人姓名</label>
                           <input id="purchaser-broker-firstname" name="" placeholder="名" class="text first" type="text" />
                           <label for="purchaser-broker-lastname"></label>
                           <input id="purchaser-broker-lastname" name="" placeholder="姓" class="text last" type="text" />
                        </div>
                        <div class="field field-2">
                           <label for="purchaser-broker-company">经纪机构<i>电话</i></label>
                           <input id="purchaser-broker-company" name="brokerage_company" placeholder="" class="text first" type="text" />
                           <label></label>
                           <input name="realtor_phone" class="text last" type="text" />
                        </div>
                        <div class="field">
                           <label for="purchaser-broker-email">*经纪人电子邮件</label>
                           <input id="purchaser-broker-email" name="realtor_email" placeholder="" class="text email" type="text" />
                        </div>
                        <div class="field field-button">
                           <button class="form-button">发送</button><br /><small>*不得为空</small>
                        </div>
                     </div>
                  </div>
               </fieldset>
            </form>
         </div>
      </div>
   </div>
</section>