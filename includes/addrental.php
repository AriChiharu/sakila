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


$sql = "INSERT INTO rental (rental_id,rental_date,inventory_id,customer_id,return_date,staff_id) VALUES ('$rental_id','$rental_date','$inventory_id','$customer_id','$return_date','$staff_id')";


if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

