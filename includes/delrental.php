<?php


include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}

$rental_id = $_POST['rental_id'];



$sql = "DELETE FROM rental WHERE `rental_id` = $rental_id";


if (mysqli_query($conn, $sql)) {
    echo "Record has been deleted successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../delete.php");

