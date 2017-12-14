<div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="assets/img/cpar-logo.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <!-- Navigation -->
<!--
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Validate CPAR</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Issue CPAR</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href=""><span class="mdl-badge" data-badge="4">Notification</span></a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">History</a>
            </nav>
          </div>
-->
        
        <div class="android-navigation-container">
             <div class="android-navigation mdl-navigation" style="width: 78%;">
              <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                <nav class="mdl-tabs__tab-bar">
                    <a class="mdl-tabs__tab is-active mdl-typography--text-uppercase" href="#demo"><b>Issue CPAR</b></a>    
                    <a class="mdl-tabs__tab mdl-typography--text-uppercase" href="#targaryens-panel" onclick="update_notif(<?php echo $_SESSION['usr_id']; ?>)"><span class="mdl-badge" data-badge="<?php require_once('include/superior_notification.php');?>" id="notif"><b>Notification</b></span></a>
                    <a class="mdl-tabs__tab mdl-typography--text-uppercase" href="#history-panel"><b>History</b></a>
                </nav>
              </div>
            </div>
          </div>
            
<!--
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
              <a class="mdl-tabs__tab is-active mdl-typography--text-uppercase" href="#starks-panel">Validate CPAR</a>
              <a class="mdl-tabs__tab mdl-typography--text-uppercase" href="#lannisters-panel">Issue CPAR</a>
              <a class="mdl-tabs__tab mdl-typography--text-uppercase" href="#targaryens-panel"><span class="mdl-badge" data-badge="4">Notification</span></a>
              <a class="mdl-tabs__tab mdl-typography--text-uppercase" href="#history-panel">History</a>
                
                
                  <a href="#starks-panel" class="mdl-tabs__tab is-active">Starks</a>
                  <a href="#lannisters-panel" class="mdl-tabs__tab">Lannisters</a>
                  <a href="#targaryens-panel" class="mdl-tabs__tab">Targaryens</a>
            </div>
          </div>
-->
            
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="assets/img/cpar-logo.png">
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
			  <a style="text-decoration: none; color: black;" href="<?php echo HTTP_ROOT;?>issuer.php?logout"><li class="mdl-menu__item">Logout</li><a>
<!--            <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>-->
          </ul>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="assets/img/cpar-logo.png">
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="#demo">
              <i class="mdl-icon-toggle__label material-icons">assignment_ind</i>
              Issue CPAR
          </a>
          <a class="mdl-navigation__link" href="#targaryens"> 
              <i class="mdl-icon-toggle__label material-icons">notifications</i>
              Notification
          </a>
          <a class="mdl-navigation__link" href="#history">
               <i class="mdl-icon-toggle__label material-icons">history</i>
               History
          </a>
          <div class="android-drawer-separator"></div>
<!--
          <a class="mdl-navigation__link" href="">
               <i class="mdl-icon-toggle__label material-icons">account_circle</i>
               Manage Accounts
          </a>
-->
          <a class="mdl-navigation__link" href="<?php echo HTTP_ROOT;?>issuer.php?logout">
              <i class="mdl-icon-toggle__label material-icons">power_settings_new</i>
               Logout
          </a>
<!--
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Resources</span>
          <a class="mdl-navigation__link" href="">Official blog</a>
          <a class="mdl-navigation__link" href="">Android on Google+</a>
          <a class="mdl-navigation__link" href="">Android on Twitter</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">For developers</span>
          <a class="mdl-navigation__link" href="">App developer resources</a>
          <a class="mdl-navigation__link" href="">Android Open Source Project</a>
          <a class="mdl-navigation__link" href="">Android SDK</a>
-->
        </nav>
      </div>