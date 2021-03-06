         <section class="fullscreen">
            <a class="close trigger-home" href="index_chn.php"></a>
            <div class="wrapper">
               <div class="registration alt">
                  <div class="hgroup">
                     <h1>经纪人登记表</h1>
                  </div>
                  <div class="main-content">
                     <?php
                        $aux = explode('/', $_SERVER["REQUEST_URI"]);
                        array_pop($aux);
                        $aux = implode('/', $aux);
                        $returnURL = $_SERVER["SERVER_NAME"].$aux;
                     ?>
                     <!-- <form id="brokers-form" class="form" method="post" action="http://www.escrowprocessing.com/api_postform.php"> -->
                     <form id="brokers-form" class="form" method="post" action="send.php">
                        <input type="hidden" name="seckey" value="hEBU830x7T">
                        <input type="hidden" name="client_type" value="9109">
                        <input type="hidden" name="debug" value="0">
                        <input type="hidden" name="post_type" value="post">
                        <input type="hidden" name="returnURL" value="<?php echo $returnURL . '/thanks_chn.php'; ?>">
                        <input type="hidden" id="realtor-name" name="realtor_name" value="">
                        <fieldset>
                           <div class="row">
                              <div class="medium-4 large-4 columns column-1">
                                 <div class="field field-2">
                                    <label for="broker-firstname">*姓名</label>
                                    <input id="broker-firstname" name="firstname" placeholder="名字" class="text required first" type="text" value="" />
                                    <label for="broker-lastname"></label>
                                    <input id="broker-lastname" name="lastname" placeholder="姓氏" class="text required last" type="text" value="" />
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
                                    <label>您是如何了解到大都会项目的？</label>
                                    <select name="hearfrom" class="prettyfied">
                                       <?php include('includes/hear_from_chn.php'); ?>
                                    </select>
                                 </div>
                                 <div class="field field-button">
                                    <button class="form-button">提交</button><br /><small>*不得为空</small>
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