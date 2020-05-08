<?php


include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}

$staff_id = $_POST['staff_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address_id = $_POST['address_id'];
$picture = $_POST['picture'];
$email = $_POST['email'];
$store_id = $_POST['store_id'];
$active = $_POST['active'];
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO staff (staff_id,first_name,last_name,address_id,picture,email,store_id,active,username,password) VALUES ('$staff_id','$first_name','$last_name','$address_id','$picture','$email','$store_id','$active','$username','$password')";


if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

