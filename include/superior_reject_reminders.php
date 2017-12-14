<?php

if(isset($_SESSION['rejection_empty'])) {
    echo $_SESSION['rejection_empty'];
}
if(isset($_SESSION['issue_already_approved'])) {
	echo $_SESSION['issue_already_approved'];
}
if(isset($_SESSION['issue_already_rejected'])) {
	$_SESSION['issue_already_rejected'];
}

unset($_SESSION['rejection_empty']);
unset($_SESSION['issue_already_approved']);
unset($_SESSION['issue_already_rejected']);
?>