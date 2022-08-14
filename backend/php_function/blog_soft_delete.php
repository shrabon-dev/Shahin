<?php

require_once "../includes/db.php";

$id = $_GET['id'];

$update_query = "UPDATE blogs SET blog_delete='yes' WHERE id=$id";

mysqli_query($db_connect,$update_query);
header('location: ../pages/blog_list.php')




?>