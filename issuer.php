<!doctype html>
<html lang="en">
  <?php
		require_once('header.php');
		require_once('config.php');
		require_once('include/check_session.php');
		require_once('include/check_issuer_form_process.php'); ?>
  <body>
      
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        

      <?php require_once('issuer/issuer-topbar.php'); ?>
<!--
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center" style="background-color: #b3ccff">
-->
         <main class="android-content mdl-layout__content">

           <a name="top"></a>
           <div class="page-content" style="background-color: #b3ccff">
          <br>
		  
		  <?php require_once('issuer/issuer-issue.php'); ?>

          <?php require_once('issuer/issuer-notification.php'); ?>
          <?php require_once('issuer/issuer-history.php'); ?>
        </div>
       <?php require_once('issuer/issuer-footer.php'); ?>
      </main>
    </div>
      
    <script type="text/javascript">
      $(document).ready(function(){
            $(".mdl-tabs__tab-bar a").click(function () {
                $('.mdl-tabs__panel').hide().eq($(this).index()).show();  // hide all divs and show the current div
            });
        });
        
        $(document).ready(function(){
            $(".mdl-navigation a").click(function () {
                $('.mdl-tabs__panel').hide().eq($(this).index()).show();  // hide all divs and show the current div
                $( '.mdl-layout__drawer, .mdl-layout__obfuscator' ).removeClass( 'is-visible' );
            });
        });
        
    </script>
    
    <script src="assets/js/material.min.js"></script>
	<script type="text/javascript">
	function enableInputControls()
	{            
		$('#issuer_name').removeAttr('disabled');
		$('#issuer_dprtmnt').removeAttr('disabled');
	}
        
        function update_notif(id){
    
             $.ajax({
              type: "POST",
               url: "include/superior_notification_update.php",
               data: {
                   user_id: id
               },
               
               success: function(data){
                   $('#notif').removeAttr('data-badge');
                } 
           });
        }
	</script>
  </body>
</html>
