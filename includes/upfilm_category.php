<?php


include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}


$film_id = $_POST['film_id'];
$category_id = $_POST['category_id'];



$sql = "UPDATE `film_category` SET `category_id`='".$category_id."' WHERE `film_id` = $film_id";


if (mysqli_query($conn, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");

