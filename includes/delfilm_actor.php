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



$sql = "DELETE FROM film_actor WHERE `actor_id` = $actor_id AND `film_id`=$film_id ";

if (mysqli_query($conn, $sql)) {
    echo "Record has been deleted successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../delete.php");

