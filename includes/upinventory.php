<?php


include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}


$inventory_id = $_POST['inventory_id'];
$film_id = $_POST['film_id'];
$store_id = $_POST['store_id'];



$sql = "UPDATE `inventory` SET `film_id`='".$film_id."', `store_id`='".$store_id."' WHERE `inventory_id` = $inventory_id";


if (mysqli_query($conn, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");

