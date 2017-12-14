<!doctype html>
<html lang="en">
  <?php include_once('header.php'); 
		require_once('config.php');
		require_once('include/check_session.php');
		require_once('include/superior_edit_account_process.php');
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
              <h1>Edit User</h1>
			  
			  <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col"></div>
            <div class="mdl-cell mdl-cell--10-col">    
               <div class="mdl-grid portfolio-max-width portfolio-contact">
                <div class="mdl-cell mdl-cell--10-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__supporting-text">
                            <form action="superior-edit-account.php" class="" enctype="multipart/form-data" method="POST">
                                <ul class="form-style-1">
                                 <div class="mdl-grid">
                                     
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
										  <label>User Type</label>
											<select name="user_type" class="field-select" style="width: 100%; font-family: Lucida Sans Unicode">
												<option value="Blank"></option>
												<option value="Issuer">Issuer</option>
												<option value="Superior">Superior</option>
												<option value="Employee">Employee</option>
											</select>
                                         
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" value="<?php //echo $issr_nm;?>" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issuer Name...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
									      <label>Name</label><input type="text" class="field-divided" name="name" placeholder="Name" value="" style="width: 100%; font-family: Lucida Sans Unicode" />
                                         
<!--
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" value="<?php //echo $issr_dprtmnt;?>" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issuer Dep’t./Crewing Office...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                           <label>Email</label><input type="email" name="email" class="field-divided" placeholder="Email Address" value="" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name"  value="<?php //echo $cncrn_nm;?>" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issue To (Name)...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                          <label>Department</label><input type="text" class="field-divided" placeholder="Department" name="department" value="" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name"  value="<?php //echo $cncrn_dprtmnt;?>" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issue To (Department)...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
-->
                                     </div>
                                     
                                     
									 <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
										<p>
<!--
                                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="width: 100%" type="submit">
                                                Submit
                                            </button>
-->
                                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="width: 100%" name="go_back" type="submit">
                                                    <i class="material-icons" style="float: left; margin-top: 4px">arrow_back</i>
                                            Manage Accounts
                                                </button>
                                            
                                        </p>
									 </div>
									 <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                        <p>
<!--
                                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="width: 100%" type="submit">
                                                Submit
                                            </button>
-->												<input type="hidden" name="user_id" value="<?php echo $_GET['user_id'];?>">
												<input type="hidden" name="account_id" value="<?php echo $_GET['accnt_id'];?>">
                                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="width: 100%" name="approve" type="submit">
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
                                    </div>
                                </ul>
                            </form>

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
	<script type="text/javascript">
    <script src="assets/js/material-modal.js"></script>
    <script src="assets/js/material.min.js"></script>
  </body>
</html>
