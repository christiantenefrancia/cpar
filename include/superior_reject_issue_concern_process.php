<?php

require_once('connect/connect.php');


if(isset($_POST['submit'])) {
	$issue_concern_id = $_POST['issue_to_reject'];
	if(empty($_POST['reason_for_denial_desc'])) {
		 $_SESSION['rejection_empty'] = '*Reason for Rejection field is empty.';
		 header('location: superior-reject-answered-cpar.php?issue_concern_to_reject='.$issue_concern_id);
		 exit();
	}
	if($sql = mysqli_query($con, 'SELECT * FROM ISS_CNCRN WHERE ISS_CNCRN_ID = ' . $issue_concern_id . ' AND ISS_CNCRN_APPRVL_STS = "Approved" AND ISS_CNCRN_VLDT_STS = "VALIDATED" LIMIT 1')or die(mysqli_error($con))){
		if($row_cnt = mysqli_num_rows($sql)) {
			$_SESSION['issue_already_approved'] = "*Issue already been approved.";
			header('location: superior-reject-answered-cpar.php?issue_concern_to_reject='.$_POST['issue_to_reject']);
			exit();
		}
	}
	if($sql = mysqli_query($con, 'SELECT * FROM ISS_CNCRN WHERE ISS_CNCRN_ID = ' . $issue_concern_id . ' AND ISS_CNCRN_APPRVL_STS = "Denied" AND ISS_CNCRN_VLDT_STS = "" AND ISS_CNCRN_RSN_FR_DNL IS NOT NULL LIMIT 1')or die(mysqli_error($con))){
		if($row_cnt = mysqli_num_rows($sql)) {
			$_SESSION['issue_already_rejected'] = "*Issue already been rejected.";
			header('location: superior-reject-answered-cpar.php?issue_concern_to_reject='.$_POST['issue_to_reject']);
			exit();
		}
	}
	
	$reason_for_rejection_desc = test_input($con, $_POST['reason_for_denial_desc']);
	
	if($sql = mysqli_query($con, 'UPDATE ISS_CNCRN SET ISS_CNCRN_RSN_FR_DNL = "'.$reason_for_rejection_desc.'", ISS_CNCRN_APPRVL_STS = "Denied", ISS_CNCRN_VLDT_STS = "VALIDATED" WHERE ISS_CNCRN_ID = ' . $issue_concern_id .'')or die(mysqli_error($con))){
	}
	
	if($sql = mysqli_query($con, 'SELECT * FROM ISS, ISS_CNCRN, USR WHERE ISS.ISS_USR_CNCRN_ID=USR.USR_ID AND ISS_CNCRN.ISS_CNCRN_ID = '.$issue_concern_id.' LIMIT 1')) {
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$emp_array[] = $row;
		}
	}
	
	$sql_stmt = 'INSERT INTO NTFCTN
					(NTFCTN_DSC, NTFCTN_STS, NTFCTN_USR_ID, NTFCTN_DT, NTFCTN_TM)
					VALUES ("Your answered CPAR issue has been rejected by Issuer Superior, '.$_SESSION['usr_nm'].', with the reason of rejection of: '.$reason_for_rejection_desc.'.", "Unread",
					'.$emp_array[0]["USR_ID"].', CURDATE(), CURTIME())';
	echo $sql_stmt;
	if($sql = mysqli_query($con, $sql_stmt)) {
		
		$_SESSION['issue_concern_rejected'] = 'ISSUE CPAR has rejected been successfully.';
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