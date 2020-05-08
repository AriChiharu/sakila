<?php


include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}


$store_id = $_POST['store_id'];
$manager_staff_id = $_POST['manager_staff_id'];
$address_id = $_POST['address_id'];


$sql = "INSERT INTO store (store_id,manager_staff_id,address_id) VALUES ('$store_id','$manager_staff_id','$address_id')";


if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

