<?php
session_start();
if(!isset($_SESSION['acct_username'])) {
    header('location: login.php');
    exit();
} 


if (isset($_SESSION['usr_accnt_typ_id'])) {
	
	switch($_SESSION['usr_accnt_typ_id']) {
		
		case 1:
			if($_SERVER['PHP_SELF'] == '/cpar/superior.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-validate-cpar.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-reject-cpar.php' ||
            $_SERVER['PHP_SELF'] == '/cpar/superior-manage-department.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-manage-account.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-view-issue.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-edit-account.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-validate-answered-cpar.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-validate-answered-cpar-view.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-reject-answered-cpar.php') {
				break;
			}
			header('location: superior.php');
			exit();
		case 2:
			if($_SERVER['PHP_SELF'] == '/cpar/employee.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/employee-answer-cpar.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/employee-respond-cpar.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/employee-view-issue.php') {
				break;
			}
			header('location: employee.php');
			exit();
		case 3:
			if($_SERVER['PHP_SELF'] == '/cpar/issuer.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/issuer-view-issue.php') {
				break;
			}
			header('location: issuer.php');
			exit();
		case 4:
			if($_SERVER['PHP_SELF'] == '/cpar/superior.php') {
				break;
			}
			header('location: superior.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-validate-cpar.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-reject-cpar.php' ||
            $_SERVER['PHP_SELF'] == '/cpar/superior-manage-department.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-manage-account.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-view-issue.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-edit-account.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-validate-answered-cpar.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-validate-answered-cpar-view.php' ||
			$_SERVER['PHP_SELF'] == '/cpar/superior-reject-answered-cpar.php');
			exit();
	}
		
}

// logging out
if (isset($_GET['logout'])) {
    unset($_SESSION['acct_username']);
    unset($_SESSION['acct_password']);
    unset($_SESSION['acct_id']);
	unset($_SESSION['usr_id']);
	unset($_SESSION['usr_nm']);
	unset($_SESSION['usr_dprtmnt']);
	unset($_SESSION['usr_accnt_typ_id']);
    $_SESSION['success_logout'] = 'You have logged out.';
    header('location: login.php');
    exit();
}

// check if credentials are the same as in the database
require_once('connect/connect.php');

$username = $_SESSION['acct_username'];
$password = $_SESSION['acct_password'];
$id = $_SESSION['acct_id'];

if($sql = mysqli_query($con, 'SELECT * FROM ACCNT WHERE ACCNT_ID = ' . $id . ' AND ACCNT_USR_NM = "' . $username . '" AND ACCNT_PSSWD = "'. $password . '"')) {
    $row_cnt = mysqli_num_rows($sql);
    if ($row_cnt == 0) {
        $_SESSION['user_notmatch'] = 'Your login session data is not on the record in the database';
		mysqli_free_result($sql);
		mysqli_close($con);
        header('location: login.php');
        exit();
    }
}


/* echo '<pre>';
echo print_r($_SESSION);
echo '</pre>';  */
?>