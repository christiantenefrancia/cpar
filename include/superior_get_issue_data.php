<?php
require_once('connect/connect.php');

/* if(!isset($_GET['issue_id_to_validate'])) {
	header('location: superior.php');
	exit();
} */
if(isset($_GET['issue_id_to_validate'])) {
	if($sql = mysqli_query($con, 'SELECT * FROM ISS, USR WHERE ISS_ID = ' . $_GET['issue_id_to_validate'] . ' AND ISS.ISS_USR_ISSR_ID=USR.USR_ID LIMIT 1')) {
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$issr_array[] = $row;
		}
	}
	if($sql = mysqli_query($con, 'SELECT * FROM ISS, USR WHERE ISS_ID = ' . $_GET['issue_id_to_validate'] . ' AND ISS.ISS_USR_SPR_ID=USR.USR_ID LIMIT 1')) {
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$spr_array[] = $row;
		}
	}
	if($sql = mysqli_query($con, 'SELECT * FROM ISS, USR WHERE ISS_ID = ' . $_GET['issue_id_to_validate'] . ' AND ISS.ISS_USR_CNCRN_ID=USR.USR_ID LIMIT 1')) {
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$cncrn_array[] = $row;
		}
	}
}

$issr_nm = $issr_array[0]["USR_NM"];
$issr_dprtmnt = $issr_array[0]["USR_DPRTMNT"];
$cncrn_nm = $cncrn_array[0]["USR_NM"];
$cncrn_dprtmnt = $cncrn_array[0]["USR_DPRTMNT"];
$spr_eml = $spr_array[0]["USR_EML"];
$iss_src = $issr_array[0]["ISS_SRC"];
$iss_fndng = $issr_array[0]["ISS_FNDNG"];
$iss_fndng_dsc = $issr_array[0]["ISS_FNDNG_DSC"];

if(isset($_POST['approve'])) {
	$issue_id = $_POST['issue_to_validate'];
	if($sql = mysqli_query($con, 'INSERT INTO ISS_CNCRN(ISS_CPR_DT, ISS_CNCRN_ISS_ID) VALUES(NOW(), ' . $issue_id .')')or die(mysqli_error($con))) {
		
	}
	if($sql = mysqli_query($con, 'SELECT * FROM ISS_CNCRN WHERE ISS_CNCRN_ISS_ID = ' . $issue_id . ' LIMIT 1')or die(mysqli_error($con))) {
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$iss_cncrn_id = $row['ISS_CNCRN_ID'];
		}
	}
	if($sql = mysqli_query($con, 'UPDATE ISS SET ISS_APPRVL_STS = "Approved", ISS_VLDT_STS = "VALIDATED", ISS_DT_APPRVD = CURDATE(), ISS_CNCRN_ID = ' . $iss_cncrn_id . ' WHERE ISS_ID = ' . $issue_id  .'')or die(mysqli_error($con))){
	}
	
	$sql_stmt = 'INSERT INTO NTFCTN
					(NTFCTN_DSC, NTFCTN_STS, NTFCTN_USR_ID, NTFCTN_DT, NTFCTN_TM)
					VALUES ("cpar issue has been approved by Issuer Superior, '.$_POST['issuer_superior'].', to be answered.", "Unread",
					'.$_POST['concern_person_id'].', CURDATE(), CURTIME())';
	echo $sql_stmt;
	if($sql = mysqli_query($con, $sql_stmt)) {
		
		$_SESSION['issue_concern_successfully'] = 'ISSUE CPAR has approved been successfully.';
		header('location: superior.php');
		exit();
		
	}
}

if(isset($_POST['reject'])) {
	header('location: superior-reject-cpar.php?issue_id_to_reject='.$_POST['issue_to_validate']);
	exit();
}

if(isset($_POST['proceed'])) {
	header('location: superior-validate-answered-cpar-view.php?issue_concern_to_validate='.$_POST['issue_concern_to_validate']);
	exit();
}

?>