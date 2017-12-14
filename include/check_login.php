<?php
session_start();
require_once('connect/connect.php');
if(isset($_SESSION['acct_id']) && isset($_SESSION['acct_username']) && isset($_SESSION['acct_password'])) {
    header('location: index.php');
    exit();
}

if(isset($_POST['username']) && isset($_POST['password'])) {

    if(empty($_POST['username'])) {
        $_SESSION['username_empty'] = 'Username field is empty.<br />';
        header('location: login.php');
        exit();
    }

    if(empty($_POST['password'])) {
        $_SESSION['password_empty'] = 'Password field is empty.<br />';
        header('location: login.php');
        exit();
    }

  
    if(filter_var($_POST['username'], FILTER_VALIDATE_EMAIL) == false){
			$_SESSION['invalid_email'] = 'Invalid Username';
			header('location: login.php');
			exit();	
	}
    
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    if($sql = mysqli_query($con, 'SELECT * FROM ACCNT WHERE ACCNT_USR_NM = "' . $username . '" AND ACCNT_PSSWD = "' . $password . '" LIMIT 1')) {
        $row_cnt = mysqli_num_rows($sql);
        if($row_cnt == 0) {
            $_SESSION['account_notfound'] = 'Invalid user credentials.';
			mysqli_free_result($sql);
			mysqli_close($con);
			header('location: login.php');
			exit();	
        }
        while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            $id = $row['ACCNT_ID'];
        }
	
        $_SESSION['acct_id'] = $id;
        $_SESSION['acct_username'] = $username;
        $_SESSION['acct_password'] = $password;
		if($sql = mysqli_query($con, 'SELECT * FROM USR WHERE USR_ACCNT_ID = ' . $id . ' LIMIT 1')) {
			$row_cnt = mysqli_num_rows($sql);
			if($row_cnt == 0) {
				$_SESSION['account_notfound'] = 'Invalid user credentials.';
				mysqli_free_result($sql);
				mysqli_close($con);
				header('location: login.php');
				exit();	
			}
			
			while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
				$usr_id = $row['USR_ID'];
				$usr_nm = $row['USR_NM'];
				$usr_dpt = $row['USR_DPRTMNT'];
				$usr_accnt_typ_id = $row['USR_ACCNT_TYP_ID'];
			}
			
			$_SESSION['usr_id'] = $usr_id;
			$_SESSION['usr_nm'] = $usr_nm;
			$_SESSION['usr_dprtmnt'] = $usr_dpt;
			$_SESSION['usr_accnt_typ_id'] = $usr_accnt_typ_id;
			mysqli_free_result($sql);
			mysqli_close($con);
			header('location: index.php');
			exit();
		}
        

    } 
    

}
?>