  <div class="mdl-tabs__panel is-active" id="demo" style="display: none;">
<!--              <h1>List of Issues</h1>-->
              <h1>History</h1>

       <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--1-col"></div>
            <div class="mdl-cell mdl-cell--11-col">      
      <div class="mdl-grid portfolio-max-width portfolio-contact" style="width: 100%">
                    <div class="mdl-card__supporting-text">
              <!-- Responsive table starts here -->
              <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
              <div class="table-responsive-vertical shadow-z-1">
              <!-- Table starts here -->
              <table id="table" class="table table-hover table-mc-light-blue">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Issuer</th>
                      <th>Issue To (Name)</th>
                      <th>Issue To (Dep't)</th>
                      <th>Disposition</th>
					  <th>Issue Examine</th>
                    </tr>
                  </thead>
                  <tbody>
					<?php require_once('include/superior_list_issue_history.php'); ?>
                  </tbody>
                </table>
              </div>
            </div>
                </div>
    </div>
      </div>
</div>
