<?php
DEFINE (DB_USER, 'op');
DEFINE (DB_PASSWORD, '1elizabeth');
DEFINE (DB_HOST, 'localhost');
DEFINE (DB_NAME,"c_info");
$dbc = @mysqli_connect(DB_USER, DB_PASSWORD, DB_HOST, DB_NAME)
OR die('Could not Connect to Mysql'.
        mysqli_connect_error());
?>
