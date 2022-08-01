<?php

$db_connect = mysqli_connect("localhost","root","","shahin");
mysqli_query($db_connect,"SET CHARACTER SET 'utf8'");
mysqli_query($db_connect,"SET SESSION collation_connection ='utf8_unicode_ci'");

?>