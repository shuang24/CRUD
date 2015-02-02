<?php
mysql_connect("localhost","root","123456") or die ("Could not connect to the data base");
mysql_select_db(test_1) or die ("Could not find the database");
echo "you have succesfully connect to database";
?>