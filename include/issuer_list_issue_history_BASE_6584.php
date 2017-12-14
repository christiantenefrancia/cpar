<?php
$sql_stmt = 'SELECT * FROM ISS, USR WHERE ISS.ISS_USR_ISSR_ID = '. $_SESSION['usr_id'] .' AND ISS.ISS_USR_CNCRN_ID=USR.USR_ID ORDER BY ISS.ISS_DT DESC, ISS.ISS_TM DESC';
if($sql = mysqli_query($con, $sql_stmt)) {
	while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
		if (empty($row['ISS_APPRVL_STS'])) {
			$apprvl_sts = 'Pending';
		} else {
			$apprvl_sts = $row['ISS_APPRVL_STS'];
		} // date("m/d/y", strtotime($row['ISS_DT']))
		echo '<tr>
				<td>'.date("m/d/Y", strtotime($row['ISS_DT'])).'</td>
				<td>'.date("g:i A", strtotime($row['ISS_TM'])).'</td>
				<td>'.$_SESSION['usr_nm'].'</td>
				<td>'.$row['USR_NM'].'</td>
				<td>'.$row['USR_DPRTMNT'].'</td>
				<td>'.$apprvl_sts.'</td>
				<td>
				<a href="'. HTTP_ROOT . 'issuer-view-issue.php?'.$row['ISS_ID'].'">
					<button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="width: 100%">
						View
                    </button>
				</a>
				</td>
			</tr>';
	}
}
?>