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
 * Template Name: Contact
 */
$activa="contact";
get_header(); ?>

	        
   <article class="contact">
      <div class="content">
         <div class="hgroup">
            <h1>Contact</h1>
            <p>Please select one</p>
            <ul class="contact-ul">
               <li class="selected"><a href="#" class="purchaser">Prospective purchaser</a></li>
               <li class="separator">|</li>
               <li><a href="#" class="broker">Broker</a></li>
               <li class="separator">|</li>
               <li><a href="#" class="press">Press</a></li>
            </ul>
         </div>
         <div class="cgroup">
            <div class="purchaser">
               <form id="purchaser-form" class="form" method="" action="">
                  <fieldset>
                     <div class="row">
                        <div class="medium-4 large-4 columns column-1">
                           <div class="field field-1">
                              <label>*Name</label>
                              <input name="first_name" placeholder="First" class="text required first" type="text" />
                              <input name="last_name" placeholder="Last" class="text required last" type="text" />
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
                              <select name="" class="chosen-select">
                                 <option></option>
                                 <option>Argentine</option>
                                 <option>Brazil</option>
                                 <option>Uruguay</option>
                                 <option>Chile</option>
                              </select>
                           </div>
                           <div class="field">
                              <label>*Phone</label>
                              <input name="phone" class="text required" type="text" />
                           </div>
                           <div class="field alt">
                              <label>How did you hear<br />about metropolis ?</label>
                              <select name="" class="chosen-select" data-placeholder="">
                                 <option></option>
                                 <option>Event</option>
                                 <option>Signage</option>
                                 <option>Online Search</option>
                                 <option>The Real Deal</option>
                                 <option>NYTimes.com</option>
                                 <option>LATimes.com</option>
                                 <option>Elliman.com</option>
                                 <option>Wall Street Journal</option>
                                 <option>Curbedla.com</option>
                                 <option>Other</option>
                              </select>
                           </div>
                        </div>
                        <div class="medium-4 large-4 columns column-3">
                           <div class="field field-2">
                              <label>*Represented by Brokers?</label>
                              <a class="radio-button has-broker-yes" href="#">Yes</a>
                              <a class="radio-button has-broker-no selected" href="#">No</a>
                           </div>
                           <div class="has-broker-wrapper">
                              <div class="field field-1">
                                 <label>*Broker's name</label>
                                 <input name="broker_first_name" placeholder="First" class="text first required skip" type="text" />
                                 <input name="broker_last_name" placeholder="Last" class="text last required skip" type="text" />
                              </div>
                              <div class="field field-1">
                                 <label>*Broker's Co. Contact Number</label>
                                 <input name="broker_contact_number_one" class="text first required skip" type="text" />
                                 <input name="broker_contact_number_two" class="text last required skip" type="text" />
                              </div>
                              <div class="field">
                                 <label>*Broker's Co. email</label>
                                 <input name="broker_email" class="text email required skip" type="email" />
                              </div>
                           </div>
                           <div class="field field-button">
                              <button class="form-button">Send</button><br /><small>*Required</small>
                           </div>
                        </div>
                     </div>
                  </fieldset>
               </form>
            </div>
            <div class="broker" style="display: none;">
               <form id="broker-form" class="form" method="" action="">
                  <fieldset>
                     <div class="row">
                        <div class="medium-4 large-4 columns column-1">
                           <div class="field field-1">
                              <label>*Name</label>
                              <input name="first_name" placeholder="First" class="text required first" type="text" />
                              <input name="last_name" placeholder="Last" class="text required last" type="text" />
                           </div>
                           <div class="field">
                              <label for="">*Brokers company</label>
                              <input name="brokers_company_name" placeholder="" class="text required" type="text" />
                           </div>
                           <div class="field">
                              <label for="">*Email</label>
                              <input name="email" class="text required email" type="text" placeholder="" />
                           </div>
                        </div>
                        <div class="medium-4 large-4 columns column-2">
                           <div class="field alt">
                              <label>How did you hear<br />about metropolis ?</label>
                              <select name="" class="chosen-select" data-placeholder="">
                                 <option></option>
                                 <option>Event</option>
                                 <option>Signage</option>
                                 <option>Online Search</option>
                                 <option>The Real Deal</option>
                                 <option>NYTimes.com</option>
                                 <option>LATimes.com</option>
                                 <option>Elliman.com</option>
                                 <option>Wall Street Journal</option>
                                 <option>Curbedla.com</option>
                                 <option>Other</option>
                              </select>
                           </div>
                        </div>
                        <div class="medium-4 large-4 columns column-3">
                           <div class="field field-button">
                              <button class="form-button">Send</button><br /><small>*Required</small>
                           </div>
                        </div>
                     </div>
                  </fieldset>
               </form>
            </div>
            <div class="press" style="display: none;">
               <form id="press-form" class="form" method="" action="">
                  <fieldset>
                     <div class="row">
                        <div class="medium-4 large-4 columns column-1">
                           <div class="field field-1">
                              <label>*Name</label>
                              <input name="first_name" class="text required first" type="text" placeholder="First" />
                              <input name="last_name" class="text required last" type="text" placeholder="Last" />
                           </div>
                           <div class="field">
                              <label>*Email</label>
                              <input name="email" class="text required email" type="email" />
                           </div>
                           <div class="field">
                              <label>*Publication</label>
                              <input name="publication" class="text required" type="text" />
                           </div>
                        </div>
                        <div class="medium-8 large-8 columns column-2">
                           <div class="field field-1">
                              <label>*Your request</label>
                              <textarea name="request" class="textarea required"></textarea>
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
         <div class="thanks">
            <div class="wrapper">
               <div class="wrapper-in">
                  <a href="#" class="close">Close</a>
                  <div class="hgroup">
                     <h1>Thank you</h1>
                  </div>
                  <div class="cgroup">
                     <p>Your information<br />has been successfully submitted</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </article>

<?php get_footer(); ?>