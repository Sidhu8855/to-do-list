<?php
include_once("./conn.php");

$delete_id = $_GET['delete_id'];

$myquery = "DELETE FROM `first_box` WHERE `id` = '" . $delete_id . "'";
$result = mysqli_query($conn, $myquery);
header("Location: index.php");