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
$feature_id = $_POST['feature_id'];



$sql = "INSERT INTO film_feature (film_id,feature_id) VALUES ('$film_id','$feature_id')";


if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

