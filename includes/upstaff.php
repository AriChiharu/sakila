<?php


$con = mysqli_connect('127.0.0.1', 'root', '');
if (!$con) {
    echo 'Not connected';
}
if (!mysqli_select_db($con, 'sakila')) {
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


$sql = "UPDATE `staff` SET `first_name`='".$first_name."',`last_name`='".$last_name."',`address_id`='".$address_id."',`picture`='".$picture."',`email`='".$email."' ,`store_id`='".$store_id."',`active`='".$active."',`username`='".$username."',`password`='".$password."' WHERE `staff_id` = $staff_id";


if (mysqli_query($con, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");
