<?php

require_once('connect/connect.php');

if(isset($_GET['issue_concern_to_validate'])) {
	$iss_concern_id = $_GET['issue_concern_to_validate'];
	if($sql = mysqli_query($con, 'SELECT * FROM ISS_CNCRN WHERE ISS_CNCRN_ID = ' . $iss_concern_id . ' LIMIT 1')) {
		if(!$row_cnt = mysqli_num_rows($sql)) {
			header('location: superior.php');
			exit();
		}
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$iss_cncrn_array[] = $row;
		}
	}
}


if(isset($_POST['approve'])) {
	$iss_cncrn_to_approve = $_POST['issue_concern_to_validate'];
	$sql_stmt = 'UPDATE ISS_CNCRN
	SET ISS_CNCRN_APPRVL_STS = "Approved",
	ISS_CNCRN_VLDT_STS = "VALIDATED",
	ISS_CNCRN_DT_APPRVD = CURDATE()
	WHERE ISS_CNCRN_ID = ' . $iss_cncrn_to_approve .'
	LIMIT 1';
	if($sql = mysqli_query($con, $sql_stmt)or die(mysqli_error($sql))) {
	}
	
	$sql_stmt = 'INSERT INTO NTFCTN
					(NTFCTN_DSC, NTFCTN_STS, NTFCTN_USR_ID, NTFCTN_DT, NTFCTN_TM)
					VALUES ("You have approved an answered CPAR Issue ready to be carried out.", "Unread",
					'.$_SESSION['usr_id'].', CURDATE(), CURTIME())';
	echo $sql_stmt;
	if($sql = mysqli_query($con, $sql_stmt) or die(mysqli_error($con))) {
		
		$_SESSION['issue_concern_approved'] = 'ISSUE CPAR has approved been successfully.';
		header('location: superior.php');
		exit();
		
	}
}

if(isset($_POST['reject'])) {
	header('location: superior-reject-answered-cpar.php?issue_concern_to_reject='.$_POST['issue_concern_to_validate']);
	exit();
}
?>