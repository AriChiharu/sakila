
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
$address= $_POST['address'];
$address2= $_POST['address2'];
$district= $_POST['district'];
$city_id= $_POST['city_id'];
$postal_code= $_POST['postal_code'];
$phone= $_POST['phone'];

$sql = "INSERT INTO address (address_id,address, address2, district, city_id, postal_code,phone) VALUES ('$address_id','$address', '$address2','$district', '$city_id', '$postal_code', '$phone')";


if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

