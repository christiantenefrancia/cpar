<!doctype html>
<html lang="en">
  <?php include_once('header.php');
		require_once('config.php');
		require_once('include/check_session.php');
		require_once('include/employee_answer_issue_process.php');
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
              <h1>Respond to CPAR</h1>

       <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col"></div>
            <div class="mdl-cell mdl-cell--10-col">    
               <div class="mdl-grid portfolio-max-width portfolio-contact">
                <div class="mdl-cell mdl-cell--10-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__supporting-text">
                            <form action="employee-answer-cpar.php?issue_id_to_answer=<?php echo $_GET['issue_id_to_answer'];?>"  onsubmit="return enableInputControls();" class="" enctype="multipart/form-data" method="POST">
                                <ul class="form-style-1">
                                 <div class="mdl-grid">
                                     
									<div class="mdl-cell mdl-cell--4-col">
									</div>
									<div class="mdl-cell mdl-cell--4-col">
										<?php require_once('include/employee_cpar_form_reminders.php'); ?>
									</div>
									<div class="mdl-cell mdl-cell--4-col">
									</div>  
									 
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>CPAR No.</label><input type="text" value="<?php echo $cpar_no;?>" name="cpar_no" id="cpar_no" class="field-divided" placeholder="CPAR No." disabled style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="cpar_no" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="cpar_no" disabled="true" value="<?php echo $cpar_no;?>">
                                            <label class="mdl-textfield__label" for="Name">CPAR No.</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                         <label>CPAR Date</label><input type="text" value="<?php echo $cpar_date;?>" name="cpar_date" id="cpar_date" class="field-divided" placeholder="CPAR Date" disabled style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="cpar_date" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="cpar_date" disabled="true" value="<?php echo $cpar_date;?>">
                                            <label class="mdl-textfield__label" for="Name">CPAR Date</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     
                                     
                                     <br>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                          <label>Root Cause</label>
                                        <textarea name="root_cause" id="field5" class="field-long field-textarea"></textarea>
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="root_cause" class="mdl-textfield__input" type="text" rows= "4" cols="15" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Root Cause</label>
                                          </div>
-->
                                     </div>
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                         <label>Correction</label>
                                        <textarea name="correction" id="field5" class="field-long field-textarea"></textarea>
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="correction" class="mdl-textfield__input" type="text" rows= "4" cols="15" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Correction</label>
                                          </div>
-->
                                     </div>
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                         <label>Corrective Action</label>
                                        <textarea name="correction_action" id="field5" class="field-long field-textarea"></textarea>
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="correction_action" class="mdl-textfield__input" type="text" rows= "4" cols="15" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Corrective Action</label>
                                          </div>
-->
                                     </div>
                                     

                                     <div class="mdl-cell mdl-cell--9-col"></div>
                                     <div class="mdl-cell mdl-cell--3-col">
                                        <p>
<!--
                                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="width: 100%" type="submit">
                                                Submit
                                            </button>
-->											<input type="hidden" name="issue_to_answer" value="<?php echo $_GET['issue_id_to_answer'];?>">
                                            <button class="mdl-button mdl-button--raised mdl-button--colored mdl-js-button modal__close" style="width: 100%" name="submit" type="submit">
                                              <i class="material-icons" style="float: left; margin-top: 4px; font-size: 30px">done</i>
                                            Submit Answer
                                          </button>
                                            
                                        </p>
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
       <?php include_once('superior/superior-footer.php'); ?>
      </main>
    </div>
      
    <script type="text/javascript">
      $(document).ready(function(){
            $(".mdl-tabs__tab-bar a").click(function () {
                window.location.href = "<?php echo HTTP_ROOT;?>superior.php";  
            });
        });
        
        $(document).ready(function(){
            $(".mdl-navigation a").click(function () {
                window.location.href = "<?php echo HTTP_ROOT;?>superior-ui.php"; 
            });
        });
        
    </script>
	
	<script type="text/javascript">
	function enableInputControls()
	{            
		$('#cpar_no').removeAttr('disabled');
		$('#cpar_date').removeAttr('disabled');
	}
	</script>
    <script src="assets/js/material-modal.js"></script>
    <script src="assets/js/material.min.js"></script>
  </body>
</html>
