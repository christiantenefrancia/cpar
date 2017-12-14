<?php
$issrs_arry = array();
$sql_stmt = 'SELECT * FROM ISS, USR WHERE ISS.ISS_USR_SPR_ID = '. $_SESSION['usr_id'] .' AND ISS.ISS_USR_ISSR_ID=USR.USR_ID ORDER BY ISS.ISS_DT DESC';
if($sql = mysqli_query($con, $sql_stmt)) {
	while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
		$array[] = $row;
	}
}


$sql_stmt = 'SELECT * FROM ISS, USR, ISS_CNCRN WHERE ISS.ISS_USR_SPR_ID = '. $_SESSION['usr_id'] .' AND ISS.ISS_USR_CNCRN_ID=USR.USR_ID AND ISS.ISS_ID=ISS_CNCRN.ISS_CNCRN_ISS_ID ORDER BY ISS.ISS_DT DESC, ISS.ISS_TM DESC';
if($sql = mysqli_query($con, $sql_stmt)) {
	$iter = 0;
	while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
		
		if (empty($row['ISS_APPRVL_STS']) || empty($row['ISS_CNCRN_APPRVL_STS'])) {
			$apprvl_sts = '';
		} else {
			$apprvl_sts = $row['ISS_CNCRN_APPRVL_STS'];
		}
		if ($row['ISS_CNCRN_VLDT_STS'] == 'VALIDATED') {
			$sts = 'Validated';
		} else if ($row['ISS_CNCRN_APPRVL_STS'] == 'Denied') {
			$sts = 'Validated';
		} else if(empty($row['ISS_CPR_NMBR'])) {
			$sts = 'Pending';
		} else{
			$sts = '<a style="color: blue;" href="'.HTTP_ROOT.'superior-validate-answered-cpar.php?issue_id_to_validate='.$row['ISS_ID'].'&issue_concern_id_to_validate='.$row['ISS_CNCRN_ID'].'">Validate</a>';
		}
		echo '<tr>
				<td data-title="Date">'.date("m/d/Y", strtotime($row['ISS_DT'])).'</td>
				<td data-title="Time">'.date("g:i A", strtotime($row['ISS_TM'])).'</td>
				<td data-title="Issuer">'.$array[$iter]['USR_NM'].'</td>
				<td data-title="Issue Name To">'.$row['USR_NM'].'</td>
				<td data-title="Issue Dept To">'.$row['USR_DPRTMNT'].'</td>
				<td data-title="Status">'.$sts.'</td>
				<td data-title="Disposition">'.$apprvl_sts.'</td>
			</tr>';
		$iter++;
	}
}
?>