<?php
if(isset($_SESSION['user_not_found'])) {
	echo $_SESSION['user_not_found'];
}
if(isset($_SESSION['user_delete_successful'])){
	echo $_SESSION['user_delete_successful'];
}

unset($_SESSION['user_not_found']);
unset($_SESSION['user_delete_successful']);
?>