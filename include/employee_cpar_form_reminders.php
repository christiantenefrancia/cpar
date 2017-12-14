<?php

if(isset($_SESSION['cpar_no_empty'])) {
    echo $_SESSION['cpar_no_empty'];
}
if(isset($_SESSION['cpar_date_empty'])) {
    echo $_SESSION['cpar_date_empty'];
}
if(isset($_SESSION['root_cause_empty'])) {
    echo $_SESSION['root_cause_empty'];
}
if(isset($_SESSION['correction_empty'])) {
    echo $_SESSION['correction_empty'];
}
if(isset($_SESSION['correction_action_empty'])) {
    echo $_SESSION['correction_action_empty'];
}
if(isset($_SESSION['issue_already_rejected'])) {
	echo $_SESSION['issue_already_rejected'];
}
if(isset($_SESSION['issue_concern_already_rejected'])){
	echo $_SESSION['issue_concern_already_rejected'];
}
if(isset($_SESSION['issue_concern_already_rejected'])){
	echo $_SESSION['issue_concern_already_rejected'];
}


unset($_SESSION['cpar_no_empty']);
unset($_SESSION['cpar_date_empty']);
unset($_SESSION['root_cause_empty']);
unset($_SESSION['correction_empty']);
unset($_SESSION['correction_action_empty']);
unset($_SESSION['issue_already_rejected']);
unset($_SESSION['issue_concern_already_rejected']);
unset($_SESSION['issue_concern_already_rejected']);
?>