<?php
require_once('db_connection');

$sql = "DELETE FROM news WHERE id =".$_GET['id'];
mysql_query($sql);

$res = mysql_query($sql);
$rowData = mysql_fetch_assoc($res);

header('Location:index.php');
?>
