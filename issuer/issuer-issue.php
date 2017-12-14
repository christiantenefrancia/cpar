<div class="mdl-tabs__panel is-active" id="issue-panel">
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
						
                            <form action="issuer.php" class="" onsubmit="return enableInputControls();"  enctype="multipart/form-data" method="POST">
                                <ul class="form-style-1">
                                 <div class="mdl-grid">
								 
                                    <div class="mdl-cell mdl-cell--4-col">
									</div>
									<div class="mdl-cell mdl-cell--4-col">
										<?php require_once('include/issuer_form_reminders.php'); ?>
									</div>
									<div class="mdl-cell mdl-cell--4-col">
									</div>
									
                                    <div class="mdl-cell mdl-cell--1-col">
									</div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>Issuer Name</label><input type="text" name="issuer_name" class="field-divided" placeholder="Issuer Name" value="<?php echo $_SESSION['usr_nm'];?>" style="width: 100%; font-family: Lucida Sans Unicode" />
							
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                          <label>Issuer Dep’t./Crewing Office</label><input type="text" name="issuer_dprtmnt" class="field-divided" placeholder="Issuer Dep’t./Crewing Office" value="<?php echo $_SESSION['usr_dprtmnt'];?>" style="width: 100%; font-family: Lucida Sans Unicode" />
                                     </div>
                                     
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                          <label>Issue To (Name)</label><input type="text" name="issue_to_name" class="field-divided" placeholder="Issue To (Name)" style="width: 100%; font-family: Lucida Sans Unicode" />
                                     </div>
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>Issue To (Department)</label><input type="text" name="issue_to_dprtmnt" class="field-divided" placeholder="Issue To (Department)" style="width: 100%; font-family: Lucida Sans Unicode" />
                                     </div>
                                     
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>Issuer Superior Email Address</label><input type="text" name="superior_email" class="field-divided" placeholder="Issuer Superior Email Address" style="width: 100%; font-family: Lucida Sans Unicode" /> 
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
                                     </div>
                                     
                                     <br>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                          <label>Description of Findings/Problem</label>
                                        <textarea name="issue_finding_desc" id="field5" class="field-long field-textarea" value="<?php echo $_POST['issue_finding_desc'];?>"></textarea>
                                    </div>
                                     

                                     <div class="mdl-cell mdl-cell--9-col"></div>
                                     <div class="mdl-cell mdl-cell--3-col">
                                        <p>
                                            <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="width: 100%" name="submit" type="submit">
                                                <i class="material-icons" style="float: left; margin-top: 4px">done</i>
                                                Submit
                                            </button>
                                    </div>
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
