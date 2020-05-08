<?php


$con = mysqli_connect('127.0.0.1', 'root', '');
if (!$con) {
    echo 'Not connected';
}
if (!mysqli_select_db($con, 'sakila')) {
    echo 'Database not Selected';
}


$inventory_id = $_POST['inventory_id'];
$film_id = $_POST['film_id'];
$store_id = $_POST['store_id'];



$sql = "INSERT INTO inventory (inventory_id,film_id,store_id) VALUES ('$inventory_id','$film_id','$store_id')";


if (mysqli_query($con, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

