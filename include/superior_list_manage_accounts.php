<?php
$sql_stmt ='SELECT * FROM usr, accnt, accnt_typ WHERE usr.USR_ACCNT_ID=accnt.ACCNT_ID AND usr.USR_ACCNT_TYP_ID=accnt_typ.ACCNT_TYP_ID ORDER BY usr.USR_NM';
if($sql = mysqli_query($con, $sql_stmt)) {
	while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
		if($row['ACCNT_TYP_NM'] == 'SUPERIOR') {
			$type = 'Issuer Superior';
		} else if ($row['ACCNT_TYP_NM'] == 'ISSUER') {
			$type = 'Issuer';
		} else if ($row['ACCNT_TYP_NM'] == 'CONCERN') {
			$type = 'Employee';
		} else {
			$type = 'Administrator';
		}
        
		echo '<tr>
                      <td data-title="Date">'.$row['USR_NM'].'</td>
                      <td data-title="Time">'.$row['USR_DPRTMNT'].'</td>
                        <td data-title="Issuer">'.$type.'</td>
                        <td data-title="Issuer" style="text-align: center">
                               <a href="" class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect modal__trigger" data-modal="#delete" id="ID'.$row['USR_ID'].'">
                                          <i class="material-icons" style="color: gray;">delete</i>
                                </a>
                           </td>

                            <td data-title="Issuer" style="text-align: center">
                            <a href="' . HTTP_ROOT . 'superior-edit-account.php?edit_user=1&usr_id='.$row['USR_ID'].'&accnt_id='.$row['ACCNT_ID'].'" class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect modal__trigger" data-modal="#edit" id="more-button">
                                          <i class="material-icons" style="color: gray;">mode_edit</i>
                                    </a>
                               </td>
                    </tr>';
	}
}
?>