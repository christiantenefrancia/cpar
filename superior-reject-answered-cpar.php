<!doctype html>
<html lang="en">
  <?php require_once('header.php');
		require_once('config.php');
		require_once('include/check_session.php');
		require_once('include/superior_reject_issue_concern_process.php');
  ?>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        
      <?php include_once('superior/superior-manage-account-topbar.php'); ?>
        

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
              <h1>Reason for Rejection</h1>

       <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col"></div>
            <div class="mdl-cell mdl-cell--10-col">    
               <div class="mdl-grid portfolio-max-width portfolio-contact">
                <div class="mdl-cell mdl-cell--10-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__supporting-text">
                            <form action="superior-reject-answered-cpar.php" class="" enctype="multipart/form-data" method="POST">
                                 <ul class="form-style-1">
                                 <div class="mdl-grid">
                                     
									<div class="mdl-cell mdl-cell--4-col">
									</div>
									<div class="mdl-cell mdl-cell--4-col">
										<?php require_once('include/superior_reject_reminders.php'); ?>
									</div>
									<div class="mdl-cell mdl-cell--4-col">
									</div> 
                                    
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                         <label>Description of Reason for Denial</label>
                                        <textarea name="reason_for_denial_desc" id="field5" class="field-long field-textarea"></textarea>
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="reason_for_denial_desc" class="mdl-textfield__input" type="text" rows= "10" cols="15" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Description of Reason of Denial</label>
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
-->
												<input type="hidden" name="issue_to_reject" value="<?php echo $_GET['issue_concern_to_reject'];?>">
                                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="width: 100%" name="submit" type="submit">
                                                    <i class="material-icons" style="float: left; margin-top: 4px">done</i>
                                            Submit
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
                window.location.href = "<?php echo HTTP_ROOT;?>superior.php"; 
            });
        });
        
    </script>
    <script src="assets/js/material-modal.js"></script>
    <script src="assets/js/material.min.js"></script>
  </body>
</html>
