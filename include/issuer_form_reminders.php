<?php

if(isset($_SESSION['issuer_name_empty'])) {
    echo $_SESSION['issuer_name_empty']; 
}

if(isset($_SESSION['issuer_dprtmnt_empty'])) {
    echo $_SESSION['issuer_dprtmnt_empty']; 
}

if(isset($_SESSION['issuer_name_to_empty'])) {
    echo $_SESSION['issuer_name_to_empty']; 
}

if(isset($_SESSION['issuer_dprtmnt_to_empty'])) {
    echo $_SESSION['issuer_dprtmnt_to_empty']; 
}

if(isset($_SESSION['issuer_superior_email_empty'])) {
    echo $_SESSION['issuer_superior_email_empty']; 
}

if(isset($_SESSION['issue_source_empty'])) {
    echo $_SESSION['issue_source_empty']; 
}

if(isset($_SESSION['issue_finding_empty'])) {
    echo $_SESSION['issue_finding_empty']; 
}

if(isset($_SESSION['issue_finding_desc_empty'])) {
    echo $_SESSION['issue_finding_desc_empty']; 
}
if(isset($_SESSION['issuer_superior_email_invalid'])) {
	echo $_SESSION['issuer_superior_email_invalid'];
}
if(isset($_SESSION['issuer_superior_not_found'])) {
	echo $_SESSION['issuer_superior_not_found'];
}
if(isset($_SESSION['concern_person_not_found'])) {
	echo $_SESSION['concern_person_not_found'];
}
if(isset($_SESSION['issue_already_existing'])) {
	echo $_SESSION['issue_already_existing'];
}
if(isset($_SESSION['issue_sent_successfully'])) {
	echo $_SESSION['issue_sent_successfully'];
}

unset($_SESSION['issuer_name_empty']);
unset($_SESSION['issuer_dprtmnt_empty']);
unset($_SESSION['issuer_name_to_empty']);
unset($_SESSION['issuer_dprtmnt_to_empty']);
unset($_SESSION['issuer_superior_email_empty']);
unset($_SESSION['issue_source_empty']);
unset($_SESSION['issue_finding_empty']);
unset($_SESSION['issue_finding_desc_empty']);
unset($_SESSION['issuer_superior_email_invalid']);
unset($_SESSION['issuer_superior_not_found']);
unset($_SESSION['concern_person_not_found']);
unset($_SESSION['issue_already_existing']);
unset($_SESSION['issue_sent_successfully']);
?>