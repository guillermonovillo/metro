<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Metropolis
 * Template Name: Thanks
 */
$activa="contact";
get_header(); ?>

   <article class="contact">
      <div class="content">
         <div class="hgroup">
            <h1><?php _e("Contact","metropolis"); ?></h1>
            <p><?php _e("Please select one","metropolis"); ?></p>
            <ul class="contact-ul">
               <li class="selected"><a href="#" class="purchaser"><?php _e("Prospective purchaser","metropolis"); ?></a></li>
               <li class="separator">|</li>
               <li><a href="#" class="broker"><?php _e("Broker","metropolis"); ?></a></li>
               <li class="separator">|</li>
               <li><a href="#" class="press"><?php _e("Press","metropolis"); ?></a></li>
            </ul>
         </div>
         <div class="cgroup">
            <div class="purchaser">

               <form id="purchaser-form" class="form" method="post" action="http://www.escrowprocessing.com/api_postform.php">
               <input type="hidden" name="seckey" value="hEBU830x7T">
               <input type="hidden" name="debug" value="1">
               <input type="hidden" name="post_type" value="post">
               <input type="hidden" id="purchaser-realtor-name" name="realtor_name" value="">
               <input type="hidden" name="returnURL" value="<?php echo RAIZ; ?>/thanks">
                  <fieldset>
                     <div class="row">
                        <div class="medium-4 large-4 columns column-1">
                           <div class="field field-1">
                              <label><?php _e("*Name","metropolis"); ?></label>
                              <input name="firstname" placeholder="First" data-place="First" class="text required first" type="text" />
                              <input name="lastname" placeholder="Last" data-place="Last" class="text required last" type="text" />
                           </div>
                           <div class="field">
                              <label><?php _e("*Address","metropolis"); ?></label>
                              <input name="address" class="text required" type="text" />
                           </div>
                           <div class="field">
                              <label><?php _e("*Email","metropolis"); ?></label>
                              <input name="email" class="text required email" type="email" />
                           </div>
                        </div>
                        <div class="medium-4 large-4 columns column-2">
                           <div class="field">
                              <label><?php _e("Country","metropolis"); ?></label>
                              <select name="country" class="chosen-select">
                                 <option></option>
                                 <option value="Afganistan">Afghanistan</option>
                           <option value="Albania">Albania</option>
                           <option value="Algeria">Algeria</option>
                           <option value="American Samoa">American Samoa</option>
                           <option value="Andorra">Andorra</option>
                           <option value="Angola">Angola</option>
                           <option value="Anguilla">Anguilla</option>
                           <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                           <option value="Argentina">Argentina</option>
                           <option value="Armenia">Armenia</option>
                           <option value="Aruba">Aruba</option>
                           <option value="Australia">Australia</option>
                           <option value="Austria">Austria</option>
                           <option value="Azerbaijan">Azerbaijan</option>
                           <option value="Bahamas">Bahamas</option>
                           <option value="Bahrain">Bahrain</option>
                           <option value="Bangladesh">Bangladesh</option>
                           <option value="Barbados">Barbados</option>
                           <option value="Belarus">Belarus</option>
                           <option value="Belgium">Belgium</option>
                           <option value="Belize">Belize</option>
                           <option value="Benin">Benin</option>
                           <option value="Bermuda">Bermuda</option>
                           <option value="Bhutan">Bhutan</option>
                           <option value="Bolivia">Bolivia</option>
                           <option value="Bonaire">Bonaire</option>
                           <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                           <option value="Botswana">Botswana</option>
                           <option value="Brazil">Brazil</option>
                           <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                           <option value="Brunei">Brunei</option>
                           <option value="Bulgaria">Bulgaria</option>
                           <option value="Burkina Faso">Burkina Faso</option>
                           <option value="Burundi">Burundi</option>
                           <option value="Cambodia">Cambodia</option>
                           <option value="Cameroon">Cameroon</option>
                           <option value="Canada">Canada</option>
                           <option value="Canary Islands">Canary Islands</option>
                           <option value="Cape Verde">Cape Verde</option>
                           <option value="Cayman Islands">Cayman Islands</option>
                           <option value="Central African Republic">Central African Republic</option>
                           <option value="Chad">Chad</option>
                           <option value="Channel Islands">Channel Islands</option>
                           <option value="Chile">Chile</option>
                           <option value="China">China</option>
                           <option value="Christmas Island">Christmas Island</option>
                           <option value="Cocos Island">Cocos Island</option>
                           <option value="Colombia">Colombia</option>
                           <option value="Comoros">Comoros</option>
                           <option value="Congo">Congo</option>
                           <option value="Cook Islands">Cook Islands</option>
                           <option value="Costa Rica">Costa Rica</option>
                           <option value="Cote DIvoire">Cote D'Ivoire</option>
                           <option value="Croatia">Croatia</option>
                           <option value="Cuba">Cuba</option>
                           <option value="Curaco">Curacao</option>
                           <option value="Cyprus">Cyprus</option>
                           <option value="Czech Republic">Czech Republic</option>
                           <option value="Denmark">Denmark</option>
                           <option value="Djibouti">Djibouti</option>
                           <option value="Dominica">Dominica</option>
                           <option value="Dominican Republic">Dominican Republic</option>
                           <option value="East Timor">East Timor</option>
                           <option value="Ecuador">Ecuador</option>
                           <option value="Egypt">Egypt</option>
                           <option value="El Salvador">El Salvador</option>
                           <option value="Equatorial Guinea">Equatorial Guinea</option>
                           <option value="Eritrea">Eritrea</option>
                           <option value="Estonia">Estonia</option>
                           <option value="Ethiopia">Ethiopia</option>
                           <option value="Falkland Islands">Falkland Islands</option>
                           <option value="Faroe Islands">Faroe Islands</option>
                           <option value="Fiji">Fiji</option>
                           <option value="Finland">Finland</option>
                           <option value="France">France</option>
                           <option value="French Guiana">French Guiana</option>
                           <option value="French Polynesia">French Polynesia</option>
                           <option value="French Southern Ter">French Southern Ter</option>
                           <option value="Gabon">Gabon</option>
                           <option value="Gambia">Gambia</option>
                           <option value="Georgia">Georgia</option>
                           <option value="Germany">Germany</option>
                           <option value="Ghana">Ghana</option>
                           <option value="Gibraltar">Gibraltar</option>
                           <option value="Great Britain">Great Britain</option>
                           <option value="Greece">Greece</option>
                           <option value="Greenland">Greenland</option>
                           <option value="Grenada">Grenada</option>
                           <option value="Guadeloupe">Guadeloupe</option>
                           <option value="Guam">Guam</option>
                           <option value="Guatemala">Guatemala</option>
                           <option value="Guinea">Guinea</option>
                           <option value="Guyana">Guyana</option>
                           <option value="Haiti">Haiti</option>
                           <option value="Hawaii">Hawaii</option>
                           <option value="Honduras">Honduras</option>
                           <option value="Hong Kong">Hong Kong</option>
                           <option value="Hungary">Hungary</option>
                           <option value="Iceland">Iceland</option>
                           <option value="India">India</option>
                           <option value="Indonesia">Indonesia</option>
                           <option value="Iran">Iran</option>
                           <option value="Iraq">Iraq</option>
                           <option value="Ireland">Ireland</option>
                           <option value="Isle of Man">Isle of Man</option>
                           <option value="Israel">Israel</option>
                           <option value="Italy">Italy</option>
                           <option value="Jamaica">Jamaica</option>
                           <option value="Japan">Japan</option>
                           <option value="Jordan">Jordan</option>
                           <option value="Kazakhstan">Kazakhstan</option>
                           <option value="Kenya">Kenya</option>
                           <option value="Kiribati">Kiribati</option>
                           <option value="Korea North">Korea North</option>
                           <option value="Korea Sout">Korea South</option>
                           <option value="Kuwait">Kuwait</option>
                           <option value="Kyrgyzstan">Kyrgyzstan</option>
                           <option value="Laos">Laos</option>
                           <option value="Latvia">Latvia</option>
                           <option value="Lebanon">Lebanon</option>
                           <option value="Lesotho">Lesotho</option>
                           <option value="Liberia">Liberia</option>
                           <option value="Libya">Libya</option>
                           <option value="Liechtenstein">Liechtenstein</option>
                           <option value="Lithuania">Lithuania</option>
                           <option value="Luxembourg">Luxembourg</option>
                           <option value="Macau">Macau</option>
                           <option value="Macedonia">Macedonia</option>
                           <option value="Madagascar">Madagascar</option>
                           <option value="Malaysia">Malaysia</option>
                           <option value="Malawi">Malawi</option>
                           <option value="Maldives">Maldives</option>
                           <option value="Mali">Mali</option>
                           <option value="Malta">Malta</option>
                           <option value="Marshall Islands">Marshall Islands</option>
                           <option value="Martinique">Martinique</option>
                           <option value="Mauritania">Mauritania</option>
                           <option value="Mauritius">Mauritius</option>
                           <option value="Mayotte">Mayotte</option>
                           <option value="Mexico">Mexico</option>
                           <option value="Midway Islands">Midway Islands</option>
                           <option value="Moldova">Moldova</option>
                           <option value="Monaco">Monaco</option>
                           <option value="Mongolia">Mongolia</option>
                           <option value="Montserrat">Montserrat</option>
                           <option value="Morocco">Morocco</option>
                           <option value="Mozambique">Mozambique</option>
                           <option value="Myanmar">Myanmar</option>
                           <option value="Nambia">Nambia</option>
                           <option value="Nauru">Nauru</option>
                           <option value="Nepal">Nepal</option>
                           <option value="Netherland Antilles">Netherland Antilles</option>
                           <option value="Netherlands">Netherlands (Holland, Europe)</option>
                           <option value="Nevis">Nevis</option>
                           <option value="New Caledonia">New Caledonia</option>
                           <option value="New Zealand">New Zealand</option>
                           <option value="Nicaragua">Nicaragua</option>
                           <option value="Niger">Niger</option>
                           <option value="Nigeria">Nigeria</option>
                           <option value="Niue">Niue</option>
                           <option value="Norfolk Island">Norfolk Island</option>
                           <option value="Norway">Norway</option>
                           <option value="Oman">Oman</option>
                           <option value="Pakistan">Pakistan</option>
                           <option value="Palau Island">Palau Island</option>
                           <option value="Palestine">Palestine</option>
                           <option value="Panama">Panama</option>
                           <option value="Papua New Guinea">Papua New Guinea</option>
                           <option value="Paraguay">Paraguay</option>
                           <option value="Peru">Peru</option>
                           <option value="Phillipines">Philippines</option>
                           <option value="Pitcairn Island">Pitcairn Island</option>
                           <option value="Poland">Poland</option>
                           <option value="Portugal">Portugal</option>
                           <option value="Puerto Rico">Puerto Rico</option>
                           <option value="Qatar">Qatar</option>
                           <option value="Republic of Montenegro">Republic of Montenegro</option>
                           <option value="Republic of Serbia">Republic of Serbia</option>
                           <option value="Reunion">Reunion</option>
                           <option value="Romania">Romania</option>
                           <option value="Russia">Russia</option>
                           <option value="Rwanda">Rwanda</option>
                           <option value="St Barthelemy">St Barthelemy</option>
                           <option value="St Eustatius">St Eustatius</option>
                           <option value="St Helena">St Helena</option>
                           <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                           <option value="St Lucia">St Lucia</option>
                           <option value="St Maarten">St Maarten</option>
                           <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                           <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                           <option value="Saipan">Saipan</option>
                           <option value="Samoa">Samoa</option>
                           <option value="Samoa American">Samoa American</option>
                           <option value="San Marino">San Marino</option>
                           <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                           <option value="Saudi Arabia">Saudi Arabia</option>
                           <option value="Senegal">Senegal</option>
                           <option value="Serbia">Serbia</option>
                           <option value="Seychelles">Seychelles</option>
                           <option value="Sierra Leone">Sierra Leone</option>
                           <option value="Singapore">Singapore</option>
                           <option value="Slovakia">Slovakia</option>
                           <option value="Slovenia">Slovenia</option>
                           <option value="Solomon Islands">Solomon Islands</option>
                           <option value="Somalia">Somalia</option>
                           <option value="South Africa">South Africa</option>
                           <option value="Spain">Spain</option>
                           <option value="Sri Lanka">Sri Lanka</option>
                           <option value="Sudan">Sudan</option>
                           <option value="Suriname">Suriname</option>
                           <option value="Swaziland">Swaziland</option>
                           <option value="Sweden">Sweden</option>
                           <option value="Switzerland">Switzerland</option>
                           <option value="Syria">Syria</option>
                           <option value="Tahiti">Tahiti</option>
                           <option value="Taiwan">Taiwan</option>
                           <option value="Tajikistan">Tajikistan</option>
                           <option value="Tanzania">Tanzania</option>
                           <option value="Thailand">Thailand</option>
                           <option value="Togo">Togo</option>
                           <option value="Tokelau">Tokelau</option>
                           <option value="Tonga">Tonga</option>
                           <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                           <option value="Tunisia">Tunisia</option>
                           <option value="Turkey">Turkey</option>
                           <option value="Turkmenistan">Turkmenistan</option>
                           <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                           <option value="Tuvalu">Tuvalu</option>
                           <option value="Uganda">Uganda</option>
                           <option value="Ukraine">Ukraine</option>
                           <option value="United Arab Erimates">United Arab Emirates</option>
                           <option value="United Kingdom">United Kingdom</option>
                           <option value="United States of America">United States of America</option>
                           <option value="Uraguay">Uruguay</option>
                           <option value="Uzbekistan">Uzbekistan</option>
                           <option value="Vanuatu">Vanuatu</option>
                           <option value="Vatican City State">Vatican City State</option>
                           <option value="Venezuela">Venezuela</option>
                           <option value="Vietnam">Vietnam</option>
                           <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                           <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                           <option value="Wake Island">Wake Island</option>
                           <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                           <option value="Yemen">Yemen</option>
                           <option value="Zaire">Zaire</option>
                           <option value="Zambia">Zambia</option>
                           <option value="Zimbabwe">Zimbabwe</option>
                           </select>
                           </div>
                           <div class="field">
                              <label><?php _e("*Phone","metropolis"); ?></label>
                              <input name="homephone" class="text required" type="text" />
                           </div>
                           <div class="field alt">
                              <label><?php _e("How did you hear<br />about metropolis ?","metropolis"); ?></label>
                              <select name="" class="chosen-select" data-placeholder="">
                                 <option></option>
                                 <option value="9625" data-html-text="Event"><?php _e("Event","metropolis"); ?></option>
                                 <option value="9146" data-html-text="Signage"><?php _e("Signage","metropolis"); ?></option>
                                 <option value="9624" data-html-text="Online Search"><?php _e("Online Search","metropolis"); ?></option>
                                 <option value="9623" data-html-text="The Real deal"><?php _e("The Real deal","metropolis"); ?></option>
                                 <option value="9139" data-html-text="NYtimes.com"><?php _e("NYtimes.com","metropolis"); ?></option>
                                 <option value="9622" data-html-text="Elliman.com"><?php _e("Elliman.com","metropolis"); ?></option>
                                 <option value="9151" data-html-text="Wall Street Journal"><?php _e("Wall Street Journal","metropolis"); ?></option>
                                 <option value="9127" data-html-text="Curbed.com"><?php _e("Curbed.com","metropolis"); ?></option>
                                 <option value="9140" data-html-text="Other"><?php _e("Other","metropolis"); ?></option>
                              </select>
                           </div>
                        </div>
                        <div class="medium-4 large-4 columns column-3">
                           <div class="field field-2">
                              <label><?php _e("*Represented by Brokers?","metropolis"); ?></label>
                              <a data-hasbroker="1" class="radio-button has-broker-yes" href="#"><?php _e("Yes","metropolis"); ?></a>
                              <a data-hasbroker="0" class="radio-button has-broker-no selected" href="#"><?php _e("No","metropolis"); ?></a>
                              <input id="hasbroker" name="hasbroker" type="hidden" value="0" />
                           </div>
                           <div class="has-broker-wrapper">
                              <div class="field field-1">
                                 <label><?php _e("*Broker's name","metropolis"); ?></label>
                                 <input name="broker_firstname" id="purchaser-broker-firstname" placeholder="First" data-place="First" class="text first required skip" type="text" />
                                 <input name="broker_lastname"  id="purchaser-broker-lastname" placeholder="Last" data-place="Last" class="text last required skip" type="text" />
                              </div>
                              <div class="field field-1">
                                 <label><?php _e("*Broker's Co. Contact Number","metropolis"); ?></label>
                                 <input name="brokerage_company" class="text first required skip" type="text" />
                                 <input name="realtor_phone" class="text last required skip" type="text" />
                              </div>
                              <div class="field">
                                 <label><?php _e("*Broker's Co. email","metropolis"); ?></label>
                                 <input name="realtor_email" class="text email required skip" type="email" />
                              </div>
                           </div>
                           <div class="field field-button">
                              <button type="submit" class="form-button"><?php _e("Send","metropolis"); ?></button><br /><small><?php _e("*Required","metropolis"); ?></small>
                           </div>
                        </div>
                     </div>
                  </fieldset>
               </form>
            </div>
                       


            <div class="broker" style="display: none;">
               <form id="broker-form" class="form" method="post" action="http://www.escrowprocessing.com/api_postform.php">
                        <input type="hidden" name="seckey" value="hEBU830x7T">
                        <input type="hidden" name="client_type" value="9109">
                        <input type="hidden" name="debug" value="1">
                        <input type="hidden" name="post_type" value="post">
                        <input type="hidden" name="returnURL" value="<?php echo RAIZ; ?>/thanks">
                        <input type="hidden" id="realtor-name" name="realtor_name" value="">
                  <input type="hidden" id="realtor-name" name="realtor_name" value="">

                  <fieldset>
                     <div class="row">
                        <div class="medium-4 large-4 columns column-1">
                           <div class="field field-1">
                              <label><?php _e("*Name","metropolis"); ?></label>
                              <input name="firstname" id="broker-firstname" placeholder="First" data-place="First" class="text required first" type="text" />
                              <input name="lastname"  id="broker-lastname" placeholder="Last" data-place="Last" class="text required last" type="text" />
                           </div>
                           <div class="field">
                              <label for=""><?php _e("*Brokers company","metropolis"); ?></label>
                              <input name="brokerage_company" placeholder="" class="text required" type="text" />
                           </div>
                           <div class="field">
                              <label for=""><?php _e("*Email","metropolis"); ?></label>
                              <input name="realtor_email" class="text required email" type="text" placeholder="" />
                           </div>
                        </div>
                        <div class="medium-4 large-4 columns column-2">
                           <div class="field alt">
                              <label><?php _e("How did you hear<br />about metropolis ?","metropolis"); ?></label>
                              <select name="hearfrom" class="chosen-select" data-placeholder="">
                                 <option value=""></option>
                                 <option value="9625" data-html-text="Event"><?php _e("Event","metropolis"); ?></option>
                                 <option value="9146" data-html-text="Signage"><?php _e("Signage","metropolis"); ?></option>
                                 <option value="9624" data-html-text="Online Search"><?php _e("Online Search","metropolis"); ?></option>
                                 <option value="9623" data-html-text="The Real deal"><?php _e("The Real deal","metropolis"); ?></option>
                                 <option value="9139" data-html-text="NYtimes.com"><?php _e("NYtimes.com","metropolis"); ?></option>
                                 <option value="9622" data-html-text="Elliman.com"><?php _e("Elliman.com","metropolis"); ?></option>
                                 <option value="9151" data-html-text="Wall Street Journal"><?php _e("Wall Street Journal","metropolis"); ?></option>
                                 <option value="9127" data-html-text="Curbed.com"><?php _e("Curbed.com","metropolis"); ?></option>
                                 <option value="9140" data-html-text="Other"><?php _e("Other","metropolis"); ?></option>
                              </select>
                           </div>
                        </div>
                        <div class="medium-4 large-4 columns column-3">
                           <div class="field field-button">
                              <button type="submit" class="form-button"><?php _e("Send","metropolis"); ?></button><br /><small><?php _e("*Required","metropolis"); ?></small>
                           </div>
                        </div>
                     </div>
                  </fieldset>
               </form>
            </div>




            <div class="press" style="display: none;">
               <form id="press-form" class="form" method="post" action="form-processing.php">
                  <fieldset>
                     <div class="row">
                        <div class="medium-4 large-4 columns column-1">
                           <div class="field field-1">
                              <label><?php _e("*Name","metropolis"); ?></label>
                              <input name="first_name" class="text required first" type="text" placeholder="First" data-place="First"  />
                              <input name="last_name" class="text required last" type="text" placeholder="Last" data-place="Last"  />
                           </div>
                           <div class="field">
                              <label><?php _e("*Email","metropolis"); ?></label>
                              <input name="email" class="text required email" type="email" />
                           </div>
                           <div class="field">
                              <label><?php _e("*Publication","metropolis"); ?></label>
                              <input name="publication" class="text required" type="text" />
                           </div>
                        </div>
                        <div class="medium-8 large-8 columns column-2">
                           <div class="field field-1">
                              <label><?php _e("*Your request","metropolis"); ?></label>
                              <textarea name="request" class="textarea required"></textarea>
                           </div>
                           <div class="field field-button">
                              <button class="form-button"><?php _e("Send","metropolis"); ?></button><br /><small><?php _e("*Required","metropolis"); ?></small>
                           </div>
                        </div>
                     </div>
                  </fieldset>
               </form>
            </div>
         </div>



         <div class="thanks visible">
            <div class="wrapper">
               <div class="wrapper-in">
                  <a href="#" class="close"><?php _e("Close","metropolis"); ?></a>
                  <div class="hgroup">
                     <h1><?php _e("Thank you","metropolis"); ?></h1>
                  </div>
                  <div class="cgroup">
                     <p><?php _e("Your information<br />has been successfully submitted","metropolis"); ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </article>

<?php get_footer(); ?>