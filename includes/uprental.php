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
$rental_date = $_POST['rental_date'];
$inventory_id = $_POST['inventory_id'];
$customer_id = $_POST['customer_id'];
$return_date = $_POST['return_date'];
$staff_id = $_POST['staff_id'];


$sql = "UPDATE `rental` SET `rental_date`='".$rental_date."',`inventory_id`='".$inventory_id."',`customer_id`='".$customer_id."',`return_date`='".$return_date."',`staff_id`='".$staff_id."' WHERE `rental_id` = $rental_id";


if (mysqli_query($conn, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");
