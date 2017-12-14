<!doctype html>
<html lang="en">
  <?php include_once('header.php'); ?>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        
      <?php include_once('employee/employee-topbar.php'); ?>
        

<!--
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center" style="background-color: #b3ccff">
-->
         <main class="android-content mdl-layout__content">
             <a name="top"></a>
           <div class="page-content" style="background-color: #b3ccff">
            
          <br>
          <?php include_once('employee/employee-validate.php'); ?>
          <?php include_once('employee/employee-notification.php'); ?>
          <?php include_once('employee/employee-history.php'); ?>
        </div>
       <?php include_once('employee/employee-footer.php'); ?>
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
  </body>
</html>
