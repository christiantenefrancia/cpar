<?php

require_once('connect/connect.php');

$cpar_no = '';
$cpar_date = '';
$iss_dt_apprvd = '';
$audit = '';
$audit_code = '';
$dprtmnt_code = '';
$prev_series_nmbr = 0;
$emp_dprtmnt = $_SESSION['usr_dprtmnt'];

if($sql = mysqli_query($con, 'SELECT * FROM ISS WHERE ISS_ID='.$_GET['issue_id_to_answer'].' LIMIT 1')) {
		if(!$row_cnt = mysqli_num_rows($sql)) {
			header('location: employee.php');
			exit();
		}
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$iss_dt_apprvd = date_create_from_format('Y-m-d', $row['ISS_DT_APPRVD']);
			$date = date_create_from_format('Y-m-d', $row['ISS_DT_APPRVD']);
			$date = date_format($date, 'd-m-Y');
			$cpar_date = $date;
			$date = date_create_from_format('Y-m-d', $row['ISS_DT_APPRVD']);
			$date = date_format($date, 'y');
			$cpar_no = $date;
			$date = date_create_from_format('Y-m-d', $row['ISS_DT_APPRVD']);
			$date = date_format($date, 'm');
			$cpar_no = $cpar_no.$date;
			$audit = $row['ISS_SRC'];
		}
}

// convert audit description to audit code
switch($audit) {
	case "1st Party Audit":
		$audit_code = 'PA';
		break;
	case "2nd Party Audit":
		$audit_code = 'PA';
		break;
	case "3rd Party Audit":
		$audit_cod = 'PA';
		break;
	case "Customer Survey":
		$audit_code = 'CS';
		break;
	case "Customer Complaint/Feedback":
		$audit_code = 'CC';
		break;
	case "Unmet Goal":
		$audit_code = 'UG';
		break;
	case "Request for Disposition/Inaction":
		$audit_code = 'RD';
		break;
	case 'External Audit':
		$audit_code = 'EA';
		break;
	case 'Principal Audit':
		$audit_code = 'PA';
		break;
	case 'Internal Audit':
		$audit_code = 'TA';
		break;
	case 'Customer Complaint':
		$audit_code = 'CC';
		break;
	case 'Subcon Audit':
		$audit_code = 'SA';
		break;
	case 'Internal ISO':
		$audit_code = 'IA';
		break;
	case 'GMP Survey':
		$audit_code = 'GS';
		break;
}

$cpar_no = $audit_code . '-' . $cpar_no;

// convert deparment description to department coe
switch($emp_dprtmnt) {
	case 'LAPD':
		$dprtmnt_code = 'LS';
		break;
	case 'Purchasing':
		$dprtmnt_code = 'PU';
		break;
	case 'HR':
		$dprmnt_code = 'HR';
		break;
	case 'RTD':
		$dprtmnt_code = 'RT';
		break;
	case 'IT':
		$dprtmnt_code = 'IT';
		break;
	case 'Maintenance':
		$dprtmnt_code = 'MT';
		break;
	case 'Information Communication and Technology':
		$dprtmnt_code = 'IT';
		break;
	case 'Credit and Collection':
		$dprtmnt_code = 'CC';
		break;
	case 'Marketing Communications':
		$dprtmnt_code = 'MC';
		break;
	case 'Legal and Corporate Affairs':
		$dprtmnt_code = 'LG';
		break;
	case 'Family and Crew Services':
		$dprtmnt_code = 'FC';
		break;
	case 'Accounting':
		$dprtmnt_code = 'AC';
		break;
	case 'Treasury':
		$dprtmnt_code = 'TR';
		break;
	case 'Human Resources':
		$dprtmnt_code = 'HR';
		break;
	case 'Building Adminstration':
		$dprtmnt_code = 'BA';
		break;
	case 'General Services':
		$dprtmnt_code = 'GS';
		break;
	case 'Security':
		$dprtmnt_code = 'SE';
		break;
	case 'Crewing Operations':
		$dprtmnt_code = 'CO';
		break;
	case 'Licensing and Processing Department':
		$dprtmnt_code = 'LD';
		break;
	
}

$cpar_no = $cpar_no.'-'.$dprtmnt_code;

if($sql = mysqli_query($con, 'SELECT ISS_CPR_NMBR FROM ISS_CNCRN WHERE ISS_CPR_NMBR LIKE "%'.$cpar_no.'%" ORDER BY ISS_CPR_NMBR DESC LIMIT 1')or die(mysqli_error($con))) {
	if(!$row_cnt = mysqli_num_rows($sql)) {
		$cpar_no = $cpar_no .'01';
	} else {
		while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$cpar_prev_series_no = $row['ISS_CPR_NMBR'];
			$prev_series_nmbr = (int)substr($cpar_prev_series_no, -2);
			$prev_series_nmbr += 1;
			$string_series_nmbr = (string)$prev_series_nmbr;
			if(strlen($string_series_nmbr) > 1) {
				$cpar_no = $cpar_no . $string_series_nmbr;
			} else {
				$cpar_no = $cpar_no . '0' . $string_series_nmbr;
				$cpar_no = test_input($con, $cpar_no);
			}
		}
	}
}


if(isset($_POST['submit'])) {
	
	if(empty($_POST['cpar_no'])) {
		 $_SESSION['cpar_no_empty'] = '*CPAR No field is empty.';
		 header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
		 exit();
	}
	if(empty($_POST['cpar_date'])) {
		 $_SESSION['cpar_date_empty'] = '*CPAR Date field is empty.';
		 header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
		 exit();
	}
	if(empty($_POST['cpar_date'])) {
		 $_SESSION['cpar_date_empty'] = '*CPAR Date field is empty.';
		 header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
		 exit();
	}
	if(empty($_POST['root_cause'])) {
		 $_SESSION['root_cause_empty'] = '*Root Cause field is empty.';
		 header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
		 exit();
	}
	if(empty($_POST['correction'])) {
		 $_SESSION['correction_empty'] = '*Correction field is empty.';
		 header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
		 exit();
	}
	if(empty($_POST['correction_action'])) {
		 $_SESSION['correction_action_empty'] = '*Correction Action field is empty.';
		 header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
		 exit();
	}
	
	
	if($sql = mysqli_query($con, 'SELECT * FROM ISS WHERE ISS_ID = ' . $_POST['issue_to_answer'] . ' AND ISS_APPRVL_STS = "Denied" AND ISS_VLDT_STS = "" AND ISS_RSN_FR_DNL IS NOT NULL LIMIT 1')or die(mysqli_error($con))){
		if($row_cnt = mysqli_num_rows($sql)) {
			$_SESSION['issue_already_rejected'] = "*Issue already been rejected.";
			header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
			exit();
		}
	}
	$sql_stmt = 'SELECT *
				 FROM ISS, ISS_CNCRN
				 WHERE ISS.ISS_ID = ISS_CNCRN.ISS_CNCRN_ISS_ID
				 AND ISS.ISS_ID = '.$_POST['issue_to_answer'].'
				 AND ISS.ISS_APPRVL_STS = "Approved"
				 AND ISS.ISS_VLDT_STS = "VALIDATED"
				 AND ISS_CNCRN.ISS_CNCRN_APPRVL_STS = "Approved"
				 AND ISS_CNCRN.ISS_CNCRN_VLDT_STS = "VALIDATED"
				 LIMIT 1';
	if($sql = mysqli_query($con, $sql_stmt)or die(mysqli_error($con))) {
		if($row_cnt = mysqli_num_rows($sql)){
			$_SESSION['issue_concern_already_approved'] = "*Issue concern already been approved.";
			header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
			exit();
		}
	}
	$sql_stmt = 'SELECT *
				 FROM ISS, ISS_CNCRN
				 WHERE ISS.ISS_ID = ISS_CNCRN.ISS_CNCRN_ISS_ID
				 AND ISS.ISS_ID = '.$_POST['issue_to_answer'].'
				 AND ISS.ISS_APPRVL_STS = "Approved"
				 AND ISS.ISS_VLDT_STS = "VALIDATED"
				 AND ISS_CNCRN.ISS_CNCRN_APPRVL_STS = "Denied"
				 AND ISS_CNCRN.ISS_CNCRN_VLDT_STS = ""
				 AND ISS_CNCRN.ISS_CNCRN_RSN_FR_DNL IS NOT NULL
				 LIMIT 1';
	if($sql = mysqli_query($con, $sql_stmt)or die(mysqli_error($con))) {
		if($row_cnt = mysqli_num_rows($sql)){
			$_SESSION['issue_concern_already_rejected'] = "*Issue concern already been rejected.";
			header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
			exit();	
		}
	}
	
	$root_cause = test_input($con, $_POST['root_cause']);
	$correction = test_input($con, $_POST['correction']);
	$correction_action = test_input($con, $_POST['correction_action']);
	
	$sql_stmt = 'UPDATE ISS, ISS_CNCRN
				SET ISS_CNCRN.ISS_CPR_NMBR = "' . $cpar_no . '" 
					, ISS_CNCRN.ISS_RT_CSE = "' . $root_cause . '" 
					, ISS_CNCRN.ISS_CRRCTN = "'. $correction . '"
					, ISS_CNCRN.ISS_CRRCTN_ACTN = "' . $correction_action . '"
					, ISS_CNCRN.ISS_CNCRN_APPRVL_STS = ""
					, ISS_CNCRN.ISS_CNCRN_VLDT_STS = "VALIDATE"
					, ISS_CNCRN.ISS_CNCRN_CMPLTN_DT = CURDATE()
				WHERE ISS.ISS_ID = ISS_CNCRN.ISS_CNCRN_ISS_ID
				AND ISS.ISS_ID = ' . $_POST['issue_to_answer'];
	if($sql = mysqli_query($con, $sql_stmt)or die(mysqli_error($con))) {
		
	}
	
	if($sql = mysqli_query($con, 'SELECT * FROM ISS, USR WHERE ISS_ID = ' . $_POST['issue_to_answer'] . ' AND ISS.ISS_USR_SPR_ID=USR.USR_ID LIMIT 1')) {
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$spr_array[] = $row;
		}
	}
	
	$sql_stmt = 'INSERT INTO NTFCTN
					(NTFCTN_DSC, NTFCTN_STS, NTFCTN_USR_ID, NTFCTN_DT, NTFCTN_TM)
					VALUES ("CPAR issue has been sent to you by Employee, '.$_SESSION['usr_nm'].', to be validated.", "Unread",
					'.$spr_array[0]["USR_ID"].', CURDATE(), CURTIME())';
					
	if($sql = mysqli_query($con, $sql_stmt)or die(mysqli_error($con))) {
		
		$_SESSION['issue_answer_successfully'] = '*ISSUE CPAR has been answered successfully and sent for approval.';
		header('location: employee.php');
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