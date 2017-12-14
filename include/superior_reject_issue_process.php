<?php

require_once('connect/connect.php');

if(isset($_POST['submit'])) {
	if(empty($_POST['reason_for_denial_desc'])) {
		 $_SESSION['rejection_empty'] = '*Reason for Rejection field is empty.';
		 header('location: superior-reject-cpar.php?issue_id_to_reject='.$_POST['issue_to_reject']);
		 exit();
	}
	if($sql = mysqli_query($con, 'SELECT * FROM ISS WHERE ISS_ID = ' . $_POST['issue_to_reject'] . ' AND ISS_APPRVL_STS = "Approved" AND ISS_VLDT_STS = "VALIDATED" LIMIT 1')or die(mysqli_error($con))){
		if($row_cnt = mysqli_num_rows($sql)) {
			$_SESSION['issue_already_approved'] = "*Issue already been approved.";
			header('location: superior-reject-cpar.php?issue_id_to_reject='.$_POST['issue_to_reject']);
			exit();
		}
	}
	if($sql = mysqli_query($con, 'SELECT * FROM ISS WHERE ISS_ID = ' . $_POST['issue_to_reject'] . ' AND ISS_APPRVL_STS = "Denied" AND ISS_VLDT_STS = "" AND ISS_RSN_FR_DNL IS NOT NULL LIMIT 1')or die(mysqli_error($con))){
		if($row_cnt = mysqli_num_rows($sql)) {
			$_SESSION['issue_already_rejected'] = "*Issue already been rejected.";
			header('location: superior-reject-cpar.php?issue_id_to_reject='.$_POST['issue_to_reject']);
			exit();
		}
	}
	
	$reason_for_rejection_desc = test_input($con, $_POST['reason_for_denial_desc']);
	
	if($sql = mysqli_query($con, 'UPDATE ISS SET ISS_RSN_FR_DNL = "'.$reason_for_rejection_desc.'", ISS_APPRVL_STS = "Denied", ISS_VLDT_STS = "" WHERE ISS_ID = ' . $_POST['issue_to_reject'] .'')or die(mysqli_error($con))){
	}
	
	if($sql = mysqli_query($con, 'SELECT * FROM ISS, USR WHERE ISS_ID = ' . $_POST['issue_to_reject'] . ' AND ISS.ISS_USR_ISSR_ID=USR.USR_ID LIMIT 1')) {
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$issr_array[] = $row;
		}
	}
	
	$sql_stmt = 'INSERT INTO NTFCTN
					(NTFCTN_DSC, NTFCTN_STS, NTFCTN_USR_ID, NTFCTN_DT, NTFCTN_TM)
					VALUES ("Your CPAR issue has been rejected by Issuer Superior, '.$_SESSION['usr_nm'].', with the reason of rejection of: '.$reason_for_rejection_desc.'.", "Unread",
					'.$issr_array[0]["USR_ID"].', CURDATE(), CURTIME())';
	echo $sql_stmt;
	if($sql = mysqli_query($con, $sql_stmt)) {
		
		$_SESSION['issue_sent_successfully'] = 'ISSUE CPAR has rejected been successfully.';
		header('location: superior.php');
		exit();
		
	}
}

function test_input($con, $data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = mysqli_real_escape_string($con, $data);
		return $data;
	}
?>