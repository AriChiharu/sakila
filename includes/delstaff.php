<?php


$con = mysqli_connect('127.0.0.1', 'root', '');
if (!$con) {
    echo 'Not connected';
}
if (!mysqli_select_db($con, 'sakila')) {
    echo 'Database not Selected';
}


$staff_id = $_POST['staff_id'];



$sql = "DELETE FROM staff WHERE `staff_id` = $staff_id";


if (mysqli_query($con, $sql)) {
    echo "Record has been deleted successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../delete.php");



