  <div class="mdl-tabs__panel is-active" id="issue-panel" style="display:none">
<!--              <h1>List of Issues</h1>-->
<!--  <h2>Issue CPAR</h2>-->

  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
 
      
            <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col"></div>
            <div class="mdl-cell mdl-cell--10-col">
            <div class="mdl-grid portfolio-max-width portfolio-contact">
                <div class="mdl-cell mdl-cell--10-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__supporting-text">
                        
                        
                        
<!--
                        <form action="superior.php" class="" onsubmit="return enableInputControls();"  enctype="multipart/form-data" method="POST">
                            <ul class="form-style-1">
                                <li><label>Full Name <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="First" />&nbsp;<input type="text" name="field2" class="field-divided" placeholder="Last" /></li>
                                <li>
                                    <label>Email <span class="required">*</span></label>
                                    <input type="email" name="field3" class="field-long" />
                                </li>
                                <li>
                                    <label>Subject</label>
                                    <select name="field4" class="field-select">
                                    <option value="Advertise">Advertise</option>
                                    <option value="Partnership">Partnership</option>
                                    <option value="General Question">General</option>
                                    </select>
                                </li>
                                <li>
                                    <label>Your Message <span class="required">*</span></label>
                                    <textarea name="field5" id="field5" class="field-long field-textarea"></textarea>
                                </li>
                                <li>
                                    <input type="submit" value="Submit" />
                                </li>
                            </ul>
                            </form>
                        
                        
-->
                        
                            <form action="superior.php" class="" onsubmit="return enableInputControls();"  enctype="multipart/form-data" method="POST">
                                <ul class="form-style-1">
                                 <div class="mdl-grid">
                                     
									<div class="mdl-cell mdl-cell--4-col">
									</div>
									<div class="mdl-cell mdl-cell--4-col">
										<?php require_once('include/superior_form_reminders.php'); ?>
									</div>
									<div class="mdl-cell mdl-cell--4-col">
									</div> 
									
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>Issuer Name</label><input type="text" name="issuer_name" class="field-divided" placeholder="Issuer Name" value="<?php echo $_SESSION['usr_nm'];?>" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%: color: black">
                                            <input name="issuer_name" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="issuer_name" value="<?php //echo $_SESSION['usr_nm'];?>" disabled="true" style="color: #808080">
                                            <label class="mdl-textfield__label" for="Name">Issuer Name...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                          <label>Issuer Dep’t./Crewing Office</label><input type="text" name="issuer_dprtmnt" class="field-divided" placeholder="Issuer Dep’t./Crewing Office" value="<?php echo $_SESSION['usr_dprtmnt'];?>" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="issuer_dprtmnt" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="issuer_dprtmnt" value="<?php //echo $_SESSION['usr_dprtmnt'];?>" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issuer Dep’t./Crewing Office...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>Issue To (Name)</label><input type="text" name="issue_to_name" class="field-divided" placeholder="Issue To (Name)" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="issue_to_name" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name">
                                            <label class="mdl-textfield__label" style="color: #b3b3b3" for="Name">Issue To (Name)...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>Issue To (Department)</label><input type="text" name="issue_to_dprtmnt" class="field-divided" placeholder="Issue To (Department)" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="issue_to_dprtmnt" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name">
                                            <label class="mdl-textfield__label" for="Name">Issue To (Department)...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                          <label>Issuer Superior Email Address</label><input type="text" name="superior_email" class="field-divided" placeholder="Issuer Superior Email Address" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="superior_email" class="mdl-textfield__input" pattern="[A-Z,a-z,0-9,@,.]*" type="email" id="Name">
                                            <label class="mdl-textfield__label" for="Name">Issuer Superior Email Address...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                         </div>
-->
                                     </div>
                                    <div class="mdl-cell mdl-cell--6-col"></div>
                                     <br>
                                   
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>Source</label>
                                            <select name="issue_source" class="field-select" style="width: 100%; font-family: Lucida Sans Unicode">
                                                <option value="Blank"></option>
                                                <option value="1st Party Audit">1st Party Audit</option>
                                                <option value="2nd Party Audit">2nd Party Audit</option>
                                                <option value="3rd Party Audit">3rd Party Audit</option>
                                                <option value="Customer Survey">Customer Survey</option>
                                                <option value="Customer Complaint/Feedback">Customer Complaint/Feedback</option>
                                                <option value="Unmet Goal">Unmet Goal</option>
                                                <option value="Request for Disposition/Inaction">Request for Disposition/Inaction</option>
                                            </select>
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth getmdl-select__fix-height">
                                            <input name="issue_source" class="mdl-textfield__input" type="text" id="sample" readonly tabIndex="-1">
                                            <label for="sample2">
                                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                            </label>
                                            <label for="sample" class="mdl-textfield__label">Source</label>
                                            <ul for="sample" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                <li class="mdl-menu__item" data-val="DE"></li>
                                                <li class="mdl-menu__item" data-val="1st Party Audit" style="font-size: 12px">1st Party Audit</li>
                                                <li class="mdl-menu__item" data-val="2nd Party Audit" style="font-size: 12px">2nd Party Audit</li>
                                                <li class="mdl-menu__item" data-val="3rd Party Audit" style="font-size: 12px">3rd Party Audit</li>
                                                <li class="mdl-menu__item" data-val="Customer Survey" style="font-size: 12px">Customer Survey</li>
                                                <li class="mdl-menu__item" data-val="Customer Complaint/Feedback" style="font-size: 12px">Customer Complaint/Feedback</li>
                                                <li class="mdl-menu__item" data-val="Unmet Goal" style="font-size: 12px">Unmet Goal</li>
                                                <li class="mdl-menu__item" data-val="Request for Disposition/Inaction" style="font-size: 12px">Request for Disposition/Inaction</li>
                                            </ul>
                                        </div>
-->
                                     </div>
                                     <br>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>Finding</label>
                                            <select name="issue_finding" class="field-select" style="width: 100%; font-family: Lucida Sans Unicode">
                                                <option value="Blank"></option>
                                                <option value="Major Non-conformance">Major Non-conformance</option>
                                                <option value="Minor Non-conformance">Minor Non-conformance</option>
                                                <option value="Observation">Observationt</option>
                                            </select>
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth getmdl-select__fix-height">
                                            <input name="issue_finding" class="mdl-textfield__input" type="text" id="sample2" readonly tabIndex="-1">
                                            <label for="sample2">
                                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                            </label>
                                            <label for="sample2" class="mdl-textfield__label">Finding</label>
                                            <ul for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                <li class="mdl-menu__item" data-val=""></li>
                                                <li class="mdl-menu__item" data-val="Major Non-conformance" style="font-size: 12px">Major Non-conformance</li>
                                                <li class="mdl-menu__item" data-val="Minor Non-conformance" style="font-size: 12px">Minor Non-conformance</li>
                                                <li class="mdl-menu__item" data-val="Observation" style="font-size: 12px">Observation</li>
                                            </ul>
                                        </div>
-->
                                     </div>
                                     
                                     <br>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                         <label>Description of Findings/Problem</label>
                                        <textarea name="issue_finding_desc" id="field5" class="field-long field-textarea"></textarea>
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="issue_finding_desc" class="mdl-textfield__input" type="text" rows= "10" cols="15" id="sample5"></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Description of Findings/Problem</label>
                                          </div>
-->
                                    </div>
                                     

                                     <div class="mdl-cell mdl-cell--9-col"></div>
                                     <div class="mdl-cell mdl-cell--3-col">
                                        <p>
                                            <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="width: 100%" name="submit" type="submit">
                                                 <i class="material-icons" style="float: left; margin-top: 4px">done</i>
                                                Submit
                                            </button>
<!--
                                             <a class="mdl-button mdl-button--raised mdl-button--colored mdl-js-button modal__close" style="width: 15%; float: right">
                          <i class="material-icons" style="float: left; margin-top: 4px">done</i>
                        Submit
                      </a>
-->
                                        </p>
                                    </div>
                                    <div class="mdl-cell mdl-cell--2-col"></div>
                                     <br>
                                     <br>
                                     <br>
                                </div>
                                </ul>
                            </form>

                    </div>
                </div>
                </div>
            </div>
           </div>
           </div>
