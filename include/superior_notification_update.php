<?php

include('../connect/connect.php');

$id = $_POST['user_id'];

$sql_stmt = 'UPDATE ntfctn a SET a.NTFCTN_STS = "Read" WHERE a.NTFCTN_USR_ID = '.$id;

$result = mysqli_query($con, $sql_stmt);

echo $id;

?>