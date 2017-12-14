<!doctype html>
<html lang="en">
  <?php include_once('header.php'); 
		require_once('config.php');
		require_once('include/check_session.php');
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
                                 <div class="mdl-grid">
                                     
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" value="" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issuer Name...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" value="" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issuer Dep’t./Crewing Office...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
                                     </div>
                                     
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name"  value="" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issue To (Name)...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name"  value="" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issue To (Department)...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
                                     </div>
                                     
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z,0-9,@,. ]*" type="email" id="Name"  value="" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issuer Superior Email Address...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                         </div>
                                     </div>
                                    <div class="mdl-cell mdl-cell--6-col"></div>
                                     <br>
                                   
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth getmdl-select__fix-height">
                                            <input class="mdl-textfield__input" type="text" id="sample" readonly tabIndex="-1"  value="" disabled="true">
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
                                     </div>
                                     <br>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth getmdl-select__fix-height">
                                            <input class="mdl-textfield__input" type="text" id="sample2" value="" readonly tabIndex="-1" disabled="true">
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
                                     </div>
                                     
                                     <br>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea disabled="true" class="mdl-textfield__input" type="text" rows= "10" cols="15" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Description of Findings/Problem</label>
                                          </div>
                                    </div>
                                     
									<div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="reason_for_denial_desc" class="mdl-textfield__input" type="text" rows= "10" cols="15" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Description of Reason of Denial</label>
                                          </div>
                                    </div>
									
									<div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="cpar_no" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">CPAR No.</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="cpar_date" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">CPAR Date</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
                                     </div>
                                     
                                     
                                     <br>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="root_cause" class="mdl-textfield__input" type="text" rows= "4" cols="15" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Root Cause</label>
                                          </div>
                                     </div>
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="correction" class="mdl-textfield__input" type="text" rows= "4" cols="15" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Correction</label>
                                          </div>
                                     </div>
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="correction_action" class="mdl-textfield__input" type="text" rows= "4" cols="15" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Corrective Action</label>
                                          </div>
                                     </div>
<!--                                    <div class="mdl-cell mdl-cell--2-col"></div>-->
                                     <br>
                                     <br>
                                     <br>
                                </div>
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
