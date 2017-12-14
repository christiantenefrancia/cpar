<?php
$sql_stmt = 'SELECT COUNT(NTFCTN_ID) from ntfctn a WHERE a.NTFCTN_USR_ID = '. $_SESSION['usr_id'].' and a.NTFCTN_STS = "Unread" LIMIT 1';

$result = mysqli_query($con, $sql_stmt);

$row = $result->fetch_row();

echo $row[0];

//if($sql = mysqli_query($con, $sql_stmt)) {
//	while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
//		if (empty($row['ISS_APPRVL_STS'])) {
//			$apprvl_sts = 'Pending';
//		} else {
//			$apprvl_sts = $row['ISS_APPRVL_STS'];
//		} // date("m/d/y", strtotime($row['ISS_DT']))
//		echo '<tr>
//				<td data-title="Date">'.date("m/d/Y", strtotime($row['ISS_DT'])).'</td>
//				<td data-title="Time">'.date("g:i A", strtotime($row['ISS_TM'])).'</td>
//				<td data-title="Issuer">'.$_SESSION['usr_nm'].'</td>
//				<td data-title="Issue Name To">'.$row['USR_NM'].'</td>
//				<td data-title="Issue Department To">'.$row['USR_DPRTMNT'].'</td>
//				<td data-title="Disposition">'.$apprvl_sts.'</td>
//			</tr>';
//	}
//}
?>