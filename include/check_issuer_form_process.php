<?php
/* echo '<pre>';
echo print_r($_POST);
echo '</pre>'; */

if(isset($_POST['submit'])) {
	if(empty($_POST['issuer_name'])) {
		 $_SESSION['issuer_name_empty'] = '*Issuer Name field is empty.';
		 header('location: issuer.php');
		 exit();
	}
	if(empty($_POST['issuer_dprtmnt'])) {
		$_SESSION['issuer_dprtmnt'] = '*Issuer Department field is empty.';
		header('location: issuer.php');
		exit();
	}
	if(empty($_POST['issue_to_name'])) {
		$_SESSION['issuer_name_to_empty'] = '*Issue To Name field is empty.';
		header('location: issuer.php');
		exit();
	}
	if(empty($_POST['issue_to_dprtmnt'])) {
		$_SESSION['issuer_dprtmnt_to_empty'] = '*Issue to Department field is empty.';
		header('location: issuer.php');
		exit();
	}
	if(empty($_POST['superior_email'])) {
		$_SESSION['issuer_superior_email_empty'] = '*Issuer Superior Email field is empty.';
		header('location: issuer.php');
		exit();
	}
	if(!filter_var($_POST['superior_email'], FILTER_VALIDATE_EMAIL)) {
		$_SESSION['issuer_superior_email_invalid'] = '*Issuer Superior Email field is invalid.';
		header('location: issuer.php');
		exit();
	}
	if(empty($_POST['issue_source'])) {
		$_SESSION['issue_source_empty'] = '*Issue Source field is empty.';
		header('location: issuer.php');
		exit();
	}
	if(empty($_POST['issue_finding'])) {
		$_SESSION['issue_finding_empty'] = '*Issue Finding field is empty.';
		header('location: issuer.php');
		exit();
	}
	if(empty($_POST['issue_finding_desc'])) {
		$_SESSION['issue_finding_desc_empty'] = '*Description of Finding problem field is empty.';
		header('location: issuer.php');
		exit();
	}
	
	$issuer_name = test_input($con, $_POST['issuer_name']);
	$issuer_dprtmnt = test_input($con, $_POST['issuer_dprtmnt']);
	$issue_name_to = test_input($con, $_POST['issue_to_name']);
	$issue_dprtmnt_to = test_input($con, $_POST['issue_to_dprtmnt']);
	$issuer_superior_email = test_input($con, $_POST['superior_email']);
	$issue_source = test_input($con, $_POST['issue_source']);
	$issue_finding = test_input($con, $_POST['issue_finding']);
	$issue_finding_desc = test_input($con, $_POST['issue_finding_desc']);
	
	
	if($sql = mysqli_query($con, 'SELECT * FROM USR WHERE USR_NM = "' . $issue_name_to . '" AND USR_DPRTMNT = "' . $issue_dprtmnt_to . '" LIMIT 1')) {
		if(!$row_cnt = mysqli_num_rows($sql)) {
			$_SESSION['concern_person_not_found'] = '*Concern Person does not exist.<br />Input an existing one with its correct name and department.';
			mysqli_free_result($sql);
			mysqli_close($con);
			header('location: issuer.php');
			exit();
		}
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
			$concern_person_id = $row['USR_ID'];
		}
	}
	
	if($sql = mysqli_query($con, 'SELECT * FROM USR WHERE USR_EML = "' . $issuer_superior_email . '" LIMIT 1')) {
		if(!$row_cnt = mysqli_num_rows($sql)) {
			$_SESSION['issuer_superior_not_found'] = '*Issuer Superior does not exist.<br/>Input an existing one with its correct email address.';
			mysqli_free_result($sql);
			mysqli_close($con);
			header('location: issuer.php');
			exit();
		}
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
			$issuer_superior_id = $row['USR_ID'];
		}
	}
	
	$issuer_id = $_SESSION['usr_id'];
	
	if($sql = mysqli_query($con, 'SELECT * FROM ISS WHERE ISS_SRC = "' . $issue_source . '" 
		AND ISS_FNDNG = "' . $issue_finding . '" AND ISS_FNDNG_DSC = "' . $issue_finding_desc . '" 
		AND ISS_USR_ISSR_ID = ' . $issuer_id . ' AND ISS_USR_SPR_ID = ' . $issuer_superior_id . ' 
		AND ISS_USR_CNCRN_ID = ' . $concern_person_id . ' LIMIT 1')) {
		if($row_cnt = mysqli_num_rows($sql)) {
			$_SESSION['issue_already_existing'] = '*Issue already exists.';
			mysqli_free_result($sql);
			mysqli_close($con);
			header('location: issuer.php');
			exit();
		}
	}
	
	if($sql = mysqli_query($con, 'INSERT INTO ISS (ISS_SRC, ISS_FNDNG, ISS_FNDNG_DSC, ISS_APPRVL_STS,
		ISS_VLDT_STS, ISS_DT, ISS_TM, ISS_USR_ISSR_ID, ISS_USR_SPR_ID, ISS_USR_CNCRN_ID, ISS_DT_CRTD, ISS_DT_APPRVD)
		VALUES("'.$issue_source.'", "'.$issue_finding.'", "'.$issue_finding_desc.'", NULL,
		"VALIDATE",CURDATE(), CURTIME(), '.$issuer_id.', '.$issuer_superior_id.', '.$concern_person_id.', NOW(), NULL)')) {
		
	}
	
	$sql_stmt = 'INSERT INTO NTFCTN
					(NTFCTN_DSC, NTFCTN_STS, NTFCTN_USR_ID, NTFCTN_DT, NTFCTN_TM)
					VALUES ("New cpar issue has been sent to you by issuer, '.$issuer_name.', to be validated.", "Unread",
					'.$issuer_superior_id.', CURDATE(), CURTIME())';
	
	
	
	if($sql = mysqli_query($con, $sql_stmt)) {
		
		$_SESSION['issue_sent_successfully'] = 'ISSUE CPAR has been successfully sent.';
		mysqli_free_result($sql);
		mysqli_close($con);
		header('location: issuer.php');
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