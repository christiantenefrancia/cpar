<?php
$sql_stmt = 'SELECT * FROM NTFCTN WHERE NTFCTN_USR_ID='.$_SESSION['usr_id'].' ORDER BY NTFCTN_DT DESC, NTFCTN_TM DESC';
if($sql = mysqli_query($con, $sql_stmt)) {
	while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
		echo '<tr>
				<td>'.date("m/d/Y", strtotime($row['NTFCTN_DT'])).'</td>
				<td>'.date("g:i A", strtotime($row['NTFCTN_TM'])).'</td>
				<td>'.$row['NTFCTN_DSC'].'</td>
			</tr>';
	}
}
?>