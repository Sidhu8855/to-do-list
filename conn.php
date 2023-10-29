<?php
$conn = mysqli_connect("localhost", "root", "", "school");

if (!$conn) {
    die("" . mysqli_connect_error());
}
