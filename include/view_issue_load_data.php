<?php
require_once('connect/connect.php');

if(isset($_GET['issue_id_to_view'])){
	$iss_id = $_GET['issue_id_to_view'];
	$cpar_no = '';
	$cpar_date = '';
	$root_cause = '';
	$correction = '';
	$correction_action = '';
	$sql_stmt = 'SELECT *
					FROM ISS
					WHERE ISS.ISS_ID = ' . $iss_id . ' LIMIT 1';
	if($sql = mysqli_query($con, $sql_stmt)) {
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
			$iss_apprvl_sts = $row['ISS_APPRVL_STS'];
			$iss_vldt_sts = $row['ISS_VLDT_STS'];
			$iss_rsn_fr_dnl = $row['ISS_RSN_FR_DNL'];
			$iss_emp_id = $row['ISS_CNCRN_ID'];
			$iss_dt_apprvd = $row['ISS_DT_APPRVD'];
			$iss_data[] = $row;
		}
	}
	
	if($iss_apprvl_sts == 'Denied' || $iss_vldt_sts == 'VALIDATE' || empty($iss_vldt_sts) 
		|| !empty($iss_rsn_fr_dnl) || empty($iss_emp_id) || empty($iss_dt_apprvd)) {
			
		$sql_stmt = 'SELECT *
						FROM ISS, USR
						WHERE ISS.ISS_USR_ISSR_ID=USR.USR_ID
						AND ISS.ISS_ID='.$iss_id.' LIMIT 1';
		if($sql = mysqli_query($con, $sql_stmt)) {
			while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
				$issr_data[] = $row;
			}
		}
		$sql_stmt = 'SELECT *
						FROM ISS, USR
						WHERE ISS.ISS_USR_SPR_ID=USR.USR_ID
						AND ISS.ISS_ID='.$iss_id.' LIMIT 1';
		if($sql = mysqli_query($con, $sql_stmt)) {
			while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
				$spr_data[] = $row;
			}
		}
		$sql_stmt = 'SELECT *
						FROM ISS, USR
						WHERE ISS.ISS_USR_CNCRN_ID=USR.USR_ID
						AND ISS.ISS_ID='.$iss_id.' LIMIT 1';
		if($sql = mysqli_query($con, $sql_stmt)) {
			while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
				$emp_data[] = $row;
			}
		}
		
	} else {
		
		$sql_stmt = 'SELECT *
						FROM ISS, ISS_CNCRN, USR
						WHERE ISS.ISS_ID=ISS_CNCRN.ISS_CNCRN_ISS_ID
						AND ISS.ISS_USR_ISSR_ID=USR.USR_ID
						AND ISS.ISS_ID='.$iss_id.' LIMIT 1';
		if($sql = mysqli_query($con, $sql_stmt)) {
			while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
				$cpar_no = $row['ISS_CPR_NMBR'];
				$cpar_date = $row['ISS_CPR_DT'];
				$root_cause = $row['ISS_RT_CSE'];
				$correction = $row['ISS_CRRCTN'];
				$correction_action = $row['ISS_CRRCTN_ACTN'];
				$issr_data[] = $row;
			}
		}
		$sql_stmt = 'SELECT *
						FROM ISS, ISS_CNCRN, USR
						WHERE ISS.ISS_ID=ISS_CNCRN.ISS_CNCRN_ISS_ID
						AND ISS.ISS_USR_SPR_ID=USR.USR_ID
						AND ISS.ISS_ID='.$iss_id.' LIMIT 1';
		if($sql = mysqli_query($con, $sql_stmt)) {
			while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
				$spr_data[] = $row;
			}
		}
		$sql_stmt = 'SELECT *
						FROM ISS, ISS_CNCRN, USR
						WHERE ISS.ISS_ID=ISS_CNCRN.ISS_CNCRN_ISS_ID
						AND ISS.ISS_USR_CNCRN_ID=USR.USR_ID
						AND ISS.ISS_ID='.$iss_id.' LIMIT 1';
		if($sql = mysqli_query($con, $sql_stmt)) {
			while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
				$emp_data[] = $row;
			}
		}
		
	}
	
	
}
?>