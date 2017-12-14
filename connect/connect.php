<?php
$con = mysqli_connect("localhost", "root", "asdf", "cpar");

if(!$con) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging Error: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging Error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

// echo "Success: proper connection to MySQL was made! The my_db database is great. <br/ >" . PHP_EOL;
// echo "Host information: " .mysqli_get_host_info($con) . "<br />" .  PHP_EOL;

// mysqli_close($con);
?>
