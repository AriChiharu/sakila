<?php


$con = mysqli_connect('127.0.0.1', 'root', '');
if (!$con) {
    echo 'Not connected';
}
if (!mysqli_select_db($con, 'sakila')) {
    echo 'Database not Selected';
}


$payment_id = $_POST['payment_id'];
$customer_id = $_POST['customer_id'];
$staff_id = $_POST['staff_id'];
$rental_id = $_POST['rental_id'];
$amount = $_POST['amount'];
$payment_date = $_POST['payment_date'];


$sql = "INSERT INTO payment (payment_id,customer_id,staff_id,rental_id,amount,payment_date) VALUES ('$payment_id','$customer_id','$staff_id','$rental_id','$amount','$payment_date')";


if (mysqli_query($con, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

