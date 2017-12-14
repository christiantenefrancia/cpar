<?php
	date_default_timezone_set('Asia/Manila');

	$protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';
	$host_name = $_SERVER['HTTP_HOST'];
	$project_folder = 'cpar/';

	define('HTTP_ROOT', $protocol . $host_name . '/' . $project_folder);

	define('INCLUDE_DIR', HTTP_ROOT . 'include/');
	define('CSS_PATH', HTTP_ROOT . 'assets/css/');
	define('JS_PATH', HTTP_ROOT . 'assets/js/');
	define('IMG_PATH', HTTP_ROOT . 'assets/img/');

?>
