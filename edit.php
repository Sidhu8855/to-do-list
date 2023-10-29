<?php

include_once("./conn.php");

$edit_id = $_GET['edit_id'];

if (isset($_POST["edit"]) == true) {
    $box = $_POST["box"];
    $myquery = "UPDATE `first_box` SET `box`='" . $box . "' WHERE  id = '" . $edit_id . "'";
    $result = mysqli_query($conn, $myquery);
    if (!$result) {
        die("" . mysqli_error($conn));
    } else {
        header("Location: index.php");
    }
}
?>

<form action="" method="post">
    <h1>Php Todo List </h1>
    <input type="text" name="box" id="box" placeholder="Enter Somthing">
    <button name="edit">Edit</button>
</form>