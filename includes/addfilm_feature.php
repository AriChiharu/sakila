<?php


$con = mysqli_connect('127.0.0.1', 'root', '');
if (!$con) {
    echo 'Not connected';
}
if (!mysqli_select_db($con, 'sakila')) {
    echo 'Database not Selected';
}


$film_id = $_POST['film_id'];
$feature_id = $_POST['feature_id'];



$sql = "INSERT INTO film_feature (film_id,feature_id) VALUES ('$film_id','$feature_id')";


if (mysqli_query($con, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

