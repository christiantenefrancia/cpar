<?php
$sql_stmt = 'SELECT * FROM ISS, USR WHERE ISS.ISS_USR_CNCRN_ID = '. $_SESSION['usr_id'] .' AND ISS.ISS_USR_ISSR_ID=USR.USR_ID ORDER BY ISS.ISS_DT DESC, ISS.ISS_TM DESC';
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
				<td>'.$row['USR_NM'].'</td>
				<td>'.$_SESSION['usr_nm'].'</td>
				<td>'.$_SESSION['usr_dprtmnt'].'</td>
				<td>'.$apprvl_sts.'</td>
				<td style="text-align: center">
					<a href="'. HTTP_ROOT . 'employee-view-issue.php?issue_id_to_view='.$row['ISS_ID'].'">
						<button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                              <i class="material-icons" style="color: gray;">assessment</i>
                                          </button>
					</a>
				</td>
			</tr>';
	}
}
?>