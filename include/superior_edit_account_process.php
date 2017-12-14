<?php

require_once('connect/connect.php');

if(isset($_GET['edit_user'])) {
	$edit_user_val = $_GET['edit_user'];
	if($edit_user_val != 1) {
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
					$_SESSION['user_not_found'] = '*User to be edited not found.';
					header('location: superior-manage-account.php');
					exit();
				}
				while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
					
				}
			}
			
		}
	}
}

if(isset($_POST['go_back']))  {
	header('location: superior-manage-account.php');
	exit();
}



function test_input($con, $data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = mysqli_real_escape_string($con, $data);
		return $data;
}
?>