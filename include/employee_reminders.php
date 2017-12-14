<?php

if(isset($_SESSION['issue_answer_successfully'])) {
	echo $_SESSION['issue_answer_successfully'];
}

unset($_SESSION['issue_answer_successfully']);
?>