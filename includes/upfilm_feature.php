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
$upfilm_id = $_POST['upfilm_id'];
$upfeature_id = $_POST['upfeature_id'];



$sql = "UPDATE `film_feature` SET `film_id`='".$upfilm_id."',`feature_id`='".$upfeature_id."' WHERE `film_id` = $film_id AND `feature_id` = $feature_id";



if (mysqli_query($con, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");


