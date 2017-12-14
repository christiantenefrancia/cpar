<?php

require_once('connect/connect.php');

if(isset($_GET['delete_user'])) {
	
	$delete_user_val = test_input($con, $_GET['delete_user']);
	
	if($delete_user_val != 1) {
		header('location: superior-manage-account.php');
		exit();
	}
	
	if(isset($_GET['usr_id'])) {
		if(isset($_GET['accnt_id'])) {
			$usr_id = test_input($con, $_GET['usr_id']);
			$accnt_id = test_input($con, $_GET['accnt_id']);
			$sql_stmt = 'SELECT *
			FROM usr, accnt, accnt_typ
			WHERE usr.USR_ACCNT_ID=accnt.ACCNT_ID
			AND usr.USR_ACCNT_TYP_ID=accnt_typ.ACCNT_TYP_ID
			AND usr.USR_ID='.$usr_id.'
			AND accnt.ACCNT_ID='.$accnt_id.'
			ORDER BY usr.USR_NM ';
			
			if($sql = mysqli_query($con, $sql_stmt)or die(mysqli_error($con))) {
				if(!$row_cnt = mysqli_num_rows($sql)) {
					$_SESSION['user_not_found'] = '*User to be deleted not found.';
					header('location: superior-manage-account.php');
					exit();
				}
			}
			
			$sql_stmt = 'DELETE FROM ACCNT, USR
			USING ACCNT, ACCNT_TYP, USR
			WHERE USR.USR_ACCNT_ID=ACCNT.ACCNT_ID
			AND USR.USR_ACCNT_TYP_ID=ACCNT_TYP.ACCNT_TYP_ID
			AND USR.USR_ID='.$usr_id.'
			AND ACCNT.ACCNT_ID='.$accnt_id;
			
			if($sql = mysqli_query($con, $sql_stmt)or die(mysqli_error($con))) {
				$_SESSION['user_delete_successful'] = 'User has been deleted successfully!';
				header('location: superior-manage-account.php');
				exit();
			}
			
			
		}
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