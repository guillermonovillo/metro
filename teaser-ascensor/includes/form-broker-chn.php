<section class="fullscreen">
            <a class="close trigger-home" href="index.php"></a>
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
                                    <label for="broker-firstname">*姓名</label>
                                    <input id="broker-firstname" name="" placeholder="名" class="text required first" type="text" value="" />
                                    <label for="broker-lastname"></label>
                                    <input id="broker-lastname" name="" placeholder="姓" class="text required last" type="text" value="" />
                                 </div>
                                 <div class="field">
                                    <label for="brokerage_company">*经纪公司</label>
                                    <input id="brokerage_company" name="brokerage_company" placeholder="" class="text required" type="text" />
                                 </div>
                                 <div class="field">
                                    <label for="realtor-email">*电子邮件地址</label>
                                    <input id="realtor-email" name="realtor_email" placeholder="" class="text required email" type="email" />
                                 </div>
                              </div>
                              <div class="medium-4 large-4 columns column-2">
                                 <div class="field">
                                    <label>您是如何得知大都会项目？</label>
                                    <select name="hearfrom" class="prettyfied">
                                       <option selected="selected">None</option>
                                       <option value="9123" data-html-text="Broker">Broker</option>
                                       <option value="9131" data-html-text="Google">Google</option>
                                       <option value="9129" data-html-text="Direct Mail">Direct Mail</option>
                                    </select>
                                 </div>
                                 <div class="field field-button">
                                    <button class="form-button">发送</button><br /><small>*不得为空</small>
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