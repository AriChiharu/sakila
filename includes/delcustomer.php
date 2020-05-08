
<?php
include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}

$customer_id= $_POST['customer_id'];



$sql = "DELETE FROM customer WHERE `customer_id` = $customer_id";


if (mysqli_query($conn, $sql)) {
    echo "Record has been deleted successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../delete.php");


