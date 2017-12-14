<!doctype html>
<html lang="en">
  <?php include_once('header.php'); 
		require_once('config.php');
		require_once('include/check_session.php');
		require_once('include/superior_delete_user_process.php');
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
              <h1>Manage Accounts</h1>
			 <div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col"></div>
				<div class="mdl-cell mdl-cell--4-col" style="text-align: center">
					<?php require_once('include/superior_manage_accounts_reminders.php');?>
				</div>
				<div class="mdl-cell mdl-cell--4-col"></div>
			 </div>
       <div class="mdl-grid">

			  
            <div class="mdl-cell mdl-cell--1-col"></div>
            <div class="mdl-cell mdl-cell--11-col">    
               <div class="mdl-grid portfolio-max-width portfolio-contact" style="width: 100%">
                    <div class="mdl-card__supporting-text">
                        
                         <a href="" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored modal__trigger" data-modal="#modal" style="width: 15%">
                <i class="material-icons" style="float: left; margin-top: 4px">perm_identity</i>
                <span>Add User</span>
              </a>
                        
              <?php include_once('add-user-modal.php'); ?>
              <?php include_once('delete-user-modal.php'); ?>
              <?php include_once('edit-user-modal.php'); ?>
                        <br>
                        <br>
				
              <!-- Responsive table starts here -->
              <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
              <div class="table-responsive-vertical shadow-z-1">
              <!-- Table starts here -->
              <table id="table" class="table table-hover table-mc-light-blue">
                  <thead>
                    <tr>
                      <th><b>Name</b></th>
                      <th><b>Department</b></th>
                      <th><b>Type</b></th>
                      <th><b>Delete Action</b></th>
                      <th><b>Edit Action</b></th>
                    </tr>
                  </thead>
                  <tbody> 
					<?php require_once('include/superior_list_manage_accounts.php');?>
                  </tbody>
                </table>
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
	<script type="text/javascript">
	function delete_user(e) {
		if(!confirm('Are you sure you want to delete this user?'))e.preventDefault();
	}
	</script>
    <script src="assets/js/material-modal.js"></script>
    <script src="assets/js/material.min.js"></script>
  </body>
</html>
