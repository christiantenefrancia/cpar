<?php

if(isset($_SESSION['issue_concern_approved'])) {
	echo $_SESSION['issue_concern_approved'];
}
if(isset($_SESSION['issue_concern_rejected'])) {
	echo $_SESSION['issue_concern rejected'];
}

unset($_SESSION['issue_concern_approved']);
unset($_SESSION['issue_concern_rejected']);
?>