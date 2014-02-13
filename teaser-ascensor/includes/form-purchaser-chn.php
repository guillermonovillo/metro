<section class="fullscreen">
   <a class="close trigger-home" href="index_chn.php"></a>
   <div id="purchaser-form-content" class="wrapper">
      <div class="registration">
         <div class="hgroup">
            <h1>买家登记</h1>
         </div>
         <div class="main-content">
            <?php
               $aux = explode('/', $_SERVER["REQUEST_URI"]);
               array_pop($aux);
               $aux = implode('/', $aux);
               $returnURL = $_SERVER["SERVER_NAME"].$aux;
            ?>
            <form id="purchaser-form" class="form" method="post" action="http://www.escrowprocessing.com/api_postform.php">
               <input type="hidden" name="seckey" value="hEBU830x7T">
               <input type="hidden" name="debug" value="0">
               <input type="hidden" name="post_type" value="post">
               <input type="hidden" id="purchaser-realtor-name" name="realtor_name" value="">
               <input type="hidden" name="returnURL" value="<?php echo $returnURL . '/thanks_chn.php'; ?>">
               <fieldset>
                  <div class="row">
                     <div class="medium-4 large-4 columns column-1">
                        <div class="field field-2">
                           <label for="purchaser-firstname">*姓名</label>
                           <input id="purchaser-firstname" name="firstname" placeholder="名字" class="text required first" type="text" />
                           <label for="purchaser-lastname"></label>
                           <input id="purchaser-lastname" name="lastname" placeholder="姓氏" class="text required last" type="text" />
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
                        <!-- <div class="field">
                           <label>国家</label>
                           <select name="country" class="prettyfied">
                              <?php include('includes/countries_list.php'); ?>
                           </select>
                        </div> -->
                        <div class="field">
                           <label for="purchaser-phone">电话</label>
                           <input id="purchaser-phone" name="homephone" placeholder="" class="text" type="text" />
                        </div>
                        <div class="field">
                           <label class="large">您是如何了解到大都会项目的？</label>
                           <select name="hearfrom" class="prettyfied">
                              <?php include('includes/hear_from_chn.php'); ?>
                           </select>
                        </div>
                     </div>
                     <div class="medium-4 large-4 columns column-3">
                        <div id="represented-by-broker-wrap" class="field">
                           <label>*由房产经纪人代理？</label>
                           <a data-hasbroker="1" class="radio-button" href="#">是</a>
                           <a data-hasbroker="0" class="radio-button selected" href="#">否</a>
                           <input name="hasbroker" type="hidden" value="0" />
                        </div>
                        <div class="field field-2">
                           <label for="purchaser--broker-firstname">*房产经纪人姓名</label>
                           <input id="purchaser-broker-firstname" name="" placeholder="名字" class="text first" type="text" />
                           <label for="purchaser-broker-lastname"></label>
                           <input id="purchaser-broker-lastname" name="" placeholder="姓氏" class="text last" type="text" />
                        </div>
                        <div class="field field-2">
                           <label for="purchaser-broker-company">*房地产经济公司联系电话</label>
                           <input id="purchaser-broker-company" name="brokerage_company" placeholder="" class="text first" type="text" />
                           <label></label>
                           <input name="realtor_phone" class="text last" type="text" />
                        </div>
                        <div class="field">
                           <label for="purchaser-broker-email">*电子邮件地址</label>
                           <input id="purchaser-broker-email" name="realtor_email" placeholder="" class="text email" type="text" />
                        </div>
                        <div class="field field-button">
                           <button class="form-button">提交</button><br /><small>*不得为空</small>
                        </div>
                     </div>
                  </div>
               </fieldset>
            </form>
         </div>
      </div>
   </div>
</section>