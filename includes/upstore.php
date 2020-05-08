<?php


$con = mysqli_connect('127.0.0.1', 'root', '');
if (!$con) {
    echo 'Not connected';
}
if (!mysqli_select_db($con, 'sakila')) {
    echo 'Database not Selected';
}


$store_id = $_POST['store_id'];
$manager_staff_id = $_POST['manager_staff_id'];
$address_id = $_POST['address_id'];


$sql = "UPDATE `store` SET `manager_staff_id`='".$manager_staff_id."',`address_id`='".$address_id."' WHERE `store_id` = $store_id";


if (mysqli_query($con, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");
