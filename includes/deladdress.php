
<?php
include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}

$address_id= $_POST['address_id'];


$sql = "DELETE FROM address WHERE `address_id` = $address_id";


if (mysqli_query($conn, $sql)) {
    echo "Record has been deleted successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../delete.php");

