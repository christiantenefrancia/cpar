<!doctype html>
<html lang="en">
  <?php include_once('header.php'); 
		require_once('config.php');
		require_once('include/check_session.php');
		require_once('include/view_issue_load_data.php')
	?>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        
      <?php include_once('employee/employee-manage-account-topbar.php'); ?>
        

<!--
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center" style="background-color: #b3ccff">
-->
         <main class="android-content mdl-layout__content">
           <div class="page-content" style="background-color: #b3ccff">
          <br>
          
           <div class="mdl-tabs__panel is-active" id="demo">
<!--              <h1>List of Issues</h1>-->
              <h1>CPAR Issue</h1>

       <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col"></div>
            <div class="mdl-cell mdl-cell--10-col">    
               <div class="mdl-grid portfolio-max-width portfolio-contact">
                <div class="mdl-cell mdl-cell--10-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__supporting-text">
                            <form action="#" class="">
                                <ul class="form-style-1">
								 <input type="hidden" name="issue_to_view" value="<?php echo $_GET['issue_id_to_view'];?>">
                                 <div class="mdl-grid">
                                     
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>Issuer Name</label><input type="text" class="field-divided" placeholder="Issuer Name" disabled value="<?php $issr_data[0]['USR_NM'];?>" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" value="<?php //echo $issr_data[0]['USR_NM'];?>" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issuer Name...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>Issuer Dep’t./Crewing Office</label><input type="text" class="field-divided" placeholder="Issuer Dep’t./Crewing Office" disabled value="<?php echo $issr_data[0]['USR_DPRTMNT'];?>" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" value="<?php //echo $issr_data[0]['USR_DPRTMNT'];?>" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issuer Dep’t./Crewing Office...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                          <label>Issue To (Name)</label><input type="text" class="field-divided" placeholder="Issue To (Name)" disabled value="<?php echo $emp_data[0]['USR_NM'];?>" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name"  value="<?php //echo $emp_data[0]['USR_NM'];?>" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issue To (Name)...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>Issue To (Department)</label><input type="text" class="field-divided" placeholder="Issue To (Department)" disabled value="<?php echo $emp_data[0]['USR_DPRTMNT'];?>" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name"  value="<?php //echo $emp_data[0]['USR_DPRTMNT'];?>" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issue To (Department)...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                          <label>Issuer Superior Email Address</label><input type="text" class="field-divided" placeholder="Issuer Superior Email Address" disabled value="<?php echo $spr_data[0]['USR_EML'];?>" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z,0-9,@,. ]*" type="email" id="Name"  value="<?php //echo $spr_data[0]['USR_EML'];?>" disabled="true">
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
                                            <select name="issue_source" class="field-select" style="width: 100%; font-family: Lucida Sans Unicode" disabled>
                                                <option value="<?php echo $iss_data[0]['ISS_SRC'];?>"><?php echo $iss_data[0]['ISS_SRC'];?></option>
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
                                            <input class="mdl-textfield__input" type="text" id="sample" readonly tabIndex="-1"  value="<?php //echo $iss_data[0]['ISS_SRC'];?>" disabled="true">
                                            <label for="sample2">
                                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                            </label>
                                            <label for="sample" class="mdl-textfield__label">Source</label>
                                            <ul for="sample" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                <li class="mdl-menu__item" data-val=""></li>
                                                <li class="mdl-menu__item" data-val="1st Party Audit" style="font-size: 12px">1st Party Audit</li>
                                                <li class="mdl-menu__item" data-val="2nd Party Audit" style="font-size: 12px">2nd Party Audit</li>
                                                <li class="mdl-menu__item" data-val="3rd Party Audit" style="font-size: 12px">3rd Party Audit</li>
                                                <li class="mdl-menu__item" data-val="Customer Survey" style="font-size: 12px">Customer Survey</li>
                                                <li class="mdl-menu__item" data-val="Customer Complaint/Feedback" style="font-size: 12px">Customer Complaint/Feedback</li>
                                                <li class="mdl-menu__item" data-val="Unmet Goal" style="font-size: 12px">Unmet Goal</li>
                                                <li class="mdl-menu__item" data-val="Request for Disposition/Inaction" style="font-size: 12px">Request for Disposition/Inaction</li>
                                        </div>
-->
                                     </div>
                                     <br>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>Finding</label>
                                            <select name="issue_finding" class="field-select" style="width: 100%; font-family: Lucida Sans Unicode" disabled>
                                                <option value="<?php echo $iss_data[0]['ISS_FNDNG']; ?>"><?php echo $iss_data[0]['ISS_FNDNG']; ?></option>
                                                <option value="Blank"></option>
                                                <option value="Major Non-conformance">Major Non-conformance</option>
                                                <option value="Minor Non-conformance">Minor Non-conformance</option>
                                                <option value="Observation">Observationt</option>
                                            </select>
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth getmdl-select__fix-height">
                                            <input class="mdl-textfield__input" type="text" id="sample2" value="<?php echo $iss_data[0]['ISS_FNDNG'];?>" readonly tabIndex="-1" disabled="true">
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
                                        <textarea name="issue_finding_desc" id="field5" class="field-long field-textarea" disabled><?php echo $iss_data[0]['ISS_FNDNG_DSC']; ?></textarea>
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea disabled="true" class="mdl-textfield__input" type="text" rows= "10" cols="15" id="sample5" ><?php echo $iss_data[0]['ISS_FNDNG_DSC'];?></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Description of Findings/Problem</label>
                                          </div>
-->
                                    </div>
                                    <br>
									<div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                         
                                         <hr>
                                         <br>
                                         <br>
                                          <label>Description of Findings/Problem</label>
                                        <textarea name="issue_finding_desc" id="field5" class="field-long field-textarea" disabled><?php echo $iss_rsn_fr_dnl; ?></textarea>
                                         <br>
                                         <br>
                                         <br>
                                         <hr>
                                         
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="reason_for_denial_desc" class="mdl-textfield__input" type="text" rows= "10" cols="15" disabled="true" id="sample5" ><?php //echo $iss_rsn_fr_dnl;?></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Description of Reason of Denial</label>
                                          </div>
-->
                                    </div>
									
									<div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>CPAR No.</label><input type="text" class="field-divided" disabled value="<?php echo $cpar_no;?>" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="cpar_no" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" disabled="true" value="<?php //echo $cpar_no;?>">
                                            <label class="mdl-textfield__label" for="Name">CPAR No.</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>CPAR Date</label><input type="text" class="field-divided" disabled value="<?php echo $cpar_date;?>" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="cpar_date" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" disabled="true" value="<?php //echo $cpar_date;?>">
                                            <label class="mdl-textfield__label" for="Name">CPAR Date</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     
                                     
                                     <br>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                         <label>Root Cause</label>
                                        <textarea name="issue_finding_desc" id="field5" class="field-long field-textarea" disabled><?php echo $root_cause; ?></textarea>
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="root_cause" class="mdl-textfield__input" type="text" rows= "4" cols="15" id="sample5" disabled="true" ><?php //echo $root_cause;?></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Root Cause</label>
                                          </div>
-->
                                     </div>
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                           <label>Correction</label>
                                        <textarea name="issue_finding_desc" id="field5" class="field-long field-textarea" disabled><?php echo $correction; ?></textarea>
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="correction" class="mdl-textfield__input" type="text" rows= "4" cols="15" id="sample5" disabled="true" ><?php //echo $correction;?></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Correction</label>
                                          </div>
-->
                                     </div>
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                          <label>Corrective Action</label>
                                        <textarea name="issue_finding_desc" id="field5" class="field-long field-textarea" disabled><?php echo $correction_action; ?></textarea>
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="correction_action" class="mdl-textfield__input" type="text" rows= "4" cols="15" id="sample5" disabled="true" ><?php //echo $correction_action;?></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Corrective Action</label>
                                          </div>
-->
                                     </div>
<!--                                    <div class="mdl-cell mdl-cell--2-col"></div>-->
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
          </div>
       <?php include_once('employee/employee-footer.php'); ?>
      </main>
    </div>
      
    <script type="text/javascript">
      $(document).ready(function(){
            $(".mdl-tabs__tab-bar a").click(function () {
                window.location.href = "<?php echo HTTP_ROOT;?>employee.php";  
            });
        });
        
        $(document).ready(function(){
            $(".mdl-navigation a").click(function () {
                window.location.href = "<?php echo HTTP_ROOT;?>employee.php"; 
            });
        });
        
    </script>
    <script src="assets/js/material-modal.js"></script>
    <script src="assets/js/material.min.js"></script>
  </body>
</html>
