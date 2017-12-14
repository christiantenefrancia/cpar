<?php
require_once('connect/connect.php');

/* if(!isset($_GET['issue_id_to_validate'])) {
	header('location: superior.php');
	exit();
} */
if(isset($_GET['issue_id_to_answer'])) {
	if($sql = mysqli_query($con, 'SELECT * FROM ISS, USR WHERE ISS_ID = ' . $_GET['issue_id_to_answer'] . ' AND ISS.ISS_USR_ISSR_ID=USR.USR_ID LIMIT 1')) {
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$issr_array[] = $row;
		}
	}
	if($sql = mysqli_query($con, 'SELECT * FROM ISS, USR WHERE ISS_ID = ' . $_GET['issue_id_to_answer'] . ' AND ISS.ISS_USR_SPR_ID=USR.USR_ID LIMIT 1')) {
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$spr_array[] = $row;
		}
	}
	if($sql = mysqli_query($con, 'SELECT * FROM ISS, USR WHERE ISS_ID = ' . $_GET['issue_id_to_answer'] . ' AND ISS.ISS_USR_CNCRN_ID=USR.USR_ID LIMIT 1')) {
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

if(isset($_POST['submit'])) {
	header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
	exit();
}

?>