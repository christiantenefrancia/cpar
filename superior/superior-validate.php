 <div class="mdl-tabs__panel is-active" id="demo">
<!--              <h1>List of Issues</h1>-->
              <h1>Issues As Of <?php echo date("F j, Y"); ?></h1>

       <div class="mdl-grid">
	   
			<div class="mdl-cell mdl-cell--4-col"></div>
			<div class="mdl-cell mdl-cell--4-col" style="text-align: center">
				<?php require_once('include/superior_validate_answer_reminders.php');?>
			</div>
			<div class="mdl-cell mdl-cell--4-col"></div>
            <div class="mdl-cell mdl-cell--1-col"></div>
            <div class="mdl-cell mdl-cell--11-col">      
      <div class="mdl-grid portfolio-max-width portfolio-contact" style="width: 100%">
                    <div class="mdl-card__supporting-text">

              <!-- Responsive table starts here -->
              <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
              <div class="table-responsive-vertical shadow-z-1">
              <!-- Table starts here -->
			  <h2>Issues sent by Issuers to Approve</h2>
              <table id="table" class="table table-hover table-mc-light-blue">
                  <thead>
                    <tr>
                      <th><b>Date</b></th>
                      <th><b>Time</b></th>
                      <th><b>Issuer</b></th>
                      <th><b>Issue To (Name)</b></th>
                      <th><b>Issue To (Dep't)</b></th>
                      <th><b>Status</b></th>
                      <th><b>Disposition</b></th>
                    </tr>
                  </thead>
                  <tbody>
					<?php require_once('include/superior_list_validate_history.php'); ?>	
                  </tbody>
                </table>
                        </div>
                    <br>
                  <div class="table-responsive-vertical shadow-z-1">
				<h2>Issues Answered sent by Employees to Approve</h2>
				<table id="table" class="table table-hover table-mc-light-blue">
                  <thead>
                    <tr>
                      <th><b>Date</b></th>
                      <th><b>Time</b></th>
                      <th><b>Issuer</b></th>
                      <th><b>Issue To (Name)</b></th>
                      <th><b>Issue To (Dep't)</b></th>
                      <th><b>Status</b></th>
                      <th><b>Disposition</b></th>
                    </tr>
                  </thead>
                  <tbody>
					<?php require_once('include/superior_list_validate_answer_history.php'); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
            </div>
           </div>
            </div>