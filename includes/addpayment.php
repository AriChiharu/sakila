<?php


include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}


$payment_id = $_POST['payment_id'];
$customer_id = $_POST['customer_id'];
$staff_id = $_POST['staff_id'];
$rental_id = $_POST['rental_id'];
$amount = $_POST['amount'];
$payment_date = $_POST['payment_date'];


$sql = "INSERT INTO payment (payment_id,customer_id,staff_id,rental_id,amount,payment_date) VALUES ('$payment_id','$customer_id','$staff_id','$rental_id','$amount','$payment_date')";


if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

