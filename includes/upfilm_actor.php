<?php


include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}


$actor_id = $_POST['actor_id'];
$film_id = $_POST['film_id'];
$upactor_id = $_POST['upactor_id'];
$upfilm_id = $_POST['upfilm_id'];


$sql = "UPDATE `film_actor` SET `actor_id`='".$upactor_id."',`film_id`='".$upfilm_id."' WHERE `actor_id` = $actor_id AND `film_id` = $film_id";



if (mysqli_query($conn, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");


