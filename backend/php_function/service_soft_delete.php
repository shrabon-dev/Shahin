<?php

require_once "../includes/db.php";

$id = $_GET['id'];
print_r($id );
$update_query = "UPDATE services SET service_delete='yes' WHERE id=$id";

mysqli_query($db_connect,$update_query);
header('location: ../pages/services_list.php')




?>