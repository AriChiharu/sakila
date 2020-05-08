<?php


$con = mysqli_connect('127.0.0.1', 'root', '');
if (!$con) {
    echo 'Not connected';
}
if (!mysqli_select_db($con, 'sakila')) {
    echo 'Database not Selected';
}


$film_id = $_POST['film_id'];



$sql = "DELETE FROM film_category WHERE `film_id`=$film_id ";

if (mysqli_query($con, $sql)) {
    echo "Record has been deleted successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../delete.php");

